<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Portfolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            {{-- <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#AOE">Area Of Expertise</a></li>
                    <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">{{ $fetch->title }}</div>
            <div class="masthead-heading text-uppercase">{{ $fetch->sub_title }}</div>
            <a class="btn btn-primary btn-xl text-uppercase"
                href="{{ asset('uploads/files/' . $fetch->resume) }}">Download Resume</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="AOE">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Area Of Expertise</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row text-center">

                @if (count($lists) > 0)

                    @foreach ($lists as $item)
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="<?php echo $item->icon; ?> fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">{{ $item->title }}</h4>
                            <p class="text-muted">{{ $item->description }}</p>
                        </div>
                    @endforeach

                @endif



            </div>
        </div>
    </section>

    <!-- Project Grid-->
    <section class="page-section bg-light" id="project">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Projects</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">

                @if (count($plists) > 0)

                    @foreach ($plists as $project)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Project item-->
                            <div class="project-item">
                                <a class="project-link" data-bs-toggle="modal" href="#projectModal"
                                    data-id={{ $project->id }} ">
                                    <div class=" project-hover">
                                    <div class="project-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" class="img-thumbnail" src="{{ asset('uploads/images/' . $project->pimage) }}" .
                             alt="..." />
                            </a>
                            <div class="project-caption">
                                <div class="project-caption-heading">{{ $project->pname }}</div>
                                <div class="project-caption-subheading text-muted"></div>
                            </div>
                        </div>
            </div>
            @endforeach

            @endif





        </div>
        </div>
    </section>

    <!-- Project Modals-->
    <!-- Project modal popup-->
    <div class="project-modal modal fade" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">



                           

                            <div class="modal-body">
                                <!-- Project details-->
                                <h3 class="text-uppercase" id="project-name"></h3>
                                <p class="item-intro text-muted"></p>

                                <div id="project-image"></div>

                                <p id="project-description"></p>

                                <ul class="list-inline">
                                    <li>
                                        <strong>Technology Uses:</strong>
                                        <p id="project-technology"></p>
                                    </li>

                                </ul>

                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg"
                            alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg"
                            alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg"
                            alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            $('.project-link').click(function() {

                var id = $(this).data('id');
        
                $.get('/product_detail/' + id, function(data) {
        
                    $('#project-name').html(data.pname);
                    $('#project-description').html(data.pdescription);
                    $('#project-technology').html(data.ptechnology);
                    var img = '<img class="img-fluid d-block mx-auto img-thumbnail" src="uploads/images/'+data.pimage+'" alt="..." />';
                    $('#project-image').html(img);

                      // console.log(data);
                });

            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
