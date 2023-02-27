@php
      $users =App\Models\User::where('user_type',2)->orderBy('id','DESC')->get();
@endphp
@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">
        <aside class="col-md-8">
            @foreach($users as $user)
            <div class="profile-card-body">
                 <a href="{{route('editprofile')}}"><i class="fas fa-edit" placeholder="edit_profile"></i></a>
               
                <div class="row">
                    <div class="col-md-4">
                        <label><a href="https://placeholder.com"><img src="https://via.placeholder.com/200"></a></label>
                    </div>
                 
                    <div class=" col-md-8">
                        <h6>{{$user->firstname}} {{$user->lastname}}</h6>
                        <h7> <b>About me</b></h7>
                        <p>{{$user->about}}</p>
                        <h7><b>Gender - </b> {{$user->gender}}</h7><br/>
                        <h7><b>Email  -    </b>{{$user->email}}</h7>
                        


                    </div>
                    @endforeach

                </div>
                <!-- start slider-->

                <div class="nit-related nit-related-profile">
                    <div class="owl-carousel related-carousel1 owl-theme">
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="owl-carousel related-carousel2 owl-theme">
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="nit-flex">
                                <li><a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt="">
                                <figcaption>ROAD</figcaption>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- end slider-->

            </div>
        </aside>

    </div>

@endsection