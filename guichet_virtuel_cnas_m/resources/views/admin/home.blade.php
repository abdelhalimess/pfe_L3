@extends('layouts.base')

@section('page_title')
<h4>Home</h4>
<span>Statistics</span>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
<a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
</li>
@endsection


@include('admin.navigation')


@section('page_content')

@section('page_scripts')

<script>

  const app = new Vue({
     el: '#app',
     data() {
         return {
             operation:'',

             cost: '',
             started_at: '',
             vehicle_id: '',
             mechanic_id: '',
             details: '',
             modal_title: '',
             selectedMaintenanceId:'',
             selectedMaintenanceIndex:'',
             notifications:[],
             users:[],
             mechanics:[],
             maintenanceTypes:[],
             maintenances:[],
             errors: [],
         }
     },
     mounted() {
         this.fetch_notifications();
         this.fetch_users();

     },
     methods: {
         fetch_notifications(){
                     var app = this;
                     return axios.get('/getNotifications')
                         .then(function (response) {
                             app.notifications = response.data.notifications;
                             if (app.notifications.length > 0 ) {

                             }
                         });
                 },
                 fetch_users(){
                    var app = this;
                    return axios.get('/getUsers')
                        .then(function (response) {
                            app.users = response.data.users;

                        });
                },

     },
 });

  </script>





@endsection
