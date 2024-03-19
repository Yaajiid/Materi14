<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemain Film</title>
</head>
<body>
    <h1>Detail Pemain Film</h1>
    <p>Nama: {{ $cast->nama }}</p>
    <p>Umur: {{ $cast->umur }}</p>
    <p>Bio: {{ $cast->bio }}</p>
</body>
</html>
