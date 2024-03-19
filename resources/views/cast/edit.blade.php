<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Pemain Film</title>
</head>
<body>
    <h1>Form Edit Pemain Film</h1>
    <form action="/cast/{{ $cast->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $cast->nama }}"><br>
        <label for="umur">Umur:</label><br>
        <input type="text" id="umur" name="umur" value="{{ $cast->umur }}"><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio">{{ $cast->bio }}</textarea><br><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
