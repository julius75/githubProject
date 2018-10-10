@extends('layouts.app')
@section('content')
        <div>{{$user->name}} Create new Repository</div>
        <newrepo name="{{$user->name}}"></newrepo>
    @endsection