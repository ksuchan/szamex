@php
    $current_section = 'cart'
@endphp

@extends('layouts.order')

@section('order_image')
    <div class="media">
        <img src="" />
    </div>
@endsection

@section('order_content')
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Nazwa i szczegóły</th>
                    <th>Ilość</th>
                    <th>Wartość</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>
                        <img src="http://placehold.it/116x87" />
                    </td>
                    <td>Spaghetti</td>
                    <td>1 szt.</td>
                    <td>25,99 zł</td>
                </tr>
                @endfor
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Suma</td>
                    <td>25,99 zł</td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection