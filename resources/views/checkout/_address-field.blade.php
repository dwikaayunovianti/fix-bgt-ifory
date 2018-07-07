<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
    {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class=" form-group {!! $errors->has('detail')  ? 'has-error' : ''!!}">
    {!! Form::label('detail', 'Alamat', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::textarea('detail', null, ['class'=>'form-control', 'row'=>3]) !!}
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class=" form-group {!! $errors->has('detail')  ? 'has-error' : ''!!}">
    {!! Form::label('detail', 'Pesan', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::textarea('detail', null, ['class'=>'form-control', 'row'=>3]) !!}
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {!! $errors->has('phone')  ? 'has-error' : '' !!}">
    {!! Form::label('phone','Telepon', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="input-group">
        <form id="FNilai" name="FNilai" method="post" action="">
  <p><input name="Umur" type="text" id="Umur" size="15" maxlength="15" onKeyPress="return goodchars(event,'0123456789',this)" /></p>
</form>
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>