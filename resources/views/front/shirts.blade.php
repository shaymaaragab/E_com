@extends('layouts.main')
@section('title','shirts')
@section('content')
<!-- products listing -->
         <!-- Latest SHirts -->
         @forelse($shirts as $shirt)
        <div class="row">
          <div class="small-3 columns">
              <div class="item-wrapper">
                  <div class="img-wrapper">
                      <a href="{{route('cart.edit',$shirt->id)}}" class="button expanded add-to-cart">
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
         @empty
         <h3>NO shirts</h3>
         @endforelse
          </div>
        @endsection
