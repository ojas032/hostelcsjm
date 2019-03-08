<html>
<!-------Header-------------->
<head>

  <style type="text/css">
    #myBtn {
      height:70px;
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 10px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: hotpink; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
  </style>
	<!------scripts-------------->
	<link rel="stylesheet" href="boys.css">
	<link rel="stylesheet" href="w3.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico|Ubuntu|Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


<div class="sah">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
</div>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<!----------scriptaend-------------------->


	<!---------javascript---------->
<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
   



	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<!--------end-------->



<title>CSJM BOYS Hostel</title>
</head>


<body>
	<!---logo and name---->
<div id="logo">
	<img src="img/logo.png"  class="w3-circle w3-hover-grayscale csjm" width="85px" >
	<h1 id="title">Chhatrapati Shahu Ji Maharaj University,Kanpur</h1>
</div>	


<!------buttonhostel--->




<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#boys">Boys-Hostel</a>
  <a href="#girls">Girls-Hostel</a>
  <a href="testing.php">Notice</a>
 
  <a href="#facility">Facility</a>
  <a href="#contact">Contact Us</a>
   <a href="#about">About Us</a>
 

</div>
<span style="font-size:30px; cursor:pointer " class="nav" onclick="openNav()">&#9776;</span>











<div class="w3-container list cont"  >
		<ul id="menu" >
		<li style="font-size: 20.5px;padding-right:15px;"><a href="#boys">Boys-Hostel</a></li>
		<li style="font-size: 20.5px;padding-right: 15px;"><a href="#girls">Girls-Hostel</a></li>
    <li style="font-size: 20.5px;padding-right: 15px;"><a href="testing.php">Notice</a></li>
    <li style="font-size: 20.5px;padding-right: 15px;"><a href="#facility">Facility</a></li>
		
		
		<li style="font-size: 20.5px;padding-right: 15px;"><a href="#contact">Contact Us</a></li>
    <li style="font-size: 20.5px;padding-right: 15px;"><a href="#about">About-Us</a></li>s
    

</ul>  

<!----slider---->


<div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel" >
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 care" src="img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 care" src="img/imgc2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 care" src="img/imgc3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!----silder---->

<!----AboutUs--->

<br>
<br>

<h1 class="about" id="about" >About Us</h1>
<div class="abapara" align="center" >
<p class ="para1" align="center">There are SIX hostels for Boys and Girls with capacity to accomodate 1114 students . All the hostels have mess facilities at very moderate rates, 24 hour power supply, common hall, Gym for Boys and Girls hostellers, R O Drinking water, Newspapers in hostel, First-aid and ambulance facility, recreational and sports facilities with a tight security system. The students are allowed to use their own computer in the rooms. Our aim is to to provide hostellers homely atmosphere.</p>

</div>
</div>
<!---factsandstas----->
<button onclick="topFunction()" id="myBtn" title="Go to top" style="float: left; position:fixed; z-index: 1;top: 600px; "><i class="fa fa-arrow-up" style="font-size:36px"></i></button>


<div class="facts">
	<h3 class="factstext">Facts and Statistics</h3>

	<i class='fas fa-female use idiuser'></i>
	<h3 class="girls ">Girls Hostel<br>514 Seats</h3>
	
	<i class='fas fa-building use indibuild'></i>
	<h3 class="text" >2 Boys Hostels <br>4 Girls Hostels</h3>

	<i class='fas fa-male use imdimale'></i>
	<h3 class="boys ">Boys Hostel<br><i>&nbsp</i><i>&nbsp</i>600 Seats</h3>

</div>
<!-------------disable----------------->

<!---------boyshostel------------>

<h2 class="detailsboys" id="boys">Boys Hostel</h2>


<div class="setter">


<div class="boysdetails" style="background-color:#B4A0FF">

<h4 class="shiva"><strong>Shivaji Boys Hostel:- 400 Seats</strong></h4>
	<br>
<h4 class="shivau"><strong>It has Four Blocks A,B,C,D respectively:-</strong></h4>
<br>
<ul class="tli">
<li>A-Block</li>
<ul>
	<li>Ground-Floor has 12 two seater rooms</li>
	<li>First Floor has 12 two seater rooms +1 triple seater room</li>
	<li>Second Floor has 12 two seater rooms +1 triple seater room</li>
</ul>
<br>
<li>B-Block</li>
<ul>
	<li>Ground-Floor has 19 two seater rooms</li>
	<li>First Floor has 20 two seater rooms +1 triple seater room</li>
	<li>Second Floor has 20 two seater rooms +1 triple seater room</li>
</ul>
<br>
<li>C-Block</li>
<ul>
	<li>Ground-Floor has 12 two seater rooms</li>
	<li>First Floor has 12 two seater rooms +1 triple seater room</li>
	<li>Second Floor has 12 two seater rooms +1 triple seater room</li>
</ul>
<br>
<li>D-Block</li>
<ul>
	<li>Ground-Floor has 19 two seater rooms</li>
	<li>First Floor has 20 two seater rooms +1 triple seater room</li>
	<li>Second Floor has 20 two seater rooms +1 triple seater room</li>
</ul>
</ul>
</div>


<!------secondhostel-------->

<div class="swarn">
	
<div class="boysdetails2" style="background-color:#B4A0FF">

<h4 class="shiva"><strong>Swarn Jayanti Boys Hostel:- 200 Seats</strong></h4>
	<br>
<h4 class="shivau"><strong>It has Two Blocks A,B respectively:-</strong></h4>
<br>
<ul class="tli">
<li>A-Block</li>
<ul>
	<li>Ground-Floor has 14 two seater rooms</li>
	<li>First Floor has 18 two seater rooms </li>
	<li>Second Floor has 18 two seater rooms </li>
</ul>
<br>
<li>B-Block</li>
<ul>
	<li>Ground-Floor has 14 two seater rooms</li>
	<li>First Floor has 18 two seater rooms </li>
	<li>Second Floor has 18 two seater rooms </li>
</ul>
</ul>
</div>

</div>

</div>
<!-------setter--------->

<div class="settertwo">
	
<h2 style="text-align: center; " class="girlshost" id="girls" >Girls Hostel</h2>


<!------blocka--------->

<div class="gangadetails" style="background-color: #FFA0CA">
	<h2 style="font-family: 'Open Sans', sans-serif;" class="hed"><strong>Ganga:- 72 seats</strong></h2>
	<ul class="ganga">
	<li>A-Block</li>
	<ul>
	<li>Ground-Floor has 18 two seater rooms</li>
	<li>First Floor has 18 two seater rooms </li>
</ul>	

</ul>
	
</div>
<!------trivini-------->

<div class="tridetails" style="background-color: #FFA0CA">
	<h2 style="font-family: 'Open Sans', sans-serif; " class="hed"><strong>Trivini:- 108 seats</strong></h2>
	<ul class="ganga">
	<li>A-Block</li>
	<ul>
	<li>Ground-Floor has 27 two seater rooms</li>
	<li>First Floor has 27 two seater rooms </li>
</ul>	

</ul>
	
</div>


<!------------saraswati--->

<div class="saraswati" style="background-color: #FFA0CA">
	<h2 style="font-family: 'Open Sans', sans-serif; " class="hed"><strong>Saraswati:- 218 seats</strong></h2>
	<ul class="ganga">
	<li>A-Block</li>
	<ul>
	<li>Ground-Floor has 37 two seater rooms</li>
	<li>First Floor has 36 two seater rooms </li>
	<li>Second Floor has 36 two seater rooms </li>

</ul>	

</ul>
	
</div>
<!--------kaveri------------>
<div class="kaveridetails" style="background-color: #FFA0CA ">
	<h2 style="font-family: 'Open Sans', sans-serif; " class="hed"><strong>Kaveri:- 116 seats</strong></h2>
	<ul class="ganga">
	<li>A-Block</li>
	<ul>
	<li>Ground-Floor has 14 two seater rooms</li>
	<li>First Floor has 22 two seater rooms </li>
	<li>Second Floor has 22 two seater rooms </li>
</ul>	

</ul>
	
</div>


</div>


<div class="facilities" id="facility">
  <div style="background-color: #A6FF79; padding:10px;" >
	<h3 class="heading">Food Facility</h3>
	<ul class="li">
		<li>Mess Facility has been out sourced by M/s Shri Ram Sharan Sons & Services Pvt Ltd.</li>
		<li>Four meals i.e breakfast, lunch, evening snack & dinner a day</li>
		<li>Complaint Register/book placed in mess</li>
		<li>Mess menu by Mess Commitee and Hostel Warden </li>
		<li>Special care of Hygiene</li>
	</ul>	

		<br>
		<br>
	<h3 class="heading">Other Facility</h3>
	<ul class="li">
		<li>Wifi Facility to all Hostellers (Proposed)</li>
		<li>Newspapers in the Hostel</li>
		<li>24 hrs. electric power facility</li>
		<li>24 hrs. Security</li>
		<li>First aid and Ambulance Facility</li>
		<li>R.O drinking water</li>
		<li>Hot Water in Winter (Proposed)</li>
		<li>Housekeeping facility for Hostellers</li>
		<li>Library facillity in hostel (Proposed)</li>
	</ul>		

		<br>
		<br>
	<h3 class="heading">Recreation and Sports Activities</h3>
	<ul class="li">
		<li>TV,Newspapers etc.</li>
		<li>In door games like Carom,Badminton,T.T for boys and Girls</li>
		<li>Cricket, Football, Basket-Ball, Volleyball, Hockey, Kabaddi</li>
		<li>Cultural activities, sport tournaments etc.</li>
		<li>Gym for boys & girls hostellers</li>
	</ul>			


</div>

<!--------gallary test------------------>
<hr>
<h1 style="text-align: center;padding:30px; position: relative;font-family: 'Pacifico', cursive; ">Our Warden</h1>

<div class="card-deck" style=" width:60%;margin: auto; ">
  <div class="card">
    <img src="img/sir1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dr. R N Katiyar</h5>
     
   
    </div>
  </div>
  <div class="card">
    <img src="img/sir2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">R P Singh</h5>
     
    </div>
  </div>
  <div class="card">
    <img src="img/sir3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Manoj Singh</h5>
     
    </div>
  </div>
</div>
<hr>

<!------------testgallary end---------------------->



<!----------contact us----------->
<div class="w3-container" style="background-color:lightgrey; border-radius: 10px; width: 50%;margin: auto; padding: 20px;top: 35px;position: relative;" id="contact"> 
  <h2 style="font-family: 'Pacifico', cursive; text-align: center;">Contact Us</h2>
  <p style="padding: 0px;margin: auto; font-family: 'Ubuntu', sans-serif;text-align: center;font-weight: bold; font-size: 17px;">Mr Deepak Kumar:<span style="color: blue;"> 291800821939</span></p>
   <p style="padding: 0px;margin: 0px;font-family: 'Ubuntu', sans-serif;text-align: center;font-weight: bold;font-size: 17px;">Mr Rajesh Prajati: <span style="color: blue;">291800821939</span></p>
    <p style="font-family: 'Ubuntu', sans-serif; font-weight: bold;text-align: center;font-size: 17px;">Mr Amit Kumar: <span style="color: blue;" > 3283789232</span></p>
</div>
<br>
<br>
<hr>
<!------------contact us------------->


















	
<!-------gallary--------->
<br>
<br>
<br>
<br>

<h2 style="text-align:center">Gallery</h2>

<div class="row">
  <div class="column">
    <img src="img/gal11(1).jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/gal1 (2).jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div> 
  <div class="column">
    <img src="img/gal3.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/gal4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/gal1 (1).jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/gal1 (2).jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/gal3.jpeg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/gal4.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/gal1 (1).jpg" style="width:100%" onclick="currentSlide(1)" alt="Road From Hostel">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gal1 (2).jpg" style="width:100%" onclick="currentSlide(2)" alt="View From Shivaji Boys Hostel">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gal3.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gal4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<!-----------catchus----------------->


<div class="catchus">
            <div style="position: absolute; background-color:darkgrey; "></div>
            <h1 style="text-align: center; color:#930059; top: 50px; position: relative; font-weight: bold;">Ask Us</h1>
              <form method="post" action="form.php">
                <div style="position: relative; width: 90%; left: 5vw; top: 10vw;">

                <div class="form-group col-sm-12 col-md-12 col-xs-8 col-xl-12" >

    <label for="exampleFormControlSelect1" style="float: left;">Name</label>
     <input type="text" class="form-control" id="n1" placeholder="Name" name="name">
  </div>
  <br>
  <div class="form-group col-sm-12 col-md-12 col-xs-8 col-xl-12">
    <label for="exampleFormControlInput1" style="float:left;">Email </label>
    <input type="email" class="form-control" id="e1" placeholder="Email" name="email">
  </div>
  <br>
  <div class="form-group col-sm-12 col-md-12 col-xs-8 col-xl-12">
    <label for="exampleFormControlTextarea1" style="float:left;">Query</label>
    <textarea class="form-control" id="t1" rows="3" name="comment" placeholder="Ask about your Query"></textarea>
  </div>
  <br/>
  <button type="Submit" class="btn btn-primary btn-lg" name="Submit" style="background-color: #930059 ;width:200px;">SEND</button>
</form>
         </div>

<!---------------------catchus1-------------->




<!------gallaryend-------->

          <div style="width: 100%; position:relative;  top: 199px; height: 400px;">
     
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.824862393514!2d82.49050539176274!3d26.46137378869585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399093cc64209f39%3A0xc1ed3983fd6d3bd6!2sC+S+J+M+Boys+Hostel!5e0!3m2!1sen!2sin!4v1541750738330" width="600" height="500" frameborder="0" style="border:0" allowfullscreen class="mapres"></iframe>

         </div>                                                                                                                                                             

</nav >
  		 <h5 class="foot" style="color: white;" ><i>&copy;2018 CSJM University || Designed By Creators</i></h5>
   		 </nav>



</div>

    </div>
		
</div>

</body>
</html>