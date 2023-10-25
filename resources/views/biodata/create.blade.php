<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pembuatan Biodata</title>
</head>
<body>
    <h1>Formulir Pembuatan Biodata</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="post" action="/biodata">
        @csrf

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required>
        <br><br>

        <label for="NIM">NIM:</label><br>
        <input type="text" name="NIM" id="NIM" required>
        <br><br>

        <label for="tgl_lahir">Tanggal lahir:</label><br>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required>
        <br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat" required>
        <br><br>

        <button type="submit">Simpan Biodata</button>
    </form>
</body>
</html>
