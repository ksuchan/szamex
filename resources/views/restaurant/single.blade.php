@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="restaurant-single">
            <div class="flex-wrapper">
                <div class="flex-item restaurant-description">
                    <div>
                        <div class="title">Swojsko</div>
                        <div class="description"><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p><p>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta.</p></div>
                    </div>
                </div>
                <div class="flex-item restaurant-menu">
                    <div>
                        <div class="header">
                            <div class="title">Nasze menu</div>
                            <div class="description">Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</div>
                        </div>
                        <div class="flex-wrapper">
                        @for ($c = 0; $c < 2; $c++)
                        <div class="flex-item menu-category">
                            <div class="menu-category-title">Pizza</div>
                            @for ($i = 0; $i < 5; $i++)
                            <div class="menu-item">
                                <div class="title">Mexicana</div>
                                <div class="components">Donec velit neque, auctor sit amet aliquam vel ullamcorper sit amet ligula</div>
                                <div class="add-to-cart"><a href="#" class="order-button">Zamów</a></div>
                                <div class="price">19 zł</div>
                            </div>
                            @endfor
                        </div>
                        @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
@endsection