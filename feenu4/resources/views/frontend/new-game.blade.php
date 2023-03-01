@extends('frontend.Layouts.main')
@section('main')
<div class="container">
        <div class="nit-more-menu">
            <div class="container">
                <ul>
                    <li><a href="{{url('/most-played')}}"> most played</a></li>
                    <li><a href="{{url('/most-recommend')}}">most recommended </a></li>
                    <li><a href="{{ route('newgame')}}">NEW</a></li>
                </ul>
             </div>
         </div>
        <div class="nit-content-new">
            <ul>
                @foreach ($newGames1 as $newGame)
                            <li class="newGame"><a href="{{ route('game-detail', ['gameId' => $newGame->game_id]) }}"><img
                                        src="{{ asset($newGame->game_thumb) }}" alt="">
                                    <figcaption>{{ $newGame->shortName() }}</figcaption>
                                </a>
                            </li>
                @endforeach
               
              </ul>
        </div>
@endsection