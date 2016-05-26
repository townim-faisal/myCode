<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->

        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


        @yield('header')

    </head>
    <body>

    	<div class="container">
        	@yield('content')
        </div>	

        @yield('footer')

    </body>
</html>
