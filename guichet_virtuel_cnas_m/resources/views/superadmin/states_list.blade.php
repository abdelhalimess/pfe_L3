@extends('layouts.base')

@section('page_styles')

<link rel="stylesheet" type="text/css" href="{{ asset('pages/list-scroll/list.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/stroll/css/stroll.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/demo.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/j-pro-modern.css') }}">


@endsection

@section('page_title')
<h4>States List</h4>
<span>Add, edit or delete a state</span>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item">
    <a href="{{ route('states-list') }}">States list</a>
</li>
@endsection


@include('superadmin.navigation')


@section('page_content')


 {{-- page_content --}}

 <div class="col-md-5">

    <div class="card">
        <div class="card-header table-card-header">

            <h5>States List</h5>

            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li>
                        <span data-toggle="tooltip" data-placement="top" data-original-title="Add a State">
                            <i class="feather icon-plus text-success md-trigger" data-toggle="modal" data-target="#add-role-modal">
                            </i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Modal static-->
        <div class="card-block">
            <div class="dt-responsive table-responsive">

                <table id="states-table" class="table table-hover table-bordered nowrap">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20px">#</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(state, index) in states" v-bind:key="index" :class="{'selected-row': selectedStateName === state.name}" v-on:click="showCommunes(state, state.communes),selectedStateIndex = index">
                            <td>@{{ index+1}}</td>
                            <td>@{{ state.name }}</td>
                            <td>@{{ state.code }}</td>
                            <td>
                                <div class="text-center">
                                    <span data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                        <i class="feather icon-edit text-custom f-18 clickable md-trigger" data-toggle="modal" data-target="#edit-state-modal" v-on:click="stateName=state.name">
                                        </i>
                                    </span>
                                    <i class="feather icon-trash text-danger f-18 clickable" v-on:click="deleteState(state.id, index)" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                    </i>
                                    <i class="feather icon-lock text-warning f-18 clickable" v-on:click="showCommunes(state, state.communes)" data-toggle="tooltip" data-placement="top" data-original-title="Show Communes">
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

@endsection

@section('page_scripts')
<script type="text/javascript" src="{{ asset('bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#test').multiSelect({
            selectableHeader: "<div class='custom-header'>Les permissions disponibles</div>",
            selectionHeader: "<div class='custom-header'>Les permissions sélectionnées</div>",

        });

        $('#assign-permissions-modal').on('hide.bs.modal', function() {
            $('#test').multiSelect('deselect_all');
        });
    });
</script>
<script>
    const app = new Vue({
        el: '#app',
        data() {
            return {
                selectedState: '',
                StateName: '',
                StateCode: '',
                newState: '',
                selectedStateName: '',
                selectedStateIndex: '',
                state_communes: [],
                states: [],
                communes: [],
                selectedCommunes: [],
                errors: [],
                notifications: [],
                notifications_fetched: false,
            }
        },
        methods: {
            showCommunes(state, communes) {
                app.role_communes = communes;
                console.log(communes);
                app.selectedState = state.id;
                app.selectedStateName = state.name;
                console.log(app.selectedState);
            },
            
            fetch_states() {
                return axios.get('/getStates')
                    .then(response => {
                        this.states = response.data.states;
                        console.log('States fetched successfully');
                        console.log(this.states );
                    })
                    .catch();
            },
            deleteState(id, index) {
                swal({
                        title: "Are you sure?",
                        text: "This action is irreversible!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Delete",
                        cancelButtonText: "Cancel",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            axios.delete('/state_delete/' + id)
                                .then(function(response) {
                                    if (response.data.success) {
                                        app.states.splice(index, 1)
                                        app.selectedStateName = '';
                                        app.selectedStateIndex = '';
                                        notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                                    } else {
                                        notify('Error', response.data.error, 'red', 'topCenter', 'bounceInDown');
                                    }
                                });
                        }
                    }
                );

            },
            },
            created() {
         this.fetch_states();

          
           
           
        },
        mounted() {
            $('#optgroup').multiSelect();
            this.fetch_states();
        }
        
    });
</script>

@endsection