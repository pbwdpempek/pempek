<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pempek Asli Palembang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script-->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'/assets/vendor/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url().'/assets/css/agency.min.css';?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Pempek Palembang</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Menu</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
					
					<li>
					<a class="page-scroll" href="#bayar">Pembayaran</a>
					</li>
                  
					<li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Selamat Datang!</div>
                <div class="intro-heading">Pempek Palembang Asli</div>
                <a href="#services" class="page-scroll btn btn-xl">Menu</a>
            </div>
        </div>
    </header>

    <!-- Menu Section -->
	
    <section id="services">
        <div class="container">
		
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Menu</h2>
                    <h3 class="section-subheading text-muted">Lihat Menu Kami</h3>
                </div>
            </div>
		<!--div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active"-->
            <div class="row text-center">
			<?php echo form_open('crud/tambah'); ?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="<?php echo base_url().'assets/img/pempek-lenjer.png';?>" width="130" height="100"/> 
                    </span>
                    <h4 class="service-heading">Pempek Lenjer</h4>
                    <p class="text-muted">Pempek lenjer adalah salah satu jenis atau ragam dari pempek yang terkenal khas dari Kota Palembang dan Sumatera Selatan pada umumnya.</p>
                <h5> Mau pesan? </h5>
				<h6> Masukan jumlah pesanan Anda dibawah ini</h6>
				<input type="number" name="lenjer" id="lenjer" >
				</div>
				<!--div class="carousel-item"-->
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       <img src="<?php echo base_url().'assets/img/pempek-kapalselam.jpg';?>" width="130" height="100"/>
                       
                    </span>
                    <h4 class="service-heading">Pempek Kapal Selam</h4>
                    <p class="text-muted">Jenis pempek yang terkenal adalah "pempek kapal selam", yaitu telur ayam yang dibungkus dengan adonan pempek dan digoreng dalam minyak panas.</p>
					<h5> Mau pesan? </h5>
					<h6> Masukan jumlah pesanan Anda dibawah ini</h6>
				<input type="number" name="kapalselam" id="kapalselam">
				</div>
				<!--/div-->
				<!-- <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       <img src="<?php echo base_url().'assets/img/pempek-kapalselam.jpg';?>" width="130" height="100"/>
                       
                    </span>
                    <h4 class="service-heading">Pempek Kulit</h4>
                    <p class="text-muted">Jenis pempek ini dari bahan kulit ikan.</p>
					<h5> Mau pesan? </h5>
					<h6> Masukan jumlah pesanan Anda dibawah ini</h6>
				<input type="number" name="kulit">
				</div> -->
                <!--div class="carousel-item"-->
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="<?php echo base_url().'assets/img/kulit.jpg';?>" width="100" height="100"/>
                    </span>
                    <h4 class="service-heading">Pempek Adaan</h4>
                    <p class="text-muted">Pempek adaan adalah salah satu jenis pempek khas dari Palembang yang tidak kalah populernya dari pempek kapal selam.</p>
                <h5> Mau pesan? </h5>
				<h6> Masukan jumlah pesanan Anda dibawah ini</h6>
				<input type="number" name="adaan" id="adaan" >
				</div>
            </div>
			<!--/div-->
			
			<!--/div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
			</div>
			<!-- masukan button nya disini -->
			<div class="col-lg-12 text-center">
            <div id="success"></div>
            <button  type="submit" value="login" class="btn btn-xl">BELI</button>
            </div>
			<?php echo form_close(); ?>
        </div>
    </section>

  
    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Tentang Kami</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url().'assets/img/about/1.jpg';?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><br><br>2017</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Berdiri sejak 2017 di Surabaya</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url().'assets/img/about/2.jpg';?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><br><br>Alamat</h4>
                                    <h4 class="subheading">Pempek Palembang</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Jalan Sidotopo Wetan Baru no.74<br>Surabaya</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url().'assets/img/about/3.jpg';?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Contact Person</h4>
                                    <h4 class="subheading">Hubungi Kami</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Cek Mini: 0813xxxxx<br>Syamsinar: 0813xxxxx<br>Nina Nandika:081xxxx</p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Jadilah
                                    <br>Pelanggan
                                    <br>Kami!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
	<!-- bayar -->
	
	<section id="bayar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Upload Bukti Pembayaran</h2>
                    <h3 class="section-subheading text-muted">Upload Bukti Pembayaran Anda Disini</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<?php echo form_open_multipart('crud/uppload'); ?>
                    <!--form action="<?php //echo site_url('login/aksi_login'); ?>" method="post"-->
                    <!--form action="<?php echo base_url().'crud/update'; ?>" enctype="multipart/form-data" method="post"-->
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div  class="form-group">
                                    <input type="text" class="form-control" placeholder="Isi identitas sesuai pada saat pembelian" name="no_ktp" id="no_ktp" required data-validation-required-message="Please enter your identity.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="file" name='gambar' id='gambar'>
									<p class="help-block text-danger"></p>
                                </div>
                                
                            </div>
                            
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button  type="submit" value="login" class="btn btn-xl">Upload</button>
                            </div>
                        </div>
					<?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

   
    <!-- Clients Aside >
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url().'assets/img/logos/envato.jpg'?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url().'assets/img/logos/designmodo.jpg';?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url().'assets/img/logos/themeforest.jpg';?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url().'assets/img/logos/creative-market.jpg'?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside-->

    <!-- Contact Section -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<?php echo form_open('login/aksi_login'); ?>
                    <!--form action="<?php //echo site_url('login/aksi_login'); ?>" method="post"-->
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div  class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <!--<div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>-->
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div> -->
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button  type="submit" value="login" class="btn btn-xl">Login</button>
                            </div>
                        </div>
					
					<?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Pempek Asli Palembang &copy; 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js';?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.min.js';?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url().'/assets/js/jqBootstrapValidation.js';?>"></script>
    <script src="<?php echo base_url().'/assets/js/contact_me.js';?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url().'/assets/js/agency.min.js';?>"></script>

</body>

</html>
