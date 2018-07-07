@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Berhasil!</h3>
                </div>
                <div class="panel-body">
                    <p>Hi <strong>{{ session('order')->user->name }}</strong></p>
                    <p></p>
                    <p>Silakan menunggu orderan anda. Makan enak, perut bahagia</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
