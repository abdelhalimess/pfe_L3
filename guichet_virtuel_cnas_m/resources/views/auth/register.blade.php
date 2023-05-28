@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="card">
                    {{-- <div class="card-header text-center" id="card-header" >
                    </h4></div> --}}
                    <div class=" text-center" id="head-card-div">
                        <h3>{{ __('Register') }}</h3>
                    </div>
                    <div class="card-body " id="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="PhoneNumber" type="text"
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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6 justify-center">
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
                            <div class="form-group row">
                                <label for="structure"
                                class="col-md-4 col-form-label text-md-right">{{ __('Structure') }}</label>
                                <div class="col-md-7">
                                    <select id="structures" data-live-search="true" title="Structure name.."
                                        data-width="100%" data-size="8" name="structure_id">
                                        {{-- @foreach ($structures as $structure) --}}
                                        {{-- <optgroup label="{{ $structure->name }}"> --}}
                                        @foreach ($structures as $structure)
                                            <option value="{{ $structure->id }}">
                                                {{ $structure->name }}</option>
                                        @endforeach
                                        {{-- </optgroup> --}}
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            {{-- <span class="input-group-addon">
                                        <i class="icofont icofont-sub-listing"></i> --}}
                            {{-- </span> --}}






                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <span style="margin-left: 10px">Already have an account? <a
                                            href="/login">Login</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

{{-- @section('page_scripts')
<script>
    const app = new Vue({
      el: '#app',
            data(){
                return {
                    // fullname:'',
                    // email:'',
                    // telephone:'',
                    // address:'',
                    // username:'',
                    // password:'',
                    // password_confirmation:'',
                    structure_id:'',
                    // role_id:'',

                    // selectedPermissions:[],
                    errors:[],
                    // notifications:[],
                    // notifications_fetched: false,
                }
            },
            methods:{
        add_user(){
                var app = this;
                app.permissions = '';
                app.structure_id = $('#structures').selectpicker('val');
                app.selectedPermissions = $('#permissions').multiSelect().val();
                 console.log(app.selectedPermissions.length )
                if ( app.selectedPermissions.length > 0) {
                    app.selectedPermissions =  app.selectedPermissions.toString().split(',').map(Number);
                    app.permissions = app.selectedPermissions;
                }

                 console.log('structure_id = ',app.structure_id=='' )
                 console.log($('#permissions').multiSelect().val() )
                axios.post('/add_user', {
                    'fullname':app.fullname,
                    'email':app.email,
                    'telephone':app.telephone,
                    'address':app.address,
                    'username':app.username,
                    'password':app.password,
                    'password_confirmation':app.password_confirmation,
                    'structure_id':app.structure_id,
                    'role_id':app.role_id,
                    'permissions':app.permissions
                })
                .then(function (response) {
                    notify('Success',response.data.success,'green', 'topCenter','bounceInDown');
                    app.reset_form();

                })
                .catch(function (error) {
                    if (error.response) {
                        //app.errors = error.response.data.errors;
                        console.log(error.response.data.errors);

                        app.$set(app,'errors', error.response.data.errors);
                    notify('Add Failed','Please verify the given information','red', 'topCenter','bounceInDown');
                    } else if (error.request) {
                        console.log(error.request);
                    } else {
                        console.log('Error', error.message);
                    }
                });
            },


@endsection --}}
