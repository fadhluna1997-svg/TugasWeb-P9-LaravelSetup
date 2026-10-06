<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>

    <h1>Hello, {{ $nama }}!</h1>

    <h2>Informasi Pertemuan</h2>

    <p><strong>Kelas:</strong> {{ $kelas }}</p>
    <p><strong>Pertemuan:</strong> {{ $pertemuan }}</p>

    <h2>Materi yang Dipelajari</h2>

    <ul>
        @foreach ($materi as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <p>
        <a href="{{ url('/contact') }}">Halaman Contact</a>
    </p>

</body>
</html>