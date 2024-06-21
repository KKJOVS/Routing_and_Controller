<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
        <h1>{{ $title }}</h1>
        <p>{{ $introduction }}</p>
        <p>{{ $description }}</p>
    @endsection
    
    <h1>{{ $data }}</h1>
    <button onclick="window.location='{{ route('about.me') }}'">About Me</button>
    <button onclick="window.location='{{ route('skills') }}'">Skills</button>
    <button onclick="window.location='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
