<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Strathmore Forum</title>
    <link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap-paper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    {{--<link rel="stylesheet" type="text/css" href="{{asset('mdb/css/bootstrap.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('mdb/css/bootstrap.min.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('mdb/css/mdb.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('mdb/css/mdb.min.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('mdb/css/style.css')}}">--}}







</head>
<body>
@include('layouts.partials.navbar')

@yield('banner')
<div class="row">
    <div class="col-md-2">
        <ul class="list-group">
            <a href="" class="list-group-item">
                <span class="badge">500</span>
                All Categories
            </a>

            <a href="" class="list-group-item">
                <span class="badge">20</span>
                Photography
            </a>

            <a href="" class="list-group-item">
                <span class="badge">60</span>
                catering
            </a>

            <a href="" class="list-group-item">
                <span class="badge">108</span>
                construction
            </a>

        </ul>
    </div>
    <div class="col-md-8">
        <div class="content-wrap well">

            @yield('content')

        </div>

    </div>
</div>


<div class="container">



</div>


</body>

{{--<script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('mdb/js/mdb.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('mdb/js/jquery-3.2.1.min.js')}}"></script>--}}

<script type="text/javascript" src="{{asset('dist/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/npm.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('js')

</html>