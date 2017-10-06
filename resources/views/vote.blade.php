@extends('main')

@section('content')
<div class="head">
  <h1>SKINRANK</h1>
</div>
      <div class="container" style="text-align:center">
        <div class="disclaimer">
          <h2>Which skin is hotter ? Click to choose</h2>
        </div>
        <div id="vote">
          <div class="row vote">
            <div class="col-6 weapon-bg weapon-bg-vote" >
                <div class="weapon-name-vote">{{ $weapon1->name }}</div>
                <div class="{{ $weapon1->quality }} quality quality-vote name-vote">{{ $weapon1->quality }} {{ ucfirst($weapon1->category) }}</div>
                <img src="{{ asset($weapon1->image) }}" alt="weapon">
                <div class="row elo name" id="elo1">
                  <span style="float:left">Elo : </span>
                  {{ $weapon1->elo }}
                  <span id="w1up" style="display:none"> -> </span>
                  <span id="w1scoreup" style="display:none"></span>
                  <span id="w1scoredown" style="display:none"></span>
                </div>
                <form id="fw1" method=# class="name">
                  <input type="hidden" id="w1" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" id="w2" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" id="win" value="weapon1" />
                  <button type="submit" id="btn1" class="button vote-btn">Vote for {{ $weapon1->name }}</button>
                </form>
            </div>
            <div class="col-6 weapon-bg weapon-bg-vote" style="float:right">
                <div class="weapon-name-vote">{{ $weapon2->name }}</div>
                <div class="{{ $weapon2->quality }} quality quality-vote name-vote">{{ $weapon2->quality }} {{ ucfirst($weapon2->category) }}</div>
                <img src="{{ asset($weapon2->image) }}" alt="">
                <div class="row elo name" id="elo2">
                  <span style="float:left">Elo : </span>
                  {{ $weapon2->elo }}
                  <span id="w2up" style="display:none"> -> </span>
                  <span id="w2scoreup" style="display:none"></span>
                  <span id="w2scoredown" style="display:none"></span>
                </div>
                <form id="fw2" method=# class="name">
                  <input type="hidden" id="w12" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" id="w22" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" id="win2" value="weapon2" />
                  <button type="submit" id="btn2" class="button vote-btn">Vote for {{ $weapon2->name }}</button>
                </form>
            </div>
          </div>
          <div class="row" style="margin-top:20px;margin-bottom:20px">
            <div class="col-4"></div>
            <div class="col-4 name" style="text-align:middle;margin:0 auto;">
              <form id="fw3" method=#>
                <input type="hidden" id="w13" name="weapon1" value="{{ $weapon1->id }}" />
                <input type="hidden" id="w23" name="weapon2" value="{{ $weapon2->id }}" />
                <button type="submit" id="btn3" class="button vote-btn">I don't like these skins</button>
              </form>
            </div>
            <div class="col-4"></div>
          </div>
        </div>
      </div>
      <div style="text-align:center" class="name">
        <a href="/">HOME</a>
      </div>
      @endsection
