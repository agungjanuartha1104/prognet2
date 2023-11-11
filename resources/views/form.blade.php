<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Data Diri</h2>

        @isset($dataDiri)
            @foreach($dataDiri as $data)
                <div class="data-card">
                    <h3>{{ $data->nama }}</h3>
                    <p><strong>Alamat:</strong> {{ $data->alamat }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $data->tgl_lahir }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $data->gender }}</p>
                </div>
            @endforeach
        @endisset

        <form method="GET" action="{{ url('/') }}">
            @csrf {{-- Untuk melindungi formulir dari serangan CSRF --}}
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea><br>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required><br>

            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" name="gender" required>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select><br>

            <input type="submit" value="Kirim">
        </form>
    </div>

</body>
</html>
