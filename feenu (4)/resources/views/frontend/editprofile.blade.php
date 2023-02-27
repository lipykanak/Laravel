@php
      $users =App\Models\User::where('user_type',2)->orderBy('id','DESC')->get();
@endphp
@extends('frontend.Layouts.main')
@section('main')
<main>
    <div class="nit-card">      
        <aside class="col-md-8">        
                 
                   <div class="profile-card-body">
                @foreach($users as $user)
                        
                    <form method="post" action="#">
                          
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label ><h2>Change Profile</h2></label>
                                </div>
                                <div class="form-group col-md-6">
                                  
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="View-Profile-button"><a href="/profile"> View Profile</a></button>
                                </div>
                            </div>
                          
                            <div class="form-group">
                            <label class="required">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname" name="firstname" value="{{'firstname'}}">
                           
                            </div>
                            <div class="form-group">                              
                                <label class="required">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Latstname" name="lastname" value="{{'lastname'}}" >
                               
                            </div>
                            <div class="form-group">
                              <label class="required">User Name</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Username" name="name" value="{{'name'}}" >
                              
                           </div>
                           <div class="form-group">
                            <label class="required">About me</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="About Your Self" name="about"  value="{{'about'}}" >
                         </div>
                           <div class="form-group">
                            <label class="tin"><img src="{{asset('frontend/images/more/profile.png')}}"></label>
                         
                         </div>
                         <div class="form-group">
                            <input type="text" class="form-control" id="inputAddress"  name="image"   >
                            <button type="file" class="profile-button"> Upload Image</button>
                         
                         </div>
                       
                        <div class="form-group">
                            <label class="required">Gender</label><br>
                          
                                <input type="Radio" name="gender" value="Male" required><label >Male</label>
                                 <input type="Radio" name="gender" value="Female">    <label >Female </label>
                                 
                            
                        </div> 
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input class="form-control" placeholder="Email..." type="email" name="email" value="{{'email'}}" >
                            </div> <!-- form-group// -->
                        <div class="form-group">                              
                            <label >Facebook Profile Link</label>
                            <input type="text" class="form-control" id="fblink" placeholder="Facebook..." name="fblink" value="{{'fblink'}}">
                        </div>
                        <div class="form-group">                              
                            <label >Twitter Profile Link</label>
                            <input type="text" class="form-control" id="twlink" placeholder="Twitter..." name="twlink" value="{{'twlink'}}">
                        </div>
                        <div class="form-group">                              
                            <label >Instagram Profile Link</label>
                            <input type="text" class="form-control" id="instalink" placeholder="Instagram..." name="instalink" value="{{'instalink'}}">
                        </div>
                       
                        <div class="form-group">
                            <label >Profile Show</label><br>
                        
                                <input type="Radio" name="radio2text" value="Male" required><label >Public</label>
                                <input type="Radio" name="radio2text" value="Female">    <label >Private </label>
                            
                        </div>                        
                       
                       
                        <div class="form-group">
                            <button type="submit" class="change-password-button"><a href="{{route('changepassword')}}"> Change Password</a></button>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="profile-submit-button"> Save</button>
                            </div>
                            <div class="form-group col-md-4">
                              
                            </div>
                            
                        </div>
                       
                    </form>
             @endforeach
                                
                   </div>
               </div>
             </aside>
 </div>        
            
</main>
@endsection
