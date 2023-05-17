@extends('layouts.base')

@section('page_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('pages/list-scroll/list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/stroll/css/stroll.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/demo.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/j-pro-modern.css') }}">


@endsection

@section('page_title')
<h4>Structures List</h4>
<span>Add, edit and delete a structure</span>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
<a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item">
<a href="{{ route('structures-list') }}">Structures List</a>
</li>
@endsection


@include('superadmin.navigation')


@section('page_content')
<div class="row">
    <!-- Modal static-->
    <div class="modal fade" id="add-structure-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add a structure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" :class="[errors.name ? 'form-control form-control-danger' : 'form-control form-control-success']" placeholder="Enter structure name..." maxlength="25" v-model="newStructureName" required v-on:input="errors.name=null" />
                    <p class="text-danger m-t-5" v-if="errors.name">@{{errors.name.toString()}}</p>
                    <br>
                    <input type="text" :class="[errors.state_id ? 'form-control form-control-danger' : 'form-control form-control-success']" placeholder="Enter structure state_id..." maxlength="25" v-model="newStructureState" required v-on:input="errors.state_id=null" />
                    <p class="text-danger m-t-5" v-if="errors.state_id">@{{errors.state_id.toString()}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light" v-on:click="add_structure()">Save</button>
                </div>
            </div>
        </div>
    </div>    
        <div class="modal fade" id="edit-structure-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit structure</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" :class="[errors.name ? 'form-control form-control-danger' : 'form-control form-control-success']" maxlength="25" required v-on:input="errors.name=null" :placeholder="selectedStructureName" v-model="structureName" />
                        <p class="text-danger m-t-5" v-if="errors.name">@{{errors.name.toString()}}</p>
                        <br>
                        <input type="text" :class="[errors.state ? 'form-control form-control-danger' : 'form-control form-control-success']" maxlength="25" required v-on:input="errors.state=null" :placeholder="selectedStructureState" v-model="structureState" />
                        <p class="text-danger m-t-5" v-if="errors.state_id">@{{errors.state.toString()}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light" v-on:click="update_structure(structureName,structureState,selectedStructureIndex)">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>        

    <div class="col-md-9">

        <div class="card">
            <div class="card-header table-card-header">

                <h5>Structures List</h5>

                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <span data-toggle="tooltip" data-placement="top" data-original-title="Add a Structure">
                                <i class="feather icon-plus text-success md-trigger" data-toggle="modal"
                                   data-target="#add-structure-modal">
                                </i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="card-block">
                <div class="dt-responsive table-responsive">

                    <table id="permissions-table" class="table table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:20px">#</th>
                                <th>Structure</th>
                                <th align= "center">State</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(structure, index) in structures" v-bind:key="index"
                            v-on:click="selectedStructureIndex = index">
                                <td>@{{ index+1}}</td>
                                <td>@{{ structure.name }}</td>
                                <td>@{{ structure.state_id }}</td>
                                <td>
                                    <div class="text-center">
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                            <i class="feather icon-edit text-custom f-18 clickable md-trigger"
                                                data-toggle="modal" data-target="#edit-structure-modal"
                                                v-on:click="structureName=structure.name, structureState=structure.state_id, selectedStructure=structure.id">
                                            </i>
                                        </span>
                                        <i class="feather icon-trash text-danger f-18 clickable" v-on:click="deleteStructure(structure.id, index)"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
                selectedStructure: '',
                structureName: '',
                structureState: '',
                newStructureName: '',
                newStructureState: '',
                selectedStructureName: '',
                selectedStructureState: '',
                selectedStructureIndex: '',
                structures: [],
                selectedStructures: [],
                errors: [],
                notifications: [],
                notifications_fetched: false,
            }
        },
        methods:{
            fetch_structures() {
                return axios.get('/getStructures')
                    .then(response => {
                        this.structures = response.data.structures;
                        console.log('Structures fetched successfully');
                        console.log(this.structures);
                    })
                    .catch();
            },
            deleteStructure(id, index) {
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
                            axios.delete('/structure_delete/' + id)
                                .then(function(response) {
                                    if (response.data.success) {
                                        app.structures.splice(index, 1)
                                        app.selectedStructureName = '';
                                        app.selectedStructureIndex = '';
                                        notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                                    } else {
                                        notify('Error', response.data.error, 'red', 'topCenter', 'bounceInDown');
                                    }
                                });
                        }
                    }
                );

            },
            add_structure() {
                axios.post('/structures', {
                        'name': app.newStructureName,
                        'state_id': app.newStructureState,
                    })
                    .then(function(response) {
                        app.structures.push(response.data.structure);
                        $('#add-structure-modal').modal('toggle');
                        app.newStructureName = '';
                        app.newStructureState = '';
                        app.selectedStructureName = '';
                        app.selectedStructureIndex = '';
                        notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                    })
                    .catch(function(error) {
                        if (error.response) {
                            app.$set(app, 'errors', error.response.data.errors);
                        } else if (error.request) {
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                    });
            },
            update_structure(name, state_id, index) {
                axios.put('/structures/' + this.selectedStructure, {
                        'name': name,
                        'state_id': state_id,
                    })
                    .then(function(response) {
                        app.$set(app.structures, index, response.data.structure);
                        $('#edit-structure-modal').modal('toggle');
                        app.structureName = '';
                        app.structureState = '';
                        notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                    })
                    .catch(function(error) {
                        if (error.response) {
                            app.$set(app, 'errors', error.response.data.errors);
                        } else if (error.request) {
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                    });

            },
        },
        created() {
            this.fetch_structures();
            console.log('Structures List created..');
        },
        mounted() {
            this.fetch_structures();
        }
});
</script>

@endsection
