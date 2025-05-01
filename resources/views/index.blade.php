@extends('layouts.app')

@section('title', 'Celulares')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/buscador.css') }}">
@endsection

@section('content')
    <div class="products-header">
        <h2>Celulares</h2>
        <span class="material-icons">filter_list</span>
    </div>

    <div class="products-grid">
        <!-- Producto 1 -->
        <div class="product-card">
            <img src="{{ asset('img/Iphone13.webp') }}" alt="iPhone 13">
            <div class="product-info">
                <h3>iPhone 13 - 128GB</h3>
                <p class="product-price">$699</p>
                <p>Excelente estado, batería 95%</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    AGRADO-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.8</span>
                </div>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="product-card">
            <img src="{{ asset('img/galaxy-s21.avif') }}" alt="Samsung Galaxy S21">
            <div class="product-info">
                <h3>Samsung Galaxy S21 - 256GB</h3>
                <p class="product-price">$649</p>
                <p>Como nuevo, un mes de uso</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    NEIVA-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.9</span>
                </div>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="product-card">
            <img src="{{ asset('img/HonorMagic6.avif') }}" alt="Honor Magic 6 LITE">
            <div class="product-info">
                <h3>Honor Magic 6 LITE - 128GB</h3>
                <p class="product-price">$549</p>
                <p>Perfecto estado, con garantía</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    GARZON-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.7</span>
                </div>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="product-card">
            <img src="{{ asset('img/OnePlus.jpg') }}" alt="OnePlus 9">
            <div class="product-info">
                <h3>OnePlus 9 - 256GB</h3>
                <p class="product-price">$579</p>
                <p>Casi sin uso, con accesorios</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    NEIVA-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.6</span>
                </div>
            </div>
        </div>
        <!-- Producto 5 -->
        <div class="product-card">
            <img src="{{ asset('img/XiaomiMi11.png') }}" alt="Xiaomi Note 13">
            <div class="product-info">
                <h3>Xiaomi Note 13 - 128GB</h3>
                <p class="product-price">$499</p>
                <p>Excelente rendimiento, poco uso</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    PITAL-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.5</span>
                </div>
            </div>
        </div>
        <!-- Producto 6 -->
        <div class="product-card">
            <img src="{{ asset('img/Iphone11.avif') }}" alt="iPhone 11 ">
            <div class="product-info">
                <h3>iPhone 11 - 64GB</h3>
                <p class="product-price">$479</p>
                <p>Compacto y potente, batería 90%</p>
                <div class="product-location">
                    <span class="material-icons">location_on</span>
                    GARZON-HUILA
                </div>
                <div class="product-rating">
                    <span class="material-icons">star</span>
                    <span>4.7</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/buscador.js') }}"></script>
@endsection