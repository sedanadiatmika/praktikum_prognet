<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
{{ "Selamat datang ".Auth::guard('user')->user()->name }}
<br>
<a href="{{ url('user/logout') }}">
    <button>
        Logout
    </button>
</a>
</body>
</html>
