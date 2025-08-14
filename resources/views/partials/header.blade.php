@vite(['resources/css/header.css'])

@php
$menuList = [
    "CHARACTERS",
    "COMICS",
    "MOVIES",
    "TV",
    "GAMES",
    "COLLECTIBLES",
    "VIDEOS",
    "FANS",
    "NEWS",
    "SHOP"
    ]
@endphp

<nav>
    <div class="flex">

         <div class="logo">
<img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
</div>

    <div>
<ul>
    @foreach ($menuList as $item)
    <li>
<a href="#">{{$item}}</a>
    </li>
    @endforeach
</ul>
    </div> 

    </div>
  
</nav>