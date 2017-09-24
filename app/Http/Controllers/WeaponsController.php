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
      $ak47s = Weapon::orderBy('elo', 'desc')->where('type','ak47')->take(1)->get();
      $m4a1ss = Weapon::orderBy('elo', 'desc')->where('type','m4a1s')->take(1)->get();
      $m4a4s = Weapon::orderBy('elo', 'desc')->where('type','m4a4')->take(1)->get();
      $awps = Weapon::orderBy('elo', 'desc')->where('type','awp')->take(1)->get();
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
      return view('home', [
        'ak47s' => $ak47s, 'm4a1ss' => $m4a1ss, 'm4a4s' => $m4a4s, 'awps' => $awps,
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
        $w1 = Weapon::find($request->weapon1);
        $w2 = Weapon::find($request->weapon2);
        $weapon1 = new Player($w1->elo);
        $weapon2 = new Player($w2->elo);

        $match = new Match($weapon1, $weapon2);
        if($request->win=="weapon1"){
          $match->setScore(1,0)->setK(32)->count();
        }
        if($request->win=="weapon2"){
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

}
