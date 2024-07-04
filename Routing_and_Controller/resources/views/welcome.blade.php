<!DOCTYPE html>
<html>
<head>
    <title>Laravel Application</title>
    <link href="https://fonts.googleapis.com/css2?family=Algerian&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Garamond:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Algerian', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #808080; /* Set background color to gray */
        }
        .container {
            text-align: center;
            padding: 20px;
            border: 2px solid #3490dc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 1em;
        }
        a {
            text-decoration: none;
            font-family: 'Garamond', serif;
            color: #fff;
            font-weight: bold;
            margin: 0 1em;
            padding: 10px 20px;
            background-color: #3490dc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello Viewer!</h1>
        <p>A simple demonstration of routing and controllers</p>
        <p>
            <a href="{{ route('aboutme') }}">About Me</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('hobbies') }}">Hobbies</a>
        </p>
    </div>
</body>
</html>
