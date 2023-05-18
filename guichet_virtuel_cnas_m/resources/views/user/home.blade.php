<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CNAS - VIRTUAL COUNTER</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/animate.css/css/animate.css') }}">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('pages/user/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body >
      <div id="app">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" >@{{ fullname }}</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Services</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ asset('pages/user/assets/img/avataaars.svg') }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">CNAS - VIRTUAL COUNTER</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
            </div>
        </header>

 

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5" v-for="(service , index) in services" :key="index">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            {{-- <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div> --}}
                            <div class="card" style="width: 18rem;">
                              
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" v-on:click="selectedService=service,select_service(service)">Go somewhere</a>
                              </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Freelancer is a free bootstrap theme created by CNAS - VIRTUAL COUNTER. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">CNAS - VIRTUAL COUNTER</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">@{{selectedService.name}}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                      <div class="col-10 card align-items-center">
                                       
                                        <div class="col-8 list-group card-body text-center " id="list-tab" role="tablist">
                                          <a v-for="(question,index) in questions" 
                                          :key="index" :class="[ selectedQuestion == index? 'list-group-item list-group-item-action active' :  'list-group-item list-group-item-action']" 
                                          id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" v-on:click="fetch_questions(question)">@{{question.content}}</a>
                                          
                                        </div>
                                      </div>
                                      <br/>
                                      <br/>
                                      <button class="btn btn-primary"  v-on:click="fetch_previous_questions()">
                                        <i class="fas fa-back fa-fw"></i>
                                       back
                                    </button>
                                    </div>
                                    <br/>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
  
      
  
        <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('pages/user/js/scripts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/animation.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    
            <script>
              const app = new Vue({
                  el: '#app',
                  data() {
                      return {
                        show_edit :false,
                          fullname:'testttttt',
                          services:[],
                          questions:[],
                          selectedQuestion:'',
                          previousQuestion:'',
                          selectedService:'',
                          password:'',
                          password_confirmation:'',
                          errors:[],
                          notifications: [],
                          notifications_fetched: false,
                      }
                  },
                  methods: {
                    select_service(service) {
                              this.questions = service.questions.filter(question => question.question_id==null);
                    
                           
                          },
                    fetch_services() {
                              return axios.get('/getServices')
                                  .then(response => {
                                      this.services = response.data.services;
                                      // selectedQuestion = services[0].question;
                                      console.log('Services fetched successfully');
                                      console.log(this.services);
                                      console.log("dazdazd");
                                      console.log(response.data.questions);
                                  })
                                  .catch();
                          },
                    fetch_questions(question) {
                              return axios.get('/getQuestions/'+question.id)
                                  .then(response => {
                                    previousQuestion = question;
                                      // this.questions = response.data.questions;
                                      this.questions =  response.data.questions;
                                      // selectedQuestion = services[0].question;
                                      // this.selectedQuestion = question;
                                      console.log(response.data.questions);
                                  })
                                  .catch();
                          },
                    fetch_previous_questions() {
                              return axios.get('/getQuestions/'+previousQuestion.id)
                                  .then(response => {
                              
                                      // this.questions = response.data.questions;
                                      this.questions =  response.data.questions;
                                      // selectedQuestion = services[0].question;
                                      // this.selectedQuestion = question;
                                      console.log(response.data.questions);
                                  })
                                  .catch();
                          },
                      fetch_notifications() {
                          var app = this;
                          
                          app.notifications_fetched =  false;
                          return axios.get('/getNotifications')
                              .then(function (response) {
                                  app.notifications = response.data.notifications;
                                  app.notifications_fetched =  true;
                                  if (app.notifications.length > 0) {
                                     
                                  }
                              });
                      },
                          update_information(){
                          var app = this;
          
                          axios.put('/update_information', {
                              'fullname':app.fullname,
                              'email':app.email,
                              'telephone':app.telephone,
                              'address':app.address,
                              'password':app.password,
                              'password_confirmation':app.password_confirmation,
                          })
                          .then(function (response) {
                          notify('Succès',response.data.success,'green', 'topCenter','bounceInDown');
                          app.fullname= response.data.user.fullname ;
                          app.email=response.data.user.email;
                          app.telephone=response.data.user.telephone;
                          app.address=response.data.user.address;
                          app.reset_form();
          
                          })
                          .catch(function (error) {
                              if (error.response) {
                                  //app.errors = error.response.data.errors;
                                  console.log(error.response.data.errors);
          
                                  app.$set(app,'errors', error.response.data.errors);
                              notify('Erreurs!','Veuillez vérifier les informations introduites','red', 'topCenter','bounceInDown');
                              } else if (error.request) {
                                  console.log(error.request);
                              } else {
                                  console.log('Error', error.message);
                              }
                          });
                      },
                      reset_form(){
                      
                         
                          this.password='';
                          this.password_confirmation='';
                          this.errors=[];
                          
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
                      unblock(element) {
                          $('#' + element).unblock();
                      },
          
                  },
                  mounted() {
                      this.fetch_services();
                  },
                  created() {
                      this.fetch_services();
                  }
          
          
              });
          
          </script>
      </div>
    </body>
</html>
