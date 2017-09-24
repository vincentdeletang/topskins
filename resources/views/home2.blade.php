@extends('main')

@section('content')
<div class="weapons">
  <div class="container">
    <div class="head">
       <h1>TopSkins</h1>
       <h3>Check which are the most liked skins in the community<br/> and <a href="/vote">vote</a> for your favorite ones !</h3>
       <!-- <a href="/vote">Vote for your favorite skins</a> -->
     </div>

     <!-- START FIRST ROW -->
     <div class="row">
       <div class="col-6 category">
         <h3>BEST BAYONETS</h3>
         @foreach ($bayonets as $bayonet)
         <!-- <div class="col-4"> -->
         <div class="col-4 weapon-bg">
           @if ($loop->iteration == 1)<div class="first">#1</div>@endif
           @if ($loop->iteration == 2)<div class="second">#2</div>@endif
           @if ($loop->iteration == 3)<div class="third">#3</div>@endif
           <p>{{ $bayonet->name }}</p>
           <img src="{{ asset($bayonet->image) }}" alt=""></p>
           <p>Elo : {{ $bayonet->elo }}</p>
         </div>
         <!--</div>-->
         <!-- @if ($loop->iteration % 3 == 0)
           </div>
           <div class="row">
         @endif -->
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/bayonet" class="button">all {{ $bayonet->type }}s</a>
           </div>
         </div>
       </div>
       <div class="col-6 category">
         <h3>BEST BOWIES</h3>
         @foreach ($bowies as $bowie)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $bowie->name }}</p>
             <img src="{{ asset($bowie->image) }}" alt=""></p>
             <p>Elo : {{ $bowie->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/bowie" class="button">all {{ $bowie->type }}s</a>
           </div>
         </div>
       </div>
     </div>
     <!-- END FIRST ROW -->

     <!-- START 2ND ROW -->
     <div class="row">
       <div class="col-6 category">
         <h3>BEST BUTTERFLY KNIVES</h3>
         @foreach ($butterflies as $butterfly)
         <div class="col-4 weapon-bg">
           @if ($loop->iteration == 1)<div class="first">#1</div>@endif
           @if ($loop->iteration == 2)<div class="second">#2</div>@endif
           @if ($loop->iteration == 3)<div class="third">#3</div>@endif
           <p>{{ $butterfly->name }}</p>
           <img src="{{ asset($butterfly->image) }}" alt=""></p>
           <p>Elo : {{ $butterfly->elo }}</p>
         </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/butterfly" class="button">all {{ $butterfly->type }}s</a>
           </div>
         </div>
       </div>
       <div class="col-6 category">
         <h3>BEST FALCHIONS</h3>
         @foreach ($falchions as $falchion)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $falchion->name }}</p>
             <img src="{{ asset($falchion->image) }}" alt=""></p>
             <p>Elo : {{ $falchion->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/falchion" class="button">all {{ $falchion->type }}s</a>
           </div>
         </div>
       </div>
     </div>
     <!-- END 2ND ROW -->

     <!-- START 3RD ROW -->
     <div class="row">
       <div class="col-6 category">
         <h3>BEST FLIP KNIVES</h3>
         @foreach ($flips as $flip)
         <div class="col-4 weapon-bg">
           @if ($loop->iteration == 1)<div class="first">#1</div>@endif
           @if ($loop->iteration == 2)<div class="second">#2</div>@endif
           @if ($loop->iteration == 3)<div class="third">#3</div>@endif
           <p>{{ $flip->name }}</p>
           <img src="{{ asset($flip->image) }}" alt=""></p>
           <p>Elo : {{ $flip->elo }}</p>
         </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/flip" class="button">all {{ $flip->type }}s</a>
           </div>
         </div>
       </div>
       <div class="col-6 category">
         <h3>BEST GUT KNIVES</h3>
         @foreach ($guts as $gut)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $gut->name }}</p>
             <img src="{{ asset($gut->image) }}" alt=""></p>
             <p>Elo : {{ $gut->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/gut" class="button">all {{ $gut->type }}s</a>
           </div>
         </div>
       </div>
     </div>
     <!-- END 3RD ROW -->

     <!-- START 4TH ROW -->
     <div class="row">
       <div class="col-6 category">
         <h3>BEST HUNTSMAN KNIVES</h3>
         @foreach ($huntsmans as $huntsman)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $huntsman->name }}</p>
             <img src="{{ asset($huntsman->image) }}" alt=""></p>
             <p>Elo : {{ $huntsman->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/huntsman" class="button">all {{ $huntsman->type }}s</a>
           </div>
         </div>
       </div>
       <div class="col-6 category">
         <h3>BEST KARAMBITS</h3>
         @foreach ($karambits as $karambit)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $karambit->name }}</p>
             <img src="{{ asset($karambit->image) }}" alt=""></p>
             <p>Elo : {{ $karambit->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/karambit" class="button">all {{ $karambit->type }}s</a>
           </div>
         </div>
       </div>
     </div>
     <!-- END 4TH ROW -->

     <!-- START 5TH ROW -->
     <div class="row">
       <div class="col-6 category">
         <h3>BEST M9 BAYONETS</h3>
         @foreach ($m9s as $m9)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $m9->name }}</p>
             <img src="{{ asset($m9->image) }}" alt=""></p>
             <p>Elo : {{ $m9->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/m9" class="button">all {{ $m9->type }}s</a>
           </div>
         </div>
       </div>
       <div class="col-6 category">
         <h3>BEST SHADOW DAGGERS</h3>
         @foreach ($shadowdaggers as $shadowdagger)
           <div class="col-4 weapon-bg">
             @if ($loop->iteration == 1)<div class="first">#1</div>@endif
             @if ($loop->iteration == 2)<div class="second">#2</div>@endif
             @if ($loop->iteration == 3)<div class="third">#3</div>@endif
             <p>{{ $shadowdagger->name }}</p>
             <img src="{{ asset($shadowdagger->image) }}" alt=""></p>
             <p>Elo : {{ $shadowdagger->elo }}</p>
           </div>
         @endforeach
         <div class="row">
           <div class="col-12 category-btn">
             <a href="weapon/shadowdaggers" class="button">all {{ $shadowdagger->type }}s</a>
           </div>
         </div>
       </div>
     </div>
     <!-- END 5TH ROW -->
   </div>
</div>
@endsection
