@extends('layouts.app')
@section('content')
    <div >
        <commits repo_name="{{$repo}}"></commits>
    </div>
@endsection