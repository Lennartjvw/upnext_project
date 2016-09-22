<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            vertical-align: middle;
        }

        h1 {
            font-size: 96px;
        }

        .button {
            float: left;
            width: 130px;
            height: 30px;
            margin-left: 10px;
            margin-right: 10px;
            background-color: #204d74;
            color: white;
            font-size: 20px;
        }

        .nav-bar {
            width: 300px;
            height: 30px;
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="nav-bar">

        <a href="insert">
            <div class="button">Add game </div>
        </a>
        <a href="contact">
            <div class="button">Contact</div>
        </a>

    </div>

    @yield('content')

    @yield('name')

</div>

</body>
</html>