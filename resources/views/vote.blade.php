@extends('main')

@section('content')
<div class="head">
  <h1>SKINRANK</h1>
  <a href="/" style="font-weight:bold">HOME</a> |
  <a href="/vote">VOTE</a>
</div>
      <div class="container" style="text-align:center">
        <div class="disclaimer">
          <h2>Which skin is hotter ? Click to choose</h2>
        </div>
        <div class="row vote">
          <div class="col-5 weapon-bg weapon-bg-vote">
              <div class="name name-vote">{{ $weapon1->name }}</div>
              <div class="{{ $weapon1->quality }} quality quality-vote">{{ $weapon1->quality }} {{ ucfirst($weapon1->category) }}</div>
              <img src="{{ asset($weapon1->image) }}" alt="">
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button vote-btn">Vote for {{ $weapon1->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon1" />
              </form>
          </div>
          <div class="col-5 weapon-bg weapon-bg-vote" style="float:right">
              <div class="name name-vote">{{ $weapon2->name }}</div>
              <div class="{{ $weapon2->quality }} quality quality-vote">{{ $weapon2->quality }} {{ ucfirst($weapon2->category) }}</div>
              <img src="{{ asset($weapon2->image) }}" alt="">
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button vote-btn">Vote for {{ $weapon2->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon2" />
              </form>
          </div>
        </div>
      </div>
@endsection
