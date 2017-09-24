@extends('main')

@section('content')
<div class="weapons">
  <div class="container">
    <div class="head">
       <h1>SkinRank.com</h1>
       <h4>Check which are the most liked skins in the community<br/> and <a href="/vote">vote</a> for your favorite ones !</h4>
       <!-- <a href="/vote">Vote for your favorite skins</a> -->
     </div>
     <hr/>
     <!-- START FIRST ROW -->
     <div class="row">
       <div class="col-4 category">
         @foreach ($ak47s as $ak47)
         <div class="weapon-bg">
           <div class="top-rank first">#1</div>
           <div class="name">{{ $ak47->name }}</div>
           <div class="{{ $ak47->quality }} quality">{{ $ak47->quality }} Rifle</div>
           <img src="{{ asset($ak47->image) }}" alt="">
            <a href="weapon/ak47" class="button">all {{ $ak47->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($m4a4s as $m4a4)
         <div class="weapon-bg">
           <div class="top-rank first">#1</div>
           <div class="name">{{ $m4a4->name }}</div>
           <div class="{{ $m4a4->quality }} quality">{{ $m4a4->quality }} Rifle</div>
           <img src="{{ asset($m4a4->image) }}" alt="">
            <a href="weapon/m4a4" class="button">all {{ $m4a4->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($awps as $awp)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $awp->name }}</div>
             <div class="{{ $awp->quality }} quality">{{ $awp->quality }} Rifle</div>
             <img src="{{ asset($awp->image) }}" alt="">
             <a href="weapon/awp" class="button">all awps</a>
           </div>
         @endforeach
     </div>
   </div>
     <!-- END FIRST ROW -->

     <div class="row">
       <div class="col-4 category">
         @foreach ($m4a1ss as $m4a1s)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $m4a1s->name }}</div>
             <div class="{{ $m4a1s->quality }} quality">{{ $m4a1s->quality }} Rifle</div>
             <img src="{{ asset($m4a1s->image) }}" alt="">
             <a href="weapon/m4a1s" class="button">all {{ $m4a1s->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($karambits as $karambit)
           <div class="weapon-bg">
            <div class="top-rank first">#1</div>
            <div class="name">{{ $karambit->name }}</div>
            <div class="{{ $karambit->quality }} quality">{{ $karambit->quality }} Knife</div>
             <img src="{{ asset($karambit->image) }}" alt="">
             <a href="weapon/karambit" class="button">all {{ $karambit->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($m9s as $m9)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $m9->name }}</div>
             <div class="{{ $m9->quality }} quality">{{ $m9->quality }} Knife</div>
             <img src="{{ asset($m9->image) }}" alt="">
             <a href="weapon/m9" class="button">all {{ $m9->type }}s</a>
           </div>
         @endforeach
       </div>
     </div>

    <div class="row">
     <div class="col-4 category">
       @foreach ($bayonets as $bayonet)
       <div class="weapon-bg">
         <div class="top-rank first">#1</div>
         <div class="name">{{ $bayonet->name }}</div>
         <div class="{{ $bayonet->quality }} quality">{{ $bayonet->quality }} Knife</div>
         <img src="{{ asset($bayonet->image) }}" alt="">
          <a href="weapon/bayonet" class="button">all {{ $bayonet->type }}s</a>
       </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($bowies as $bowie)
         <div class="weapon-bg">
           <div class="top-rank first">#1</div>
           <div class="name">{{ $bowie->name }}</div>
           <div class="{{ $bowie->quality }} quality">{{ $bowie->quality }} Knife</div>
           <img src="{{ asset($bowie->image) }}" alt="">
           <a href="weapon/bowie" class="button">all {{ $bowie->type }}s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($butterflies as $butterfly)
       <div class="weapon-bg">
         <div class="top-rank first">#1</div>
         <div class="name">{{ $butterfly->name }}</div>
         <div class="{{ $butterfly->quality }} quality">{{ $butterfly->quality }} Knife</div>
         <img src="{{ asset($butterfly->image) }}" alt="">
         <a href="weapon/butterfly" class="button">all {{ $butterfly->type }}s</a>
       </div>
       @endforeach
     </div>
   </div>

     <div class="row">
       <div class="col-4 category">
         @foreach ($falchions as $falchion)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $falchion->name }}</div>
             <div class="{{ $falchion->quality }} quality">{{ $falchion->quality }} Knife</div>
             <img src="{{ asset($falchion->image) }}" alt="">
             <a href="weapon/falchion" class="button">all {{ $falchion->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($flips as $flip)
         <div class="weapon-bg">
           <div class="top-rank first">#1</div>
           <div class="name">{{ $flip->name }}</div>
           <div class="{{ $flip->quality }} quality">{{ $flip->quality }} Knife</div>
           <img src="{{ asset($flip->image) }}" alt="">
           <a href="weapon/flip" class="button">all {{ $flip->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($guts as $gut)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $gut->name }}</div>
             <div class="{{ $gut->quality }} quality">{{ $gut->quality }} Knife</div>
             <img src="{{ asset($gut->image) }}" alt="">
            <a href="weapon/gut" class="button">all {{ $gut->type }}s</a>
           </div>
         @endforeach
       </div>
     </div>

     <div class="row">
       <div class="col-4 category">
         @foreach ($huntsmans as $huntsman)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $huntsman->name }}</div>
             <div class="{{ $huntsman->quality }} quality">{{ $huntsman->quality }} Knife</div>
             <img src="{{ asset($huntsman->image) }}" alt="">
             <a href="weapon/huntsman" class="button">all {{ $huntsman->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($shadowdaggers as $shadowdagger)
           <div class="weapon-bg">
             <div class="top-rank first">#1</div>
             <div class="name">{{ $shadowdagger->name }}</div>
             <div class="{{ $shadowdagger->quality }} quality">{{ $shadowdagger->quality }} Knife</div>
             <img src="{{ asset($shadowdagger->image) }}" alt="">
             <a href="weapon/shadowdaggers" class="button">{{ $shadowdagger->type }}</a>
           </div>
         @endforeach
       </div>
     </div>

     <div class="row">

     </div>

   </div>
</div>
@endsection
