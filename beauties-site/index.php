<!DOCTYPE html>

<html>
<head>
	<title>Beauties - Shop Clothes Online</title>
	<link rel="stylesheet" type="text/css" href="themes/assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="themes/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/semantic-ui/dist/components/menu.css">
	<link rel="stylesheet" type="text/css" href="node_modules/semantic-ui/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="themes/assets/css/header-fixed.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="node_modules/semantic-ui/dist/components/menu">

	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="themes/assets/css/animate.css">

	<!-- quick product view -->
	<link rel="stylesheet" href="themes/assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="themes/assets/css/style.css"> <!-- Resource style -->


	<style type="text/css">


	.fadeInBlock{
		opacity:0;
		-moz-opacity:0;
		-webkit-opacity:0;
		filter: alpha(opacity=0);
		-khtml-opacity: 0.5;
		-webkit-filter:opacity=0%
	}

	/* CSS Scrollbar */ 

	body {
		overflow-x: hidden;
		background-color: whitesmoke;
	}

	body::-webkit-scrollbar {
		width: 12px;
	}

	body::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px #292c2f;
		border-radius: 1px;
	}

	body::-webkit-scrollbar-thumb {
		border-radius: 15px;
		background-color: #292c2f;
		outline: 1px solid slategrey;
	}

	/* end Scrollbar */
	#owl-demo .item img{
		display: block;
		width: 100%;
		height: auto;
	}

	body > div{
		margin-top: 0px;
	}

	.center {
		margin: auto;
	}

	.setleft{
		float: left;
	}

	.modal-small-img{		
		width: 300px;
		height: 350px;
	}
	/*.ui.inverted.form input[type=text]{
		border: 2px solid transparent;
		}*/
		.ui.inverted.form input[type=text]:hover{
			/*border: 2px solid black;*/
			-webkit-box-shadow: 1px 0px 15px 0px #FE0000;
			-moz-box-shadow:    1px 0px 15px 0px #FE0000;
			box-shadow:         1px 0px 15px 0px #FE0000;
		}

		.ui.inverted.form input[type="text"]:focus{
			-webkit-box-shadow: 1px 0px 26px 0px #FE0000;
			-moz-box-shadow:    1px 0px 26px 0px #FE0000;
			box-shadow:         1px 0px 26px 0px #FE0000;
		}

		.ui .item .avatar{
			background-color: #000;
		}

		.ui.list .list>.item a.header, .ui.list>.item a.header{
			color: white;
		}

		.ui.card a, .ui.cards>.card a{
			color: #292C2F;
			text-decoration: no
		}
		.ui.card a, .ui.cards>.card a:hover{
			color: #292C2F;
			text-decoration: no
		}
		a :hover{
			/*color: #292C2F;*/
			text-decoration: none;
		}
		a{
			/*color: #292C2F;*/
			text-decoration: none;
		}
		.col-heading{
	        padding-top: 2%;
	        text-shadow: 5px 4px 4px rgba(150, 150, 150, 1);
    	}

		.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary{
			color: white;
			background-color: #292C2F;
			border-color: #49494A
		}

		.btn-primary{
			color: white;
			background-color: #999;
			border-color: #49494A
		}

		</style>

	</head>
	<body>

		<!-- Header starts -->
		<a name="home"></a> <!-- anchor link -->
		<header class="header-fixed">

			<div class="header-limiter">

				<h1><a href="#">Beauties<span>.pk</span></a></h1>

				<nav>
					<a class="smoothScroll" href="#home"><b>Home</b></a>
					<a class="smoothScroll" href="#collection"><strong>Collection</strong></a>
					<a class="smoothScroll" href="#about"><strong>About</strong></strong></a>
					<a class="smoothScroll" href="#contact"><strong>Contact</strong></a>
				</nav>

			</div>

		</header>
		<!-- Header end -->

		<div class="container">
			<div class="row">


				<!-- Carousel starts -->
				<div  class="col-lg-12">
					<div id="owl-demo" class="owl-carousel owl-theme">

						<div class="item"><img class="img-responsive" src="images/1.jpg" alt="The Last of us">
							<div class="slider-content">

							</div>
						</div>
						<div class="item"><img class="img-responsive" src="images/2.jpg" alt="GTA V"></div>
						<div class="item"><img class="img-responsive" src="images/3.jpg" alt="Mirror Edge"></div>
						<div class="item"><img class="img-responsive" src="images/4.jpg" alt="khaadi"></div>
						<div class="item"><img class="img-responsive" src="images/5.jpg" alt=""></div>
					</div>
				</div>
				<!-- Carousel end -->

			</div>
		</div>


		<div id="modal1" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/1.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal2" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/2.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal3" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/3.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal4" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/4.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal5" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/5.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal6" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/6.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal7" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/7.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal8" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/8.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal9" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/9.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal10" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/10.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal11" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Dawood Lawn</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/11.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal12" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Khaadi</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/1.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="modal13" style="margin:auto;" class="modal fade" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="btn btn-default pull-right">X</button>
						<h2><span class="modal-title">Khaadi</span></h2>
					</div>
					<div class="modal-body">
						<center>
							<img src="images/dawood/1.jpg" class="modal-small-img img-responsive">
						</center>
					</div>
					<div class="modal-footer">
						<div class="ui styled accordion">
							<div class="title">
								<i class="dropdown icon"></i>
								Description
							</div>
							<div class="content">
								<p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
							</div>
							<div class="title">
								<i class="dropdown icon"></i>
								Specification
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td class="two wide column">Size</td>
											<td>1" x 2"</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>6 ounces</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Yellowish</td>
										</tr>
										<tr>
											<td>Odor</td>
											<td>Not Much Usually</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>


		<a name="collection"></a>
		<div class="container fadeInBlock">
			<h1 class="ui horizontal divider header col-heading">Nishat'16</h1><hr>
		</div>
		<div class="ui four column doubling stackable grid container">
			<div class="row">
				<div class="column">
					<div class="ui link card ">
						<div class="image">
							<img class="img-responsive" src="images/nishat/1.jpg">
						</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/nishat/2.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column ">
				<div class="ui link card ">
					<div class="image">
						<img src="images/nishat/3.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column ">
				<div class="ui blurring dimmable special link card">
					<div class="image">
						<div class="ui dimmer">
							<div class="content">
								<div class="center">
									<div class="ui btn btn-lg btn-default"><h2><a style="" href="collection-nishat.html"> View More +</a></h2></div>
								</div>
							</div>
						</div>
						<img src="images/nishat/4.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>				
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end 1st row -->

		

		


	</div><br>
		<div class="container fadeInBlock">
			<h1 class="ui horizontal divider header col-heading">Dawood'16</h1><hr>
		</div>
		<div class="ui four column doubling stackable grid container">
			<div class="row">
				<div class="column">
					<div class="ui link card ">
						<div class="image">
							<img class="img-responsive" src="images/dawood/1.jpg">
						</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/dawood/2.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column ">
				<div class="ui link card ">
					<div class="image">
						<img src="images/dawood/3.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column ">
				<div class="ui blurring dimmable special link card">
					<div class="image">
						<div class="ui dimmer">
							<div class="content">
								<div class="center">
									<div class="ui btn btn-lg btn-default"><h2><a style="" href="collection-dawood-lawn.html"> View More +</a></h2></div>
								</div>
							</div>
						</div>
						<img src="images/dawood/4.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Dawood Lawn</div>				
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end 1st row -->

		

		


	</div><br>



	<div class="container fadeInBlock">
		<center><h1 >Khaadi'16</h1></center><hr/>
	</div>
	<div class="ui four column doubling stackable grid container">
		<!-- collections card here -->
		<!-- <div  class="ui link cards"> -->
		<div class="row fadeInBlock">
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/1.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Matt Giampietro</div>
						<div class="meta">
							<a>Friends</a>
						</div>
						<div class="description">
							Matthew is an interior designer living in New York.
						</div>

					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/2.png">
					</div>
					<!-- <div class="content">
						<div class="header">Molly</div>
						<div class="meta">
							<span class="date">Coworker</span>
						</div>
						<div class="description">
							Molly is a personal assistant living in Paris.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/3.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Elyse</div>
						<div class="meta">
							<a>Coworker</a>
						</div>
						<div class="description">
							Elyse is a copywriter working in New York.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui blurring dimmable special link card">
					<div class="image">
						<div class="ui dimmer">
							<div class="content">
								<div class="center">
									<div class="ui btn btn-lg btn-default"><h2><a style="" href="collection-monsoon-lawn.html"> View More +</a></h2></div>
								</div>
							</div>
						</div>
						<img src="images/brands/4.png">
					</div>
					<!-- <div class="content">
						<div class="header">Elyse</div>
						<div class="meta">
							<a>Coworker</a>
						</div>
						<div class="description">
							Elyse is a copywriter working in New York.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span>
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- </div> end cards div -->

	</div> <!-- end container -->

	<!-- Mina Hasan -->
	<br>
	<div class="container fadeInBlock">
		<center><h2>Mina Hasan'16</h2></center><hr>
	</div>

	<div class="ui four column doubling stackable grid container">

		<!-- <div class="ui special cards"> -->
		<div class="row fadeInBlock">
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/1.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Matt Giampietro</div>
						<div class="meta">
							<a>Friends</a>
						</div>
						<div class="description">
							Matthew is an interior designer living in New York.
						</div>

					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/2.png">
					</div>
					<!-- <div class="content">
						<div class="header">Molly</div>
						<div class="meta">
							<span class="date">Coworker</span>
						</div>
						<div class="description">
							Molly is a personal assistant living in Paris.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">
						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui link card ">
					<div class="image">
						<img src="images/brands/3.jpg">
					</div>
					<!-- <div class="content">
						<div class="header">Elyse</div>
						<div class="meta">
							<a>Coworker</a>
						</div>
						<div class="description">
							Elyse is a copywriter working in New York.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span >
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui blurring dimmable special link card">
					<div class="image">
						<div class="ui dimmer">
							<div class="content">
								<div class="center">
									<div class="ui btn btn-lg btn-default"><h2><a style="" href="collection-dawood-lawn.html"> View More +</a></h2></div>
								</div>
							</div>
						</div>
						<img src="images/brands/4.png">
					</div>
					<!-- <div class="content">
						<div class="header">Elyse</div>
						<div class="meta">
							<a>Coworker</a>
						</div>
						<div class="description">
							Elyse is a copywriter working in New York.
						</div>
					</div> -->
					<div class="extra content">
						
						<span class="right floated">
							KH001
						</span>
						<span>
							Code
						</span>
					</div>
					<div class="extra content">

						<span class="right floated">
							$15
						</span>
						<span >
							Price
						</span>
					</div>
					<div class="extra content">
						<div class="content">
							<div class="center">
								<center>
									<button id="last1" click="showModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Furthur Details</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<a href="sales-collection.html"><img class="img-responsive" style="width:100%; height:10%;" src="images/Winter_sale2.jpg" alt="50% Sale is On NOW!!!!"></a>
			</div>
		</div>

	</div> <!-- end container -->


	<a name="about"></a>
	<!-- Messsages -->
	<div class="container fadeInBlock">
		<div class="row" style="margin-top: 40px">
			<div class="col-lg-12">
				<div class="ui horizontal segments">
					<div class="ui segment message red">
						<p>More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated </p>
					</div>
					<div class="ui segment message blue">
						<p>More than 6,000 Satisfied Customers More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated </p>
					</div>
					<div class="ui segment message green">
						<p> More than 6,000 Satisfied Customers More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated More than 6,000 Satisfied Customers and will be updated </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- contact form  -->
	<a name="contact"></a>
	<div class="ui inverted segment fadeInBlock">
		<div class="container ">
			<div class="row">
				<div class="col-lg-6">
					<div class="ui inverted form">
						<p id="returnmsg">

						</p>
						<div class="two fields">
							<div class="field">
								<label>First Name</label>
								<input placeholder="First Name" id="fname" type="text">
							</div>
							<div class="field">
								<label>Last Name</label>
								<input placeholder="Last Name" id="lname" type="text">
							</div>
						</div>
						<div class="two fields">
							<div class="field">
								<label>Code Number</label>
								<input placeholder="abc123" id="codeno" type="text">
							</div>
							<div class="field">
								<label>Phone Number</label>
								<input placeholder="i.e (0000-1234567)" id="phoneno" type="text">
							</div>
						</div>
						<div class="field">
							<label>Address</label>
							<input type="text" placeholder="House No ###, Block ##, North Nazimabad, Karachi" id="addr">
						</div>
						<div class="field">
							<label>Message (other query)</label>
							<input type="text" placeholder="i.e I want this or is it stitched or unstitched" id="custquery">
						</div>
						<div id="placeorder" class="ui submit button">Submit</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->



	<!-- Footer starts -->
	<div  class="footer_container">
		<div class="footer-menu-wrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="block-title">
							<div style="padding-top: 10px; padding-bottom: 15px"><strong><span>COMPANY<br></span></STRONG>
							</div>
						</div>
						<div class=" block-content ">
							<div class="ui link list">
								<a class="item">About</a>
								<a class="item">Store Location</a>
							</div>
						</div>
					</div> <!-- Company block -->

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="block-title">
							<div style="padding-top: 10px; padding-bottom: 15px"><strong><span>AVAILABLE COLLECTIONS<br></span></STRONG>
							</div>
						</div>
						<div class="block-content">
							<div class="ui link list">
								<a class="item">Anum Lawn</a>
								<a class="item">Asim Jofa</a>
								<a class="item">Moonsoon</a>
								<a class="item">Maria B</a>
							</div>
						</div>
					</div> <!-- Available Collection -->

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="block-title">
							<div style="padding-top: 10px; padding-bottom: 15px"><strong><span>HELP<br></span></STRONG>
							</div>
						</div>
						<div class="block-content">
							<div class="ui link list">
								<a class="item">Customer Service</a>
								<a class="item">FAQ</a>
								<a class="item" href="">Privacy Policy</a>
								<a class="item" href="">Terms & conditions</a>
								<a class="item" href="">Shipping & handling</a>
								<a class="item" href="">Returns & exchange</a>
							</div>
						</div>
					</div> <!-- help block -->

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="block-title">
							<div style="padding-top: 10px; padding-bottom: 15px"><STRONG><span>FOLLOW US<br></span></STRONG>
							</div>
						</div>
						<div class="block-content">
							<span class="fa-stack fa-lg">
								<i class="fa fa-square-o fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x"></i>
							</span>
							<span class="fa-stack fa-lg">
								<i class="fa fa-square fa-stack-2x"></i>
								<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
							</span>
							<span class="fa-stack fa-lg">
								<i class="fa fa-square fa-stack-2x"></i>
								<i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div> <!-- Follow us block -->

				</div>
			</div> <!-- end row -->
		</div>
	</div>



	<script type="text/javascript" src="themes/assets/js/jquery.js"></script>
	<script type="text/javascript" src="themes/assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="node_modules/semantic-ui/dist/semantic.min.js"></script>
	<script type="text/javascript" src="themes/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="owl-carousel/owl.carousel.min.js" ></script>
	<script type="text/javascript" src="semantic/src/definitions/modules/dimmer.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

		$("#placeorder").click(function() {
		var name = $("#fname").val();
		var lname = $("#lname").val();
		var message = $("#custquery").val();
		var contact = $("#phoneno").val();
		var addr = $('#addr').val();
		$("#returnmsg").empty(); // To empty previous error/success message.
		// Checking for blank fields.
		if (name == '' || lname == '' || addr='' || message = '' || contact == '') {
			alert("Please Fill Required Fields");
		} else {
		// Returns successful data submission message when the entered information is stored in database.
		$.post("contact_form.php", {
		fname1: name,
		lname1: lname,
		message1: message,
		contact1: contact
		}, function(data) {
		$("#returnmessage").append(data); // Append returned message to message paragraph.
		if (data == "Your Query has been received, We will contact you soon.") {
		$("#form")[0].reset(); // To reset form fields on success.
		}
		});
		}
		});

		// var nishatDiv = $('#nishat-inner');
		// var nishatConst = "<h1>Nishat'16</h1>";
		// nishatDiv.html(nishatConst);
		// nishatDiv.append('<hr>');

				// nishatDiv.addClass('container fadeInBlock');
				// $('#nishat').html(nishatDiv);

				$('.ui.accordion').accordion();

				

				$(window).scroll( function(){


					$('.fadeInBlock').each( function(i){

						var bottom_of_object = $(this).position().top + $(this).outerHeight();
						var bottom_of_window = $(window).scrollTop() + $(window).height();

						/* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
						bottom_of_window = bottom_of_window + 200;  

						if( bottom_of_window > bottom_of_object ){

							$(this).animate({'opacity':'1'},500);


						}
					}); 

				});


				// scroll bar script
				var $window = $(window);
				var scrollTime = 0.6;
				var scrollDistance = 400;

				$window.on("mousewheel DOMMouseScroll", function(event){

					event.preventDefault();	

					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);

					TweenMax.to($window, scrollTime, {
						scrollTo : { y: finalScroll, autoKill:true },
						ease: Power1.easeOut,
						overwrite: 5							
					});

				});

				var showHeaderAt = 150;

				var win = $(window),
				body = $('body');

				// Show the fixed header only on larger screen devices

				if(win.width() > 600){

					// When we scroll more than 150px down, we set the
					// "fixed" class on the body element.

					win.on('scroll', function(e){

						if(win.scrollTop() > showHeaderAt) {
							body.addClass('fixed');
						}
						else {
							body.removeClass('fixed');
						}
					});

				}

				$(".owl-carousel").owlCarousel({

			      navigation : false, // Show next and prev buttons
			      slideSpeed : 800,
			      paginationSpeed : 400,
			      singleItem:true,
			      autoplay: true,
			      autoplayTimeout: 1000,
			      autoplayHoverPause: true

			      // "singleItem:true" is a shortcut for:
			      // items : 1, 
			      // itemsDesktop : false,
			      // itemsDesktopSmall : false,
			      // itemsTablet: false,
			      // itemsMobile : false

			  });

			  // $('#KH9876').elevateZoom();
			  $('.special.card .image').dimmer({
			  	on: 'hover'
			  });
			  $('#last1') .click(function  () {
			  	$('#modal1').modal('show');
			  });
			 // $('#modal1').modal('show');

			 function showModal () {
			 	$('#modal1').modal('show');
			 }

			 $('.modal.button').click(function  () {
			 	$('#modal1').modal({
			 		show: 'true'
			 	});
			 });

			});
</script>
</body>
</html>