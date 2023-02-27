@extends('frontend.Layouts.main')
@section('main')
   <div class="nit-card">      
        <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                    <h4 ><img src="{{url('frontend/images/icons/Message.png')}}"></h4>
                    <h2 >Contact Us</h2>
                    <h3>For any quation of feedback use the form below or you can reach us at</h3>
                    <h2 >Support@Feenu.com</h2>
                   
                   <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="firstname" class="required">First Name</label>
                              <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                              <label class="required">Email</label>
                              <input name="" class="form-control" placeholder="Email" type="email">
                              </div> <!-- form-group// -->
                          </div>
                          <div class="form-group">
                            <label for="subject" class="required">Subject</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
                          </div>
                         
                     
                       <div class="form-group">
                       <label class="required">Message</label>
                       <textarea class="form-control" id="message" name="Message" rows="4" cols="50" placeholder="Message"></textarea>
                       </div> <!-- form-group// -->
                     
                       <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block"> SUBMIT </button>
                      </form>
                                
                   </div>
               </div>
             </aside>
 </div> 
 @endsection       
            
