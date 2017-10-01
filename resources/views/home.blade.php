@extends('main')

@section('content')
<div class="head">
  <h1>SKINRANK</h1>
</div>

   <h2>Check the hottest skins voted by the community<br/> and <a href="/vote">vote</a> for your favorite ones !</h2>



<div class="weapons">
  <div class="container">
<div class="row">
  <div class="col-6">
     <div class="category">

       <div class="row">
         <div class="col-4 category">
           @foreach ($karambits as $karambit)
           <div class="weapon-bg">
            <div class="name">{{ $karambit->name }}</div>
            <div class="{{ $karambit->quality }} quality">{{ $karambit->quality }} Knife</div>
             <img src="{{ asset($karambit->image) }}" alt="">
            <a href="/karambit" class="button">all {{ $karambit->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($m9s as $m9)
           <div class="weapon-bg">
             <div class="name">{{ $m9->name }}</div>
             <div class="{{ $m9->quality }} quality">{{ $m9->quality }} Knife</div>
             <img src="{{ asset($m9->image) }}" alt="">
             <a href="/m9" class="button">all {{ $m9->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($bayonets as $bayonet)
         <div class="weapon-bg">
           <div class="name">{{ $bayonet->name }}</div>
           <div class="{{ $bayonet->quality }} quality">{{ $bayonet->quality }} Knife</div>
           <img src="{{ asset($bayonet->image) }}" alt="">
            <a href="/bayonet" class="button">all {{ $bayonet->type }}s</a>
         </div>
         @endforeach
       </div>
     </div>
     <div class="row">
       <div class="col-4 category">
         @foreach ($butterflies as $butterfly)
           <div class="weapon-bg">
             <div class="name">{{ $butterfly->name }}</div>
             <div class="{{ $butterfly->quality }} quality">{{ $butterfly->quality }} Knife</div>
             <img src="{{ asset($butterfly->image) }}" alt="">
             <a href="/butterfly" class="button">all {{ $butterfly->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($huntsmans as $huntsman)
           <div class="weapon-bg">
             <div class="name">{{ $huntsman->name }}</div>
             <div class="{{ $huntsman->quality }} quality">{{ $huntsman->quality }} Knife</div>
             <img src="{{ asset($huntsman->image) }}" alt="">
             <a href="/huntsman" class="button">all {{ $huntsman->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($flips as $flip)
         <div class="weapon-bg">
           <div class="name">{{ $flip->name }}</div>
           <div class="{{ $flip->quality }} quality">{{ $flip->quality }} Knife</div>
           <img src="{{ asset($flip->image) }}" alt="">
           <a href="/flip" class="button">all {{ $flip->type }}s</a>
         </div>
         @endforeach
       </div>
   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($bowies as $bowie)
       <div class="weapon-bg">
         <div class="name">{{ $bowie->name }}</div>
         <div class="{{ $bowie->quality }} quality">{{ $bowie->quality }} Knife</div>
         <img src="{{ asset($bowie->image) }}" alt="">
         <a href="/bowie" class="button">all {{ $bowie->type }}s</a>
       </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($falchions as $falchion)
         <div class="weapon-bg">
           <div class="name">{{ $falchion->name }}</div>
           <div class="{{ $falchion->quality }} quality">{{ $falchion->quality }} Knife</div>
           <img src="{{ asset($falchion->image) }}" alt="">
           <a href="/falchion" class="button">all {{ $falchion->type }}s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($guts as $gut)
         <div class="weapon-bg">
           <div class="name">{{ $gut->name }}</div>
           <div class="{{ $gut->quality }} quality">{{ $gut->quality }} Knife</div>
           <img src="{{ asset($gut->image) }}" alt="">
          <a href="/gut" class="button">all {{ $gut->type }}s</a>
         </div>
       @endforeach
     </div>

   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($shadowdaggers as $shadowdagger)
         <div class="weapon-bg">
           <div class="name">{{ $shadowdagger->name }}</div>
           <div class="{{ $shadowdagger->quality }} quality">{{ $shadowdagger->quality }} Knife</div>
           <img src="{{ asset($shadowdagger->image) }}" alt="">
           <a href="/shadowdaggers" class="button">{{ $shadowdagger->type }}</a>
         </div>
       @endforeach
     </div>
   </div>
 </div>
</div>

<div class="col-6">
 <div class="category">
     <div class="row">
       <div class="col-4 category">
         @foreach ($ak47s as $ak47)
         <div class="weapon-bg">
           <div class="name">{{ $ak47->name }}</div>
           <div class="{{ $ak47->quality }} quality">{{ $ak47->quality }} Rifle</div>
           <img src="{{ asset($ak47->image) }}" alt="">
            <a href="/ak47" class="button">all {{ $ak47->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($m4a4s as $m4a4)
         <div class="weapon-bg">
           <div class="name">{{ $m4a4->name }}</div>
           <div class="{{ $m4a4->quality }} quality">{{ $m4a4->quality }} Rifle</div>
           <img src="{{ asset($m4a4->image) }}" alt="">
            <a href="/m4a4" class="button">all {{ $m4a4->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($awps as $awp)
           <div class="weapon-bg">
             <div class="name">{{ $awp->name }}</div>
             <div class="{{ $awp->quality }} quality">{{ $awp->quality }} Rifle</div>
             <img src="{{ asset($awp->image) }}" alt="">
             <a href="/awp" class="button">all awps</a>
           </div>
         @endforeach
     </div>
   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($m4a1ss as $m4a1s)
         <div class="weapon-bg">
           <div class="name">{{ $m4a1s->name }}</div>
           <div class="{{ $m4a1s->quality }} quality">{{ $m4a1s->quality }} Rifle</div>
           <img src="{{ asset($m4a1s->image) }}" alt="">
           <a href="/m4a1s" class="button">all {{ $m4a1s->type }}s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($galils as $galil)
         <div class="weapon-bg">
           <div class="name">{{ $galil->name }}</div>
           <div class="{{ $galil->quality }} quality">{{ $galil->quality }} Rifle</div>
           <img src="{{ asset($galil->image) }}" alt="">
           <a href="/galil" class="button">all {{ $galil->type }}</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($famass as $famas)
         <div class="weapon-bg">
           <div class="name">{{ $famas->name }}</div>
           <div class="{{ $famas->quality }} quality">{{ $famas->quality }} Rifle</div>
           <img src="{{ asset($famas->image) }}" alt="">
           <a href="/famas" class="button">all {{ $famas->type }}</a>
         </div>
       @endforeach
     </div>
   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($ssg08s as $ssg08)
         <div class="weapon-bg">
           <div class="name">{{ $ssg08->name }}</div>
           <div class="{{ $ssg08->quality }} quality">{{ $ssg08->quality }} Knife</div>
           <img src="{{ asset($ssg08->image) }}" alt="">
           <a href="/ssg08" class="button">{{ $ssg08->type }}</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($augs as $aug)
         <div class="weapon-bg">
           <div class="name">{{ $aug->name }}</div>
           <div class="{{ $aug->quality }} quality">{{ $aug->quality }} Knife</div>
           <img src="{{ asset($aug->image) }}" alt="">
           <a href="/aug" class="button">{{ $aug->type }}</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($g3sg1s as $g3sg1)
         <div class="weapon-bg">
           <div class="name">{{ $g3sg1->name }}</div>
           <div class="{{ $g3sg1->quality }} quality">{{ $g3sg1->quality }} Knife</div>
           <img src="{{ asset($g3sg1->image) }}" alt="">
           <a href="/g3sg1" class="button">{{ $g3sg1->type }}</a>
         </div>
       @endforeach
     </div>
   </div>
     <div class="row">
     <div class="col-4 category">
       @foreach ($scar20s as $scar20)
         <div class="weapon-bg">
           <div class="name">{{ $scar20->name }}</div>
           <div class="{{ $scar20->quality }} quality">{{ $scar20->quality }} Knife</div>
           <img src="{{ asset($scar20->image) }}" alt="">
           <a href="/scar20" class="button">{{ $scar20->type }}</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($sg553s as $sg553)
         <div class="weapon-bg">
           <div class="name">{{ $sg553->name }}</div>
           <div class="{{ $sg553->quality }} quality">{{ $sg553->quality }} Knife</div>
           <img src="{{ asset($sg553->image) }}" alt="">
           <a href="/sg553" class="button">{{ $sg553->type }}</a>
         </div>
       @endforeach
     </div>
   </div>
 </div>
</div>
</div>
<div class="row">
 <div class="col-12 category">
   <h3>Pistols</h3>
     <div class="row">
       <div class="col-2 category">
         @foreach ($uspss as $usps)
           <div class="weapon-bg">
             <div class="name">{{ $usps->name }}</div>
             <div class="{{ $usps->quality }} quality">{{ $usps->quality }} Pistol</div>
             <img src="{{ asset($usps->image) }}" alt="">
             <a href="/usps" class="button">all {{ $usps->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($glocks as $glock)
           <div class="weapon-bg">
             <div class="name">{{ $glock->name }}</div>
             <div class="{{ $glock->quality }} quality">{{ $glock->quality }} Pistol</div>
             <img src="{{ asset($glock->image) }}" alt="">
             <a href="/glock" class="button">all {{ $glock->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($deagles as $deagle)
           <div class="weapon-bg">
             <div class="name">{{ $deagle->name }}</div>
             <div class="{{ $deagle->quality }} quality">{{ $deagle->quality }} Pistol</div>
             <img src="{{ asset($deagle->image) }}" alt="">
             <a href="/deagle" class="button">all {{ $deagle->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($p250s as $p250)
           <div class="weapon-bg">
             <div class="name">{{ $p250->name }}</div>
             <div class="{{ $p250->quality }} quality">{{ $p250->quality }} Pistol</div>
             <img src="{{ asset($p250->image) }}" alt="">
             <a href="/p250" class="button">all {{ $p250->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($cz75s as $cz75)
           <div class="weapon-bg">
             <div class="name">{{ $cz75->name }}</div>
             <div class="{{ $cz75->quality }} quality">{{ $cz75->quality }} Pistol</div>
             <img src="{{ asset($cz75->image) }}" alt="">
             <a href="/cz75" class="button">all {{ $cz75->type }}</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($fivesevens as $fiveseven)
           <div class="weapon-bg">
             <div class="name">{{ $fiveseven->name }}</div>
             <div class="{{ $fiveseven->quality }} quality">{{ $fiveseven->quality }} Pistol</div>
             <img src="{{ asset($fiveseven->image) }}" alt="">
             <a href="/fiveseven" class="button">{{ $fiveseven->type }}</a>
           </div>
         @endforeach
       </div>
     </div>
     <div class="row">
       <div class="col-2 category">
         @foreach ($tec9s as $tec9)
           <div class="weapon-bg">
             <div class="name">{{ $tec9->name }}</div>
             <div class="{{ $tec9->quality }} quality">{{ $tec9->quality }} Knife</div>
             <img src="{{ asset($tec9->image) }}" alt="">
             <a href="/tec9" class="button">{{ $tec9->type }}</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($duals as $dual)
           <div class="weapon-bg">
             <div class="name">{{ $dual->name }}</div>
             <div class="{{ $dual->quality }} quality">{{ $dual->quality }} Knife</div>
             <img src="{{ asset($dual->image) }}" alt="">
             <a href="/dual" class="button">all {{ $dual->type }}</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($p2000s as $p2000)
           <div class="weapon-bg">
             <div class="name">{{ $p2000->name }}</div>
             <div class="{{ $p2000->quality }} quality">{{ $p2000->quality }} Knife</div>
             <img src="{{ asset($p2000->image) }}" alt="">
             <a href="/p2000" class="button">{{ $p2000->type }}</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($r8s as $r8)
           <div class="weapon-bg">
             <div class="name">{{ $r8->name }}</div>
             <div class="{{ $r8->quality }} quality">{{ $r8->quality }} Knife</div>
             <img src="{{ asset($r8->image) }}" alt="">
             <a href="/r8" class="button">{{ $r8->type }}</a>
           </div>
         @endforeach
       </div>
     </div>
</div>
</div>

<div class="row">
  <div class="col-6">

  </div>
  <div class="col-6">

  </div>
</div>
<a href="/" style="font-weight:bold">HOME</a> |
<a href="/vote">VOTE</a>
   </div>
</div>
@endsection
