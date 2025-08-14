@vite(['resources/css/footer.css'])
@php
$dcComics = ["Characters", "Comics", "Movies", "TV", "Games", "Video", "News"];
$shop = ["Shop DC", "Shop DC collectibles"];
$dc = ["Terms of Use", "Privacy and policy(New)", "Movies", "TV", "Games", "Video", "News", "Games", "Video", "News"];
$sites = ["Movies", "TV", "Games", "Video", "News"];

@endphp
<footer>
    <div class="container">
           <!-- voci footer -->
<div class="d-flex text-white p-5 justify-content-between">

<div class="d-flex flex-column">
    <h3>DC COMICS</h3>
    <ul class="flex-column">
@foreach($dcComics as $comic)
    <li>{{$comic}}</li>
@endforeach</ul>
<h3>SHOP</h3>
 <ul class="flex-column">
@foreach($shop as $shopOne)
    <li>{{$shopOne}}</li>
@endforeach</ul>
</div>

<div class="d-flex">
   
     <ul class="flex-column">
        <li> <h3>DC</h3></li>
@foreach($dc as $dcOne)
    <li>{{$dcOne}}</li>
@endforeach</ul>
</div>

<div class="d-flex">
    
     <ul class="flex-column">
        <li><h3>SITES</h3></li>
@foreach($sites as $site)
    <li>{{$site}}</li>
@endforeach</ul>
</div>

<!-- immagine footer -->
    <div>
        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc-logo" class="dc-logo">
    </div>
</div>
    </div>  

    <div class="last-footer">
        <div class="container d-flex justify-content-between  align-items-center">
    <div class="btn btn-outline-primary text-white">
        SIGN UP NOW
    </div>
    <div class="d-flex p-3  align-items-center gap-2">
    <span class="text-primary fw-600">FOLLOW US</span>
    <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
    <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
    <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
    <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
    <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
   </div>
    </div>
   </div>

</footer>