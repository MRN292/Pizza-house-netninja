@extends('layouts.app')
@section('content')
    <div class="wrapper pizza-details">
        <h1> Order for {{ $pizzas->name }}</h1>
        <p class="typer">Type - {{ $pizzas->type }} </p>
        <p class="base">Base - {{ $pizzas->base }} </p>
        <ul>
            @if ($pizzas->toppings != null)
                @foreach ($pizzas->toppings as $topping)
                    <li>{{ $topping }} </li>
                @endforeach
            @else
                <p>No Topping</p>
            @endif

        </ul>
        <form action="/pizzas/{{ $pizzas->id }}" method="post">
            @csrf
            @method('DELETE')
            <button>
                Complete the Order
            </button>
        </form>

    </div>

    <a href="{{ route('pizza.index') }}" class="back normalizer">

        <- Back to all pizzas</a>

        @endsection
