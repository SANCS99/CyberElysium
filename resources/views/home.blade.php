@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <style>


                    .card-body {
                        flex: 1 1 auto;
                        padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
                        color: var(--bs-card-color);
                        text-align: center;
                    }

                    .button {
                    border: none;
                    color: white;
                    padding: 16px 130px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 5px 119px;
                    transition-duration: 0.4s;
                    cursor: pointer;
                }

                .button1 {
                    background-color: white;
                    color: black;
                    border: 2px solid #4CAF50;
                }

                .button1:hover {
                    background-color: #4CAF50;
                    color: white;
                }

                

                </style>

                <body>
                <a href="http://127.0.0.1:8000/student">
                <button class="button button1">Student Details</button>
                </a>

                </body>
            </div>
        </div>
    </div>
</div>
@endsection

