@extends('layouts.main')
@section('content')

<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            Hey! Welcome to MC- Mykey's Store
        </strong>
    </h2>
    <br>
    <a href="{{route('shirts')}}"><button class="button large">Check out My Shirts</button></a>
</section>
<br/>
<div class="subheader text-center">
     <h2>
    MyKey&rsquo;s Latest Shirts
</h2>
</div>

<!-- Latest SHirts -->
@forelse($shirts->chunk(5) as $chunk)
@foreach($chunk as $shirt)
<div class="row">
   <div class="small-3 columns">
       <div class="item-wrapper">
           <div class="img-wrapper">
               <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                   Add to Cart
               </a>
               <a href="#">
                   <img src="{{url('images',$shirt->image)}}"/>
               </a>
           </div>
           <a href="{{route('shirt')}}">
               <h3>
                 {{$shirt->name}}
               </h3>
           </a>
           <h5>
             ${{$shirt->price}}
           </h5>
           <p>
             {{$shirt->description}}
       </div>
   </div>
   @endforeach
@empty
<h3>NO shirts</h3>

@endforelse
 </div>
@endsection
