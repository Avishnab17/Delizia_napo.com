<!DOCTYPE html>
<html lang="en">
<head>
      <title>Delizia_Napo</title>
      <meta charset="=utf-8">
	  <meta http-equiv="X-UA-Compatible"content="IE=edge"/>
	 <meta name="viewport" content="width=device-width, initial_scale=1">

      <!--Bootstrap CDN-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <!--Google fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

      <!--FontAwesome CDN-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" type="text/css" href="style.css"> <!--to link css file with html file -->
	
</head>

<body>
	<script src="script.js"></script>
	<div class="bg-image">
		<div class="bg-change" onclick="bg2()"><img src ="images/gradient.jpeg"/> </div>
		<div class="bg-change"onclick="bg1()"><img src ="images/viback.png"/></div>
		<div class="bg-change"onclick="bg3()"><img src ="images/dark.jpg"/></div>

	</div>

	<header class="header">
		<a href='#' class="delizialogo">
			<img src="images\logo.png" width="150" height="150">
		</a>
		<nav class="navigationbar">
			<a href="#">Home</a> <!--Currently in Home page-->
			<a href="#listofposts" class="listofposts">List of posts</a>
			<a href="#gallery" class="gallery">Gallery</a>
                  <a href="#sitemap" class="site-map">Site map</a>
                  <a href="#aboutus" class="aboutus">About us</a>
                  <a href="#contactus" class="contactus">Contact us</a>
			<a href="#joinus" class="joinus">Joining Club</a>  
		</nav>
	</header>

	<!--Home page-->
	<section class="home" id="home">
		<div class="row">
			<div class="col-1">
			<h3><b>Napolitaines for all occasions</b></h3>
			<h4>Add a little sweetness in your life</h4>
			<h5>Explore Delizia_Napo's delicacy</h5>
			<div class="col-2">
				  <div class="wrapper">
						<img src="Images/img1.jpg">   
						<img src="Images/img11.jpg">  
						<img src="Images/img9.1.jpg">  
						<img src="Images/img12.jpg">
						<img src="Images/img5.1.jpg">
				  </div>
			</div>
	  </div>
	  <footer>
			<p>Delizia_napo delicacy</p>
	  </footer>
		
	</section>
	
	<!--List of post page-->
	<section class="listofposts" id="listofposts">
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
					  	</svg>
					</a>
				</li>
				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
				  	</svg>				  
				</li>
				<li>
					<a href="#listofposts">List of posts</a>
				</li>
			</ul>
		</div>
            <div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="class_wrap">
					<div class="bg_effect"></div>
					<div class="img_box">
						<img class="img-fluid" src="images\img3.jpg">
					</div>
					<div class="content">
						<h6 class="mt-4">Popping colors</h6>
						<p class="text-muted mt-3">Be inspired to try different icing colors for your delicious napos.</p>
						<div class="d-flex align-items-center justify-content-between mt-3 pb-3"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="class_wrap">
					<div class="bg_effect"></div>
					<div class="img_box">
						<img class="img-fluid" src="images\img2.1.jpg">
					</div>
					<div class="content">
						<h6 class="mt-4">Christmas Napo</h6>
						<p class="text-muted mt-3">Bake your Christmas tree napos for Christmas and spread the love with your dear ones.</p>
						<div class="d-flex align-items-center justify-content-between mt-3 pb-3"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 mb-4">
				<div class="class_wrap">
					<div class="bg_effect"></div>
					<div class="video_box">
						<video width="400" controls>
                                    	<source src="images\Video1.mp4" type="video/mp4">
                              	</video>
					</div>
			      	<div class="content">
						<h6 class="mt-4">Love Napo</h6>
						<p class="text-muted mt-3">This napo is inspired by lovers. A delicacy which melts in your mouth with its' Nutella filling which just enhances the flavour.</p>
						<div class="d-flex align-items-center justify-content-between mt-3 pb-3"></div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
		<footer>
			<p>Delizia_napo delicacy</p>
		</footer>
	</section>



	<!--Gallery page-->
	<section class="gallery" id="gallery">
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
						</svg>
					</a>
				</li>
				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
					</svg>				  
				</li>
				<li>
					<a href="#gallery">Gallery</a>
				</li>
			</ul>
		</div>
    		<div class="cont3">
    			<div class="headergal">
    				<h1>Recent<span> posts</span></h1>
    			</div>
    			<div class="box">
    				<div class=napogal>
    					<img src="Images/gal1.jpg">
    		      		<img src="Images/gal2.jpg">
    		      		<img src="Images/gal3.jpg">
    		      		<img src="Images/gal4.jpg">
    		      		<img src="Images/gal5.jpg">
    	      		</div>
    	      		<div class=napogal>
    					<img src="Images/gal6.jpg">
    		      		<img src="Images/gal16.jpg">
    		      		<img src="Images/gal8.jpg">
    		      		<img src="Images/gal9.jpg">
    		      		<img src="Images/gal10.jpg">
    	      		</div>
    	      		<div class=napogal>
    					<img src="Images/gal11.jpg">
    		     		 	<img src="Images/img3.jpg">
    		     		 	<img src="Images/gal13.jpg">
    		      		<img src="Images/gal14.jpg">
    		      		<img src="Images/gal15.jpg">
    	      		</div>
    			</div>
		</div>
		<br><br><br><br><br><br>
		<footer>
			<p>Delizia_napo delicacy</p>
		</footer>
	</section>
	


	<!--Site map page-->
	<section class="sitemap" id="sitemap">
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
					  	</svg>
					</a>
				</li>
				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
				  	</svg>				  
				</li>
				<li>
					<a href="#sitemap">Site map</a>
				</li>
			</ul>
		</div>
		<div class="site-map">
			<div class="headergal">
    				<h1><span>Sitemap</span></h1>
    			</div>
			<div class="contsite">
				<img src="images\sitem.jpg" style="width:800px;height:300px;">
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer>
			<p>Delizia_napo delicacy</p>
		</footer>
	</section>


		
	<!--About us page-->
	<section class="aboutus" id="aboutus">
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
					  	</svg>
					</a>
				</li>

				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
					</svg>				  
				</li>

				<li>
					<a href="#aboutus">About us</a>
				</li>

			</ul>
		</div>

		<div class="about-section">
        		<div class="headergal">
				<h1>About<span> us</span></h1>
			</div>
			<div class="about">
        	 		 <h5>It all started from one of our mums who used to bake and sell napolitaines. We got inspired from her and made baking napos our hobby. Not only it helped us relax but come closer to our dear ones specially when we shared the napos for special events like Christmas. Today we want to share our hobby with the world and inspire people of all ages to bake and discover your hidden talents. Baking is science and art, enjoy the process.
        	 		 The name Delizia_napo was given by Avishna who spent her childhood in Italy and wanted to add a touch of Italian to this Mauritian delicacy by naming it Delizia_napo which means delicious napolitaines. </h5>
       	   		<h6>Here we are! From left to right: Avishna, Vaishnavi and Yashi</h6>
			</div>
			<div class="cont2">
          			<img class="img-fluid1" src="images\group.jpg" height="450">
    	 		</div>
    		</div>
      	<footer>
			<p>Delizia_napo delicacy</p>
		</footer>
	</section>



	<!--Contact us Page-->	
	<section class="contactus" id="contactus">	
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
					  	</svg>
					</a>
				</li>
				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
				  	</svg>				  
				</li>
				<li>
					<a href="#contactus">Contact us</a>
				</li>
			</ul>
		</div>	
		<br><br><br><br><br><br><br><br><br>
		<br><br>
		<div class="contact">
			<div class="headergal"> 
				<h1>Contact<span> us</span></h1>
			</div>
			<img src="Images/img3.jpg" style="width:50%">
			<div class ="position">
				<div class="location">
					<a target="_blank" href="https://goo.gl/maps/qb8e2FSExU6ju84z9"> 
						<img src="images/locationlogo.png" style="width:42px;height:42px;">
						<b style="color: red">Click to find exact location </b>
					</a>
				</div>
				 <div class="address_details">
					<div class="topic">Address</div>
					<div class="text-one">Mauritius</div>
					<div class="text-two">Port Louis, Calebasses</div><br>
				 </div>			
				<div class="phone_details">	
					<i class="fas fa-phone-alt"></i>
					<div class="topic">Phone</div>
					<div class="text-one">+230 59301773</div>
					<div class="text-two">+230 54096728</div><br>
					</div>
				<div class="email_details">
					<i class="fas fa-envelope"></i>
					<div class="topic">Email by clicking on: </div>
					<address><a href="mailto: https://www.instagram.com/delizia_napo/">@Delizia_Napo</a>.<br></address>
					<address>Order us in our instagram page: <a href="https://www.instagram.com/delizia_napo/">Delizia_Napo</a>.<br></address>				  
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer>
			<p>Delizia_napo delicacy</p>
		</footer>
	</section>



	<!--Joining us page-->
	<section class="joinus" id="joinus">	
		<div class="breadcrumbs">
			<ul>
				<li class="arrow">
					<a href="#home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
							<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
					  	</svg>
					</a>
				</li>
				<li class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
				  	</svg>				  
				</li>
				<li>
					<a href="#joinus">Joining club</a>
				</li>
			</ul>
		</div>	
		<div class="contact-section">
       		<div class="headergal">
				<h1>Joining<span> Club</span></h1>
			</div>
		</div>
		<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top">
			<div class="joining">
				<div class="form-box">
					<div class="button-box">
						<div id="btn"></div>
						<button type="button" class="toggle-btn" onclick="login()">Log In</button>
						<button type="button" class="toggle-btn" onclick="register()">Register</button>
					</div>
					<div class="social-icons">
						<img src="Images/gp1.png">
						<img src="Images/insta1.png">
						<img src="Images/fb4.png">
					</div>
					<form id="login" class="input-group">
						<input type="text" class="input-field" placeholder="User ID" required>
						<input type="password" class="input-field" placeholder="Enter Password" required>
						<input type="checkbox" class="check-log-box"><span-log>Remember Password</span-log>
						<button type="submit" class="log-btn">Log in</button>
					</form>
					<form id="register" class="input-group">
						<input type="text" name="name" class="input-field" placeholder="Name"  required>
						<input type="number" name="age" class="input-field" placeholder="Age" required>
						
						<label class="emailBox">
							<input type="email" name="email" class="input-field" id="email" placeholder="Email" required>
							<span class="emailText"></span>
					    </label>

					    <label class="passBox">
							<input type="password" name="password" class="input-field" id="password" placeholder="password">
							<span class="passText"></span>
					    </label>

						<div class="radio-btn">
						<br>
							<p>Select your gender:</p>
						 	<input type="radio" id="Male" name="fav_language" value="Male">
							<label for="Male">Male</label><br>
					 		<input type="radio" id="Female" name="fav_language" value="Female">
					 		<label for="Female">CSS</label><br>
					 		<input type="radio" id="Other" name="fav_language" value="Other">
					 		<label for="Other">Not Specified</label><br> 
						</div>
						<input type="tel" name="number" class="input-field" placeholder="Phone Number" required>
						<label for="phone">Phone number:</label>


						<input type="checkbox" class="check-register-box"><span-register>I agree to the terms and conditions</span-register>
					
						<button type="submit" class="register-btn">Register</button>
					</form>
				</div>
	
				<div class="exp-box">
					<div class="dropdown"><br>
						<label for="Explevel">Select your experience level:</label>
						<select name="Explevel" id="Explevel">
							<option value="Beginner">Beginner</option>
							<option value="Average">Average</option>
							<option value="Expert">Expert</option>
						</select><br><br>
					</div>
					<label for="w3review">Describe your baking experience: </label>
					<form action="/action_page.php" method="get" id="nameform" >
						<textarea id="w3review" name="w3review" rows="6" cols="45"></textarea>
					</form>
					<button type="submit" form="nameform" value="Submit">Submit</button>
				</div>		
			</div>
			<script>
				var x = document.getElementById("login");
				var y = document.getElementById("register");
				var z = document.getElementById("btn");
	
				function register(argument)
				{
					x.style.left="-400px"
					y.style.left="50px"
					z.style.left="110px"
				}
	
				 function login(argument)
				{
					x.style.left="50px"
					y.style.left="450px"
					z.style.left="0px"
				}
			</script>	
			
			<script>
				const email = document.getElementById("email");
				const password = document.getElementById("password");
	
				email.addEventListener('input',()=>{
					  const emailBox = document.querySelector('.emailBox');
					  const emailText = document.querySelector('.emailText');
					  const emailPattern = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/;
	
					  if(email.value.match(emailPattern)){
							emailBox.classList.add('valid');
							emailBox.classList.remove('invalid');
							emailText.innerHTML = "Your Email Address is Valid"; 
					  }else{
							emailBox.classList.add('invalid');
							emailBox.classList.remove('valid');
							emailText.innerHTML = "Must be a valid email address."; 
					  }
				});
	
				password.addEventListener('input',()=>{
					  const passBox = document.querySelector('.passBox');
					  const passText = document.querySelector('.passText');
					  const passPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	
					  if(password.value.match(passPattern)){
							passBox.classList.add('valid');
							passBox.classList.remove('invalid');
							passText.innerHTML = "Your Password is Valid"; 
					  }else{
							passBox.classList.add('invalid');
							passBox.classList.remove('valid');
							passText.innerHTML = "Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number."; 
					  }
				});
		  </script>
	



		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer>
			<p>Delizia_napo delicacy</p>
		</footer>			
	</section>	
</body>
</html>


<?php
extract($REQUEST);
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$file = fopen('data.txt', 'a');


fwrite($file, "name: ");
fwrite($file, "$name:");

fclose($file);
?>
