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
                            <select name="state">
                               @foreach($state as $key => $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                               @endforeach
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
