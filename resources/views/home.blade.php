<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    {{-- contact form --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- / contact form --}}


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>My Personal portfolio</title>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>

<body>
    <div class="header-bg">
        <nav class="navbar navbar-expand-lg navbar-dark  nav2 fixed-top vv mobile-bg">
            <div class="container"> <a class="navbar-brand font-weight-bold" href="#about">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu2">
                        <li class="nav-item active2"> <a class="nav-link" href="#home">Home</a> </li>
                        <li class="nav-item active2"> <a class="nav-link" href="#about">About me</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#skillset">Skillsets</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#portfolio">Portfolio</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
                        <li class="nav-item"> <a class="nav-link btn btn-outline-info" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pt-5">
            <div class="container pt-5" id="home">
                <div class="row pt-5 position-relative">
                    <div class="position-absolute" style="top:166px; left:15px;"> <a href="">
                            <div class="kk shadow-sm"> <i class="lni lni-instagram-original"></i> </div>
                        </a> <a href="">
                            <div class="kk shadow-sm"> <i class="lni lni-linkedin"></i> </div>
                        </a> <a href="">
                            <div class="kk shadow-sm"> <i class="lni lni-dribbble"></i> </div>
                        </a> <a href="">
                            <div class="kk shadow-sm"> <i class="lni lni-github"></i> </div>
                        </a> </div>
                    <div class="position-absolute" style="top:366px; right:15px;">

                    </div>
                    <div class="col-lg-6 col-12 mx-auto text-center text-white">
                        <h1 class="font-weight-bold">I'am {{ @$getrecord[0]->name }}</h1>
                        <p class="lead mb-5">{{ @$getrecord[0]->description }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto text-center"> <img
                            src="{{ url('uploads/profile/' . @$getrecord[0]->profile) }}" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light pt-5" id="about">
        <div class="container pb-5">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2 class="h1 font-weight-bold mb-5">About me <span class="text-primary hh">.</span></h2>
                </div>
                <p>{{ @$info[0]->description }}</p>
                <div class="col-md-3">
                    <h1>Personal Info</h1>
                    <p class="mt-4">First Name: <b>{{ @$info[0]->first_name }}</b></p>
                    <p>Last Name: <b>{{ @$info[0]->last_name }}</b></p>
                    <p>Age: <b>{{ @$info[0]->age }}</b></p>
                    <p>Nationality: <b>{{ @$info[0]->nationality }}</b></p>
                </div>
                <div class="col-md-3">
                    <br>
                    <p class="mt-5">Address: <b>{{ @$info[0]->address }}</b></p>
                    <p>Phone: <b>{{ @$info[0]->phone }}</b></p>
                    <p>Email: <b>{{ @$info[0]->email }}</b></p>
                    <p>Languages: <b>{{ @$info[0]->languages }}</b></p>
                </div>

                <div class="col-md-6">
                    <h1>Educational Info</h1>
                    <p class="mt-4"><b>2020-2023</b>: {{ @$info[0]->degree }}
                    </p>
                    <p> <b>2018-2020</b>: {{ @$info[0]->plus_two }} </p>
                    <p><b>2017-2018</b>: {{ @$info[0]->sslc }} </p>
                </div>
                <a href="{{ route('pdf') }}" class="btn btn-outline-primary">DOWNLOAD CV <i
                        class="fa fa-download"></i></a>

            </div>

        </div>
    </div>
    <div class="bg-light pt-5" id="skillset">
        <div class="container pb-5">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2 class="h1 font-weight-bold mb-5">Skillset <span class="text-primary hh">.</span></h2>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="tt shadow-sm"> <i class="lni lni-code-alt"></i> </div>
                    <div class="p-5 shadow-sm border-radius-new bg-white">
                        <h4 class="font-weight-bold mb-3">Frontend</h4>
                        <p class="m-0">HTML,CSS,JAVASCRIPT,
                            jQuery,Bootstrap,AJAX</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="tt shadow-sm"> <i class="lni lni-code"></i> </div>
                    <div class="p-5 shadow-sm border-radius-new bg-white">
                        <h4 class="font-weight-bold mb-3">Backend</h4>
                        <p class="m-0">Laravel,PHP,CodeIgniter</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="tt shadow-sm"> <i class="lni lni-database"></i> </div>
                    <div class="p-5 shadow-sm border-radius-new bg-white">
                        <h4 class="font-weight-bold mb-3">Database</h4>
                        <p class="m-0">MySQL</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="tt shadow-sm"> <i class="lni lni-cloud-network"></i> </div>
                    <div class="p-5 shadow-sm border-radius-new bg-white">
                        <h4 class="font-weight-bold mb-3">VersionControl</h4>
                        <p class="m-0">GIT,Github</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="pt-5">
        <div class="container-fluid pb-5">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2 class="h1 font-weight-bold mb-5">Portfolio <span class="text-primary hh">.</span></h2>
                </div>
                <div class="col-12 portfolio owl-theme owl-carousel">
                    <div> <img src="https://annedece.sirv.com/Images/11.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/12.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/13.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/14.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/15.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/16.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/17.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                    <div> <img src="https://annedece.sirv.com/Images/18.jpg">
                        <h5 class="mb-3 mt-4"><a href="">New education website template</a></h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius
                            aliquet lorem nec consequat. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light pt-5" id="blog">
        <div class="container pb-5">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2 class="h1 font-weight-bold mb-5">Blog <span class="text-primary hh">.</span></h2>
                </div>
                <div class="col-md-4 col-12">
                    <div class="shadow-sm border-radius-new"> <img
                            src="https://images.pexels.com/photos/2433163/pexels-photo-2433163.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=640&w=426"
                            class="img-fluid">
                        <div class="p-4 bg-white border-radius-new">
                            <p class="m-0 text-muted">Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="shadow-sm border-radius-new"> <img
                            src="https://images.pexels.com/photos/733856/pexels-photo-733856.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=640&w=426"
                            class="img-fluid">
                        <div class="p-4 bg-white border-radius-new">
                            <p class="m-0 text-muted">Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="shadow-sm border-radius-new"> <img
                            src="https://images.pexels.com/photos/3954635/pexels-photo-3954635.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=640&w=426"
                            class="img-fluid">
                        <div class="p-4 bg-white border-radius-new">
                            <p class="m-0 text-muted">Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container pb-5">
            <div class="row py-5">
                <div class="col-lg-10 col-12 mx-auto text-center">
                    <div class="contact-image">
                        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
                    </div>
                    <h2 class="h1 font-weight-bold mb-3">Contact <span class="text-primary hh">.</span></h2>
                    <p class="lead">I'm eager to hear from you! I'm available for work</p>

                    {{-- contact form --}}
                    <div class="container contact-form">

                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="txtName" class="form-control"
                                            placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtEmail" class="form-control"
                                            placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtPhone" class="form-control"
                                            placeholder="Your Phone Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="sendbtn text-right">
                                            <input type="submit" name="btnSubmit" class="btnContact btn btn-danger"
                                                value="Send Message" />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{--  --}}

                    <div class="d-flex justify-content-around ll mt-5">
                        <a href="https://www.facebook.com/profile.php?id=100025087372422" target="_blank"><i
                                class="lni lni-facebook-filled"></i></a>
                        {{-- <a href=""><i class="lni lni-twitter-filled"></i></a> --}}
                        <a href="https://www.linkedin.com/in/-vishnu-k-/" target="_blank"><i
                                class="lni lni-linkedin-original"></i></a>
                        {{-- <a href=""><i class="lni lni-youtube"></i></a> --}}
                        <a href="https://github.com/Vishnuk1030" target="_blank"><i
                                class="lni lni-github-original"></i></a>
                        <a href="https://www.instagram.com/_vish_1030/" target="_blank"><i
                                class="lni lni-instagram-filled"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
