<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>
    <h1>Skills</h1>
    <ul>
        @foreach ($about_me as $aboutme)
            <li>{{ $aboutme }}</li>
        @endforeach
    </ul>

    <a href="{{ route('about.me') }}">About Me</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
</body>
</html>
