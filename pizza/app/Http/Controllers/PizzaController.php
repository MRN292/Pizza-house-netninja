<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    // if you want to auth all of the methods

    // public function __construct(){
    //     $this->middleware('auth');
    // }


    
    //controller for pizza

    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name','desc')->get();
        // $pizzas = Pizza::where('type','hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('Pizzas.index', ['pizzas' => $pizzas]);
    }
    public function show($id)
    {
        $pizzas = Pizza::findOrFail($id);
        return view('Pizzas.show', ['pizzas' => $pizzas]);
    }
    public function create()
    {
        return view('Pizzas.create');
    }
    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');


        $pizza->save();


        return redirect('/')->with('mssg', 'Thanks for your order');
    }
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
