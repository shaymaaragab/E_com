@extends('admin.layout.admin')
@section('content')
<h3>Poducts</h3>
<ul>
  @forelse($product as $pro)
  <li>
    <h4>Name of product:{{$pro->name}}</h4>
    <h4>Category:{{count($pro->category)?$pro->category->name:"N/A"}}</h4>
    <form action="{{route('product.destroy',$pro->id)}}"  method="POST">
       {{csrf_field()}}
       {{method_field('DELETE')}}
       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
     </form>
  </li>
  @empty
  <h3>No Poducts</h3>
  @endforelse
</ul>

@endsection
