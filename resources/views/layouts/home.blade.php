@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5" style="margin:10rem 0;">
                <div class="card" style="border:gray 1px solid; letter-spacing: .1rem;">
                    <div class="card-header" style="background-color:#DBB29F; text-align:center; font-weight: bold; font-size:1.1rem;">
                        Welcome back, <span style="color:#BB4A2B;">{{ Auth::user()->name }}</span> !
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p><a href="show/1" style="text-decoration: none; color:black;">1. Start New Game</a></p>
                        <p><a href="index" style="text-decoration: none; color:black;">2. Continue Saved Game</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
