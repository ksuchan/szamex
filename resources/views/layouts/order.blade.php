@extends('layouts.app')

@php
    $steps = [
        'cart' => 'Koszyk',
        'customer_details' => 'Adres dostawy',
        'order_status' => 'Status zamówienia'
    ];
@endphp

@section('content')
    <section id="order">
        <nav class="order_menu">
            <ul>
                @foreach ($steps as $step)
                    <li>{{ $step }}</li>
                @endforeach
            </ul>
        </nav>
        <div class="order-wrapper">
            <div class="image">
                @yield('order_image') 
            </div>
            <div class="content-side">
                @yield('order_content')
            </div>
        </div>
    </section>
@endsection