@extends('main')
@section('content')
<div class="head">
  <h1>SKINRANK</h1>
</div>
  <div class="container weapons">
    <div class="disclaimer">
      <h2>All {{ $weapons[0]->type }}s ranked by elo points.<br/><a href="/vote">Support</a> your favorite skins or
      return <a href="/">home</a></h2>
    </div>
        <div class="row vote">
        @foreach ($weapons as $weapon)
          <!-- <div class="col-4"> -->
          <div class="col-3 weapon-bg-category">
            @if ($loop->iteration == 1)<div class="top-rank first name">#1</div>@endif
            @if ($loop->iteration == 2)<div class="top-rank second name">#2</div>@endif
            @if ($loop->iteration == 3)<div class="top-rank third name">#3</div>@endif
            @if ($loop->iteration == 4)<div class="top-rank fourth name">#4</div>@endif
            @if ($loop->iteration == 5)<div class="top-rank fourth name">#5</div>@endif
            @if ($loop->iteration == 6)<div class="top-rank fourth name">#6</div>@endif
            @if ($loop->iteration == 7)<div class="top-rank fourth name">#7</div>@endif
            @if ($loop->iteration == 8)<div class="top-rank fourth name">#8</div>@endif
            @if ($loop->iteration == 9)<div class="top-rank fourth name">#9</div>@endif
            @if ($loop->iteration == 10)<div class="top-rank fourth name">#10</div>@endif
            @if ($loop->iteration == 11)<div class="top-rank fourth name">#11</div>@endif
            @if ($loop->iteration == 12)<div class="top-rank fourth name">#12</div>@endif
            @if ($loop->iteration == 13)<div class="top-rank fourth name">#13</div>@endif
            @if ($loop->iteration == 14)<div class="top-rank fourth name">#14</div>@endif
            @if ($loop->iteration == 15)<div class="top-rank fourth name">#15</div>@endif
            @if ($loop->iteration == 16)<div class="top-rank fourth name">#16</div>@endif
            @if ($loop->iteration == 17)<div class="top-rank fourth name">#17</div>@endif
            @if ($loop->iteration == 18)<div class="top-rank fourth name">#18</div>@endif
            @if ($loop->iteration == 19)<div class="top-rank fourth name">#19</div>@endif
            @if ($loop->iteration == 20)<div class="top-rank fourth name">#20</div>@endif
            @if ($loop->iteration == 21)<div class="top-rank fourth name">#21</div>@endif
            @if ($loop->iteration == 22)<div class="top-rank fourth name">#22</div>@endif
            @if ($loop->iteration == 23)<div class="top-rank fourth name">#23</div>@endif
            @if ($loop->iteration == 24)<div class="top-rank fourth name">#24</div>@endif
            @if ($loop->iteration == 25)<div class="top-rank fourth name">#25</div>@endif
            @if ($loop->iteration == 26)<div class="top-rank fourth name">#26</div>@endif
            @if ($loop->iteration == 27)<div class="top-rank fourth name">#27</div>@endif
            @if ($loop->iteration == 28)<div class="top-rank fourth name">#28</div>@endif
            @if ($loop->iteration == 29)<div class="top-rank fourth name">#29</div>@endif
            @if ($loop->iteration == 30)<div class="top-rank fourth name">#30</div>@endif
            <div class="weapon-name">{{ $weapon->name }}</div>
            <div class="{{ $weapon->quality }} quality name">{{ $weapon->quality }} {{ ucfirst($weapon->category) }}</div>
            <img src="{{ asset($weapon->image) }}" alt="weapon" class="name">
            <div class="name">Elo : {{ $weapon->elo }}</div>
          </div>
          <!--</div>-->
           @if ($loop->iteration % 4 == 0)
            </div>
            <div class="row vote">
          @endif
        @endforeach
        </div>
        <div class="name">
          <a href="/">HOME</a> |
          <a href="/vote">VOTE</a>
        </div>
      </div>
@endsection
