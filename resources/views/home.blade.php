@extends('main')

 @section('content')
 <div class="container weapons">
   <h1>Welcome to TopSkins.com</h1>
   <a href="/vote" type="button">Vote for your favorite skins</a>
       <h3>Top Karambits</h3>
       <div class="row">
       @foreach ($weapons as $weapon)
         <!-- <div class="col-4"> -->
         <div class="col-3">
           <p>{{ $weapon->name }}</p>
           <img src="{{ asset($weapon->image) }}" alt=""></p>
           <p>{{ $weapon->elo }}</p>
         </div>
         <!--</div>-->
         <!-- @if ($loop->iteration % 3 == 0)
           </div>
           <div class="row">
         @endif -->
       @endforeach
       </div>
       <div class="row">
         <div class="col-12">
           <a href="weapon/karambit">See more...</a>
         </div>
       </div>

     <div class="col-4">
     <h3>All Gut Knifes</h3>
     </div>
     <div class="col-4">
     <h3>All Bayonets</h3>
     </div>
</div>
 @endsection
