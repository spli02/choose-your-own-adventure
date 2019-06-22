@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br><br>
                    <h2>Let's play "Choose your own adventure"!</h2>
                    <br><br>
                    <h3>
                    <a href="show/1">1. Start a new game</a>
                    <br><br>
                    <a href="index">2. Load the saved game</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
