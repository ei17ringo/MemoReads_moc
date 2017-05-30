<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
    <link href="css/share.css" rel="stylesheet" />
     <link href="css/header.css" rel="stylesheet" />
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
  <?php include('header.php'); ?>

	<section id="contact-page">
	<div class="kabe">
	<div class="container">
			<div class="row main">
			 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
						<h3>プロフィール編集</h3>
							<label for="name" class="cols-sm-2 control-label">名前</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name"/>
								</div>
							</div>
						</div>

						
						<p>アバター選択</p>
						<div class="col-xs-4">
        				<img src="images/IMG_0243.jpg" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">lion</button>
        				<input type="checkbox" id="left-item" class="hidden">
        			</div>
        			        			<div class="col-xs-4">
        				<img src="images/IMG_0243.jpg" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">cat</button>
        				<input type="checkbox" id="middle-item" class="hidden">
        			</div>
        			<div class="col-xs-4">
        				<img src="images/IMG_0243.jpg" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">dog</button>
        				<input type="checkbox" id="right-item" class="hidden">
        			</div>

						<div class="form-group">
							<label for="bestbook" class="cols-sm-2 control-label">ベスト本</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="bestbook"  placeholder="Enter your favorite"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="job" class="cols-sm-2 control-label">職業</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="job"  placeholder="Enter your job"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="hobby" class="cols-sm-2 control-label">趣味</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-star" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="hobby"  placeholder="Enter your hobby"/>
								</div>
							</div>
						</div>
												<div class="form-group">
							<label for="like" class="cols-sm-2 control-label">好きな作家</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="like"  placeholder="Enter your like"/>
								</div>
							</div>
						</div>
						<div class="form-group">
                   

						
							<label for="password" class="cols-sm-2 control-label">尊敬している偉人</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your respect"/>
								</div>
							</div>
						
 </div>
						<div class="form-group ">
					<label for="comment" class="cols-sm-2 control-label">ひとこと</label>
                    <textarea class="form-control" id="comment" rows="3" placeholder="comment" required></textarea>
                </div>

							
						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button cols-sm-2">変更</button>
						</div>
					
					</form>
				</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </section><!--/#contact-page-->
	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Developers</h2>
                <div class="footer">
            <div class="container">
                <!-- <div class="container"> -->
            <div class="developers">
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/rimiko.JPG">
                        <div><img class="image-circle" src="images/rimiko.JPG"> </div>    
                        <h2>Rimiko Fukumitsu</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                        <div><img class="image-circle" src="images/naru.JPG"></div>    
                        <h2>Naru<br> Nishimura</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
                        <div><img class="image-circle" src="images/atsushi.JPG"></div>    
                        <h2>Atsushi Miyamoto</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                        <div><img class="image-circle" src="images/IMG_1696.jpg"></div>    
                        <h2>Ayumi <br>Maeda</h2>
                        
                    </div>
                </div>
            </div>
        </div>
	<!-- <footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
             <!--                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>  -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>