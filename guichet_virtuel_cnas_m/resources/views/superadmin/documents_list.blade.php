@extends('layouts.base')

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/list-scroll/list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/stroll/css/stroll.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/demo.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('pages/j-pro/css/j-pro-modern.css') }}">
@endsection

@section('page_title')
    <h4>Documents List</h4>
    <span>Add, edit and delete a Document</span>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}"> <i class="feather icon-home"></i></a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('documents-list') }}">Document List</a>
    </li>
@endsection


@include('superadmin.navigation')


@section('page_content')
    <div class="row">
        <!-- Modal static-->
        <div class="modal fade" id="add-document-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a Document</h5>
                        <button type="button" v-on:click="errors = ''"class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text"
                            :class="[errors.name ? 'form-control form-control-danger' : 'form-control form-control-success']"
                            placeholder="Enter document name..." maxlength="25" v-model="newDocumentName" required
                            v-on:input="errors.name=null" />
                        <p class="text-danger m-t-5" v-if="errors.name">@{{ errors.name.toString() }}</p>
                        <br>
                        {{-- <input type="text" :class="[errors.url ? 'form-control form-control-danger' : 'form-control form-control-success']" placeholder="Enter document url..." maxlength="25" v-model="newDocumentUrl" required v-on:input="errors.url=null" />
                    <p class="text-danger m-t-5" v-if="errors.code">@{{ errors.url.toString() }}</p> --}}
                        <input type="file" id="files" ref="files" name="document_file"
                            class="form-control form-control-success" v-on:change="handleFilesUpload()" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" v-on:click="errors = ''"class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light"
                            v-on:click="add_document()">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit-document-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit document</h5>
                        <button type="button" v-on:click="errors = ''"class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text"
                            :class="[errors.name ? 'form-control form-control-danger' : 'form-control form-control-success']"
                            maxlength="25" required v-on:input="errors.name=null" :placeholder="selectedDocumentName"
                            v-model="documentName" />
                        <p class="text-danger m-t-5" v-if="errors.name">@{{ errors.name.toString() }}</p>
                        <br>
                       

                       <input type="file" id="filess" ref="filess" name="document_file_"
                            class="form-control form-control-success" v-on:change="handleFilesUpload_()" /> 

                    </div>
                    <div class="modal-footer">
                        <button type="button" v-on:click="errors = ''"class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light"
                            v-on:click="update_document(documentName,documentCode,selectedDocumentIndex)">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">

        <div class="card">
            <div class="card-header table-card-header">

                <h5>Documents List</h5>

                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <span data-toggle="tooltip" data-placement="top" data-original-title="Add a Document">
                                <i class="feather icon-plus text-success md-trigger" data-toggle="modal"
                                    data-target="#add-document-modal">
                                </i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="card-block">
                <div class="dt-responsive table-responsive">

                    <table id="documents-table" class="table table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:20px">#</th>
                                <th>Name</th>
                                <th>File</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(document, index) in documents" v-bind:key="index"
                                v-on:click="selectedDocumentIndex = index">
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ document.name }}</td>
                                <td class="text-center" style="width:100px" v-if="document.url != null">
                                    <a :href="'storage/'+document.url" target="_blank" class="text-info f-17" >File
                                        <i :class="[document.url == null ? '  icofont icofont-file-pdf  text-default' : 'icofont icofont-file-pdf text-info f-16']" ></i>
                                    </a></td>
                                <td v-else class="text-center" style="width:100px">
                                    </td>
                                <td>
                                    <div class="text-center">
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                            <i class="feather icon-edit text-custom f-18 clickable md-trigger"
                                                data-toggle="modal" data-target="#edit-document-modal"
                                                v-on:click="documentName=document.name, documentCode=document.url, selectedDocument=document.id">
                                            </i>
                                        </span>
                                        <i class="feather icon-trash text-danger f-18 clickable"
                                            v-on:click="deleteDocument(document.id, index)" data-toggle="tooltip"
                                            data-placement="top" data-original-title="Delete">
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
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js') }}">
    </script>

    <script>
        const app = new Vue({
            el: '#app',
            data() {
                return {
                    selectedDocument: '',
                    documentName: '',
                    documentCode: '',
                    newDocumentName: '',
                    newDocumentUrl: '',
                    selectedDocumentName: '',
                    selectedDocumentCode: '',
                    selectedDocumentIndex: '',
                    documents: [],
                    selectedDocuments: [],
                    errors: [],
                    notifications: [],
                    notifications_fetched: false,
                    document_file: '',
                    document_file_name: '',
                   
                }
            },
            methods: {
                handleFilesUpload() {
                    app.document_file = app.$refs.files.files;
                    app.document_file_name = app.document_file[0].name;
                    $('#document-file').val(app.document_file_name);

                },
                handleFilesUpload_() {
                    app.document_file_ = app.$refs.filess.files;
                    app.document_file_name_ = app.document_file_[0].name;
                    $('#document-file-').val(app.document_file_name_);

                },
                fetch_documents() {
                    return axios.get('/getDocuments')
                        .then(response => {
                            this.documents = response.data.documents;
                            console.log('Documents fetched successfully');
                            console.log(this.documents);
                        })
                        .catch();
                },
                deleteDocument(id, index) {
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
                                axios.delete('/documents/' + id)
                                    .then(function(response) {
                                        if (response.data.success) {
                                            app.documents.splice(index, 1)
                                            app.selectedDocumentName = '';
                                            app.selectedDocumentIndex = '';
                                            notify('Success', response.data.success, 'green', 'topCenter',
                                                'bounceInDown');
                                        } else {
                                            notify('Error', response.data.error, 'red', 'topCenter',
                                                'bounceInDown');
                                        }
                                    });
                            }
                        }
                    );

                },
                add_document_() {
                    axios.post('/documents', {
                            'name': app.newDocumentName,
                            'url': app.newDocumentUrl,
                        })
                        .then(function(response) {
                            app.documents.push(response.data.document);
                            $('#add-document-modal').modal('toggle');
                            app.newDocumentName = '';
                            app.newDocumentUrl = '';
                            app.selectedDocumentName = '';
                            app.selectedDocumentIndex = '';
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
                add_document() {
                    app.document_file = app.$refs.files.files[0];
                    console.log(app.document_file);

                    var formData = new FormData();

                    formData.append('name', app.newDocumentName);
                    formData.append('document_file', app.document_file);

                    axios.post('/documents/', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
                        .then(function(response) {
                            app.documents.push(response.data.document);
                            $('#add-document-modal').modal('toggle');
                            app.newDocumentName = '';
                            app.newDocumentUrl = '';
                            app.selectedDocumentName = '';
                            app.selectedDocumentIndex = '';
                            $('#files').val('');
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
                update_document(name, url, index) {

                    app.document_file_ = app.$refs.filess.files[0];
                    console.log(name);

                    var formData = new FormData();

                    formData.append('name', app.documentName);
                    formData.append('document_file', app.document_file_);

                    axios.post('/updateDocument/' + app.selectedDocument, formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
                        .then(function(response) {
                            app.$set(app.documents, index, response.data.document);
                            console.log(response.data);
                            $('#edit-document-modal').modal('toggle');
                            app.newDocumentName = '';
                            app.newDocumentUrl = '';
                            app.selectedDocumentName = '';
                            app.selectedDocumentIndex = '';
                            $('#filess').val('');
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
                update_document_(name, url, index) {
                    axios.put('/documents/' + this.selectedDocument, {
                            'name': name,
                            'url': url,
                        })
                        .then(function(response) {
                            app.$set(app.documents, index, response.data.document);
                            $('#edit-document-modal').modal('toggle');
                            app.documentName = '';
                            app.documentCode = '';
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
                this.fetch_documents();
                console.log('Documents List created..');
            },
            mounted() {
                this.fetch_documents();

            }
        });
    </script>
@endsection
