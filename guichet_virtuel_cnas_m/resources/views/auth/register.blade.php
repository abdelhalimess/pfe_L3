@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mt-5" id="main-card">
                <div class="card" id="card">
                    {{-- <div class="card-header text-center" id="card-header" >
                    </h4></div> --}}
                    <div class="card-body " id="card-body">
                        <div class=" text-center" id="head-card-div">
                        </div>
                        <h3 class="text-center">{{ __('Register') }}</h3>
                        <br>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username"
                                    class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                        name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-sm-4  col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                        value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fullname"
                                    class="col-sm-4  col-form-label text-md-right">{{ __('Fullname') }}</label>

                                <div class="col-md-6">
                                    <input id="fullname" type="text"
                                        class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}"
                                        name="fullname" value="{{ old('fullname') }}" required>

                                    @if ($errors->has('fullname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fullname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="PhoneNumber"
                                    class="col-sm-4  col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="PhoneNumber" type="tel"
                                        class="form-control{{ $errors->has('PhoneNumber') ? ' is-invalid' : '' }}"
                                        name="PhoneNumber" value="{{ old('PhoneNumber') }}" required autofocus>

                                    @if ($errors->has('PhoneNumber'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('PhoneNumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                    class="col-sm-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                        name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div data-toggle="tooltip" data-placement="top" class="form-group row" id="select-sructure">
                                <label for="address"
                                    class="col-sm-4 col-form-label text-md-right">{{ __('Structure') }}</label>
                                <div class="col-md-6">
                                    <select id="structures" name="structure" class="selectpicker show-tick"
                                        data-live-search="true" title="Structure name.." data-width="100%" data-size="8"
                                        required autofocus style="width:100% ; height:100%">

                                        {{-- @foreach ($structureTypes as $structureType) --}}
                                        {{-- <optgroup label="{{$structureType->name}}" > --}}
                                        <option value="">Select Structure...</option>
                                        @foreach ($structures as $structure)
                                            <option value="{{ $structure->id }}"> {{ $structure->name }}</option>
                                        @endforeach
                                        {{-- </optgroup> --}}
                                        {{-- @endforeach --}}

                                    </select>
                                    @if ($errors->has('structures'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('structures') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <span class="input-group-addon">
                                    <i class="icofont icofont-sub-listing"></i>
                                </span>
                            </div>



                            <div class="form-group row">
                                <label for="password"
                                    class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-sm-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-top: 15px">
                                <div class="col-md-12 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <span style="margin-left: 10px">Already have an account? <a
                                            href="/login">Login</a></span>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">&copy; CNAS 2023 </p>
                                    <p class="text-inverse text-left"><b class="f-w-600">V 1.0.0</b></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('images/auth/Logo-small-bottom.png') }}" alt="Logo-small-bottom.png" style="width: 50px ; height:50px">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
<script>

$(document).ready(function() {


    $('#structure-types').selectpicker({
        placeholder: "Type du structure.."
    });
    $('#structures').selectpicker({
        placeholder: "Nom du structure.."
    });


});
</script>