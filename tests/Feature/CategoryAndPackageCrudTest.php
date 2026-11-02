<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryAndPackageCrudTest extends TestCase
{
    /**
     * Test Tampilan Guest: Halaman Home menampilkan Partial View Paket Laundry.
     */
    public function test_home_page_displays_packages_using_partial_view(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Pilihan Paket Laundry Terbaik');
        $response->assertSee('PAKET & TARIF', false);
        $response->assertSee('Cuci Lipat Reguler');
        $response->assertSee('Laundry Kiloan');
        $response->assertSee('Pesan Paket Ini');
    }

    /**
     * Test CRUD 1: Kategori Layanan menggunakan Eloquent ORM.
     */
    public function test_category_crud_operations_using_eloquent_orm(): void
    {
        // 1. Index Kategori
        $indexResponse = $this->get('/admin/categories');
        $indexResponse->assertStatus(200);
        $indexResponse->assertSee('Kategori Layanan');
        $indexResponse->assertSee('Eloquent ORM');

        // 2. Form Create
        $createResponse = $this->get('/admin/categories/create');
        $createResponse->assertStatus(200);
        $createResponse->assertSee('Tambah Kategori Layanan');

        // 3. Store Kategori Baru (Eloquent)
        $uniqueName = 'Kategori Uji ' . time();
        $storeResponse = $this->post('/admin/categories', [
            'name'        => $uniqueName,
            'description' => 'Deskripsi uji coba kategori',
            'icon'        => 'bi-stars',
        ]);
        $storeResponse->assertRedirect(route('categories.index'));
        $storeResponse->assertSessionHas('success');

        // Verifikasi data ada di database melalui Eloquent
        $category = Category::where('name', $uniqueName)->first();
        $this->assertNotNull($category);
        $this->assertEquals('bi-stars', $category->icon);

        // 4. Detail Kategori (Eloquent Show)
        $showResponse = $this->get('/admin/categories/' . $category->id);
        $showResponse->assertStatus(200);
        $showResponse->assertSee($uniqueName);

        // 5. Form Edit
        $editResponse = $this->get('/admin/categories/' . $category->id . '/edit');
        $editResponse->assertStatus(200);
        $editResponse->assertSee('Edit Kategori Layanan');

        // 6. Update Kategori (Eloquent Update)
        $updatedName = $uniqueName . ' Updated';
        $updateResponse = $this->put('/admin/categories/' . $category->id, [
            'name'        => $updatedName,
            'description' => 'Deskripsi setelah diupdate',
            'icon'        => 'bi-fire',
        ]);
        $updateResponse->assertRedirect(route('categories.index'));
        $updateResponse->assertSessionHas('success');

        $this->assertDatabaseHas('categories', [
            'id'   => $category->id,
            'name' => $updatedName,
        ]);

        // 7. Delete Kategori (Eloquent Delete)
        $deleteResponse = $this->delete('/admin/categories/' . $category->id);
        $deleteResponse->assertRedirect(route('categories.index'));
        $deleteResponse->assertSessionHas('success');

        $this->assertDatabaseMissing('categories', [
            'id' => $category->id,
        ]);
    }

    /**
     * Test CRUD 2: Paket Laundry menggunakan Query Builder (DB::table) dengan LEFT JOIN, WHERE, dan Nested WHERE.
     */
    public function test_package_crud_operations_using_query_builder(): void
    {
        // Ambil ID kategori pertama untuk relasi foreign key
        $category = Category::first();
        $this->assertNotNull($category, 'Kategori harus tersedia untuk relasi foreign key.');

        // 1. Index Paket Laundry (Query Builder + LEFT JOIN)
        $indexResponse = $this->get('/admin/packages');
        $indexResponse->assertStatus(200);
        $indexResponse->assertSee('Paket Laundry');
        $indexResponse->assertSee('Query Builder (DB::table)');
        $indexResponse->assertSee($category->name); // Muncul hasil LEFT JOIN

        // 2. Filter dengan WHERE (Kategori)
        $filterCategoryResponse = $this->get('/admin/packages?category_id=' . $category->id);
        $filterCategoryResponse->assertStatus(200);

        // 3. Filter dengan WHERE (Status Aktif)
        $filterStatusResponse = $this->get('/admin/packages?status=1');
        $filterStatusResponse->assertStatus(200);

        // 4. Filter dengan NESTED WHERE (Pencarian teks)
        $searchResponse = $this->get('/admin/packages?search=Reguler');
        $searchResponse->assertStatus(200);
        $searchResponse->assertSee('Cuci Lipat Reguler');

        // 5. Form Create
        $createResponse = $this->get('/admin/packages/create');
        $createResponse->assertStatus(200);
        $createResponse->assertSee('Tambah Paket Laundry');

        // 6. Store Paket Baru (Query Builder Insert)
        $packageName = 'Paket Uji ' . time();
        $storeResponse = $this->post('/admin/packages', [
            'category_id' => $category->id,
            'name'        => $packageName,
            'price'       => 15000,
            'unit'        => 'Kg',
            'duration'    => '1 Hari',
            'description' => 'Paket pengujian Query Builder',
            'is_active'   => '1',
        ]);
        $storeResponse->assertRedirect(route('packages.index'));
        $storeResponse->assertSessionHas('success');

        // Verifikasi dengan DB::table
        $newPkg = DB::table('packages')->where('name', $packageName)->first();
        $this->assertNotNull($newPkg);
        $this->assertEquals($category->id, $newPkg->category_id);

        // 7. Show Paket (Query Builder LEFT JOIN)
        $showResponse = $this->get('/admin/packages/' . $newPkg->id);
        $showResponse->assertStatus(200);
        $showResponse->assertSee($packageName);
        $showResponse->assertSee($category->name);

        // 8. Form Edit
        $editResponse = $this->get('/admin/packages/' . $newPkg->id . '/edit');
        $editResponse->assertStatus(200);
        $editResponse->assertSee('Edit Paket Laundry');

        // 9. Update Paket (Query Builder Update)
        $updatedPkgName = $packageName . ' Updated';
        $updateResponse = $this->put('/admin/packages/' . $newPkg->id, [
            'category_id' => $category->id,
            'name'        => $updatedPkgName,
            'price'       => 20000,
            'unit'        => 'Kg',
            'duration'    => '2 Hari',
            'description' => 'Deskripsi paket setelah update',
            'is_active'   => '1',
        ]);
        $updateResponse->assertRedirect(route('packages.index'));
        $updateResponse->assertSessionHas('success');

        $this->assertDatabaseHas('packages', [
            'id'   => $newPkg->id,
            'name' => $updatedPkgName,
        ]);

        // 10. Delete Paket (Query Builder Delete)
        $deleteResponse = $this->delete('/admin/packages/' . $newPkg->id);
        $deleteResponse->assertRedirect(route('packages.index'));
        $deleteResponse->assertSessionHas('success');

        $this->assertDatabaseMissing('packages', [
            'id' => $newPkg->id,
        ]);
    }
}
