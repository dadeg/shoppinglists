<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List Collection</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('ShoppinglistsController@index') }}" class="navbar-brand">Shopping Lists Collection</a> 
		<a href="{{ action('UsersController@logout') }}" class="navbar-brand">Logout</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
