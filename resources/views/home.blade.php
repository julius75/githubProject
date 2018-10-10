@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="well-sm">
                    <p class="text-center"><a href='{{route("/new")}}' class="btn btn-primary">
                            Add New Repository</a></p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            <div>
            </div>
        </div>
    </div>
</div>
@endsection
