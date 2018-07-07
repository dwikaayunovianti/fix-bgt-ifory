@extends('layouts.app')

@section('content')
    <div class="container">
        @include('checkout._step')
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-default">
                <div class="panel-body">
                    @include('checkout._cart-panel')
            </div>
                    <div class="panel-heading">
                        Alamat Pengirim
                    </div>
                    <div class="panel-body">
                        
                            @include('checkout._address-choose-form')
                               
                      
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
