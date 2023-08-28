<!DOCTYPE html>
<html>
<head>
	<title>Portfolio||danndong</title>
    <link rel="shortcut icon" href="images/image.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/text.css')}}">

	  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/text.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<div class="heade">
			<a href="{{url('/')}}" class="home" style="text-decoration: none" onmouseover="this.style.color='white'" onmouseout="this.style.color='lime'">DanTECH</a>
		</div>
		 <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarNav">
	       <ul class="navbar-nav ml-auto pl-5 pr-5 mr-5">
				<li class="nav-item active" style="">
					<a class="nav-link font-weight-bold" href="{{url('index')}}" style="color:lime">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bold" href="#profile" style="">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bold" href="#projects" style="">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bold"  href="#contacts" style="">Contact Me</a>
				</li>
			</ul>
</div>
</nav>
<div class="container-fluid col-md-10 mt-4 mb-5">
	<div class="row">
		<div class="col-md-4 mt-5 ">
			<h3>HI THERE ......</h3>
			<h4>I'am Dan Nyatado Ndong</h4>
			<h6>A Software Engineer.</h6>
			<p>I'm a professional software developer with front and backend development skills based in Eldoret kenya.</p>
			<a href="mailto:danndong080@gmail.com"><input type="button" name="submit" value="Hire Me." class="btn"></a>
            <a href="{{url('download')}}" class="btn text-dark font-weight-bold">Download Resume</a>
		</div>
		<div class="col-md-6">
			<img src="images/image.jpg" class="img-fluid">
		</div>
	</div>
</div>
{{-- profile article part--}}
<div class="container-fluid col-md-10 mt-5" id="profile">
	<h4 class="text-center font-weight-bold" style="font-size:30px;text-transform:uppercase;text-decoration:underline">Here is a little bit of myself and journey as a software engineer</h4>
	<p class="text-center">My name is <span class="font-weight-bold" style="color: limegreen;">Dan Nyatado Ndong</span>. A guy passionate and enthusiast in technology. My journey started back in when i as in high school. I fell in love with tech since the first class of computer in school. Since then my interest has gradually grown.
	I chose to pursue computer science so as to follow my career interest. From introduction to computure, algorithms, data structures, dicrete mathematic,algebra,database management,responsive web design,neural networks,data mining,procedural programming and OOP programming just but to name a few. I was really exposed to different technologies that really helped me grow on my path.</p>
	<p>I am more confident in both fontend and backend development.</p>
	<p>I have perfect understanding in the following development languages.</p>
	<li style="color:white;" class="font-weight-bold">HTML</li>
	<!-- <div class="progress"><div class="progress-bar" style="width: 78%;">78%</div></div> -->
	<li style="color:white;" class="font-weight-bold">CSS</li>
	<li style="color:white;" class="font-weight-bold">BOOTSTRAP</li>
	<li style="color:white;" class="font-weight-bold">PHP</li>
	<li style="color:white;" class="font-weight-bold">Laravel</li>
	<li style="color:white;" class="font-weight-bold">MYSQL</li>
	<li style="color:white;" class="font-weight-bold">DART</li>
	<li style="color:white;" class="font-weight-bold">C & C++</li>
	<li style="color:white;" class="font-weight-bold">JavaScript</li>
	<li style="color:white;" class="font-weight-bold">DART</li>
	<li style="color:white;" class="font-weight-bold">FLUTTER</li>
	<p>I am currently learning the following languages</p>
	<li style="color:white;" class="font-weight-bold">Node Js</li>
	<li style="color:white;" class="font-weight-bold">Vue Js</li>
	<ul style="color:white;" class="font-weight-bold"></ul>
	</div>
    {{-- projects article part --}}
    <div class="container-fluid portfolio" id="projects">
        <h5 class="text-center font-weight-bold text-white mt-5" style="font-size:25px;text-transform:uppercase;text-decoration:underline">The Follwoing are the projects that i have worked on and some are current on the process</h5>
        <div class="row">
        <div class="card-header col-md-4">
            <h5 class="text-center text-white">Cyber Management System</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="{{asset('images/cyber.png')}}" class="img-fluid" alt="">
            {{-- onmouseover="this.style.opacity='.5'" --}}
            <div class="portfolio-info">
            <h4>Cyber Management System</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/rental.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">Rental Management System</h5>
            <div class="card-body portfolio-wrap">
            <img src="images/rental.png" class="img-fluid" alt="">
             <div class="portfolio-info">
            <h4>Rental Management System</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/rental.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">High School Website</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="images/school.png" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>High School Website</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/school.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">School mangement System</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="images/project.png" class="img-fluid" alt="">
             <div class="portfolio-info">
            <h4>School Management System</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/project.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">Betting site</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="images/betting.PNG" class="img-fluid" alt="">
             <div class="portfolio-info">
            <h4>Betting Site</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/betting.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">Portfolio</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="images/portfolio.PNG" class="img-fluid" alt="">
             <div class="portfolio-info">
            <h4>Portfolio</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/portfolio.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 mt-3">
            <h5 class="text-center text-white">Airline management system</h5>
            <div class="card-body">
            <div class="card-body portfolio-wrap">
            <img src="images/air.png" class="img-fluid" alt="">
             <div class="portfolio-info">
            <h4>Airline Management System</h4>
            <p>Web system</p>
            <div class="portfolio-links">
              <a href="images/air.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="projects.php" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        </div>
    </div>
    </div>
</div>
	<div class="container-fluid col-md-10" id="contacts">
        <h4 class="text-center font-weight-bold text-white mt-5" style="font-size:25px;text-transform:uppercase;text-decoration:underline">Contact me Here</h4>
		<div class="row">
            <div class="col-md-8">
                <h4 style="text-decoration:underline"><span>Submit your feed back here</span></h4>
                @if(session()->has('message'))
                <p class="text-success font-weight-bold">{{session()->get('message')}}</p>
                    @endif
                <form action="{{url('comments')}}" method="POST">
                    @csrf
                    @method('GET')
                    <label class="text-white font-weight-bold">Full Name :</label>
                    <input type="text" name="fullname" placeholder="Enter your full name" class="form-control">
                    @if ($errors->has('fullname'))
                    <span class="text-danger">{{$errors->first('fullname')}}</span><br>
                    @endif
                    <label class="text-white font-weight-bold">Email :</label>
                    <input type="email" name="email" placeholder="Enter your email address" class="form-control">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span><br>
                    @endif
                    <label class="text-white font-weight-bold">Message :</label>
                    <textarea maxlength="200" class="form-control" name="message"></textarea>
                    @if ($errors->has('message'))
                    <span class="text-danger">{{$errors->first('message')}}</span><br>
                    @endif
                    <input type="submit" value="SUBMIT" class="mt-3 form-control text-dark font-weight-bold btn btn-light">
                </form>
            </div>
		<div class="col-md-2">
			<h4 class=""><span>Get Me</span> On</h4>
			<div class="row">
			<a href="https://www.facebook.com/profile.php?id=100009186041825"  class="mx-5" target="_blank"><i class="fa-brands fa-facebook"> </i> FaceBook</a>
		</div>
		<div class="row">
			<a href=""  class="mx-5"><i class="fa-brands fa-twitter"> </i> Twitter</a>
		</div>
			<div class="row">
			<a href="https://www.instagram.com/ndong.dan/" class="mx-5"><i class="fa-brands fa-instagram"> </i> Instagram</a>
		</div>
			<div class="row">
			<a href=""  class="mx-5"><i class="fa-brands fa-youtube"> </i> YouTube</a>
		</div>
			<div class="row">
			<a href="https://www.linkedin.com/in/dan-ndong-185378210"  class="mx-5"><i class="fa-brands fa-linkedin"> </i> LinkedIn</a>
		</div>
			<div class="row">
			<a href="https://www.github.com/nyatado98/"  class="mx-5"><i class="fa-brands fa-github"> </i> GitHub</a>
		</div>
		</div>
	</div>
</div>
<div class="footer">
    <div class="">
        <p class="text-center font-weight-bold mt-4"><small>Developed and maintained by Dan Ndong &copy <?php echo date('Y');?> All Rights Reserved.</small></p>
    </div>
        <div class="row col-12">
            <p class="text-center" >
                <a style="text-align: center;color:lawngreen" href="Tel:254726585782"><i class="fa-solid fa-phone mx-3"> </i> Call Me</a>
            </p>
    </div>
</div>
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>