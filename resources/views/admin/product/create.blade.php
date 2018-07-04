@extends('admin.layout.admin')
@section('content')
<h3>Add Poduct</h3>
<div class="raw">
  <div class="col-md-6  col-md-offset-3">
  {!!Form::open(['route'=>'product.store','method'=>'post','files'=>true])!!}
    <div class="form-group">
      {{Form::label('name','Name')}}
      {{Form::text('name',null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
      {{Form::label('description','Description')}}
      {{Form::text('description',null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
      {{Form::label('price','Price')}}
      {{Form::text('price',null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
      {{Form::label('size','Size')}}
      {{Form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('category_id','Category_id')}}
      {{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'select'])}}
    </div>
    <div class="form-group">
      {{Form::label('image','Image')}}
      {{Form::file('image',null,array('class'=>'form-control'))}}
    </div>
    {{Form::submit('create',array('class'=>'btn btn-default'))}}
  {!!Form::close()!!}
</div>
</div>
@endsection
