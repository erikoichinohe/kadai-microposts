@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$user->name}}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{Gravatar::src($user->email,500)}}" alt="">
                </div>
            </div>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a fref="#">Microposts</a></li>
                <li><a fref="#">Followings</a></li>
                <li><a fref="#">Followers</a></li>
            </ul>
        </div>
    </div>

@endsection