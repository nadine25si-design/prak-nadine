<?php

namespace Tests\Feature;

use Tests\TestCase;

class GuestAndAuthTest extends TestCase
{
    /**
     * Soal 1: Halaman Home ( / ) dapat diakses dengan PartialView
     */
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Laundry Kita');
        $response->assertSee('Home');
        $response->assertSee('Login');
        $response->assertSee('Register');
    }

    /**
     * Soal 1: Halaman Login ( /auth ) memiliki inputan Username dan Password
     */
    public function test_login_page_has_required_inputs(): void
    {
        $response = $this->get('/auth');
        $response->assertStatus(200);
        $response->assertSee('name="username"', false);
        $response->assertSee('name="password"', false);
    }

    /**
     * Soal 1: Halaman Register ( /register ) memiliki inputan Name, Email, Password, Confirm Password
     */
    public function test_register_page_has_required_inputs(): void
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('name="password_confirmation"', false);
    }

    /**
     * Soal 2: Jika username dan password sama, arahkan ke Dashboard Admin
     */
    public function test_login_success_when_username_and_password_are_equal(): void
    {
        $response = $this->post('/auth', [
            'username' => 'admin',
            'password' => 'admin',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $response->assertSessionHas('success');
    }

    /**
     * Soal 2: Jika salah (username dan password beda), arahkan kembali ke Login dengan Alert
     */
    public function test_login_fails_when_username_and_password_differ(): void
    {
        $response = $this->post('/auth', [
            'username' => 'admin',
            'password' => '123456',
        ]);

        $response->assertRedirect(route('login'));
        $response->assertSessionHas('error');
    }

    /**
     * Test form registrasi berhasil dan redirect ke login
     */
    public function test_register_creates_user_and_redirects_to_login(): void
    {
        $response = $this->post('/register', [
            'name' => 'Nadine Test',
            'email' => 'nadine_test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect(route('login'));
        $response->assertSessionHas('success');
    }
}
