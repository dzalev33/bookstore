<?php 
require_once 'administration/includes/database_connect.php';

echo "

<!DOCTYPE HTML>

<html>
	<head>
		<title>Online BookStore</title>
		<meta charset=\"utf-8\" />
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
		<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
		<link rel=\"stylesheet\" href=\"".$settings['website_url']."assets/css/main.css\">
		<!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
		<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id=\"sidebar\">
				<div class=\"inner\">
					<nav>
						<ul>
							<li><a href=\"#intro\">Welcome</a></li>
							<li><a href=\"#one\">Books</a></li>
						
							<li><a href=\"#two\">What we do</a></li>
							<li><a href=\"#three\">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id=\"wrapper\">
				<!-- Intro -->
					<section id=\"intro\" class=\"wrapper style1 fullscreen fade-up\">
					
					
						<div class=\"inner\">
							<h1>BookStore</h1>
							
							<ul class=\"actions\">
								<li><a href=\"#one\" class=\"button scrolly\">Learn more</a></li>
							</ul>
						</div>
						
					</section>
					
					<!-- One -->
					<section id=\"one\" class=\"wrapper style2 spotlights\">";


$sql="SELECT * 
FROM  author_book
INNER JOIN author ON author.`author_id` = author_book.`author_id` 
INNER JOIN book ON book.`book_id` = author_book.`book_id`
INNER JOIN category ON category.`category_id` = book.`category_id`";

				$result=$connection->query($sql);
while ($row=$result->fetch_object()){
				$BookTitle=$row->Title;
			    
                  $bookPrice=$row->Price;
                  $BookLanguage=$row->Language;
                  $bookStock=$row->Stock;
                  $BookVategoryId=$row->category_id;
                  $bookCategory=$row->type;
                  $avtor_name=$row->firstname;
                  $avtor_lastname=$row->lastname;

                    $author_id=$row->author_id;

    $Photo=$row->img_path;
    //"upload/"

    $img_path=$settings['website_url']."upload/".$Photo;
	
	
			echo "	
						<section>
							<a href=\"#\" class=\"image\"><img src=\"$img_path\" alt=\"\" data-position=\"center center\" /></a>
							<div class=\"content\">
								<div class=\"inner\">
									<h2>$BookTitle</h2>
									
									<p>CATEGORY: $bookCategory</p>
									<p>AVTOR: <a href=\"author.php?id=$author_id\">$avtor_name $avtor_lastname</a></p>
									
									<ul class=\"actions\">
									
										<li>PRICE: $bookPrice denari<a href=\"#\" class=\"button\" >Buy</a></li>
									</ul>
								</div>
							</div>
						</section>";
}
						
						echo "
</section>
				<!-- Two -->
					<section id=\"two\" class=\"wrapper style3 fade-up\">
						<div class=\"inner\">
							<h2>What we do</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class=\"features\">
								<section>
									<span class=\"icon major fa-code\"></span>
									<h3>Lorem ipsum amet</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class=\"icon major fa-lock\"></span>
									<h3>Aliquam sed nullam</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class=\"icon major fa-cog\"></span>
									<h3>Sed erat ullam corper</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class=\"icon major fa-desktop\"></span>
									<h3>Veroeros quis lorem</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class=\"icon major fa-chain\"></span>
									<h3>Urna quis bibendum</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class=\"icon major fa-diamond\"></span>
									<h3>Aliquam urna dapibus</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
							</div>
							<ul class=\"actions\">
								<li><a href=\"#\" class=\"button\">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id=\"three\" class=\"wrapper style1 fade-up\">
						<div class=\"inner\">
							<h2>Get in touch</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class=\"split style1\">
								<section>
									<form method=\"post\" action=\"#\">
										<div class=\"field half first\">
											<label for=\"name\">Name</label>
											<input type=\"text\" name=\"name\" id=\"name\" />
										</div>
										<div class=\"field half\">
											<label for=\"email\">Email</label>
											<input type=\"text\" name=\"email\" id=\"email\" />
										</div>
										<div class=\"field\">
											<label for=\"message\">Message</label>
											<textarea name=\"message\" id=\"message\" rows=\"5\"></textarea>
										</div>
										<ul class=\"actions\">
											<li><a href=\"\" class=\"button submit\">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class=\"contact\">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href=\"#\">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class=\"icons\">
												<li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
												<li><a href=\"#\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
												<li><a href=\"#\" class=\"fa-github\"><span class=\"label\">GitHub</span></a></li>
												<li><a href=\"#\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
												<li><a href=\"#\" class=\"fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id=\"footer\" class=\"wrapper style1-alt\">
				<div class=\"inner\">
					<ul class=\"menu\">
						<li>&copy; Stefan Dzalev</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src=\"assets/js/jquery.min.js\"></script>
			<script src=\"assets/js/jquery.scrollex.min.js\"></script>
			<script src=\"assets/js/jquery.scrolly.min.js\"></script>
			<script src=\"assets/js/skel.min.js\"></script>
			<script src=\"assets/js/util.js\"></script>
			<!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
			<script src=\"assets/js/main.js\"></script>

	</body>
</html>

";


?>
















































