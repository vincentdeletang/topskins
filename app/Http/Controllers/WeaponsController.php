<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weapon;
use DB;

use Zelenin\Elo\Player;
use Zelenin\Elo\Match;

class WeaponsController extends Controller
{

    public function home(){
      /* rifles */
      $ak47s = Weapon::orderBy('elo', 'desc')->where('type','ak47')->take(1)->get();
      $m4a1ss = Weapon::orderBy('elo', 'desc')->where('type','m4a1s')->take(1)->get();
      $m4a4s = Weapon::orderBy('elo', 'desc')->where('type','m4a4')->take(1)->get();
      $awps = Weapon::orderBy('elo', 'desc')->where('type','awp')->take(1)->get();
      $augs = Weapon::orderBy('elo', 'desc')->where('type','aug')->take(1)->get();
      $famass = Weapon::orderBy('elo', 'desc')->where('type','famas')->take(1)->get();
      $g3sg1s = Weapon::orderBy('elo', 'desc')->where('type','g3sg1')->take(1)->get();
      $galils = Weapon::orderBy('elo', 'desc')->where('type','galil')->take(1)->get();
      $scar20s = Weapon::orderBy('elo', 'desc')->where('type','scar20')->take(1)->get();
      $sg553s = Weapon::orderBy('elo', 'desc')->where('type','sg553')->take(1)->get();
      $ssg08s = Weapon::orderBy('elo', 'desc')->where('type','ssg08')->take(1)->get();
      /* knives */
      $bayonets = Weapon::orderBy('elo', 'desc')->where('type','bayonet')->take(1)->get();
      $bowies = Weapon::orderBy('elo', 'desc')->where('type','bowie')->take(1)->get();
      $butterflies = Weapon::orderBy('elo', 'desc')->where('type','butterfly')->take(1)->get();
      $falchions = Weapon::orderBy('elo', 'desc')->where('type','falchion')->take(1)->get();
      $flips = Weapon::orderBy('elo', 'desc')->where('type','flip')->take(1)->get();
      $guts = Weapon::orderBy('elo', 'desc')->where('type','gut')->take(1)->get();
      $huntsmans = Weapon::orderBy('elo', 'desc')->where('type','huntsman')->take(1)->get();
      $karambits = Weapon::orderBy('elo', 'desc')->where('type','karambit')->take(1)->get();
      $m9s = Weapon::orderBy('elo', 'desc')->where('type','m9')->take(1)->get();
      $shadowdaggers = Weapon::orderBy('elo', 'desc')->where('type','shadowdaggers')->take(1)->get();
      $shadowdaggers = Weapon::orderBy('elo', 'desc')->where('type','shadowdaggers')->take(1)->get();
      /* pistols */
      $cz75s = Weapon::orderBy('elo', 'desc')->where('type','cz75')->take(1)->get();
      $deagles = Weapon::orderBy('elo', 'desc')->where('type','deagle')->take(1)->get();
      $duals = Weapon::orderBy('elo', 'desc')->where('type','dual')->take(1)->get();
      $fivesevens = Weapon::orderBy('elo', 'desc')->where('type','fiveseven')->take(1)->get();
      $glocks = Weapon::orderBy('elo', 'desc')->where('type','glock')->take(1)->get();
      $p2000s = Weapon::orderBy('elo', 'desc')->where('type','p2000')->take(1)->get();
      $p250s = Weapon::orderBy('elo', 'desc')->where('type','p250')->take(1)->get();
      $r8s = Weapon::orderBy('elo', 'desc')->where('type','r8')->take(1)->get();
      $tec9s = Weapon::orderBy('elo', 'desc')->where('type','tec9')->take(1)->get();
      $uspss = Weapon::orderBy('elo', 'desc')->where('type','usps')->take(1)->get();
      /* smgs */
      $mac10s = Weapon::orderBy('elo', 'desc')->where('type','mac10')->take(1)->get();
      $mp7s = Weapon::orderBy('elo', 'desc')->where('type','mp7')->take(1)->get();
      $mp9s = Weapon::orderBy('elo', 'desc')->where('type','mp9')->take(1)->get();
      $ppbizons = Weapon::orderBy('elo', 'desc')->where('type','ppbizon')->take(1)->get();
      $p90s = Weapon::orderBy('elo', 'desc')->where('type','p90')->take(1)->get();
      $ump45s = Weapon::orderBy('elo', 'desc')->where('type','ump45')->take(1)->get();
      /* heavy */
      $mag7s = Weapon::orderBy('elo', 'desc')->where('type','mag7')->take(1)->get();
      $novas = Weapon::orderBy('elo', 'desc')->where('type','nova')->take(1)->get();
      $sawedoffs = Weapon::orderBy('elo', 'desc')->where('type','sawedoff')->take(1)->get();
      $xm1014s = Weapon::orderBy('elo', 'desc')->where('type','xm1014')->take(1)->get();
      $m249s = Weapon::orderBy('elo', 'desc')->where('type','m249')->take(1)->get();
      $negevs = Weapon::orderBy('elo', 'desc')->where('type','negev')->take(1)->get();

      return view('home', [
        /* pistols */
        'cz75s' => $cz75s, 'deagles' => $deagles, 'duals' => $duals, 'fivesevens' => $fivesevens, 'glocks' => $glocks, 'p2000s' => $p2000s,
        'p250s' => $p250s, 'r8s' => $r8s, 'tec9s' => $tec9s, 'uspss' => $uspss,
        /* smgs */
        'mac10s' => $mac10s, 'mp7s' => $mp7s, 'mp9s' => $mp9s, 'ppbizons' => $ppbizons, 'p90s' => $p90s, 'ump45s' => $ump45s,
        /* heavy */
        'mag7s' => $mag7s, 'novas' => $novas, 'sawedoffs' => $sawedoffs,'xm1014s' => $xm1014s, 'm249s', $m249s, 'negevs' => $negevs,
        /* rifles */
        'ak47s' => $ak47s, 'm4a1ss' => $m4a1ss, 'm4a4s' => $m4a4s, 'awps' => $awps, 'augs' => $augs, 'famass' => $famass, 'g3sg1s' => $g3sg1s,
        'galils' => $galils, 'scar20s' => $scar20s, 'sg553s' => $sg553s, 'ssg08s' => $ssg08s,
        /* knives */
        'karambits' => $karambits, 'bayonets' => $bayonets, 'bowies' => $bowies, 'butterflies' => $butterflies,
        'falchions' => $falchions, 'flips' => $flips, 'guts' => $guts, 'huntsmans' => $huntsmans,
        'm9s' => $m9s, 'shadowdaggers' => $shadowdaggers
    ]);
    }

    public function vote(){
      $w = Weapon::inRandomOrder()->take(1)->first();
      $weapon1 = Weapon::inRandomOrder()->where('type',$w->type)->first();
      $weapon2 = Weapon::inRandomOrder()->where('type',$w->type)->first();
      if($weapon2->id == $weapon1->id){
        $weapon2 = Weapon::inRandomOrder()->where('type',$w->type)->first();
      }
      return view('vote', ['weapon1' => $weapon1, 'weapon2' => $weapon2]);
    }

    public function storeVote(Request $request){
      if($request->isMethod('post')){
        $data = $request->all();
        $w1 = Weapon::find($data['weapon1']);
        $w2 = Weapon::find($data['weapon2']);
        $weapon1 = new Player($w1->elo);
        $weapon2 = new Player($w2->elo);

        $match = new Match($weapon1, $weapon2);
        if($data['win']=="weapon1"){
          $match->setScore(1,0)->setK(32)->count();
        }
        if($data['win']=="weapon2"){
          $match->setScore(0,1)->setK(32)->count();
        }
        $w1->elo = $weapon1->getRating();
        $w2->elo = $weapon2->getRating();
        $w1->save();
        $w2->save();
        return redirect()->back();
      }
    }

    public function showCategory($weapon){
      return view('weapons.category', ['weapons' => Weapon::orderBy('elo', 'desc')->where('type', $weapon)->get()]);
    }

    public function showWeapon($weaponId){
      $weapon = Weapon::find($weaponId);
      return view('weapons.single', ['weapon' => $weapon]);
    }

}
