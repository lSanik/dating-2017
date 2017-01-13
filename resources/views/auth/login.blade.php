@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
                <img src="data:image/png;base64,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" alt="">

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    {!! Form::open(['url' => url('/login'), 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST']) !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>

                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3"><a href="/social/redirect/facebook"><img width="64px" src="data:image/png;base64,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"></a></div>
                        <div class="col-md-3"><a href="/social/redirect/google"><img width="64px" src="data:image/png;base64,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"></a></div>
                        <div class="col-md-3"><a href="/social/redirect/twitter"><img width="64px" src="data:image/png;base64,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"></a></div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection