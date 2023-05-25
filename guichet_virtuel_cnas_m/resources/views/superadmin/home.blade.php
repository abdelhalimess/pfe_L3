@extends('layouts.base')

@section('page_title')
    <h4>Home</h4>
    <span>Statistics </span>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
    </li>
@endsection


@include('superadmin.navigation')


@section('page_content')
    <div class="row">
        <div class="col-xl-5 col-md-7">
            <div class="card bg-c-yellow text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Affiliates</p>
                            <h4 class="m-b-0">@{{ users }}</h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-users f-50 text-c-yellow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-7">
            <div class="card bg-c-green text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">States</p>
                            <h4 class="m-b-0">@{{ states }}</h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-map f-50 text-c-green"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-7">
            <div class="card bg-c-pink text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Structures</p>
                            <h4 class="m-b-0">@{{ structures }}</h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="fa fa-building f-50 text-c-pink"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-7">
            <div class="card bg-c-blue text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Services</p>
                            <h4 class="m-b-0">@{{ services }}</h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-monitor f-50 text-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('page_scripts')
    <script>
        const app = new Vue({
            el: '#app',
            data() {
                return {
                    users: '',
                    states: '',
                    structures: '',
                    services: '',
                }
            },
            mounted() {
                this.fetch_users();
                this.fetch_states();
                this.fetch_services();
                this.fetch_structures();

            },
            created() {
                this.fetch_users();
                this.fetch_states();
                this.fetch_services();
                this.fetch_structures();

            },
            methods: {
                fetch_users() {
                    var app = this;
                    return axios.get('/getAffiliates')
                        .then(function(response) {
                            app.users = response.data.users;
                        });
                },
                fetch_services() {
                    var app = this;
                    return axios.get('/getServicesCount')
                        .then(function(response) {
                            app.services = response.data.services;
                        });
                },
                fetch_states() {
                    var app = this;
                    return axios.get('/getStatesCount')
                        .then(function(response) {
                            app.states = response.data.states;
                        });
                },
                fetch_structures() {
                    var app = this;
                    return axios.get('/getStructuresCount')
                        .then(function(response) {
                            app.structures = response.data.structures;
                        });
                },

            },
        });
    </script>
@endsection
