{!! Form::open(['url'=>'/checkout/address', 'method'=>'post', 'class'=>'form-horizontal']) !!}
    <div class="form-group {!! $errors->has('address_id') ? 'has-error' : '' !!}">
        {!!  Form::label('address_id', ' ', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            @foreach(auth()->user()->addresses as $address)
            <div class="row">
            
                <div class="col-md-11">
                    <address>
                    <strong>{{ $address->name }}</strong><br>
                    {{ $address->detail }} <br>
                   
                    <abbr title="Phone">P:</abbr> +62 {{ $address->phone }}
                    </address>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-md-6">
                   
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="form-group">
            @include('checkout._address-field')
    </div>
    <div class="col-md-6 col-md-offset-4">
 
    <div class="form-group">
  
    <td><a href="/success" class="btn btn-success btn-block">Pembayaran <i class="fa fa-angle-right"></i></td>
        
        
         
        </a></div>
    </div>
{!! Form::close() !!}
