<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Para Pemain Film</title>
</head>
<body>
    <h1>List Data Para Pemain Film</h1>
    <ul>
        @foreach($casts as $cast)
            <li>
                {{ $cast->nama }} - Umur: {{ $cast->umur }}
                <form action="/casts/{{ $cast->id }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
