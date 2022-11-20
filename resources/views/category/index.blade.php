<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ini Index</h1>
    <a href="{{ route('categories.create') }}">Tambah</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}

                <a href="{{ route('categories.edit', $category) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>
