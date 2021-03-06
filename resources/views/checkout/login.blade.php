@extends('layouts.app')

@section('content')
<div class="container">
    @include('checkout._step')
    <div class="row">
        <div class="col-xs-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Login atau Checkout Tanpa Mendaftar
                </div>
                <div class="panel-body">
                @if (session('status'))
                        {{session('status')}}
                    <div class="alert alert-success">
                    </div>
                @endif
                    @include('checkout._login-form')
                </div>
            </div>
            </div>
            <div class="col-xs-4">
            @include('checkout._cart-panel')
        </div>
    </div>
</div>
@endsection
