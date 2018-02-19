@extends('_layouts.body')

@section('meta-page')
  <title>Meta Title Here</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="OG Title Here"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
Password Reset
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/glacier-1920x580.jpg);">
    <div class="item">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 ">
              <div class="row login-overlay">
                <div class="col-sm-12">
                  <h1><strong class="dp-white">@yield('logo-tag')</strong></h1>
                  <form action="/password/reset" method="POST" accept-charset="utf-8" id="resetPasswordForm" class="form-horizontal">
                  {{ csrf_field() }}
                  {!! Form::hidden('token', $token) !!}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      {!! Form::label('email', 'Email') !!}
                      {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) !!}
                      <small class="text-danger">{{ $errors->first('email') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      {!! Form::label('password', 'New Password') !!}
                      {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) !!}
                      <small class="text-danger">{{ $errors->first('password') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      {!! Form::label('password_confirmation', 'Confirm New Password') !!}
                      {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Confirm Password']) !!}
                      <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                  </div>

                  {!! Form::submit("Reset Password", ['class' => 'btn btn-success']) !!}

                  {!! Form::close() !!}

                </div>  
              </div>
            </div>      
        </div>
      </div>
    </div>
</section>

@stop

@section('scripts')
<script>

</script>
@stop