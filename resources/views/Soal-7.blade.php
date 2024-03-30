<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head> <body>
{{-- JULIUS, putri, chandradinata --}}

<ul>
@foreach ($daftar_menu as $item )
    <li>
        <a href="{{ url($item['url']) }}">
            {{ $item['name'] }}
        </a>
    </li>
@endforeach
</ul>

<form method="post" action="{{ url('/soal-7') }}" >
    @csrf
    <h1>Latihan Form</h1>
    <div>
        <label for="npm">NPM <sup>*</sup> :</label>
        <input type="text" required id="npm" name="npm">
    </div>
    <div>
        <label for="name">name :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">email :</label>
        <input type="emai" id="email" name="email">
    </div>
    <div>
        <label for="psw">password :</label>
        <input type="password" id="psw" name="password">
    </div>
    <div>
        <label for="place birth">place birth :</label>
        <input type="text" id="place-birth" name="place birth">
    </div>
    <div>
        <label for="birthdate">birthdate :</label>
        <input type="date" id="birthdate" name="birthdate">
    </div>
    <div>
        <label for="gender">gender :</label>
        <input type="radio" id="gender" name="gender" value="M"> Male
        <input type="radio" name="gender" value="F"> Female
    </div>
    <div>
        <label for="address">address :</label>
        <textarea name="address" id="address"></textarea>
    </div>
    {{-- <div>
        <input type="submit" value="Save">
        <input type="reset" value="Clear">
    </div> --}}

    <div>
        <button type="submit">Save</button>
        <button type="reset">Clear</button>
    </div>
</form>
</body>

</html>
