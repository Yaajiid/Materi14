<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pemain Film Baru</title>
</head>
<body>
    <h1>Form Tambah Pemain Film Baru</h1>
    <form action="/cast" method="post">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="umur">Umur:</label><br>
        <input type="text" id="umur" name="umur"><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio"></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
