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
      return view('home', ['weapons' => Weapon::orderBy('elo', 'desc')->where('type','karambit')->take(4)->get()]);
    }

    public function vote(){
      $weapon1 = Weapon::orderBy(DB::raw('RAND()'))->take(1)->first();
      $weapon2 = Weapon::orderBy(DB::raw('RAND()'))->take(1)->first();
      if($weapon2->id == $weapon1->id){
        $weapon2 = Weapon::orderBy(DB::raw('RAND()'))->take(1)->first();
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
      return view('weapons.category', ['weapons' => Weapon::orderBy('elo', 'desc')->where('type','karambit')->get()]);
    }

}
