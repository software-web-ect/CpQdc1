@extends('layouts.app1')

@section('content')
    <!-- BASICS -->
    <meta charset="utf-8">
    <title>QDC Technologies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="js1/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css1/isotope.css" media="screen">
    <link rel="stylesheet" href="css1/flexslider.css" type="text/css">
    <link rel="stylesheet" href="js1/fancybox/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css1/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

    <link rel="stylesheet" href="css1/style.css">
    <!-- skin -->
    <link rel="stylesheet" href="skin/default.css">
</head>

<body>
<section id="header" class="appear"></section>
<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <div class="navbar-logo">
                <a href="#"><img data-0="width:155px;" data-300=" width:120px;" src="img1/pp-removebg-preview.png" alt=""></a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                <li><a href="/">Home</a></li>
                <li><a href="{!! url('/bout') !!}">About</a></li>
                <li class="active"><a href="{!! url('/capability') !!}">Capabilities</a></li>
                <li><a href="{!! url('/berita') !!}">News</a></li>
                <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                <li><a href="{!! url('/contacts') !!}">Contact</a></li>
            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</div>


<section id="intro2">
    <div class="intro-content">
        <h2>Capabilities</h2>
    </div>
</section>

<!-- about -->
<section id="about" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot">
            <div class="col-md-offset-1 col-md-9">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Specialist Service Capabilities</h2>
                    <h5>Qdc’s specialist capabilities have been gained from unique experiences within the delivery of large-scale telecommunications projects. These skills have been developed to ensure that a client’s operational network is delivered with minimal risk and maximum peace of mind.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mar-bot">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-screen">screen</a>
                    </div>
                </div>
                <h3 class="text-bold">Feasibility Research</h3>
                <p>Before undertaking many projects, it is essential to undertake feasibility studies to ensure the viability of the project. Qdc can offer additional assistance by providing services such as.</p>
                    <p>
                        Technology path engineering </p>
                        Network route selection</p>
                        Viability of technological alternatives
                    </p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-list">list</a>
                    </div>
                </div>
                <h3 class="text-bold">Consultancy</h3>
                <p>Qdc provides a range of value added consultancy services including surveys, auditing, testing and contract negotiations. In order to provide the most effective, reliable, customised solution, Qdc can bring together the skills and technologies appropriate to client’s individual needs. Qdc is able to offer a full consultative service grounded in decades of experience and proven expertise.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-images">images</a>
                    </div>
                </div>
                <h3 class="text-bold">Planning and Design</h3>
                <p>The depth of experience and skills within this group enables Qdc to design solutions that are achievable in all prevailing conditions, which meet and often exceed environmental, individual and health expectations. The service includes site surveying from which topographical maps are produced, environmental and heritage aspects researched and authorised, appropriate equipment sourced and project operation documentation is prepared.</p>

                <div class="clear"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-archive">archive</a>
                    </div>
                </div>
                <h3 class="text-bold">Project Management</h3>
                <p>All aspects of every project are the responsibility of a specific Qdc Project Manager. These responsibilities include delivery on time, on budget, on customer specification and to quality standards equal to the best in the world. Qdc is sufficiently flexible to mirror clients’ differing Project Management practices on a project-by-project basis if required.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-cog">Mobile</a>
                    </div>
                </div>
                <h3 class="text-bold">Material Management</h3>
                <p>Qdc has established partnerships for the provision and support of equipment. This is a distinct advantage in ensuring the best possible pricing and full life support of the equipment.</p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-clock">Faster</a>
                    </div>
                </div>
                <h3 class="text-bold">Contract Management</h3>
                <p>Qdc Contract Management staffs ensure that the primary task of all parties to the agreement is the management of project deliverables in accordance with the agreed contractual terms and conditions, hence minimising the commercial risk for the client. The meticulous management of all contracts within the project ensures a seamless delivery of projects worldwide.</p>

                <div class="clear"></div>
            </div>

        </div>
    </div>
</section>


<section id="section-about" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-1 col-md-9">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Optical Fibre</h2>
                    <h5>Highly skilled and efficient crews provide the expertise in aerial, subterranean and submarine optical fibre cables, providing an end to end solution for clients including design, installation, splicing, testing and commissioning. With both “single mode” and “multimode” expertise and with direct access to specialised cable installation plant and latest version test equipment, Qdc has seamlessly provided complex state of the art solutions for many clients understanding their diverse operational requirements.
                        Radio Networks.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-locked">locked</a>
                    </div>
                </div>
                <h3 class="text-bold">Radio Networks</h3>
                <p>Qdc undertakes engineering design in-house for all types of radio systems from single hop and trunk-ed radio, through to complex high capacity broadband microwave radio systems, as deployed in trunk and inter-capital city routes. Qdc can also undertakes a range of mobiles cell planning and design.<p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-location">location</a>
                    </div>
                </div>
                <h3 class="text-bold">Box with icon</h3>
                <p>Qdc can also design and manage the supply, installation, test and commissioning of all switches network.Qdc designs and installs to produce a fully integrated solution to match our clients’ telecommunications traffic and specific network applications.</p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-refresh">refresh</a>
                    </div>
                </div>
                <h3 class="text-bold">Power Transmission Lines</h3>
                <p>Qdc can also design and manage the supply, installation, test and commissioning of Electric Power Transmission for Low up to High 500 KV transmission.Qdc designs, installs and stringing conductor to produce a fully integrated power transmission solution to match our clients’ electric power load current voltage requirement.</p>
                <div class="clear"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-support">support</a>
                    </div>
                </div>
                <h3 class="text-bold">Power Substation</h3>
                <p>Qdc can also design and manage the supply, installation, test and commissioning of Electric Power Transmission for Low up to High 500 KV transmission.Qdc designs, installs and stringing conductor to produce a fully integrated power transmission solution to match our clients’ electric power load current voltage requirement.</p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-cog">Mobile</a>
                    </div>
                </div>
                <h3 class="text-bold">Building & Civilt</h3>
                <p>Qdc designs and provides all the necessary Building and civil works infrastructure required to support any network system, ranging from highly secure compounds and buildings through to a range of portable environmental equipment shelters specifically designed for use in the high temperature conditions.Qdc also undertakes a range of air conditioning and building engineering services, including specification and provision of building fire alarm, access control and security facilities.</p>
                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-user">user</a>
                    </div>
                </div>
                <h3 class="text-bold">Positive Reviews</h3>
                <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>

                <div class="clear"></div>
            </div>

        </div>
    </div>
</section>

<br/><br/><br/><br/><br/><br/>
<!--==========================
  Footer
============================-->
<section id="footer" class="section-footer">
    <div class="footer-top">
        <div class="container">
            <br/><br/><br/>
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-info">
                    <p>About Us</p>
                    <p>PT. Qdc Technologies began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company.</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <p>Useful Links</p>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{!! url('/bout') !!}">About us</a></li>
                        <li><a href="{!! url('/capability') !!}">Capability</a></li>
                        <li><a href="{!! url('/berita') !!}">News</a></li>
                        <li><a href="{!! url('/contacts') !!}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <p>Contact Us</p>
                    <p>
                        Gedung Graha Qdc Blok C</br>
                        Jl. Mampang Prapatan Raya No.28 Jakarta Selatan 12790</br>
                        <strong>Phone:</strong> (021) 79191234 / (021) 79193333<br>
                        <strong>Email:</strong> info@qdc.co.id<br>
                    </p>
                </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <p>Follow </p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/pages/PT-Qdc-Technologies/110904425594975" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <a href="https://www.instagram.com/qdctechnologies/?hl=id" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <a href="https://www.linkedin.com/company/pt-qdc-technologies/about/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <a href="https://github.com/pt-qdc-technologies" class="icoGithub" title="Github"><i class="fa fa-github-alt"></i></a></li>
                        </div></form>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            COPYRIGHT © 2019 <strong>. QDC TECHNOLOGIES </strong>
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
            -->
        </div>
    </div>
</section>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- Javascript Library Files -->
<script src="js1/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js1/jquery.js"></script>
<script src="js1/jquery.easing.1.3.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/jquery.isotope.min.js"></script>
<script src="js1/jquery.nicescroll.min.js"></script>
<script src="js1/fancybox/jquery.fancybox.pack.js"></script>
<script src="js1/skrollr.min.js"></script>
<script src="js1/jquery.scrollTo.min.js"></script>
<script src="js1/jquery.localScroll.min.js"></script>
<script src="js1/stellar.js"></script>
<script src="js1/jquery.appear.js"></script>
<script src="js1/jquery.flexslider-min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js1/main.js"></script>

</body>
@endsection
