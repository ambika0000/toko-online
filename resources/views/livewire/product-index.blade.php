@extends('layouts.app') <!-- harus di extends dulu gaes -->

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home') }} " class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>List <strong>Jersey</strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search . . ." aria-label="search">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i>
                            <div class="fas fa-search"></div>
                        </i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- PRODUCT --}}
    <section class="products">
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3 md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ url('assets\jersey') }}/{{ $product -> gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong> {{ $product -> nama }} </strong></h5>
                                <h5>Rp. {{ number_format($product -> harga) }} </h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-dark btn-block"> Detail </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col">
                {{ $products -> links('layouts.pagination') }}
            </div>
        </div>
    </section>
</div>
@endsection