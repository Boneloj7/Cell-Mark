@extends('layouts.app')

@section('title', 'Explorar Todo')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/buscador.css') }}">
@endsection

@section('content')
    <div class="products-header">
        <h2>Todos los productos en CellMark</h2>
        <span class="material-icons">filter_list</span>
    </div>

    <!-- Sección de Celulares -->
    <h3 class="section-title">Celulares</h3>
    <div class="products-grid">
        <!-- Producto 1 - Celular -->
        <div class="product-card">
            <img src="{{ asset('img/iphone13.webp') }}" alt="iPhone 13">
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
        <!-- Producto 2 - Celular -->
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
        <!-- Producto 3 - Celular -->
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
    </div>

    <!-- Sección de Accesorios -->
    <h3 class="section-title">Accesorios</h3>
    <div class="products-grid">
        <!-- Producto 1 - Accesorio -->
        <div class="product-card">
            <img src="{{ asset('img/cargador-iphone.webp') }}" alt="Cargador iPhone">
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
        <!-- Producto 2 - Accesorio -->
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
        <!-- Producto 3 - Accesorio -->
        <div class="product-card">
            <img src="{{ asset('img/cargador-tipo-c.webp') }}" alt="Cargador Tipo C">
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
    </div>

    <!-- Botones para ver más -->
    <div class="view-more-buttons">
        <a href="{{ route('home') }}" class="btn-view-more">Ver todos los celulares</a>
        <a href="{{ route('accesorios') }}" class="btn-view-more">Ver todos los accesorios</a>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/buscador.js') }}"></script>
@endsection