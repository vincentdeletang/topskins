@extends('main')

@section('content')
      <div class="container" style="text-align:center">
        <h1>Vote for your favorite skins</h1>
        <div class="row weapons">
          <div class="col-5">
              {{ $weapon1->name }}
              <img src="{{ asset($weapon1->image) }}" alt=""></p>
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-sm btn-default">Vote for {{ $weapon1->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon1" />
              </form>
          </div>
          <div class="col-2">
            VS
          </div>
          <div class="col-5">
              {{ $weapon2->name }}
              <img src="{{ asset($weapon2->image) }}" alt=""></p>
              <form method="POST" action="/storeVote" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-sm btn-default">Vote for {{ $weapon2->name }}</button>
                  <input type="hidden" name="weapon1" value="{{ $weapon1->id }}" />
                  <input type="hidden" name="weapon2" value="{{ $weapon2->id }}" />
                  <input type="hidden" name="win" value="weapon2" />
              </form>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="/">Go back to Home</a>
          </div>
        </div>
      </div>
@endsection
