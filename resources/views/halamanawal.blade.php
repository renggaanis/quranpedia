<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Qur'anPedia</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('public/homeawal/assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('public/homeawal/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Menu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header style="background-image: url(public/homeawal/assets/img/header.jpg)" class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Qur'anPedia!</div>
                <div class="masthead-heading text-uppercase" style="font-family: uthmani" >السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="http://localhost/webquranpedia/login">Kunjungi Website</a>
            </div>
        </header>
        <!-- Services-->
   <!--      <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">MENU</h2>
                    <h3 class="section-subheading text-muted">Website ini berisi tentang bab-bab berikut</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 250px; width: 400px"  class="img-fluid" src="{{ asset('public/homeawal/assets/img/portfolio/artikel.jpg')}}" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Artikel</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 250px; width: 400px" class="img-fluid" src="{{ asset('public/homeawal/assets/img/portfolio/event.jpg')}}" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Event</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 250px; width: 400px" class="img-fluid" src="{{ asset('public/homeawal/assets/img/portfolio/alquran.jpg')}}" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Baca Al-Qur'an</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 250px; width: 400px" class="img-fluid" src="{{ asset('public/homeawal/assets/img/portfolio/murotal.jpg')}}" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Murrotal</div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 250px; width: 400px" class="img-fluid" src="{{ asset('public/homeawal/assets/img/portfolio/bab.jpg')}}" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pemetaan Bab Al-Qur'an</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('public/homeawal/assets/img/team/av3.jpg')}}" alt="" />
                            <h4>Saidatul Maghfiroh</h4>
                            <p class="text-muted">Lead Designer</p>
                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('public/homeawal/assets/img/team/av2.jpg')}}" alt="" />
                            <h4>Erlina Eka Fitriani</h4>
                            <p class="text-muted">Lead Marketer</p>
                         
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('public/homeawal/assets/img/team/av1.jpg')}}" alt="" />
                            <h4>Rohmanialuhri Rengganis</h4>
                            <p class="text-muted">Lead Developer</p>
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Semoga dengan dibuatnya website ini dapat semakin meningkatkan iman kita kepada Allah SWT</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
       <!--  <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/logos/envato.jpg')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/logos/designmodo.jpg')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/logos/themeforest.jpg')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/logos/creative-market.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Contact-->
     
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Qur'anPedia 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals--><!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">ARTIKEL</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/artikel.jpg')}}" alt="" />
                                    <p>WEBSSITE INI TERSEDIA ARTIKEL-ARTIKEL ISLAMI DAN TENTU JUGA TERDAPAT REFERENSI DARI AYAT-AYAT YANG ADA DI AL-QUR'AN</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">EVENT</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/event.jpg')}}" alt="" />
                                    <p>WEBSITE INI JUGA MENYELENGGARAKAN EVENT YANG DAPAT DIIKUTI OLEH PENGGUNA SIAPA SAJA YANG TELAH MENDAFTAR DI AKUN INI
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">BACA ONLINE AL-QUR'AN</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/alquran.jpg')}}" alt="" />
                                    <p>WEBSITE INI TERSEDIA DAFTAR SURAT - SURAT AL-QUR'AN. JADI, PELANGGAN YANG TELAH MENDAFTAR DAPAT MEMBACA AL-QUR'AN SECARA ONLINE</p>
                                  
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Murrotal</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/murotal.jpg')}}" alt="" />
                                    <p> SELAIN WEBSITE INI MENYEDIAKAN BACAAN SURAT - SURAT AL-QUR'AN, WEBSITE INI JUGA MENYEDIAKAN AUDIO AL-QUR'AN, SEHINGGA PENGGUNA DAPAT MEMBACA SERTA MENDENGARKANNYA SECARA ONLINE</p>
                                    
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/05-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('public/homeawal/assets/img/close-icon.svg')}}" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">PEMETAAN BAB</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('public/homeawal/assets/img/portfolio/bab.jpg')}}" alt="" />
                                    <p>WEBSITE INI MENYEDIAKAN PEMETAAN DARI BAB BERDASARKAN SURAT DAN AYAT AL-QURAN YANG DAPAT DIKAITKAN DENGAN ARTIKEL DAN JUGA DAPAT DIMANFAATKAN UNTUK REFERENSI MENJALANI HIDUP</p>
                                   
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('public/homeawal/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{ asset('public/homeawal/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('public/homeawal/js/scripts.js')}}"></script>
    </body>
</html>
