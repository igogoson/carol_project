@extends('layouts.front')

@section('banner')

<div class="jumbotron">
    <div class="container">
        <h1>Join us, Kuja Hapa</h1>
        <p>We are so idle we don't know what we doing</p>
        <p>
            <a class="btn btn-primary btn-lg">Try us</a>
        </p>

    </div>
</div>

    @endsection


@section('content')


    <div class="row">
        @foreach($vendors as $vendor)
        <div class="col-4">
            <!--Card Dark-->
            <div class="card card-dark" style="padding: 10px;">
                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="{{asset('imgs/1.jpg')}}" class="img-fluid intro-margin" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">
                    <!--Social shares button-->
                    <a class="activator"><i class="fa fa-share-alt white-text"></i></a>
                    <!--Title-->
                    <h4 class="card-title">{{$vendor->bs_name}}</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text white-text">{{$vendor->bs_desc}}</p>
                    <a href="#" class="d-flex flex-row-reverse">
                        <h5 class="waves-effect waves-light p-2">Read more  <i class=" fa fa-arrow-circle-o-down"></i></h5>
                    </a>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card Dark-->
        </div>
        @endforeach

        {{--{{$vendors->links()}}--}}

    </div>




    @endsection