@extends('main')

@section('content')
<div class="head">
  <h1>SKINRANK</h1>
</div>
<h2>Check the most liked skins in the community<br/> and <a href="/vote">vote</a> for your favorite ones !</h2>
<div class="weapons">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="category">
            <div class="row">
              <div class="col-2 category">
                @foreach ($bloodhounds as $bloodhound)
                <div class="weapon-bg">
                  <div class="weapon-name">{{ $bloodhound->name }}</div>
                  <div class="{{ $bloodhound->quality }} quality name">{{ $bloodhound->quality }} Gloves</div>
                  <img src="{{ asset($bloodhound->image) }}" alt="">
                   <a href="/bloodhound" class="button name">all Bloodhound gloves</a>
                </div>
                @endforeach
              </div>
              <div class="col-2 category">
                @foreach ($drivers as $driver)
                <div class="weapon-bg">
                  <div class="weapon-name">{{ $driver->name }}</div>
                  <div class="{{ $driver->quality }} quality name">{{ $driver->quality }} Gloves</div>
                  <img src="{{ asset($driver->image) }}" alt="">
                   <a href="/driver" class="button name">all {{ $driver->type }} gloves</a>
                </div>
                @endforeach
              </div>
              <div class="col-2 category">
                @foreach ($wrapss as $wraps)
                <div class="weapon-bg">
                  <div class="weapon-name">{{ $wraps->name }}</div>
                  <div class="{{ $wraps->quality }} quality name">{{ $wraps->quality }} Gloves</div>
                  <img src="{{ asset($wraps->image) }}" alt="">
                   <a href="/wraps" class="button name">all hand {{ $wraps->type }}</a>
                </div>
                @endforeach
              </div>
              <div class="col-2 category">
                @foreach ($motos as $moto)
                <div class="weapon-bg">
                  <div class="weapon-name">{{ $moto->name }}</div>
                  <div class="{{ $moto->quality }} quality name">{{ $moto->quality }} Gloves</div>
                  <img src="{{ asset($moto->image) }}" alt="">
                   <a href="/moto" class="button name">all {{ $moto->type }} gloves</a>
                </div>
                @endforeach
              </div>
            <div class="col-2 category">
              @foreach ($specialists as $specialist)
              <div class="weapon-bg">
                <div class="weapon-name">{{ $specialist->name }}</div>
                <div class="{{ $specialist->quality }} quality name">{{ $specialist->quality }} Gloves</div>
                <img src="{{ asset($specialist->image) }}" alt="">
                 <a href="/specialist" class="button name">all {{ $specialist->type }} gloves</a>
              </div>
              @endforeach
            </div>
            <div class="col-2 category">
              @foreach ($sports as $sport)
              <div class="weapon-bg">
                <div class="weapon-name">{{ $sport->name }}</div>
                <div class="{{ $sport->quality }} quality name">{{ $sport->quality }} Gloves</div>
                <img src="{{ asset($sport->image) }}" alt="">
                 <a href="/sport" class="button name">all {{ $sport->type }} gloves</a>
              </div>
              @endforeach
            </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-6">
     <div class="category">
       <div class="row">
         <div class="col-4 category">
           @foreach ($bayonets as $bayonet)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $bayonet->name }}</div>
             <div class="{{ $bayonet->quality }} quality name">{{ $bayonet->quality }} Knife</div>
             <img src="{{ asset($bayonet->image) }}" alt="">
              <a href="/bayonet" class="button name">all {{ $bayonet->type }}s</a>
           </div>
           @endforeach
         </div>
         <div class="col-4 category">
           @foreach ($bowies as $bowie)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $bowie->name }}</div>
             <div class="{{ $bowie->quality }} quality name">{{ $bowie->quality }} Knife</div>
             <img src="{{ asset($bowie->image) }}" alt="">
             <a href="/bowie" class="button name">all {{ $bowie->type }} knives</a>
           </div>
           @endforeach
         </div>
         <div class="col-4 category">
           @foreach ($butterflies as $butterfly)
             <div class="weapon-bg">
               <div class="weapon-name">{{ $butterfly->name }}</div>
               <div class="{{ $butterfly->quality }} quality name">{{ $butterfly->quality }} Knife</div>
               <img src="{{ asset($butterfly->image) }}" alt="">
               <a href="/butterfly" class="button name">all butterflies</a>
             </div>
           @endforeach
         </div>
     </div>
     <div class="row">
       <div class="col-4 category">
         @foreach ($falchions as $falchion)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $falchion->name }}</div>
             <div class="{{ $falchion->quality }} quality name">{{ $falchion->quality }} Knife</div>
             <img src="{{ asset($falchion->image) }}" alt="">
             <a href="/falchion" class="button name">all {{ $falchion->type }} knives</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($flips as $flip)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $flip->name }}</div>
           <div class="{{ $flip->quality }} quality name">{{ $flip->quality }} Knife</div>
           <img src="{{ asset($flip->image) }}" alt="">
           <a href="/flip" class="button name">all {{ $flip->type }} knives</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($guts as $gut)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $gut->name }}</div>
             <div class="{{ $gut->quality }} quality name">{{ $gut->quality }} Knife</div>
             <img src="{{ asset($gut->image) }}" alt="">
            <a href="/gut" class="button name">all {{ $gut->type }} knives</a>
           </div>
         @endforeach
       </div>
   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($huntsmans as $huntsman)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $huntsman->name }}</div>
           <div class="{{ $huntsman->quality }} quality name">{{ $huntsman->quality }} Knife</div>
           <img src="{{ asset($huntsman->image) }}" alt="">
           <a href="/huntsman" class="button name">all {{ $huntsman->type }}s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($karambits as $karambit)
       <div class="weapon-bg">
        <div class="weapon-name">{{ $karambit->name }}</div>
        <div class="{{ $karambit->quality }} quality name">{{ $karambit->quality }} Knife</div>
         <img src="{{ asset($karambit->image) }}" alt="">
        <a href="/karambit" class="button name">all {{ $karambit->type }}s</a>
       </div>
     @endforeach
   </div>
   <div class="col-4 category">
     @foreach ($m9s as $m9)
       <div class="weapon-bg">
         <div class="weapon-name">{{ $m9->name }}</div>
         <div class="{{ $m9->quality }} quality name">{{ $m9->quality }} Knife</div>
         <img src="{{ asset($m9->image) }}" alt="">
         <a href="/m9" class="button name">all {{ $m9->type }} bayonets</a>
       </div>
     @endforeach
   </div>

   </div>
   <div class="row">
     <div class="col-4 category">
       @foreach ($shadowdaggers as $shadowdagger)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $shadowdagger->name }}</div>
           <div class="{{ $shadowdagger->quality }} quality name">{{ $shadowdagger->quality }} Knife</div>
           <img src="{{ asset($shadowdagger->image) }}" alt="">
           <a href="/shadowdaggers" class="button name">all {{ $shadowdagger->type }}</a>
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
           <div class="weapon-name">{{ $ak47->name }}</div>
           <div class="{{ $ak47->quality }} quality name">{{ $ak47->quality }} Rifle</div>
           <img src="{{ asset($ak47->image) }}" alt="">
            <a href="/ak47" class="button name">all {{ $ak47->type }}s</a>
         </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($augs as $aug)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $aug->name }}</div>
             <div class="{{ $aug->quality }} quality name">{{ $aug->quality }} Rifle</div>
             <img src="{{ asset($aug->image) }}" alt="">
             <a href="/aug" class="button name">all {{ $aug->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-4 category">
         @foreach ($awps as $awp)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $awp->name }}</div>
             <div class="{{ $awp->quality }} quality name">{{ $awp->quality }} Rifle</div>
             <img src="{{ asset($awp->image) }}" alt="">
             <a href="/awp" class="button name">all awps</a>
           </div>
         @endforeach
     </div>
   </div>

   <div class="row">
     <div class="col-4 category">
       @foreach ($famass as $famas)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $famas->name }}</div>
           <div class="{{ $famas->quality }} quality name">{{ $famas->quality }} Rifle</div>
           <img src="{{ asset($famas->image) }}" alt="">
           <a href="/famas" class="button name">all {{ $famas->type }}</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($g3sg1s as $g3sg1)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $g3sg1->name }}</div>
           <div class="{{ $g3sg1->quality }} quality name">{{ $g3sg1->quality }} Rifle</div>
           <img src="{{ asset($g3sg1->image) }}" alt="">
           <a href="/g3sg1" class="button name">all {{ $g3sg1->type }}s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($galils as $galil)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $galil->name }}</div>
           <div class="{{ $galil->quality }} quality name">{{ $galil->quality }} Rifle</div>
           <img src="{{ asset($galil->image) }}" alt="">
           <a href="/galil" class="button name">all {{ $galil->type }} ARs</a>
         </div>
       @endforeach
     </div>
   </div>


   <div class="row">
     <div class="col-4 category">
       @foreach ($m4a1ss as $m4a1s)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $m4a1s->name }}</div>
           <div class="{{ $m4a1s->quality }} quality name">{{ $m4a1s->quality }} Rifle</div>
           <img src="{{ asset($m4a1s->image) }}" alt="">
           <a href="/m4a1s" class="button name">all m4a1-s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($m4a4s as $m4a4)
       <div class="weapon-bg">
         <div class="weapon-name">{{ $m4a4->name }}</div>
         <div class="{{ $m4a4->quality }} quality name">{{ $m4a4->quality }} Rifle</div>
         <img src="{{ asset($m4a4->image) }}" alt="">
          <a href="/m4a4" class="button name">all {{ $m4a4->type }}</a>
       </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($scar20s as $scar20)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $scar20->name }}</div>
           <div class="{{ $scar20->quality }} quality name">{{ $scar20->quality }} Rifle</div>
           <img src="{{ asset($scar20->image) }}" alt="">
           <a href="/scar20" class="button name">all scar-20s</a>
         </div>
       @endforeach
     </div>
   </div>
     <div class="row">
     <div class="col-4 category">
       @foreach ($sg553s as $sg553)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $sg553->name }}</div>
           <div class="{{ $sg553->quality }} quality name">{{ $sg553->quality }} Rifle</div>
           <img src="{{ asset($sg553->image) }}" alt="">
           <a href="/sg553" class="button name">all sg-553s</a>
         </div>
       @endforeach
     </div>
     <div class="col-4 category">
       @foreach ($ssg08s as $ssg08)
         <div class="weapon-bg">
           <div class="weapon-name">{{ $ssg08->name }}</div>
           <div class="{{ $ssg08->quality }} quality name">{{ $ssg08->quality }} Rifle</div>
           <img src="{{ asset($ssg08->image) }}" alt="">
           <a href="/ssg08" class="button name">all {{ $ssg08->type }}s</a>
         </div>
       @endforeach
     </div>
   </div>
 </div>
</div>
</div>

<div class="row">
 <div class="col-12 category">
     <div class="row">
       <div class="col-2 category">
         @foreach ($cz75s as $cz75)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $cz75->name }}</div>
             <div class="{{ $cz75->quality }} quality name">{{ $cz75->quality }} Pistol</div>
             <img src="{{ asset($cz75->image) }}" alt="">
             <a href="/cz75" class="button name">all CZ75-Auto</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($deagles as $deagle)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $deagle->name }}</div>
             <div class="{{ $deagle->quality }} quality name">{{ $deagle->quality }} Pistol</div>
             <img src="{{ asset($deagle->image) }}" alt="">
             <a href="/deagle" class="button name">all desert eagle</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($duals as $dual)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $dual->name }}</div>
             <div class="{{ $dual->quality }} quality name">{{ $dual->quality }} Pistol</div>
             <img src="{{ asset($dual->image) }}" alt="">
             <a href="/dual" class="button name">all {{ $dual->type }} berettas</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($fivesevens as $fiveseven)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $fiveseven->name }}</div>
             <div class="{{ $fiveseven->quality }} quality name">{{ $fiveseven->quality }} Pistol</div>
             <img src="{{ asset($fiveseven->image) }}" alt="">
             <a href="/fiveseven" class="button name">all Five-SeveN</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($glocks as $glock)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $glock->name }}</div>
             <div class="{{ $glock->quality }} quality name">{{ $glock->quality }} Pistol</div>
             <img src="{{ asset($glock->image) }}" alt="">
             <a href="/glock" class="button name">all {{ $glock->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($p2000s as $p2000)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $p2000->name }}</div>
             <div class="{{ $p2000->quality }} quality name">{{ $p2000->quality }} Pistol</div>
             <img src="{{ asset($p2000->image) }}" alt="">
             <a href="/p2000" class="button name">all {{ $p2000->type }}s</a>
           </div>
         @endforeach
       </div>
     </div>
     <div class="row">
       <div class="col-2 category">
         @foreach ($p250s as $p250)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $p250->name }}</div>
             <div class="{{ $p250->quality }} quality name">{{ $p250->quality }} Pistol</div>
             <img src="{{ asset($p250->image) }}" alt="">
             <a href="/p250" class="button name">all {{ $p250->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($r8s as $r8)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $r8->name }}</div>
             <div class="{{ $r8->quality }} quality name">{{ $r8->quality }} Pistol</div>
             <img src="{{ asset($r8->image) }}" alt="">
             <a href="/r8" class="button name">all {{ $r8->type }} revolvers</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($tec9s as $tec9)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $tec9->name }}</div>
             <div class="{{ $tec9->quality }} quality name">{{ $tec9->quality }} Pistol</div>
             <img src="{{ asset($tec9->image) }}" alt="">
             <a href="/tec9" class="button name">all {{ $tec9->type }}s</a>
           </div>
         @endforeach
       </div>
       <div class="col-2 category">
         @foreach ($uspss as $usps)
           <div class="weapon-bg">
             <div class="weapon-name">{{ $usps->name }}</div>
             <div class="{{ $usps->quality }} quality name">{{ $usps->quality }} Pistol</div>
             <img src="{{ asset($usps->image) }}" alt="">
             <a href="/usps" class="button name">all usp-s</a>
           </div>
         @endforeach
       </div>
     </div>
</div>
</div>

<div class="row">
  <div class="col-6 category">
    <div class="row">
      <div class="col-4 category">
        @foreach ($mac10s as $mac10)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $mac10->name }}</div>
            <div class="{{ $mac10->quality }} quality name">{{ $mac10->quality }} SMG</div>
            <img src="{{ asset($mac10->image) }}" alt="">
            <a href="/mac10" class="button name">all mac-10s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($mp7s as $mp7)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $mp7->name }}</div>
            <div class="{{ $mp7->quality }} quality name">{{ $mp7->quality }} SMG</div>
            <img src="{{ asset($mp7->image) }}" alt="">
            <a href="/mp7" class="button name">all mp7s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($mp9s as $mp9)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $mp9->name }}</div>
            <div class="{{ $mp9->quality }} quality name">{{ $mp9->quality }} SMG</div>
            <img src="{{ asset($mp9->image) }}" alt="">
            <a href="/mp9" class="button name">all {{ $mp9->type }}s</a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="row">
      <div class="col-4 category">
        @foreach ($ppbizons as $ppbizon)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $ppbizon->name }}</div>
            <div class="{{ $ppbizon->quality }} quality name">{{ $ppbizon->quality }} SMG</div>
            <img src="{{ asset($ppbizon->image) }}" alt="">
            <a href="/ppbizon" class="button name">all pp-bizons</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($p90s as $p90)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $p90->name }}</div>
            <div class="{{ $p90->quality }} quality name">{{ $p90->quality }} SMG</div>
            <img src="{{ asset($p90->image) }}" alt="">
            <a href="/p90" class="button name">all p90s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($ump45s as $ump45)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $ump45->name }}</div>
            <div class="{{ $ump45->quality }} quality name">{{ $ump45->quality }} SMG</div>
            <img src="{{ asset($ump45->image) }}" alt="">
            <a href="/ump45" class="button name">all ump-45s</a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-6 category">
    <div class="row">
      <div class="col-4 category">
        @foreach ($mag7s as $mag7)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $mag7->name }}</div>
            <div class="{{ $mag7->quality }} quality name">{{ $mag7->quality }} SMG</div>
            <img src="{{ asset($mag7->image) }}" alt="">
            <a href="/mag7" class="button name">all mag-7s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($novas as $nova)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $nova->name }}</div>
            <div class="{{ $nova->quality }} quality name">{{ $nova->quality }} SMG</div>
            <img src="{{ asset($nova->image) }}" alt="">
            <a href="/nova" class="button name">all novas</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($sawedoffs as $sawedoff)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $sawedoff->name }}</div>
            <div class="{{ $sawedoff->quality }} quality name">{{ $sawedoff->quality }} SMG</div>
            <img src="{{ asset($sawedoff->image) }}" alt="">
            <a href="/sawedoff" class="button name">all sawed-offs</a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="row">
      <div class="col-4 category">
        @foreach ($xm1014s as $xm1014)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $xm1014->name }}</div>
            <div class="{{ $xm1014->quality }} quality name">{{ $xm1014->quality }} SMG</div>
            <img src="{{ asset($xm1014->image) }}" alt="">
            <a href="/xm1014" class="button name">all xm1014s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($m249s as $m249)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $m249->name }}</div>
            <div class="{{ $m249->quality }} quality name">{{ $m249->quality }} SMG</div>
            <img src="{{ asset($m249->image) }}" alt="">
            <a href="/m249" class="button name">all M249s</a>
          </div>
        @endforeach
      </div>
      <div class="col-4 category">
        @foreach ($negevs as $negev)
          <div class="weapon-bg">
            <div class="weapon-name">{{ $negev->name }}</div>
            <div class="{{ $negev->quality }} quality name">{{ $negev->quality }} SMG</div>
            <img src="{{ asset($negev->image) }}" alt="">
            <a href="/negev" class="button name">all negevs</a>
          </div>
        @endforeach
      </div>
    </div>
    </div>
  </div>
</div>
<div class="name">
  <a href="/">HOME</a> |
  <a href="/vote">VOTE</a>
</div>
   </div>
</div>
@endsection
