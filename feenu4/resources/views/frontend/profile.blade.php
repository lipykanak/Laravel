@php
      $users =App\Models\User::where('user_type',2)->orderBy('id','DESC')->get();
@endphp
@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">
        <aside class="col-md-8">
            @foreach($users as $user)
            @endforeach
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
             

                </div>
               <!-- start slider-->
               
               <div class="nit-related gGame">
                <h6 class="lightBlue">Last Played Games</h6>
           <div class="owl-carousel lastPlayed-carousel owl-theme">
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                     <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                     <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                 
                 
               </div>
       
               <h6 style="color:rgb(240, 199, 20)">Favorite Games</h6>
               <div class="owl-carousel fvt-carousel owl-theme">
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                      <div class="item">
                       <a href="game.html"><img src="{{('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                 
               </div>
           </div>

           <!-- end slider-->
            </div>
        </aside>

    </div>

@endsection