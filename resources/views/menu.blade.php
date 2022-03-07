@extends('common.master')

@section('title')
    menu
@endsection


@section('content')
    @include('common.navbar')

    <div class="container mt-5 mb-3">
        <div class="row">

                <div class="row">
                    @foreach($arrivals as $product)
                        @include('common.product')
                    @endforeach
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="text-center mb-4">
                            <a href="/products/arrivals" class="text-muted"
                               style="outline: none; text-decoration: none;">
                                See More New Arraivals
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">

                <div class="row">
                    @foreach($sales as $product)
                        @include('common.product')
                    @endforeach
                </div>

            </div>
        </div>
    </div>


    @include('common.footer')
@endsection
