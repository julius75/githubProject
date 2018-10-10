@extends('layouts.app')
@section('content')
    <p >{{Auth::user()->name}}/{{$repo}}</p>
    <countrepo user="{{Auth::user()->name}}" repo="{{$repo}}"></countrepo>
    @endsection