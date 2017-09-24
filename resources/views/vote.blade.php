@extends('main')

@section('content')
      <div class="container" style="text-align:center">
        <div class="head">
            <h1>Vote for the best skin</h1>
            <h4>Vote for you favorite skin between the two choices below !<br/>Or go back to <a href="/">Home</a> </h4>
        </div>
        <hr/>
        <div class="row vote">
          <div class="col-6 weapon-bg">
              <div class="name">{{ $weapon1->name }}</div>
              <img src="{{ asset($weapon1->image) }}" alt="">
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button">Vote for {{ $weapon1->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon1" />
              </form>
          </div>
          <div class="col-6 weapon-bg">
              <div class="name">{{ $weapon2->name }}</div>
              <img src="{{ asset($weapon2->image) }}" alt="">
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button">Vote for {{ $weapon2->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon2" />
              </form>
          </div>
        </div>
      </div>
@endsection
