@extends('layouts.app')

@section('content')
<div class="wrapper coffe-details">
  <h1>Order for {{ $coffee->name }}</h1>
  <p class="type">Type - {{ $coffee->type }}</p>
  <p class="size">Size - {{ $coffee->size }}</p>
  
  <form action="{{ route('coffee.destroy', $coffee->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('coffee.index') }}" class="back"><- Back to all coffees</a>
@endsection