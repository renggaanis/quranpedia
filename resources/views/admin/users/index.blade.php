@extends('layouts.app')

@section('content') <!-- "content" didapatkan dari nama yield pada file app folder layout, line 76 sehingga yield content itu nanti berisikan kodingan section ini -->
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
                    <br>
                    <a href="http://localhost/webquranpedia" class="btn btn-info btn-sm">Home</a>
                    @if(auth()->user()->role == 'admin')
                    <a href="http://localhost/webquranpedia/profilebackend" class="btn btn-info btn-sm">Backend</a>
                    @endif
                    @if(auth()->user()->role == 'kontributor')
                    <a href="http://localhost/webquranpedia/profilebackend" class="btn btn-info btn-sm">Backend</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
