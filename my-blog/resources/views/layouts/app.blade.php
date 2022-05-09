<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        @keyframes bg-anim {
            0% {
                background-position: 0% 25%;
            }

            25% {
                background-position: 50% 50%;
            }

            50% {
                background-position: 100% 100%;
            }

            75% {
                background-position: 50% 50%;
            }

            100% {
                background-position: 0% 25%;
            }
        }

        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            box-shadow: inset 0 0 200px -25px rgba(56, 56, 56, 0.7);
            background: linear-gradient(-60deg, #fadce5, #ffd8f0, #e6d9ff, #daedff, #dffff2);
            background-size: 500% 200%;
            font-family: 'Nunito';
            animation: bg-anim 20s linear infinite;
        }
    </style>

</head>

<body>

    @yield('content')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>