@extends('layouts.app')
@section('content')
    <div class="wrapper create-pizza">
        <h1>Order a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            {{-- for input name --}}
            <label for="name">name : </label>
            <input type="text" name="name" id="name">

            {{-- for select pizza type --}}
            <label for="type">Choose pizza type : </label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">volcano</option>
            </select>

            {{-- for select base type --}}
            <label for="base">Choose base type : </label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>

            <fieldset>
                <label>Extra toppings:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" value="olives">Olives <br>
            </fieldset>

            <input type="submit" value="Order Pizza">
            

        </form>
        
    </div>
    <div class="wrapper"><a href="/pizzas"><- Back to all pizzas</a></div>
    
@endsection
