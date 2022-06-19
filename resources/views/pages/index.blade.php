<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Portfolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/images/logo.png') }}" />
    <!-- Font Awesome icons (free version)-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <a class="navbar-brand" href="{{ route('myportfolio') }}"><img
                    src="{{ asset('uploads/images/logo.png') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#AOE">Area Of Expertise</a></li>
                    <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#WE">Work Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">{{ $fetch->title }}</div>
            <div class="masthead-heading text-uppercase"><span class="type-effect"></span></div>
            <a class="btn btn-primary btn-xl text-uppercase"
                href="{{ asset('uploads/files/' . $fetch->resume) }}">Download Resume</a>
        </div>
    </header>

    <!-- Area Of Experience-->
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
                                    <div class="       project-hover">
                                    <div class="project-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" class="img-thumbnail"
                                src="{{ asset('uploads/images/' . $project->pimage) }}" . alt="..." />
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

                                <strong>Functionality:</strong>
                                <p id="project-description"></p>

                                <ul class="list-inline">
                                    <li>
                                        <strong>Development Tools:</strong>
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



    <!-- Work Experience-->
    <section class="page-section" id="WE">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Work Experiences</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            @if (count($elists) > 0)
                @foreach ($elists as $value => $experience)
                    <ul class="timeline">

                        @if (($value + 1) % 2 == 0)
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="timeline-image rounded-circle z-depth-2"
                                        src="{{ asset('uploads/logos/' . $experience->company_logo) }}"
                                        alt="..." />
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>{{ $experience->company_name }}</h3>
                                        <h6>{{ $experience->position }}</h6>
                                        <h6 class="subheading">{{ $experience->period }}</h6>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $experience->jdescription }}</p>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <div class="timeline-image"><img class="timeline-image rounded-circle z-depth-2"
                                        src="{{ asset('uploads/logos/' . $experience->company_logo) }}"
                                        alt="..." />
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>{{ $experience->company_name }}</h3>
                                        <h6>{{ $experience->position }}</h6>
                                        <h6 class="subheading">{{ $experience->period }}</h6>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $experience->jdescription }}</p>
                                    </div>
                                </div>
                            </li>
                        @endif

                    </ul>
                @endforeach
            @endif

        </div>
    </section>

    {{-- <!-- Clients-->
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
    </div> --}}


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Me</h2>

                 <!-- FeedBack Message-->
                <div class="row">
                   
                    @include('alert.message');
                </div>

            </div>

            <div class="row">

                @if (count($personal_info) > 0)

                    @foreach ($personal_info as $personal_info)
                    @endforeach

                @endif

                <div class="col-md-6">

                    <div class="card text-center mt-3" style="max-width: 600px; height:250px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('uploads/images/' . $personal_info->image) }}"
                                    class="img-fluid rounded-circle" style="max-width: 500px; height:240px;"
                                    alt="...">
                            </div>
                            <div class="col-md-8 mt-4">
                                <div class="card-body">

                                    <h3 class="card-title">{{ $personal_info->name }}</h3>
                                    <p class="card-text mb-2">{{ $personal_info->designation }}</p>
                                    <p class="card-text mb-2"><strong>{{ $personal_info->company }}</strong></p>
                                    <p class="card-text mb-2"><i class="fa-solid fa-envelope"
                                            style="margin-right:10px"></i>{{ $personal_info->email }}</p>
                                    <p class="card-text mb-2"><i class="fa-solid fa-id-badge"></i> +88
                                        {{ $personal_info->contact }}</p>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 mt-3">

                    <form action="{{ route('feedback.store') }}" method="POST" id="contactForm">
                        @csrf

                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <input class="form-control" name="name" id="name" type="text"
                                        placeholder="Your Name *" required />

                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Your Email *" required />
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <input class="form-control" name="phone" id="phone" type="tel"
                                        placeholder="Your Phone *" required />

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <!-- Message input-->
                                    <textarea class="form-control" name="message" id="message" placeholder="Your Message *" required></textarea>

                                </div>
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="text-center">
                            <button class="btn btn-primary btn-xl text-uppercase" id="submitButton"
                                type="submit">Send
                                Message</button>
                        </div>
                    </form>


                </div>



            </div>

        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start"><strong>Copyright &copy; Developed By <a href="https://www.linkedin.com/in/ashikur-rahaman-a9914b184">Ashikur Rahaman</a></strong></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    {{-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a> --}}
                    <a class="btn btn-dark btn-social mx-2" href=" {{ $personal_info->facebook }}"
                        aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="{{ $personal_info->linkdin }}"
                        aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    {{-- <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a> --}}
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            $('.project-link').click(function() {

                var id = $(this).data('id');

                $.get('/project_detail/' + id, function(data) {

                    $('#project-name').html(data.pname);
                    $('#project-description').html(data.pdescription);
                    $('#project-technology').html(data.ptechnology);
                    var img =
                        '<img class="img-fluid d-block mx-auto img-thumbnail" src="uploads/images/' +
                        data.pimage + '" alt="..." />';
                    $('#project-image').html(img);

                    // console.log(data);
                });

            });
        });
    </script>

     <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

     <script>

         var typed = new Typed(".type-effect",{
           strings:["{{ $fetch->sub_title }}"],
           typeSpeed:100,
           backSpeed:100,
           loop:true
         })

     </script>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>
