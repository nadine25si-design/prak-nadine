<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Laundry</title>
    <!-- Kamu bisa tambahkan CSS seperti Bootstrap agar tampilannya rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Form Pemesanan Laundry Kita</h4>
                    </div>
                    <div class="card-body">
                        
                        <!-- Menampilkan pesan sukses jika ada -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- Form mengarah ke route pesan-laundry dengan method POST -->
                        <form action="{{ url('/pesan-laundry') }}" method="POST">
                            @csrf <!-- Wajib ada di Laravel untuk keamanan form POST -->

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
                            </div>

                            <div class="mb-3">
                                <label for="service" class="form-label">Jenis Layanan</label>
                                <select class="form-select" id="service" name="service" required>
                                    <option value="">-- Pilih Layanan Laundry --</option>
                                    <option value="Cuci Komplit (Cuci + Kering + Setrika)">Cuci Komplit (Cuci + Kering + Setrika)</option>
                                    <option value="Cuci Lipat (Tanpa Setrika)">Cuci Lipat (Tanpa Setrika)</option>
                                    <option value="Setrika Saja">Setrika Saja</option>
                                    <option value="Laundry Satuan (Jas, Gaun, Bedcover, dll)">Laundry Satuan (Jas, Gaun, Bedcover, dll)</option>
                                    <option value="Dry Cleaning / Cuci Kering">Dry Cleaning / Cuci Kering</option>
                                    <option value="Perawatan Sepatu & Tas">Perawatan Sepatu & Tas</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="pickup_date" class="form-label">Tanggal Penjemputan</label>
                                <input type="date" class="form-control" id="pickup_date" name="pickup_date" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat Penjemputan</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Kirim Pesanan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>