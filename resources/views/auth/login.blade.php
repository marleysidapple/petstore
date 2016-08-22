@extends('layouts.app', ['bodyClass' => 'home', 'headerImage' => true])

@section('content')

<!-- retail sign in start  -->
<section class="retail-sign-in">
    <div class="container">
        <div class="retail-wrapper">
            <h4> Sign in</h4>
            <div class="retail-form">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                         @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default btn-primary">Sign in</button>
                </form>
                <a href="<?= url('register') ?>" title="">Join Us</a>
            </div>
        </div>
    </div>
</section>
<!-- retail sign in end  -->
@endsection
