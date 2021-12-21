@extends('layouts.app')

@section('content')
<div class="wrapper create-coffee">
  <h1>Create a New coffee</h1>
  <form action="{{ route('coffees.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of coffee:</label>
    <select name="type" id="type">
      <option value="cappuccino">Cappuccino</option>
      <option value="americano">Americano</option>
      <option value="espresso">Espresso</option>
      <option value="latte">Latte</option>
    </select>
    <label for="size">Choose crust:</label>
    <select name="size" id="size">
      <option value="small">small</option>
      <option value="medium">medium</option>
      <option value="large">large</option>
      <option value="super large">super large</option>
    </select>
    <!-- <fieldset>
      <label>Extra additives:</label>
      <input type="checkbox" name="	additives[]" value="sugar">sugar<br />
      <input type="checkbox" name="	additives[]" value="brown sugar">brown sugar<br />
      <input type="checkbox" name="	additives[]" value="honey">honey<br />
      <input type="checkbox" name="	additives[]" value="milk">milk<br />
    </fieldset> -->
    <input type="submit" value="Order coffee">
  </form>
</div>
@endsection