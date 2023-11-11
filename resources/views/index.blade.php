<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Diri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>

    <div class="container">
        <h2>Tampilan Data Diri</h2>

        @isset($dataDiri)
            <div class="data-card">
                <h3>{{ $dataDiri->nama }}</h3>
                <p><strong>Alamat:</strong> {{ $dataDiri->alamat }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $dataDiri->tgl_lahir }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $dataDiri->gender }}</p>
            </div>
        @endisset

        <!-- Tambahkan tombol kembali ke formulir -->
        <a href="{{ url('form.blade.php') }}">Kembali ke Formulir</a>
    </div>

</body>
</html>
