@extends('main')
@section('content')
  <div class="container weapons">
    <div class="head" style="padding-bottom:50px">
      <h1 >All {{ $weapons[0]->type }}s</h1>
      <h3>All {{ $weapons[0]->type }}s ranked by elo points</h3>
      <a href="/vote" class="button">Vote for your favorite skins</a>
      <a href="/" class="button">Return Home</a>
    </div>
        <div class="row">
        @foreach ($weapons as $weapon)
          <!-- <div class="col-4"> -->
          <div class="col-2 weapon-bg">
            @if ($loop->iteration == 1)<div class="top-rank first">#1</div>@endif
            @if ($loop->iteration == 2)<div class="top-rank second">#2</div>@endif
            @if ($loop->iteration == 3)<div class="top-rank third">#3</div>@endif
            @if ($loop->iteration == 4)<div class="top-rank fourth">#4</div>@endif
            @if ($loop->iteration == 5)<div class="top-rank fourth">#5</div>@endif
            @if ($loop->iteration == 6)<div class="top-rank fourth">#6</div>@endif
            @if ($loop->iteration == 7)<div class="top-rank fourth">#7</div>@endif
            @if ($loop->iteration == 8)<div class="top-rank fourth">#8</div>@endif
            @if ($loop->iteration == 9)<div class="top-rank fourth">#9</div>@endif
            @if ($loop->iteration == 10)<div class="top-rank fourth">#10</div>@endif
            @if ($loop->iteration == 11)<div class="top-rank fourth">#11</div>@endif
            @if ($loop->iteration == 12)<div class="top-rank fourth">#12</div>@endif
            @if ($loop->iteration == 13)<div class="top-rank fourth">#13</div>@endif
            @if ($loop->iteration == 14)<div class="top-rank fourth">#14</div>@endif
            @if ($loop->iteration == 15)<div class="top-rank fourth">#15</div>@endif
            @if ($loop->iteration == 16)<div class="top-rank fourth">#16</div>@endif
            @if ($loop->iteration == 17)<div class="top-rank fourth">#17</div>@endif
            @if ($loop->iteration == 18)<div class="top-rank fourth">#18</div>@endif
            @if ($loop->iteration == 19)<div class="top-rank fourth">#19</div>@endif
            @if ($loop->iteration == 20)<div class="top-rank fourth">#20</div>@endif
            @if ($loop->iteration == 21)<div class="top-rank fourth">#21</div>@endif
            @if ($loop->iteration == 22)<div class="top-rank fourth">#22</div>@endif
            @if ($loop->iteration == 23)<div class="top-rank fourth">#23</div>@endif
            @if ($loop->iteration == 24)<div class="top-rank fourth">#24</div>@endif
            @if ($loop->iteration == 25)<div class="top-rank fourth">#25</div>@endif
            @if ($loop->iteration == 26)<div class="top-rank fourth">#26</div>@endif
            @if ($loop->iteration == 27)<div class="top-rank fourth">#27</div>@endif
            @if ($loop->iteration == 28)<div class="top-rank fourth">#28</div>@endif
            @if ($loop->iteration == 29)<div class="top-rank fourth">#29</div>@endif
            @if ($loop->iteration == 30)<div class="top-rank fourth">#30</div>@endif

            <p>{{ $weapon->name }}</p>
            <img src="{{ asset($weapon->image) }}" alt=""></p>
            <p>Elo : {{ $weapon->elo }}</p>
          </div>
          <!--</div>-->
           @if ($loop->iteration % 6 == 0)
            </div>
            <div class="row">
          @endif
        @endforeach
        </div>
<a href="/" type="button">Return Home</a>
@endsection
