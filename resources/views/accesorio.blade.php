@extends('layouts.app')

@section('title', 'Accesorios')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('content')
    <div class="products-header">
        <h2>Accesorios</h2>
        <span class="material-icons">filter_list</span>
    </div>

    <div class="products-grid">
        <!-- Producto 1 -->
        <div class="product-card">
            <img src="{{ asset('img/cargador-iphone.webp') }}" alt="iPhone ">
            <div class="product-info">
                <h3>Cargador de iPhone</h3>
                <p class="product-price">$230</p>
                <p>Cargador compatible para iPhone x-xs-11-12-13-14</p>
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
            <img src="{{ asset('img/Airpors-pro.webp') }}" alt="Audifono Analambricos">
            <div class="product-info">
                <h3>Audífonos inalámbricos</h3>
                <p class="product-price">$400</p>
                <p>AirPods 3ra Generación Para iPhone 1:1 Audífonos inalámbricos AAA</p>
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
            <img src="{{ asset('img/cargador-tipo-c.webp') }}" alt="Honor Magic 6 LITE">
            <div class="product-info">
                <h3>Cargador Tipo C</h3>
                <p class="product-price">$214</p>
                <p>Perfecto estado</p>
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
            <img src="{{ asset('img/cargador-pc.webp') }}" alt="OnePlus 9">
            <div class="product-info">
                <h3>Cargador PC</h3>
                <p class="product-price">$350</p>
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
            <img src="{{ asset('img/Fundas.jpg') }}" alt="Xiaomi Note 13">
            <div class="product-info">
                <h3>Fundas</h3>
                <p class="product-price">$12</p>
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
            <img src="{{ asset('img/cargador-inalambrica.webp') }}" alt="iPhone 12 Mini">
            <div class="product-info">
                <h3>Cargador Inalambrico</h3>
                <p class="product-price">$379</p>
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