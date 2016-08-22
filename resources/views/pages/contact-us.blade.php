@extends('layouts.app', ['bodyClass' => 'home', 'headerImage' => true])

@section('content')

<!-- contact page start -->
<section class="contact">
    <div class="contact-forms">
        <div class="container">
          <h4>Contact Us</h4>
          <div class="row">
            <div class="col-sm-6">
                <div class="contact-office">
                   <p>
                       <strong>Himalayan Corporation</strong>
                       <br>
                        <ins>4480 Chennault Beach Road </ins>
                        <br> 
                        <ins>Mukilteo, WA 98275</ins>
                        <br>
                        <strong>toll-free :</strong>
                        <ins>1.855.414.5153</ins>
                        <br>
                       <strong>fax :</strong> 
                       <ins>206.632.0177</ins>
                       <br>
                         <strong>Sales/Orders/Returns : </strong>
                         <ins>Sales@HimalayanDogChew.com</ins>
                       <br>
                       <strong> Vendors :</strong> 
                        <ins>Vendors@HimalayanDogChew.com</ins>
                        <br>
                         <strong>Marketing/Donations :</strong> 
                         <ins> Marketing@HimalayanDogChew.com</ins>
                         <br>
                        <strong>For Local Employment/HR : </strong>
                        <ins>Human.Resource@HimalayanDogChew.com</ins>
                        <br>
                         <strong>General Inquiries :</strong>
                         <ins>Info@HimalayanDogChew.com</ins> 
                        <br>
                        <strong>Customer Service :</strong>
                        <ins>customerservice@himalayandogchew.com</ins> 
                   </p>
                </div>
            </div>
            <div class="col-sm-6">
               <div class="form-wrapper">
                 <form action="<?= route('mail.contact') ?>" method="post">
                    {!! csrf_field() !!}
                  <div class="form-group col-sm-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                  </div>
                   <div class="form-group col-sm-6">
                    <label for="number">Number</label>
                    <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="name_of_inquiry">Name Of Inquiry</label>
                    <input type="text" class="form-control" id="name_of_inquiry" name="name_of_inquiry" placeholder="Name Of Inquiry">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="description">Your Message</label>
                   <textarea name="description" id="description" placeholder="Your Message">
                   </textarea>
                  </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
               </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- contact page end -->

@endsection