@extends('layouts.app', ['bodyClass' => ''])

@section('content')

<!-- join-us section start -->
<section class="join-us">
    <strong>Join Us</strong>
    <div class="join-us-form">
        <div class="container">
            <div class="row"> 
                <div class="join-us-form-wrapper">
                   <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control"  placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
                            @if ($errors->has('confirm_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('address') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="address" placeholder="Your Address">
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('ap_st') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="ap_st" placeholder="Ap/st">
                            @if ($errors->has('ap_st'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ap_st') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('city') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="city" placeholder="Your City">
                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="phone_number" placeholder="phone Number">
                            @if ($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('website') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="website" placeholder="Websites">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                            <select>
                                <option value="AA">Military America</option>
                                <option value="AB">Alberta</option>
                                <option value="AE">Military Europe</option>
                                <option value="AK">Alaska</option>
                                <option value="AL">Alabama</option>
                                <option value="AP">Military Pacific</option>
                                <option value="AR">Arkansas</option>
                                <option value="AS">American Samoa</option>
                                <option value="AZ">Arizona</option>
                                <option value="BC">British Columbia</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="FM">Micronesia</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="IA">Iowa</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MB">Manitoba</option>
                                <option value="MD">Maryland</option>
                                <option value="ME">Maine</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MO">Missouri</option>
                                <option value="MP">Marianas</option>
                                <option value="MS">Mississippi</option>
                                <option value="MT">Montana</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="NE">Nebraska</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NL">Newfoundland</option>
                                <option value="NM">New Mexico</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="NT">Northwest Territory</option>
                                <option value="NU">Nunavut</option>
                                <option value="NV">Nevada</option>
                                <option value="NY">New York</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="ON">Ontario</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PE">Prince Edward Islands</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="PW">Palau</option>
                                <option value="QC">Quebec</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VA">Virginia</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VT">Vermont</option>
                                <option value="WA">Washington</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WV">West Virginia</option>
                                <option value="WY">Wyoming</option>
                                <option value="YT">Yukon Territory</option> 
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-6{{ $errors->has('tax_id') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="tax_id" placeholder="Ein tax id">
                            @if ($errors->has('tax_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tax_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                            <input type="checkbox" id="c1" name="cc" />
                            <label for="c1">I have read the Privacy Policy and Web Usage Agreement</label>
                        </div>
                        <div class="clearfix"></div>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                </div>
           </div>   
        </div>
    </div>
</section>
<!-- join-us section end  -->
@endsection
