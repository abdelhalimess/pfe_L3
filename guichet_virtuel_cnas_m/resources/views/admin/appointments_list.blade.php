@extends('layouts.base')

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/list-scroll/list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/stroll/css/stroll.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/demo.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/j-pro-modern.css') }}">
@endsection

@section('page_title')
    <h4>Appointments List</h4>
    <span>Manage appointments</span>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('appointments-list') }}">Appointments Table</a>
    </li>
@endsection


@include('admin.navigation')


@section('page_content')
    <div class="row">
        <!-- Modal static-->
        <div class="modal fade" id="documents-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Required Documents</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 p-10" >
                    <table id="permissions-table" class="table table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:25px">#</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(document, index) in documents" v-bind:key="index">
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ document.name}}</td>
                            </tr>
                        </tbody>
                    </table> </div>
                </div>
            </div> 
        </div>


        <div class="modal fade" id="edit-commune-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit commune</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text"
                            :class="[errors.name ? 'form-control form-control-danger' : 'form-control form-control-success']"
                            maxlength="25" required v-on:input="errors.name=null" :placeholder="selectedCommuneName"
                            v-model="communeName" />
                        <p class="text-danger m-t-5" v-if="errors.name">@{{ errors.name.toString() }}</p>
                        <br>
                        <input type="text"
                            :class="[errors.code ? 'form-control form-control-danger' : 'form-control form-control-success']"
                            maxlength="25" required v-on:input="errors.name=null" :placeholder="selectedCommuneCode"
                            v-model="communeCode" />
                        <p class="text-danger m-t-5" v-if="errors.code">@{{ errors.code.toString() }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light"
                            v-on:click="update_commune(communeName,communeCode,selectedCommuneIndex)">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-10 la-sm-12">

        <div class="card">
            <div class="card-header table-card-header">

                <h5>Appointments List</h5>

                {{-- <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <span data-toggle="tooltip" data-placement="top" data-original-title="Add a Commune">
                                <i class="feather icon-plus text-success md-trigger" data-toggle="modal"
                                    data-target="#add-commune-modal">
                                </i>
                            </span>
                        </li>
                    </ul>
                </div> --}}
            </div>


            <div class="card-block">
                <div class="dt-responsive table-responsive" style="max-height:700px;">

                    <table id="permissions-table" class="table table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:25px">#</th>
                                <th>Day</th>
                                <th>Date and Time</th>
                                <th>Affiliate Fullname</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(appointment, index) in appointments" v-bind:key="index">
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ getDayOfWeek(appointment.appointment_datetime) }}</td>
                                <td>@{{ appointment.appointment_datetime }}</td>
                                <td>@{{ appointment.user.fullname }}</td>
                                <td> <span :class="getStatusClass(appointment.status)" style="font-size:12px;"> @{{ appointment.status }} </span></td> 
                                <td>
                                    <div class="text-center">
                                        <i v-if="appointment.status == 'CONFIRMED'"class="feather icon-check-square text-primary f-22 clickable mr-1"
                                            v-on:click="selectedAppointment = appointment.id,update_appointments('done')"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Done" >
                                        </i>
                                        <i v-if="appointment.status == 'PENDING' || appointment.status == 'CANCELED'"
                                            class="feather icon-check text-success f-22 clickable md-trigger mr-1 " 
                                            v-on:click="selectedAppointment = appointment.id,update_appointments('approve')"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Approve">
                                        </i>
                                        <i v-if="appointment.status == 'CANCELED'"class="feather icon-delete text-danger f-22 clickable "
                                            v-on:click="selectedAppointment = appointment.id,dismissAppointment()"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Dismiss">
                                        </i>
                                        <i v-if="appointment.status == 'CONFIRMED' || appointment.status == 'PENDING'"class="feather icon-x-circle  f-22 clickable"
                                            v-on:click="selectedAppointment = appointment.id,update_appointments('cancel')"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Cancel" style="color: orange;">
                                        </i>
                                        <i class="feather icon-eye f-22 clickable ml-1"
                                            v-on:click="documents=appointment.question.documents"
                                         data-placement="top" data-original-title="Cancel" style="color: rgb(137, 169, 206);"   data-toggle="modal"
                                            data-target="#documents-modal"> 
                                        </i>
                                      
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>

    <script>
        const app = new Vue({
            el: '#app',
            data() {
                return {
                    selectedCommune: '',
                    communeName: '',
                    communeCode: '',
                    newCommuneName: '',
                    newCommuneCode: '',
                    selectedCommuneName: '',
                    selectedCommuneCode: '',
                    selectedAppointment: '',
                    appointments: [],
                    selectedCommunes: [],
                    errors: [],
                    notifications: [],
                    notifications_fetched: false,
                    question: '',
                    documents: [],
                }
            },
            methods: {
                getStatusClass(status) {
                    if (status === 'PENDING') {
                        return 'label label-info'; // Blue color for pending status
                    } else if (status === 'CONFIRMED') {
                        return 'label label-success'; // Green color for confirmed status
                    } else if (status === 'CANCELED') {
                        return 'label label-warning'; // Red color for canceled status
                    } else if (status === 'DONE') {
                        return 'label label-primary'; // Red color for canceled status
                    } else if (status === 'DISMISSED') {
                        return 'label label-danger'; // Red color for canceled status
                    }
                    return ''; // Default class if status is not recognized
                },
                getDayOfWeek(dateString) {
                    const dateObj = new Date(dateString);
                    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
                        'Saturday'
                    ];
                    return daysOfWeek[dateObj.getDay()];
                },
                fetch_appointments() {
                    axios.get('/getAppointments')
                        .then(response => {
                            this.appointments = response.data.appointments;
                            console.log('Appointments fetched successfully');
                            console.log(this.appointments);
                        })
                        .catch(); 
                },
                update_appointments(action) {
                    return axios.put('/updateAppointments/' + this.selectedAppointment, {
                            action
                        })
                        .then(response => {
                            app.appointments = response.data.appointments;
                            console.log('Appointments updated successfully');
                            console.log(this.selectedAppointment);
                            notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                        })
                        .catch(error => {
                            console.error('Error updating appointments:', error);
                            notify('Error', 'An error occurred while updating appointments', 'red', 'topCenter',
                                'bounceInDown');
                        });
                },
                dismissAppointment() {
  swal({
    title: "Are you sure?",
    text: "This appointment will be dismissed!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Confirm",
    cancelButtonText: "Cancel",
    closeOnConfirm: true,
    closeOnCancel: true
  }, (isConfirm) => {
    if (isConfirm) {
      this.update_appointments('dismiss');
      console.log("Appointment dismissed!");
    } else {
      console.log("Dismissal canceled.");
    }
  });
},


                
                // deleteCommune(id, index) {
                //     swal({
                //             title: "Are you sure?",
                //             text: "This action is irreversible!",
                //             type: "warning",
                //             showCancelButton: true,
                //             confirmButtonColor: "#DD6B55",
                //             confirmButtonText: "Delete",
                //             cancelButtonText: "Cancel",
                //             closeOnConfirm: true,
                //             closeOnCancel: true
                //         },
                //         function(isConfirm) {
                //             if (isConfirm) {
                //                 axios.delete('/commune_delete/' + id)
                //                     .then(function(response) {
                //                         if (response.data.success) {
                //                             app.communes.splice(index, 1)
                //                             app.selectedCommuneName = '';
                //                             app.selectedCommuneIndex = '';
                //                             notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                //                         } else {
                //                             notify('Error', response.data.error, 'red', 'topCenter', 'bounceInDown');
                //                         }
                //                     });
                //             }
                //         }
                //     );

                // },
                // add_commune() {
                //     axios.post('/communes', {
                //             'name': app.newCommuneName,
                //             'code': app.newCommuneCode,
                //         })
                //         .then(function(response) {
                //             app.communes.push(response.data.commune);
                //             $('#add-commune-modal').modal('toggle');
                //             app.newCommuneName = '';
                //             app.newCommuneCode = '';
                //             app.selectedCommuneName = '';
                //             app.selectedCommuneIndex = '';
                //             notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                //         })
                //         .catch(function(error) {
                //             if (error.response) {
                //                 app.$set(app, 'errors', error.response.data.errors);
                //             } else if (error.request) {
                //                 console.log(error.request);
                //             } else {
                //                 console.log('Error', error.message);
                //             }
                //         });
                // },
                // update_commune(name, code, index) {
                //     axios.put('/communes/' + this.selectedCommune, {
                //             'name': name,
                //             'code': code,
                //         })
                //         .then(function(response) {
                //             app.$set(app.communes, index, response.data.commune);
                //             $('#edit-commune-modal').modal('toggle');
                //             app.communeName = '';
                //             app.communeCode = '';
                //             notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                //         })
                //         .catch(function(error) {
                //             if (error.response) {
                //                 app.$set(app, 'errors', error.response.data.errors);
                //             } else if (error.request) {
                //                 console.log(error.request);
                //             } else {
                //                 console.log('Error', error.message);
                //             }
                //         });

                // },
            },
            created() {
                this.fetch_appointments();
                console.log('Appointments List created..');
            },
            mounted() {
                this.fetch_appointments();
            }
        });
    </script>
@endsection
