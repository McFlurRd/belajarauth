<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        @auth
            <li><a href="#">{{ auth()->user()->name }}</a></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" style='border: none; background:none; text-decoration: underline;color:blue;padding: -0;'>Logout</button>
                </form>
            </li>
        @endauth

        @guest
            <li><a href="/login">Login</a></li>
        @endguest
    </ul>
    @yield('content')
</body>
</html>