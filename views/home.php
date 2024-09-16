<?php
session_start();
require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/messages.php');
require_once('../partials/headn.php');
?>

<body>
	<div id="container">
		<div id="firstHeader">
			<div class="row">
				<div class="col-sm-6">
					<p><img src="../public/ack/images1/envelope svg.png" id="svg" class="img-fluid" alt=""> ackwotetownship@yahoo.com</p>
					<p> <img src="../public/ack/images1/call svg.png" id="svg" class="img-fluid" alt=""> 0743865970</p>
				</div>
				<div class="col-sm-6">
					<p> <img src="../public/ack/images1/location1.webp" id="svg" class="img-fluid" alt="">
						Wote town along Wote-Malivani road</p>
					<a id="applyButton" href="register.html"> <button type="button" id="applyButton" class="btn btn-primary">Apply Now!</button></a>
				</div>
			</div>
		</div>
		<div id="secondHeader">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a id="homeButton" class="navbar-brand" href="#">ACK St.Luke's Wote <br> Township Day and Boarding <br> Primary and Junior School <br> <span id="navButton1">Strive For Excellence.</span></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a id="homeButton1" class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a id="navButton" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									About Us
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#profile">School Profile</a></li>
									<li><a class="dropdown-item" href="#visionAndMission">Vision and Mission</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="history.html">Shool History</a></li>
									<li><a class="dropdown-item" href="sponsor.html">Sponsor</a></li>
									<li><a class="dropdown-item" href="management.html">Board of Management</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#academics">Academics</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#boarding">Boarding</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#newsAndUpdates">News</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#inquiry">Inquiries</a>
							</li>
							<!-- <li class="nav-item"> 
                        <a id="navButton" class="nav-link active" aria-current="page" href="gallery.html">Gallery</a>
                       </li> -->
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#firstFooter">Contact Us</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="login">Login</a>
							</li>

						</ul>

					</div>
				</div>
			</nav>
		</div>
		<div id="body">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="../public/ack/hero-carousel/admin8.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/gate.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/bus.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/images1/students13.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/science.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/comp lab.jpg" alt="Sixth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/sponsor1.jpg" alt="Seventh slide">
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
			<div id="profile">
				<h2>School Profile</h2>
				<div class="row">
					<div class="col-sm-6">
						<img id="schoolImage" src="../public/ack/images1/students2.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-sm-6">
						<p>ACK St. Luke’s Primary School is a premier institution renowned
							for its excellence in both day and boarding primary education,
							as well as Junior Secondary education. Sponsored by the Anglican
							Church of Kenya, the school is located in Wote Town, along Wote Malivani Road.
							<br> <br>
							As a Christian school, ACK St. Luke’s is dedicated to providing
							high-quality education rooted in strong Christian values. It stands
							out as one of the top-performing schools in the Ukambani region.
							<br> <br>
							The school boasts a team of highly qualified teachers who are
							registered with the Teachers Service Commission (TSC). Our dedicated
							educators are committed to fostering a supportive and enriching learning environment.
							<br> <br>
							ACK St. Luke’s is well-equipped with essential learning resources,
							including state-of-the-art science laboratories, a modern computer
							lab, agriculture farms, and high-speed internet connectivity. These
							facilities ensure that our students receive a comprehensive and contemporary education.
						</p>
					</div>
				</div>
			</div> <br>
			<div id="visionAndMission">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Vision</h5>
								<p class="card-text"> To be a centre for excellence and lead the leaders.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Mission</h5>
								<p class="card-text">Producing and round and God fearing citizens.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Core Values</h5>
								<p class="card-text">
								<div class="row1">
									<div class="coreValues1">
										<p>Honesty</p>
										<p>Respect</p>
										<p>Efficiency</p>
										<p>Team Work</p>
									</div>
									<div class="coreValues2">
										<!-- <p>Team work</p> -->
										<p>Self-discipline</p>
										<p>Confidence</p>
										<p>Integrity</p>
										<p>Commitment</p>
									</div>
								</div>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<!-- <img src="../public/ack/https://via.placeholder.com/150" class="card-img-top" alt="..."> -->
							<div class="card-body">
								<h5 class="card-title">Motto</h5>
								<p class="card-text">Strive for Excellence</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div id="newsAndUpdates" class="container m-0 p-0">		
		<h2>News and Updates</h2>
		<div id="" class="row">	
			<?php
			$fetch_records_sql = mysqli_query(
				$mysqli,
				"SELECT * FROM news WHERE published_status = 'On'"												
			);
			if (mysqli_num_rows($fetch_records_sql) > 0) {
				$cnt =  1;
				while ($rows = mysqli_fetch_array($fetch_records_sql)) {
			?>
			<div class="col-sm-6 col-12">
			    <blockquote>
                  <p><?php echo $rows['news_message']; ?></p>
                  <small><?php echo $rows['news_subject']; ?> <cite title="Source Title"><?php echo $rows['created_at'] ?></cite></small>
                </blockquote>
			</div>		
			<?php
                                                $cnt = $cnt + 1;
                                                
                                            }
                                        }else{ ?>											
											<div class="col-sm-6 col-12">
												<blockquote>
												  <p>No Available news at the moment</p>
												</blockquote>
											</div>		
										<?php } ?>
		</div>
	</div>

	<div id="academics">
		<h2>Academics</h2>
		<div class="row">
			<p>ACK St. Luke’s Primary School is proud to offer the
				Competency-Based Curriculum (CBC) Kenya, ensuring that
				our students receive an education tailored to developing
				essential skills and competencies for the 21st century.
				This curriculum emphasizes holistic
				development, critical thinking, and practical skills,
				preparing our students for future academic and personal success.</p>
			<div class="col-md-4">
				<h3>Pre-Primary-PP1 and PP2</h3>
				<img id="schoolImage" src="../public/ack/images1/students11.jpg" class="img-fluid" alt="">
				<p>At ACK St. Luke’s Primary School, we are committed to delivering
					exceptional early childhood education. Our pre-primary program is
					designed to provide a rich and engaging learning environment that
					nurtures the holistic development of young children.
					Through a carefully crafted curriculum, we focus on fostering
					cognitive, emotional, social, and physical growth. <br>

					Our dedicated educators use innovative teaching methods,
					including play-based learning, hands-on activities, and
					interactive experiences, to ensure that every child receives
					a well-rounded and enjoyable educational experience.
					We create a supportive atmosphere where children can
					explore, learn, and thrive, setting a strong foundation
					for their future academic journey.</p>
				<a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a>

				<div class="container mt-5">
					<!-- <a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a> -->

					<!-- <button type="button" class="btn btn-primary btn-lg btn-block">WhatsApp</button> -->
				</div>

			</div>
			<div class="col-md-4">
				<h3>Primary School-Grades 1-6</h3>
				<img id="schoolImage" src="../public/ack/images1/students2.jpg" class="img-fluid" alt="">
				<p>At ACK St. Luke’s Primary School, we provide a
					comprehensive educational program for Grades 1
					through 6. Our curriculum is designed to foster
					a solid academic foundation while developing
					essential skills and competencies. We are
					dedicated to creating a stimulating and supportive
					learning environment that encourages growth,
					curiosity, and a love for learning at every stage of early education.</p>
				<a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a>

				<div class="container mt-5">
					<!-- <a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a> -->
				</div>
			</div>
			<div class="col-md-4">
				<h3>Junior Secondary School- Grades 7-9</h3>
				<img id="schoolImage" src="../public/ack/images1/students12.jpg" class="img-fluid" alt="">
				<p>ACK St. Luke’s Primary School is proud to
					offer education for CBC Junior Secondary
					School. Our program is designed to build
					on the foundational skills developed in
					primary education, focusing on deeper
					knowledge, critical thinking, and
					practical skills. We are committed to
					providing a supportive and dynamic
					learning environment that prepares students
					for future academic and personal success.</p>
				<a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a>

				<div class="container mt-5">
					<!-- <a href="register.html"><button type="button" id="applyButton" class="btn btn-primary btn-lg btn-block">Apply Now</button></a> -->
				</div>
			</div>
		</div>
	</div>


	<div id="facilities">
		<h2>Facilities</h2>
		<div class="row2">
			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<p class="card-text">
							<ul>Science labs</ul>
							<ul>Computer laboratory</ul>
							<ul>High internet connectivity</ul>
							<ul>Fully stocked library</ul>
							<ul>School bus</ul>
							<ul>agriculture farm</ul>
							<ul>Sports field</ul>
							<ul>Fully equipped Kitchen</ul>
							<ul>Dining hall</ul>
							<ul>Borehole</ul>
							<ul>Water Storage tanks</ul>
							<ul>Girls Hostels</ul>
							<ul>Boys Hostels</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row2">
					<img src="../public/ack/images1/library.jpeg" id="facilitiesImage" class="card-img-top" alt="...">
					<img src="../public/ack/images1/comp lab1.jpg" id="facilitiesImage1" class="card-img-top" alt="...">
				</div> <br>
				<div class="row2">
					<img src="../public/ack/images1/school bus3.jpg" id="facilitiesImage2" class="card-img-top" alt="...">
					<img src="../public/ack/images1/playground.jpeg" id="facilitiesImage" class="card-img-top" alt="...">
				</div>
			</div>
		</div>
	</div>
	<div id="boarding">
		<h2>Boarding.</h2>
		<div class="row">
			<div class="col-sm-6">
				<img id="boardingImage" src="../public/ack/images1/hostel1.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-sm-6">
				<h3>Why board at ACK ST.Luke's Wote Township.</h3>
				<p>The ACK Wote Township Boarding Program is like a second home for students.
					They have plenty of time to study both in the evenings and in the mornings.
					The school provides balanced meals to keep them healthy, and there’s always
					enough water and electricity. If a student gets sick, there is a
					trained nurse to help them. Additionally, there’s a guidance and counseling
					team available to support students if they need help with anything.
					Our boarding program is available for students in grades 5 to 9.</p>
				<p>For more information Call 0743865970 or click <a href="#inquiry">here</a> to submit and inquiry.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<h3>Boarding houses.</h3>
				<p>Our boarding houses offer a
					safe and nurturing environment for students.
					We have separate houses for boys and girls,
					with specific rules to ensure everyone’s
					safety and privacy. Each house is well-equipped
					with all the necessary amenities to create a
					comfortable and supportive living space for students.</p>
			</div>
			<div class="col-sm-4">
				<h3>Boarders Well-being</h3>
				<p>We understand that being away
					from home can be challenging for students,
					so we have various measures in place to
					support their well-being. Our boarding master
					and boarding mistress are available to assist
					with any needs. Additionally, our experienced
					and caring staff in the boarding houses are
					there to look after the students. Besides their
					studies, students are encouraged to participate
					in sports and other extracurricular activities
					to help them relax and enjoy their time away from home.</p>
			</div>
			<div class="col-sm-4">
				<h3>Faith and Religion</h3>
				<p>As an ACK-sponsored school, we have a chaplain who supports
					our students in growing their faith while they are at school.
					We are dedicated to nurturing their
					faith and helping them develop strong morals and values as
					they grow. Students also have the opportunity to attend Sunday service every week.</p>
			</div>
		</div>
	</div>
	<div id="departments">
		<h2>Departments</h2>
		<div class="row">
			<div class="col-sm-4">
				<h3>Science Department</h3>
				<p>The Science Department at ACK ST. Luke's Primary
					School is dedicated to fostering a strong foundation
					of scientific knowledge for all students. We offer a
					variety of science lessons, experiments, and activities
					to help students develop their critical thinking and problem-solving skills.</p>
			</div>
			<div class="col-sm-4">
				<h3>Mathematics Department</h3>
				<p>The Mathematics Department at ACK ST. Luke's
					Primary School is committed to providing students
					with a strong foundation of mathematical skills.
					We offer a variety of mathematics lessons,
					experiments, and activities to help students
					develop their critical thinking and problem-solving skills.</p>
			</div>
			<div class="col-sm-4">
				<h3>ICT Department</h3>
				<p>The ICT Department at ACK ST. Luke's Primary School is
					dedicated to providing students with a strong foundation
					of computer skills. We offer a variety of computer lessons,
					experiments, and activities to help students develop their
					critical thinking and problem-solving skills.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<h3>Guidance and Counselling Department</h3>
				<p>The Guidance and Counselling Department at ACK ST.
					Luke's Primary School is dedicated to providing students
					with a strong foundation of counselling skills. We offer a
					variety of counselling services, including speech therapy,
					counselling, and psychotherapy to help students develop
					their emotional and mental well-being.</p>
			</div>
			<div class="col-sm-4">
				<h3>Sports</h3>
				<p>The Sports Department at ACK ST. Luke's Primary School
					is dedicated to providing students with a strong foundation
					of sports skills. We offer a variety of sports lessons,
					experiments, and activities to help students develop
					their critical thinking and problem-solving skills.</p>
			</div>
			<div class="col-sm-4">
				<h3>Clubs and Movements</h3>
				<p>The clubs and Movements department at ACK ST.Luke's Primary School
					allows students to form and participate in clubs activities. Some of the Clubs
					at our school are debating, scouting, music, environment, red cross, young developers club among others.
				</p>
			</div>
		</div>
		<div id="management">
			<h2>Messages from the School Management</h2>
			<div id="customCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#customCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#customCarousel" data-slide-to="1"></li>
					<li data-target="#customCarousel" data-slide-to="2"></li>
					<li data-target="#customCarousel" data-slide-to="3"></li>
					<li data-target="#customCarousel" data-slide-to="4"></li>
					<li data-target="#customCarousel" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div>
							<h3>Mr. Onesmus Wambua- Head Teacher</h3>
							<p>"Welcome to our school! We’re committed to providing a supportive and
								enriching environment for your child’s growth and learning."</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3>Madam Elizabeth Nzioka-Deputy Head Teacher</h3>
							<p>Support and communication are key. We’re here to assist with any issues
								and to ensure your child’s well-being and academic success.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3>Mr. Nicholas Mutava-Deputy Head Teacher</h3>
							<p>Our dedicated staff is here to ensure your child excels academically and personally.
								Thank you for entrusting us with their education.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3>Mr. Paul Mwalusa-Dean of Curriculum</h3>
							<p>Our curriculum is designed to challenge and inspire. We’re here to support students
								in mastering their subjects and reaching their goals.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3>Madam Purity Mwakavi- Boarding Mistress</h3>
							<p>Our goal is to make the boarding experience as nurturing as possible.
								I’m here to support your child and ensure their well-being.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3>Mr. David Mutua</h3>
							<p>We strive to create a positive environment in the boarding houses.
								Feel free to contact us with any questions or if your child needs assistance.</p>
						</div>
					</div>
				</div>
				<a id="carouselManagement" class="carousel-control-prev" href="#customCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a id="carouselManagement" class="carousel-control-next" href="#customCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
		<div id="inquiry">
			<div class="container mt-5">
				<h2>Inquiry Form</h2>
				<form method="post" enctype="multipart/form-data" role="form">
					<div class="row mb-3">
						<div class="col">
							<label for="firstName" class="form-label">First Name</label>
							<input type="text" class="form-control" required id="firstName" name="user_fname" placeholder="Enter your first name" required>
						</div>
						<div class="col">
							<label for="lastName" class="form-label">Last Name</label>
							<input type="text" class="form-control" required name="user_lname"  id="lastName" placeholder="Enter your last name" required>
						</div>
					</div>
					<div class="mb-3">
						<label for="contact" class="form-label">Contact</label>
						<input type="text" class="form-control" required name="user_phone"  id="contact" placeholder="Enter your contact number" required>
					</div>
					
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="email" class="form-control" required name="user_email"  id="email" placeholder="Enter your email" required>
					</div>

					<div class="mb-3">
						<label for="email" class="form-label">Subject</label>
						<input type="text" class="form-control" required name="inquiry_subject"  id="email" placeholder="Enter your email" required>
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" required name="inquiry_message" id="message" rows="4" placeholder="Enter your message" required></textarea>
					</div>
					<button type="submit" id="applyButton" name="sendMassage" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		<div id="testimonias">
			<div id="textCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#textCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#textCarousel" data-slide-to="1"></li>
					<li data-target="#textCarousel" data-slide-to="2"></li>
					<li data-target="#textCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div>
							<h3 id="testimonialsHeader">Pauline Musyimi.-Alumni</h3>
							<p id="testimonialsBody">It was a nice place where I got molded, didn't regret.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3 id="testimonialsHeader">Charles Mutua-Alumni</h3>
							<p id="testimonialsBody"> It's simply awesome! The best public boarding primary school within the country.</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3 id="testimonialsHeader">Geoffrey Husein-Parent</h3>
							<p id="testimonialsBody">Nice n good place for anyone they mould n bring up gud well
								learned citizens who are tomorrow's leaders thumbs up</p>
						</div>
					</div>
					<div class="carousel-item">
						<div>
							<h3 id="testimonialsHeader">Purity Muiva-Alumni</h3>
							<p id="testimonialsBody">It's a school which builds the whole person.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#textCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#textCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div id="firstFooter">
		<div id="footer1" class="row">
			<div id="ImportantLinks" class="col-sm-4">
				<h3>Important Links</h3>
				<a id="anchorTag" href="#academics">Academics</a> <br>
				<a id="anchorTag" href="register.html">Enroll</a> <br>
				<a id="anchorTag" href="#inquiry">Inquiries</a> <br>
				<a id="anchorTag" href="gallery.html">Gallery</a> <br>
				<a id="anchorTag" href="sponsor.html">Sponsor</a>
			</div>
			<div class="col-sm-4">
				<h3>Contact Us</h3>
				<p>Call Us on 0743865970</p>
				<h3>Visit Us</h3>
				<p><img src="../public/ack/images1/location1.webp" id="svg" class="img-fluid" alt=""> Wote town along Wote Malivani road</p>

			</div>
			<div class="col-sm-4">
				<h3>Address</h3>
				<p>P.O BOX 253-90300</p>
				<p>Makueni</p>
			</div>
		</div>
	</div>
	<div id="secondFooter">
		<p>Copyright &copy; 2024 ACK ST. Luke's Primary School. All rights reserved.</p>
		<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
		<br>
	</div>
	</div>

	<!-- scripts -->
	<?php include("../partials/scriptn.php"); ?>

</body>

</html>