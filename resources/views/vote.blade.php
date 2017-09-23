@extends('main')

@section('content')
      <div class="container" style="text-align:center">
        <div class="head" style="padding-bottom:15px">
            <h1>Vote for the best skin</h1>
            <h3>Support your favorite skins !</h3>
            <a href="/" class="button">Go back to Home</a>
        </div>

        <div class="row vote">
          <div class="col-6 weapon-bg">
              {{ $weapon1->name }}
              <img src="{{ asset($weapon1->image) }}" alt=""></p>
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="button">Vote for {{ $weapon1->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon1" />
              </form>
          </div>
          <div class="col-6 weapon-bg">
              {{ $weapon2->name }}
              <img src="{{ asset($weapon2->image) }}" alt=""></p>
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
