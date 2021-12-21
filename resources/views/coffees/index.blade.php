@extends('layouts.app')

@section('content')
<div class="wrapper coffee-index">
  <h1>coffee Orders</h1>
  @foreach($coffees as $coffee)
    <div class="coffee-item">
      <img src="/img/cup of coffee.jpg" alt="coffee">
      <h4><a href="{{ route('coffees.show', $coffee->id) }}">{{ $coffee->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection