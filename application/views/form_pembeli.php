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
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url().'index.php/admin/index';?>">Pempek Palembang</a>
            </div>
			</div>
			</nav>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Formulir Pembelian</h2>
                    <h3 class="section-subheading text-muted">Isi data diri Anda secara lengkap</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" enctype="multipart/form-data" method="post">
					
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div  class="form-group">
								<h6>Pesanan Pempek Lenjer : </h6>
                                    <input type="text" class="form-control"  name="lenjer2" id="lenjer2" value="<?php echo $this->input->post('lenjer'); ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
								<h6>Pesanan Pempek Kapal Selam :</h6>
                                    <input type="text" class="form-control"  name="kapalselam2" id="kapalselam2" value="<?php echo $this->input->post('kapalselam'); ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
								<h6> Pesanan Pempek Adaan :</h6>
                                    <input type="text" class="form-control" name="adaan2" id="adaan2"  value="<?php echo $this->input->post('adaan'); ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								<h6> Pesanan Pempek Kulit :</h6>
                                    <input type="text" class="form-control"  name="kulit2" id="kulit2" value="<?php echo $this->input->post('kulit'); ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								
								<h6> Total :</h6>
                                    <input type="text" class="form-control"  name="total" id="total" value="<?php  echo $this->input->post('thotal'); ?>" disabled >
                                    <p class="help-block text-danger"></p>
									
                                </div>
								<div class="form-group">
								<h6> Nomor Identitas :</h6>
                                    <input type="text" class="form-control" name="no_ktp" placeholder="Nomor ID KTP/Sejenisnya *"  required data-validation-required-message="Please enter your ID.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								<h6> Nama :</h6>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap Anda *" name="nama_user" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								<h6> Alamat :</h6>
                                    <input type="text" class="form-control" placeholder="Alamat dan Kode POS *" name="alamat_user" required data-validation-required-message="Please enter your address.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								<h6> Nomor Telepon :</h6>
                                    <input type="text" class="form-control" placeholder="Nomor yang bisa dihubungi *" name="no_hp" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
								<h6> Tanggal Di Ambil :</h6>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" name="tanggal_diambil" required data-validation-required-message="Harap masukan tanggal pengambilan.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
							
                           
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button  type="submit" value="submit" class="btn btn-xl">Submit</button>
                            </div>
							</form>
							
                        </div>
					
                </div>
            </div>
        
   

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
	<script>
		$(function () {
		  
			$("#lenjer2, #kapalselam2, #adaan2, #kulit2").on('input', function () {
				var text = $('#total');
				var lenjer2 = parseInt($('input[name=lenjer2').val());
				var kapalselam2 = parseInt($('input[name=kapalselam2').val());
				var adaan2 = parseInt($('input[name=adaan2').val());
				var kulit2 = parseInt($('input[name=kulit2').val());
				var total = lenjer2 + kapalselam2 + adaan2 + kulit2;
				text.val(total*4000);
				
			});
		})
	</script>

</body>

</html>
