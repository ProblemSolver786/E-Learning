
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url().'images/home/542f7-11.png'; ?>" alt="Smart Learning">
    </div>
     <div class="item">
      <img src="<?php echo base_url().'images/home/7cc47-ss2.png'; ?>" alt="Smart Learning">
    </div>

    <div class="item">
      <img src="<?php echo base_url().'images/home/76f70-ss5.png'; ?>" alt="Smart Learning">
    </div>

    <div class="item">
      <img src="<?php echo base_url().'images/home/6c4d3-ss3.png'; ?>" alt="Smart Learning">
    </div>
    <div class="item">
      <img src="<?php echo base_url().'images/home/39434-ss6.png'; ?>" alt="Smart Learning">
    </div>

    <div class="item">
      <img src="<?php echo base_url().'images/home/62d70-ss4.png'; ?>" alt="Smart Learning">
    </div>
</div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<!-- The Modal -->
	<!-- </div> -->
	<!--//banner -->
	<!-- about -->
	
	<!-- //about -->
	<!-- services -->

	<!-- //services -->

		<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>S</span>mart <span>L</span>earning
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<?php foreach ($pics as $item) {
				?>
			<div class="agileinfo-gallery-row">
				<div class="col-xs-4 w3gallery-grids">
					<a href="<?php echo base_url().'images/home/'.$item['name']; ?>" class="imghvr-hinge-right figure">
						<img src="<?php echo base_url().'images/home/'.$item['name']; ?>" alt="" title="<?php echo $item['description']; ?>" />
						<div class="agile-figcaption">
							<h4><?php echo $item['description']; ?></h4>
						</div>
					</a>
				</div>
				<?php
			}
			?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Gallery -->
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span></span>News
					<span> &</span>Events
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<?php foreach ($news as $item) {?>
			<div class="yaallahaa-news-grids-agile">
				<div class="yaallahaa-news-grid">
					<div class="col-md-12 yaallahaa-news-left">
						<div class="col-xs-6 news-left">
							<img src="<?php echo base_url().'images/news/'.$item['img']; ?>" height="200px" width="300px">
							<div class="news-left-text color-event1">
								<h5><?php echo $item['newdate']; ?></h5>
							</div>
						</div>
						<div class="col-xs-6 news-grid-info-bottom-w3ls">
							<div class="news-left-top-text text-color1">
								<a href="#" data-toggle="modal" data-target="#myModal"><?php echo $item['title']; ?></a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="#">
										<span class="fa fa-clock-o" aria-hidden="true"></span> <?php echo $item['newdate']; ?></a>
								</div>
								<div class="time">
									<p>
										<span class="fa fa-map-marker" aria-hidden="true"></span> <?php echo $item['location']; ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-w3ls-text">
								<p><?php echo $item['content']; ?></p>
							</div>
						</div>
						<div class="clearfix"> </div>
						<br><br>
					</div>
					
				</div>
				<?php
			}
				?>
		</div>
	</div>
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Best
						<span>Study</span>
					</h4>
				</div>
				<div class="modal-body">
					<div class="model-img-info">
						<img src="images/e1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //news -->
	<!-- middle section -->
	
	<!-- //middle section -->
	<!-- testimonials -->
	
	<!-- //testimonials -->


	<!-- js files -->
	<!-- js -->
	<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<!-- stats numscroller-js-file -->
	<script src="<?php echo base_url(); ?>js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->

	<!-- Flexslider-js for-testimonials -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 1
					},
					tablet: {
						changePoint: 768,
						visibleItems: 1
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //Flexslider-js for-testimonials -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>