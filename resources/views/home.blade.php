@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div> <countrepo></countrepo>

                </div>

                <div class="well-sm">
                    {{--<newrepo></newrepo>--}}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            <div>
                <editrepo></editrepo>
            </div>
        </div>
    </div>
</div>
@endsection
