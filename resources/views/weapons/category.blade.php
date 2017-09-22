@extends('main')

@section('content')
  @foreach($weapons as $weapon)
  <div class="container weapons">
    <h1 style="text-transform:uppercase">All {{ $weapon->type }}s</h1>
    <a href="/" type="button">Return Home</a>
        <div class="row">
        @foreach ($weapons as $weapon)
          <!-- <div class="col-4"> -->
          <div class="col-3">
            <p>{{ $weapon->name }}</p>
            <img src="{{ asset($weapon->image) }}" alt=""></p>
            <p>{{ $weapon->elo }}</p>
          </div>
          <!--</div>-->
           @if ($loop->iteration % 4 == 0)
            </div>
            <div class="row">
          @endif
        @endforeach
        </div>
<a href="/vote" type="button">Vote for your favorite skins</a>
  @endforeach
@endsection
