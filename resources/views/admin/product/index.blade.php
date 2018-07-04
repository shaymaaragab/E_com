@extends('admin.layout.admin')
@section('content')
<h3>Poducts</h3>
<ul>
  @forelse($product as $pro)
  <li>
    <h4>Name of product:{{$pro->name}}</h4>
  </li>
  @empty
  <h3>No Poducts</h3>
  @endforelse
</ul>

@endsection
