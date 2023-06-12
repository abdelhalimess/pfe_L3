<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CNAS - VIRTUAL COUNTER</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/animate.css/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iziToast.min.css') }}">
    <link href="{{ asset('pages/user/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <div style="">
                    <img src="{{ asset('images/auth/Logo-small-bottom.png') }}" alt="cnas-logo"
                        style="width: 40px ; height:40px ; margin-right:10px ; margin-bottom :5px">
                    <a class="navbar-brand" id="nav-title">CNAS - VIRTUAL COUNTER</a>
                </div>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#services">Services</a></li>

                        @if (Auth::user())
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                    href="#" data-toggle="modal" data-target="#appointmentsModal"
                                    v-on:click="fetchAppointments()">My
                                    Appointments</a></li>
                        @endif

                        @if (Auth::user())
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                    href="#" data-target="#user-profile-form" data-toggle="modal">My Profile</a>
                            </li>
                        @endif

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#footer-page">Contact</a></li>

                    </ul>
                    @if (Auth::user())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: true;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    @endif
                    @if (!Auth::user())
                        <li class="nav-item mx-0 mx-lg-1"><a href="/login" class="btn btn-info">
                                <span class="pcoded-mtext text-white">Login</span>
                            </a></li>
                    @endif

                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <template>
                    <div id="image-header-div">
                        <transition name="fade" mode="out-in">
                            <img class="masthead-avatar mb-5 " id="header-images" :src=" getAssetUrl"
                                alt="currentPhoto" :key="currentPhotoIndex" alt="..." />
                        </transition>
                    </div>
                </template>
                <!-- Masthead Heading-->
                <div>
                    <h1 class="masthead-heading text-uppercase mb-0" id="h1-header">CNAS - VIRTUAL COUNTER</h1>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-minus"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
        </header>
        <div class="row">
            <div class="modal fade" id="appointmentsModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="appointmentsModalLabel">My Appointments
                            </h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Day</th>
                                        <th>Date And Time</th>
                                        <th>Service</th>
                                        <th>Employee</th>
                                        <th>Status</th>
                                        <th>Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(myAppointment, index) in appointments" v-bind:key="index">
                                        <td>@{{ index + 1 }}</td>
                                        <td>@{{ getDayOfWeek(myAppointment.appointment_datetime) }}</td>
                                        <td>@{{ myAppointment.appointment_datetime }}</td>
                                        <td>@{{ myAppointment.employee.service.name }}</td>
                                        <td>@{{ myAppointment.employee.fullname }}</td>
                                        <td :class="getStatusClass(myAppointment.status)">@{{ myAppointment.status }}</td>

                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                v-on:click="printAppointment(myAppointment)">Download</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section-->
        <section class="page-section portfolio" id="services"
            style="background: linear-gradient(340deg, #ffffff 0%, #5899e2 74%);">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h4 class="page-section-heading text-center text-uppercase text-white mb-0">Services</h4>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-minus"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="container overflow-hidden">
                    <div class="row gy-5 gy-md-6 gx-xl-6" v-show="services!=null">
                        <div class="bs-component col-md-4" v-for="(service, index) in services"
                            :key="index">
                            <div class="card text-center">
                                <div class="card-header">
                                    @{{ service.name }}
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title text-muted">Description</h6>
                                    <p class="card-text">@{{ service.description }}</p>
                                    <a class="btn btn-primary"
                                        v-on:click="selectedService=service,select_service(service)"
                                        data-bs-toggle="modal" data-bs-target="#servicesModal">Select service</a>
                                </div>
                                <div class="card-footer text-muted">
                                    Appointments available
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-secondary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-minus"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-center mb-4">
                                <a href="https://cnas.dz/" target="_blank"><img id="image-about-cnas"
                                        src="{{ asset('images/auth/Logo-small-bottom.png') }}" alt="CNAS Logo"
                                        class="img-fluid cnas-logo max-width"></a>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-4">Providing Social Security for Algerian Citizens</h2>
                            <p class="lead">The Algerian National Security Fund (CNAS) is a governmental organization
                                dedicated to ensuring social protection, welfare, and health insurance coverage for
                                Algerian citizens. With a commitment to serving our nation, we strive to provide
                                comprehensive and reliable social security services.</p>
                            <h3 class="mb-3">Our Objectives</h3>
                            <ul class="list-disc pl-6">
                                <li>Promote social justice and equal opportunities</li>
                                <li>Ensure access to quality healthcare services</li>
                                <li>Protect individuals and families from social risks</li>
                                <li>Provide financial support during periods of disability, maternity, and occupational
                                    accidents</li>
                                <li>Secure pension benefits for retired individuals</li>
                            </ul>
                            <h3 class="mb-3">Collaboration and Accessibility</h3>
                            <p>At CNAS, we collaborate with employers, employees, and other stakeholders to administer
                                social security programs efficiently. We offer a user-friendly online platform where
                                beneficiaries can easily access information, submit claims, and track the status of
                                their applications.</p>
                            <h3 class="mb-3">Social Development and Prosperity</h3>
                            <p>We are dedicated to the well-being and development of our nation. By providing accessible
                                and high-quality social security services, we contribute to the social and economic
                                progress of Algeria, ensuring a stable and secure future for our citizens.</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="page-section" id="contact">
            <footer class="footer text-center" id="footer-page">
                <h2 class="page-section-heading text-center text-uppercase text-white">Contact</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-minus"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0">
                                CNAS - Direction Générale
                                <br />
                                Rue des deux bassins, Ben Aknoun 16028
                            </p>
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <a class="btn btn-outline-light btn-social mx-1"
                                href="https://www.facebook.com/dg.cnas"><i class="fab fa-fw fa-facebook-f "></i></a>
                            <a class="btn btn-outline-light btn-social mx-1"
                                href="https://www.linkedin.com/company/cnas-direction-g%C3%A9n%C3%A9rale/"
                                target="_blank"><i class="fab fa-fw fa-linkedin-in "></i></a>
                        </div>
                        <div class="col-lg-4 ">
                            <h4>Contact</h4>
                            <a href="" style="text-decoration: none ; color:white "> +213 23384270 </a> <br>

                            <br><br><br><br><br>
                        </div>

                        <!-- Footer About Text-->
                        <div class="row center " style="justify-content: center ; ">
                            <div class="col-lg-8 center">
                                <p class="lead mb-0">
                                <h4>Created by: </h4>
                                Abdelhalim Esselami / Abdelkadir Cheklal<br>
                                <h4>CNAS - VIRTUAL COUNTER</h4>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Copyright Section-->
            <div class="copyright py-4 text-center text-white" id="copyright-div">
                <div class="container"><small>Copyright &copy; CNAS-Virtual Counter 2023</small></div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="servicesModal" tabindex="-1" aria-labelledby="servicesModal"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" id="modal-appointment">
                <div class="modal-content">
                    <div class="modal-header border-0 " style="padding-bottom: 7px">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                            v-on:click="clear_documents"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <!-- Portfolio Modal - Title-->
                                    <h4 class="portfolio-modal-title-sm text-secondary text-uppercase mb-0">
                                        <i class="fas fa-check-circle"></i>
                                        <span class="service-name">@{{ selectedService.name }}</span>
                                    </h4>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-minus"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-12"
                                            :class=" [!showBookingForm ? 'col-10 animated fadeInDown' :
                                                 'col-10 animated fadeOutDown'
                                             ]"
                                            v-show="!showBookingForm">
                                            <div class="card">
                                                <div class="card-header">Questionnaire</div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="list-group">
                                                                <div v-if="questions.length != 0"
                                                                    class="list-group-item list-group-item-action"
                                                                    v-for="(question, index) in questions"
                                                                    :key="index"
                                                                    v-on:click="fetch_documents(question), fetch_questions(question)">
                                                                    @{{ question.content }}
                                                                </div>
                                                                <div v-if="questions.length == 0"
                                                                    class="list-group-item">
                                                                    Here is the list of the required documents.
                                                                </div>
                                                                <br><br><br><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="list-group" v-if="documents.length > 0">
                                                                <div class="list-group-item list-group-item-action"
                                                                    v-for="(document, index) in documents"
                                                                    :key="index">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            type="checkbox"
                                                                            :id="'document-checkbox-' + index" disabled>
                                                                        <label class="form-check-label"
                                                                            :for="'document-checkbox-' + index">
                                                                            @{{ document.name }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div v-else class="text-muted">No documents available yet.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row justify-content-between">
                                                        <div class="col-auto">
                                                            <button class="btn btn-primary"
                                                                v-on:click="fetch_previous_questions()">
                                                                <i class="fas fa-arrow-left"></i>
                                                                Back
                                                            </button>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button class="btn btn-primary"
                                                                v-if="documents.length > 0 && fullname!=''"
                                                                v-on:click="showBookingForm=true">
                                                                <i class="fas fa-book"></i>
                                                                Book
                                                            </button>
                                                            <button class="btn btn-primary"
                                                                v-on:click="printDocuments"
                                                                v-if="documents.length > 0">
                                                                <i class="fas fa-print"></i>
                                                                Print
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div v-if="fullname == '' " class="list-group-item text-danger">
                                            LOGIN TO BOOK AN APPOINTMENT
                                        </div>
                                        <div class="col-10"
                                            :class=" [showBookingForm ? 'col-10 animated fadeInDown' :
                                                 'col-10 animated fadeOutDown'
                                             ]"
                                            v-show="showBookingForm">
                                            <div class="card">
                                                <div class="card-header">Book an Appointment</div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div id="demo"></div>



                                                        </div>
                                                        <div class="col-4">
                                                            <div class="list-group" v-if="documents.length > 0">
                                                                <div :class="[index == selectedHourIndex ?
                                                                    'active list-group-item list-group-item-action' :
                                                                    'list-group-item list-group-item-action'
                                                                ]"
                                                                    v-for="(hour, index) in available_hours"
                                                                    v-on:click="selectedHourIndex = index, selectedHour = hour"
                                                                    :key="index">
                                                                    <div class="form-check">

                                                                        <label class="form-check-label"
                                                                            :for="'document-checkbox-' + index">
                                                                            @{{ hour }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div v-else class="text-muted">No appointments available,
                                                                please select another date.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row justify-content-between">
                                                        <div class="col-auto">
                                                            <button class="btn btn-primary"
                                                                v-on:click="showBookingForm = false">
                                                                <i class="fas fa-arrow-left"></i>
                                                                Back
                                                            </button>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button class="btn btn-primary"
                                                                v-on:click="book_appointment()"
                                                                :disabled="selectedHour == '' || selectedDate == ''"
                                                                v-if="documents.length > 0" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i class="fas fa-book"></i>
                                                                Book
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="user-profile-form" tabindex="-1" role="dialog">
            <div class="modal-dialog  modal-xl" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="text-default">My Profile</h5>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: true;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h6 class="sub-title">Personal Information<span class="text-danger">(*)</span></h6>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-sm-5" id="form-group2">
                                            <label for="fullname" class="block">Fullname <span
                                                    class="text-danger">(*)</span></label>
                                            <div
                                                :class="[errors.fullname ? 'input-group input-group-danger' :
                                                    'input-group input-group-inverse'
                                                ]">
                                                <input id="fullname" type="text" class="form-control"
                                                    placeholder="Fullname..." v-model="fullname"
                                                    data-toggle="tooltip" data-placement="top"
                                                    :data-original-title="errors.fullname">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-user" data-toggle="tooltip"
                                                        data-placement="top"
                                                        :data-original-title="errors.fullname"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-5" id="form-group3">
                                            <label for="email" class="block">Email <span
                                                    class="text-danger">(*)</span></label>
                                            <div
                                                :class="[errors.email ? 'input-group input-group-danger' :
                                                    'input-group input-group-inverse'
                                                ]">
                                                <input type="text" class="form-control" placeholder="Email"
                                                    v-model="email" data-toggle="tooltip" data-placement="top"
                                                    :data-original-title="errors.email">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-mail"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-5" id="form-group4">
                                            <label for="telephone" class="block">Phone Number<span
                                                    class="text-danger">(*)</span></label>
                                            <div
                                                :class="[errors.telephone ? 'input-group input-group-danger' :
                                                    'input-group input-group-inverse'
                                                ]">
                                                <input type="text" class="form-control" placeholder="Phone Number"
                                                    v-model="telephone" data-toggle="tooltip" data-placement="top"
                                                    :data-original-title="errors.telephone">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-telephone"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-5" id="form-group6">
                                            <label for="address" class="block">Address <span
                                                    class="text-danger">(*)</span></label>
                                            <div
                                                :class="[errors.address ? 'input-group input-group-danger' :
                                                    'input-group input-group-inverse'
                                                ]">
                                                <input type="text" class="form-control" placeholder="Address"
                                                    v-model="address" data-toggle="tooltip" data-placement="top"
                                                    :data-original-title="errors.address">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-location-pin"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-5" id="form-group5">
                                            <label for="password" class="block">Password <span
                                                    class="text-danger">(*)</span></label>
                                            <div :class="[errors.password ? 'input-group input-group-danger' :
                                                'input-group input-group-inverse'
                                            ]"
                                                data-toggle="tooltip" data-placement="top"
                                                :data-original-title="errors.password">
                                                <input type="password" class="form-control" placeholder="Password"
                                                    v-model="password">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-lock"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-5" id="form-group7">
                                            <label for="password" class="block">Confirmation <span
                                                    class="text-danger">(*)</span></label>
                                            <div :class="[errors.password ? 'input-group input-group-danger' :
                                                'input-group input-group-inverse'
                                            ]"
                                                data-toggle="tooltip" data-placement="top"
                                                :data-original-title="errors.password">
                                                <input type="password" class="form-control"
                                                    placeholder="Password Confirmation"
                                                    v-model="password_confirmation">
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-lock"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            </form>
                            <div class="modal-footer">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary" @click="update_information()">
                                        Save
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
                <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('js/iziToast.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript" src="{{ asset('js/jquery.datetimepicker.min.js') }}"></script>
                <script src="{{ asset('js/jspdf.debug.js') }}"></script>
                {{-- <script src="{{ asset('js/jsCalendar.js') }}"></script> --}}

                <!-- Core theme JS-->
                <script src="{{ asset('pages/user/js/scripts.js') }}"></script>
                <script type="text/javascript" src="{{ asset('js/animation.js') }}"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

                <script>
                    const app = new Vue({
                        el: '#app',
                        data() {
                            return {

                                fullname: '<?php if (Auth::user()) {
                                    echo Auth::user()->fullname;
                                } ?>',
                                email: '<?php if (Auth::user()) {
                                    echo Auth::user()->email;
                                } ?>',
                                telephone: '<?php if (Auth::user()) {
                                    echo Auth::user()->telephone;
                                } ?>',
                                address: '<?php if (Auth::user()) {
                                    echo Auth::user()->address;
                                } ?>',
                                username: '<?php if (Auth::user()) {
                                    echo Auth::user()->username;
                                } ?>',
                                password: '',
                                password_confirmation: '',



                                appointments: [],
                                selectedHourIndex: '',
                                selectedHour: '',
                                showBookingForm: false,
                                show_edit: false,
                                services: [],
                                questions: [],
                                selectedQuestion: '',
                                previousQuestions: [],
                                selectedService: '',
                                selectedServiceTemp: '',
                                employeeName: '',
                                password: '',
                                documents: [],
                                question_documents: '',
                                password_confirmation: '',
                                errors: [],
                                notifications: [],
                                available_hours: [],
                                selectedDate: '',
                                notifications_fetched: false,

                                photos: ['cnasfond.png', 'undraw_interview_re_e5jn.svg', 'Woman-booking-appointment.svg'],
                                currentPhotoIndex: 0,
                            }
                        },
                        methods: {
                            getStatusClass(status) {
                                if (status === 'PENDING') {
                                    return 'text-primary font-weight-bold';
                                } else if (status === 'CONFIRMED') {
                                    return 'text-success font-weight-bold';
                                } else if (status === 'CANCELED') {
                                    return 'text-danger font-weight-bold';
                                } else if (status === 'DONE') {
                                    return 'text-primary font-weight-bold';
                                } else if (status === 'DISMISSED') {
                                    return 'font-weight-bold';
                                }
                                return '';
                            },
                            getDayOfWeek(dateString) {
                                const dateObj = new Date(dateString);
                                const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
                                    'Saturday'
                                ];
                                return daysOfWeek[dateObj.getDay()];
                            },

                            fetchAppointments() {
                                axios.get('/getMyAppointments')
                                    .then(response => {
                                        this.appointments = response.data.appointments;
                                        console.log(response.data.appointments);
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            },
                            setDate() {

                                app.myCalendar.set("31/05/2023");
                                console.log('30/05/2023');
                            },
                            printDocuments() {
                                const printContents = document.querySelector('.col-4 .list-group').innerHTML;
                                const printWindow = window.open('', '', 'width=800,height=600');
                                printWindow.document.open();
                                printWindow.document.write(`
                  <html>
                    <head>
                      <title>Print</title>
                      <style>
                        @media print {
                          .hide-on-print {
                            display: none !important;
                          }
                          .checklist {
                            margin-bottom: 20px;
                            border: 1px solid #ccc;
                            padding: 10px;
                          }
                          .checklist-title {
                            font-size: 18px;
                            font-weight: bold;
                            margin-bottom: 10px;
                          }
                          .checklist-items {
                            margin-left: 20px;
                            list-style-type: none;
                          }
                          .checklist-items li {
                            margin-bottom: 5px;
                            position: relative;
                          }
                          .checklist-items li input[type="checkbox"] {
                            position: absolute;
                            left: -30px;
                            top: 3px;
                          }
                        }
                      </style>
                    </head>
                    <body>
                        <img src="{{ asset('images/documents.png') }}">
                      <div class="col-5 list-group"  style="position:absolute;    top: 175;
                left: 120;">

                        <div >

                          <ul >
                            ${printContents}
                          </ul>
                        </div>
                      </div>
                    </body>
                  </html>
                `);
                                printWindow.document.close();
                                printWindow.onload = function() {
                                    printWindow.print();
                                    printWindow.onafterprint = function() {
                                        printWindow.close();
                                    };
                                };
                            },
                            printAppointment(appointment) {

                                const doc = new jsPDF();
                                doc.setFontSize(11);
                                doc.setFontType("bold");


                                // Set the background image
                                const backgroundImage = new Image();
                                backgroundImage.src = 'images/appointment.png';

                                // Wait for the image to load
                                backgroundImage.onload = function() {
                                    doc.addImage(backgroundImage, 'png', 0, 0, 210,
                                        135);

                                    doc.text(123, 96.5, appointment.employee.fullname.toString());
                                    doc.text(132, 50, appointment.user.fullname.toString());
                                    doc.text(112, 57, appointment.user.email.toString());
                                    doc.text(155, 64, appointment.user.telephone.toString());
                                    doc.text(108, 83, appointment.user.structure.address.toString());
                                    doc.text(150, 90, appointment.employee.service.name.toString());
                                    doc.text(166, 104, appointment.appointment_datetime.toString().split(' ')[0]);
                                    doc.text(166, 111.6, appointment.appointment_datetime.toString().split(' ')[1]);
                                    doc.text(166, 111.6, appointment.appointment_datetime.toString().split(' ')[1]);
                                    var height = 60;
                                    appointment.question.documents.map((document, index) => doc.text(10, height + (index *
                                        5), '- ' + document.name.toString()));
                                    doc.save('appointment_ticket.pdf');
                                }
                            },
                            select_service(service) {
                                this.questions = service.questions.filter(question => question.question_id == null);


                            },
                            clear_documents() {
                                this.documents = [];
                            },
                            book_appointment() {
                                if (app.fullname != '') {
                                    axios.post('/createAppointment', {

                                            selected_date: app.selectedDate,
                                            selected_hour: app.selectedHour,
                                            selected_service_id: app.selectedService,
                                            question_id: app.selectedQuestion,
                                        })
                                        .then(function(response) {

                                            console.log(response.status);
                                            if (response.status === 200)
                                                app.notify('Booking Successful', 'Your Appointment is booked', 'green',
                                                    'topCenter',
                                                    'bounceInDown');

                                            app.printAppointment(response.data.appointment);
                                            console.log(response.data.appointment);
                                            app.selectedDate = '';
                                            app.selectedQuestion = '';


                                        }).catch(function(error) {

                                            if (error.response && error.response.data && error.response.data.message) {
                                                app.notify('Booking Failed', error.response.data.message, 'red',
                                                    'topCenter', 'bounceInDown');
                                            } else {
                                                app.notify('Booking Failed', 'An error occurred. Please try again.', 'red',
                                                    'topCenter', 'bounceInDown');
                                            }
                                            app.selectedDate = '';
                                            app.selectedQuestion = '';
                                        })

                                    ;
                                } else {
                                    window.location.href = '/login';
                                }
                            },
                            fetch_services() {
                                return axios.get('/getServices')
                                    .then(response => {
                                        this.services = response.data.services;
                                        console.log('Services fetched successfully');
                                        console.log(this.services);
                                        console.log(response.data.questions);
                                    })
                                    .catch();
                            },

                            fetch_questions(question) {
                                this.previousQuestions.push(question.id);
                                return axios.get('/getQuestions/' + question.id)
                                    .then(response => {
                                        this.questions = response.data.questions;
                                        app.selectedQuestion = question.id;
                                        console.log(response.data.questions);
                                    })
                                    .catch();
                            },
                            fetch_documents(question) {
                                return axios.get('/getQuestionDocuments/' + question.id)
                                    .then(response => {
                                        app.documents = response.data.question.documents;
                                        console.log('Documents fetched successfully');
                                        console.log(app.documents);
                                        console.log(response.data);
                                    })
                                    .catch();
                            },

                            fetch_previous_questions() {
                                console.log(this.previousQuestions);
                                this.previousQuestions.pop();
                                this.documents = [];
                                console.log(this.previousQuestions);
                                if (this.previousQuestions.length == 0) {
                                    this.select_service(this.selectedService);
                                    return;
                                }
                                return axios.get('/getQuestions/' + this.previousQuestions[this.previousQuestions.length - 1])
                                    .then(response => {
                                        this.questions = response.data.questions;
                                        console.log(response.data.questions);
                                    })
                                    .catch();
                            },
                            fetch_notifications() {
                                var app = this;

                                app.notifications_fetched = false;
                                return axios.get('/getNotifications')
                                    .then(function(response) {
                                        app.notifications = response.data.notifications;
                                        app.notifications_fetched = true;
                                        if (app.notifications.length > 0) {

                                        }
                                    });
                            },
                            update_information() {
                                var app = this;

                                axios.put('/update_information', {
                                        'username': app.username,
                                        'fullname': app.fullname,
                                        'email': app.email,
                                        'telephone': app.telephone,
                                        'address': app.address,
                                        'password': app.password,
                                        'password_confirmation': app.password_confirmation,
                                    })
                                    .then(function(response) {
                                        app.notify('Success', response.data.success, 'green', 'topCenter', 'bounceInDown');
                                        app.fullname = response.data.user.fullname;
                                        app.email = response.data.user.email;
                                        app.telephone = response.data.user.telephone;
                                        app.address = response.data.user.address;
                                        app.reset_form();

                                        app.fullname = response.data.user.fullname;
                                        app.email = response.data.user.email;
                                        app.telephone = response.data.user.telephone;
                                        app.address = response.data.user.address;
                                        app.reset_form();

                                    })
                                    .catch(function(error) {
                                        if (error.response) {
                                            console.log(error.response.data.errors);

                                            app.$set(app, 'errors', error.response.data.errors);
                                            app.notify('Erreurs!', 'Veuillez vérifier les informations introduites', 'red',
                                                'topCenter', 'bounceInDown');
                                        } else if (error.request) {
                                            console.log(error.request);
                                        } else {
                                            console.log('Error', error.message);
                                        }
                                    });
                            },

                            reset_form() {
                                this.password = '';
                                this.password_confirmation = '';
                                this.errors = [];

                            },

                            handleFilesUpload() {
                                this.decision_file = this.$refs.files.files;
                                this.decision_file_name = this.decision_file[0].name;
                                $('#decision-file').val(this.decision_file_name);

                            },
                            block(element) {
                                $('#' + element).block({
                                    message: '<div class="preloader3 loader-block">' +
                                        '<div class="circ1 loader-info"></div>' +
                                        '<div class="circ2 loader-info"></div>' +
                                        '<div class="circ3 loader-info"></div>' +
                                        '<div class="circ4 loader-info"></div>' +
                                        '</div>',
                                    css: {
                                        border: 'none',
                                        padding: '15px',
                                        backgroundColor: '',
                                        '-webkit-border-radius': '10px',
                                        '-moz-border-radius': '10px',
                                        opacity: 0.5,
                                        showOverlay: false,
                                    }
                                });
                            },

                            notify(title, message, color, position, transition) {
                                iziToast.show({
                                    title: title,
                                    message: message,
                                    position: position,
                                    color: color,
                                    transitionIn: transition,
                                    timeout: 3000,
                                    zindex: 9999999,
                                    'z-index': 9999999,
                                    targetFirst: true,
                                });



                            },
                            unblock(element) {
                                $('#' + element).unblock();
                            },

                            onClose() {

                                console.log('Modal closed');
                                this.showBookingForm = false;
                                this.documents = '';
                            },

                        },

                        computed: {
                            currentPhoto() {
                                return this.photos[this.currentPhotoIndex];
                            },
                            getAssetUrl() {
                                return `{{ asset('pages/user/assets/img/${this.photos[this.currentPhotoIndex]} ') }}`;
                            },
                        },
                        mounted() {
                            this.fetch_services();
                            this.fetchAppointments();
                            this.selectedServiceTemp = localStorage.getItem('selectedServiceTemp');
                            this.selectedHour = '';
                            $('#demo').datetimepicker({
                                date: new Date(),
                                startDate: new Date()

                                    ,
                                onDateChange: function() {

                                    console.log(this.getText('YYYY-MM-DD'));
                                    app.selectedDate = this.getText('YYYY-MM-DD');
                                    axios.post('/getAvailableHours', {
                                            selected_date: this.getText('YYYY-MM-DD')
                                        })
                                        .then(response => {
                                            console.log(response.data);
                                            app.available_hours = response.data.available_hours;
                                            app.selectedHour = '';
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });


                                }
                            }, );

                            // Add a button event

                            setInterval(() => {
                                this.currentPhotoIndex = (this.currentPhotoIndex + 1) % this.photos.length;
                            }, 5000);


                            const modalElement = document.querySelector('#servicesModal');
                            modalElement.addEventListener('hidden.bs.modal', this.onClose);
                        },
                        created() {
                            this.fetch_services();
                            this.fetchAppointments();
                            this.selectedServiceTemp = localStorage.getItem('selectedServiceTemp');
                        }


                    });
                </script>
            </div>
</body>

</html>
