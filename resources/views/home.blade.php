@php
$cards = config('comics');
@endphp
@vite(['resources/css/jumboMain.css'])
@extends('layouts.master')
@section('jumbotron')
<img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo dei teen titans go" class="jumbo">
@endsection
@section('main')
    <div div class="container position-relative p-5">
         <span class="btn btn-primary position-absolute">CURRENT SERIES</span>
    <div class="row row-cols-6">
        @foreach($cards as $onecard)
        <div class="col">
            <x-card :thumb="$onecard['thumb']" :title="$onecard['title']">
</x-card>
        </div>
         @endforeach
    </div>
</div>

<div class="blue-section p-4 text-white">
<div class="d-flex align-items-center">
<img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="DIGITAL COMICS">
<h6>DIGITAL COMICS</h6>
</div>
<div class="d-flex align-items-center">
<img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="DC MERCHANDISE">
<h6>DC MERCHANDISE</h6>
</div>
<div class="d-flex align-items-center">
<img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="SUBSCRIPTION">
<h6>SUBSCRIPTION</h6>
</div>
<div class="d-flex align-items-center">
<img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="COMICS SHOP LOCATOR">
<h6>COMICS SHOP LOCATOR</h6>
</div>
<div class="d-flex align-items-center">
<img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC POWER VISA">
<h6>DC POWER VISA</h6>
</div>

</div>
</div>

@endsection