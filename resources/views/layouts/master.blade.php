<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    @yield('master.css')
</head>
<body>
    @yield('master.content')
    <script src="js/app.js"></script>
    @yield('master.js')
</body>
</html>
