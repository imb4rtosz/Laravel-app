<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function index() {

    $coffees = Coffee::latest()->get();      

    return view('coffees.index', [
      'coffees' => $coffees,
    ]);
  }

  public function show($id) {
    
    $coffee = Coffee::findOrFail($id);

    return view('coffees.show', ['coffee' => $coffee]);
  }

  public function create() {
    return view('coffees.create');
  }

  public function store() {

    $coffee = new Coffee();

    $coffee->type = request('type');
    $coffee->size = request('size');
    $coffee->name = request('name');
    // $coffee->additives = request('additives');

    $coffee->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');

  }

  public function destroy($id) {

    $coffee = Coffee::findOrFail($id);
    $coffee->delete();

    return redirect('/coffees');

  }

}