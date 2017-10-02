@extends('main')

@section('content')
<div class="head">
  <h1>SKINRANK</h1>
</div>
      <div class="container" style="text-align:center">
        <div class="disclaimer">
          <h2>Which skin is hotter ? Click to choose</h2>
        </div>
        <div class="row vote" id="vote">
          <div class="col-5 weapon-bg weapon-bg-vote" >
              <div class="name name-vote">{{ $weapon1->name }}</div>
              <div class="{{ $weapon1->quality }} quality quality-vote">{{ $weapon1->quality }} {{ ucfirst($weapon1->category) }}</div>
              <img src="{{ asset($weapon1->image) }}" alt="">
              <div class="row elo" id="elo1">
                <span style="float:left">Elo : </span>
                {{ $weapon1->elo }}
                <span id="w1up" style="display:none"> -> </span>
                <span id="w1scoreup" style="display:none"></span>
                <span id="w1scoredown" style="display:none"></span>
              </div>
              <form id="fw1" method=#>
                <input type="hidden" id="w1" name="weapon1" value="{{ $weapon1->id }}" />
                <input type="hidden" id="w2" name="weapon2" value="{{ $weapon2->id }}" />
                <input type="hidden" id="win" value="weapon1" />
                <button type="submit" id="btn1" class="button vote-btn">Vote for {{ $weapon1->name }}</button>
              </form>
          </div>
            <div class="col-1" style="text-align:right;margin-right:0">

            </div>

          <div class="col-5 weapon-bg weapon-bg-vote" style="float:right">
              <div class="name name-vote">{{ $weapon2->name }}</div>
              <div class="{{ $weapon2->quality }} quality quality-vote">{{ $weapon2->quality }} {{ ucfirst($weapon2->category) }}</div>
              <img src="{{ asset($weapon2->image) }}" alt="">
              <div class="row elo" id="elo2">
                <span style="float:left">Elo : </span>
                {{ $weapon2->elo }}
                <span id="w2up" style="display:none"> -> </span>
                <span id="w2scoreup" style="display:none"></span>
                <span id="w2scoredown" style="display:none"></span>
              </div>

              <form id="fw2" method=#>
                <input type="hidden" id="w12" name="weapon1" value="{{ $weapon1->id }}" />
                <input type="hidden" id="w22" name="weapon2" value="{{ $weapon2->id }}" />
                <input type="hidden" id="win2" value="weapon2" />
                <button type="submit" id="btn12" class="button vote-btn">Vote for {{ $weapon2->name }}</button>
              </form>
<!--
              <form id="weapon2" method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button vote-btn">Vote for {{ $weapon2->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon2" />
              </form>
            -->
          </div>


        </div>
    <a href="/">HOME</a> |
    <a href="/vote" style="font-weight:bold">VOTE</a>


      </div>
@endsection
