@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-block">
                    Bienvenido {{ Auth::user()->name }}!!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
