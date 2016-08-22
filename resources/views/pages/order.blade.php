@extends('layouts.backend', ['bodyClass' => 'carrer'])

@section('content')

<!-- order section start -->
<section class="order-section">
    <h2>Order Form</h2>
    <p>Please Fill entire form to ensure prompt processing.</p>
    <div class="order-form">
        <div class="row">
            <div class="container">
                <form action="order_submit" method="get" accept-charset="utf-8">
                    <div class="order-form-wrapper">
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Contact Address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="phone Number">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="email" class="form-control" placeholder="email Address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Ein/Sale Tax #:">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Fax Number">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Shipping address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="card Holder Name"> 
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="CC/CH #:"> 
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <label for="exampleInputFile">Expire Date:</label>
                            <input type="date" class="form-control"> 
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Billing Address"> 
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" placeholder="Zip Code"> 
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 ">
                            <input type="radio" name="radio-group" id="first-choice" value="First Choice">
                            <label for="first-choice">Visa</label>
                            <input type="radio" name="radio-group" id="second-choice" value="second-choice">
                            <label for="second-choice">Master Card</label>
                            <input type="radio" name="radio-group" id="third-choice" value="third-choice">
                            <label for="third-choice">Am Ex</label>
                            <input type="radio" name="radio-group" id="fourth-choice" value="fourth-choice">
                            <label for="fourth-choice">Discover </label>
                            <input type="radio" name="radio-group" id="fifth-choice" value="fifth-choice">
                            <label for="fifth-choice">On file </label>
                            <input type="radio" name="radio-group" id="six-choice" value="six-choice">
                            <label for="six-choice">Net Terms </label>
                        </div>
                    </div>
                    <div class="package-form">
                        <h5>Package Product</h5>
                        <div class="table-wrapper">
                            <div class="table-responsive">
                              <table>
                                    <thead>
                                      <tr>
                                          <th>Recommended age of dog</th>
                                           <th>Product name</th>
                                            <th>Weight of product</th>
                                            <th>No of pcs</th>
                                            <th>Order Now</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>15lbs (7kg puppy bites)</td>
                                            <td>Royal Purple</td>
                                            <td >30-35 gm</td>
                                            <td>3 (mix with 33 g 033g 033 g)</td>
                                            <td>
                                                <select class="form-control">
                                                      <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>35lbs (15kg)</td>
                                            <td>Royal Green</td>
                                            <td>70 gm</td>
                                            <td>1</td>
                                             <td>
                                                <select class="form-control">
                                                      <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                              </td> 
                                        </tr>
                                        <tr>
                                            <td>55 lbs ( 25 kg)</td>
                                            <td>Royal White</td>
                                            <td>90-95 gm</td>
                                            <td>1</td>
                                             <td>
                                                <select class="form-control">
                                                     <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td>     
                                        </tr>
                                        <tr>
                                            <td>70 lbs (35 kg)</td>
                                            <td>Royal Blue</td>
                                            <td>150-155 gm</td>
                                            <td>1</td>
                                             <td>
                                                <select class="form-control">
                                                       <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td>             
                                        </tr>
                                        <tr>
                                            <td>65 lbs 30 kg</td>
                                            <td>Royal Orange </td>
                                            <td>150 gm</td>
                                            <td>3 (mix product 50g-50g-50g)</td>
                                             <td>
                                                <select class="form-control">
                                                       <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td>  
                                        </tr>
                                         <tr>
                                            <td>75lbs (35 kg)</td>
                                            <td>Royal Red</td>
                                            <td>175-180 gm</td>
                                            <td>1</td>
                                             <td>
                                                <select class="form-control">
                                                       <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td> 
                                        <tr>
                                            <td>70 lbs (35 kg)</td>
                                            <td>Royal brown</td>
                    
                                            <td>mixed</td>
                                            <td>330 gm
                                            </td>
                                             <td>
                                                <select class="form-control">
                                                       <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>RDC dog chew powder</td>
                                            <td>Powder</td>
                                            <td>75 gm-2.6 oz</td>
                                            <td></td>
                                             <td>
                                                <select class="form-control">
                                                       <option>50 gm</option>
                                                      <option>200 gm</option>
                                                      <option>1 KG  </option>
                                                      <option>50 KG</option>
                                                </select>    
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>     
                            </div>
                            <div class="alert-sms">
                                <p class="alert alert-warning">
                                 * Please ensure that the product is displayed in high and dry place in the store.<br>
                                * Bulk Product is intended to be sold by weight in ounces<br>
                                * There is no minimum to order.</p>
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>    
                        </div>
                    </div>
                    <div class="counting">
                         <h5>Total Price: <strong>$0</strong></h5>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</section>
<!-- order section end  -->

@endsection