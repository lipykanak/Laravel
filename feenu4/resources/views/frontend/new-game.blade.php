@extends('frontend.Layouts.main')
@section('main')
<div class="container">
        <div class="nit-more-menu">
            <div class="container">
                <ul>
                    <li><a href="{{url('/most-played')}}"> most played</a></li>
                    <li><a href="{{url('/most-recommend')}}">most recommended </a></li>
                    <li><a href="{{url('/new-game')}}">NEW</a></li>
                </ul>
             </div>
         </div>
        <div class="nit-content-new">
            <ul>
               
               
               
              </ul>
        </div>
@endsection