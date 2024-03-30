<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- 222310009 - Vincent ; 222310033 - Ibrahim--}}
    <h1>Top 10 Daftar Bahasa Pemrograman</h1>
    <p> Daftar isi:</p>
    <ul>
        @foreach ( $data as $item)
        <li>
            <p><a href="{{ url($item ['url']) }}">{{ $item['name'] }} </a></p>
        </li>
        @endforeach
    </ul>

     <a href="{{ url('/hello') }}">click here</a>
</body>
</html>
