<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{!! asset('css/mdb.css') !!}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!!asset('css/app.css')!!}">
   
</head>



<body id="app-layout">

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="{!! asset('js/mdb.js') !!}"></script>

    @include('snips.nav')
    
    @yield('content')

</body>
</html>
