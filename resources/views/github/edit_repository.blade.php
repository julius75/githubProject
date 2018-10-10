@extends('layouts.app')
@section('content')
    <editrepo username="{{Auth::user()->name}}" name="{{$repo}}"></editrepo>
    @endsection