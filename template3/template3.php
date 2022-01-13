<?php
include_once 'config.php';
session_start();
$firstname="Ayesha";
$lastname="Khalid";
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
			integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>CV Builder</title>
</head>
<?php
     $sql=mysqli_query($conn,"SELECT * FROM basic WHERE first_name='$firstname' AND last_name='$lastname'");
     $data = mysqli_fetch_array($sql);
?>

<body>
	<div style="background-color: white;">
	        <nav class="navbar navbar-expand-lg navbar-light " >
	            <a class="navbar-brand" href="#"><img class="image" src="images/logo-png.png" alt="logo"></a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
	                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarText">
	                <ul class="navbar-nav mr-auto">
	                </ul>
	                <span class="navbar-text">
	                    <ul class="navbar-nav mr-auto">
	                        <li class="nav-item active">
	                            <a class="nav-link" href="#">Home</span></a>
	                        </li>
	                        <li class="nav-item active">
	                            <a class="nav-link" href="#zee" >About</span></a>
	                        </li>
	                        <li class="nav-item dropdown">
	                            <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button"
	                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Templates
	                            </a>
	                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                                <a class="dropdown-item" href="#">Template 1</a>
	                                <a class="dropdown-item" href="#">Template 2</a>
	                                <a class="dropdown-item" href="#">Template 3 </a>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="signup.html">Sign Up</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="login.html">Login</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#footer"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
	                        </li>

	                    </ul>
	                </span>
	            </div>
	        </nav>

                <div id="doc2" class="yui-t7">
	                     <div id="inner">

		                     <div id="hd">
		                       	<div class="yui-gc">
			                     	<div class="yui-u first">
				                        	<h2><?php echo($data['first_name']);
                                             echo(" ");
                                            echo($data['last_name']);?></h2>
				                        	<h3><?php echo($data['profession']);?></h3>
				                     </div>

				                   <div class="yui-u">
					                 <div class="contact-info">
														 <h6><?php echo($data['city']);
                            echo(" , ");
                            echo($data['country']);?></h6>
				                		<h6><?php echo($data['email']); ?></h6>
				                		<h6><?php echo("+92");
                            echo($data['contact']);?></h6>
				                 	</div><!--// .contact-info -->
			                   	</div>
		                      	</div><!--// .yui-gc -->
		                          </div><!--// hd -->

	                  	<div id="bd">
	                 		<div id="yui-main">
		                		<div class="yui-b">

			                  		<div class="yui-gf">
				                     		<div class="yui-u first">
					                     		<h2>Profile</h2>
					                        	</div>
					                    	<div class="yui-u">
					                      		<p class="enlarge">
						                                  		Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change.
					                       		</p>
					                    	</div>
					                        </div><!--// .yui-gf -->

			                         		<div class="yui-gf">
					                       	<div class="yui-u first">
					                     		<h2>Skills</h2>
					                      	</div>
					                      	<div class="yui-u">

							         	<div class="talent">
								         	<h2>Web Design</h2>
								         	<p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
							          	</div>

							            	<div class="talent">
								            	<h2>Interface Design</h2>
								          	<p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
							               	</div>

						           		<div class="talent">
							           		<h2>Project Direction</h2>
								               	<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
							          	</div>
						           </div>
					            </div><!--// .yui-gf -->

				              	<div class="yui-gf">
				               		<div class="yui-u first">
					              		<h2>Technical</h2>
					                       	</div>
					                	<div class="yui-u">
					              		<ul class="talent">
				                 				<li>XHTML</li>
						                 		<li>CSS</li>
						                		<li class="last">Javascript</li>
						                  	</ul>

					           		<ul class="talent">
							          	<li>Jquery</li>
							           	<li>PHP</li>
							          	<li class="last">CVS / Subversion</li>
							           </ul>

						             	<ul class="talent">
							           	<li>OS X</li>
							           	<li>Windows XP/Vista</li>
							           	<li class="last">Linux</li>
						             	</ul>
					            	</div>
				               	</div><!--// .yui-gf-->

			              		<div class="yui-gf">

					            	<div class="yui-u first">
					         	  	<h2>Experience</h2>
					            	</div><!--// .yui-u -->

					             	<div class="yui-u">

						             	<div class="job">
						              		<h2>Facebook</h2>
							               	<h3>Senior Interface Designer</h3>
							              	<h4>2005-2007</h4>
						                		<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
					               		</div>

				           			<div class="job">
												<h2>Apple Inc.</h2>
												<h3>Senior Interface Designer</h3>
												<h4>2005-2007</h4>
												<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
										  	</div>

							          <div class="job">
							       	<h2>Microsoft</h2>
							      	<h3>Principal and Creative Lead</h3>
							       	<h4>2004-2005</h4>
							       	<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
						       	</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
								<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>Indiana University - Bloomington, Indiana</h2>
							<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo($data['first_name']);
                  echo(" ");
                  echo($data['last_name']);?> &mdash; <?php echo($data['email']); ?> &mdash; <?php echo("+92");
                            echo($data['contact']);?></p>
      <p><a href="<?php echo($data['github']); ?>">Github </a> &mdash; <a href="<?php echo($data['linkedin']); ?>">LinkedIn</a> </p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->

<div class="footer" id="footer">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ; margin-bottom: 1%;"><a>Copyright<i class="fa fa-copyright" aria-hidden="true"></i>CV</a></div>
                    <div class="col-sm-12 col-md-6 col-lg-3"style="margin-top:1% ;"><a><i class="fa fa-whatsapp" aria-hidden="true"></i>&ensp;+92256314548 <br></a></div>

                    <div class="col-sm-12 col-md-6 col-lg-3"style="margin-top:1% ;"><a><i class="fa fa-envelope-o" aria-hidden="true"></i>&ensp;CV@gmail.com</a></div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
