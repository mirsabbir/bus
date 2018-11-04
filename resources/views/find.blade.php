@extends('layouts.app')
@section('content')

@if(count($buses)==0)
<img src="{{asset('images/result.png')}}" class="rounded mx-auto d-block" alt="..." width="500" height="300">
@endif
@foreach($buses as $bus)
<div class="card" style=" width:68%;margin:auto;margin-top:50px;">
   <h5 class="card-header">{{$bus->transport->name}}</h5>
   <div class="card-body">
      <h5 class="card-title">
         <b>{{$bus->from}}</b>
         to
         <b>{{$bus->to}}</b>
      </h5>
      {{$bus->details}}
      <p>Departure: <b>{{$bus->departure_at}}</b> Arrive: <b>{{$bus->arrive_at}}</b></p>
      
      <p class="card-text"></p>
      <a href="/booking/{{$bus->id}}" class="btn btn-primary">Choose seat</a>
   </div>
</div>
@endforeach
<!-- <form action="your-server-side-code" method="POST" style="margin:50px;">
   <script
     src="https://checkout.stripe.com/checkout.js" class="stripe-button"
     data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
     data-amount="688"
     data-name="E-ticketing"
     data-description="Pay the amount"
     data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
     data-locale="auto"
     data-zip-code="true">
   </script>
   </form> -->
@endsection