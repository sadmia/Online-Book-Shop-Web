<?php require('connectDB.php'); 

	
	if (isset($_POST['favouriteBtn'])) {
		$favouriteBtn = $_POST['favouriteBtn'];
		$favouriteVlu = $_POST['favouriteVlu'];

		$updateFev = "UPDATE `book` SET `favourite`='$favouriteVlu' WHERE id = $favouriteBtn";
		$updateFevQuery = mysqli_query($connectDB, $updateFev);
	}


	if (isset($_POST['viewBtnTitle'])) {
		$ViewCount = $_POST['ViewCount'];
		$viewBtnTitle = $_POST['viewBtnTitle'];
		$pdfNameValue = $_POST['pdfNameValue'];

		if (!empty($ViewCount)) {
			$viewAdd = $ViewCount + 1;
		} else {
			$viewAdd = 1;
		}

		$updateFev = "UPDATE `book` SET `view`='$viewAdd' WHERE id = $viewBtnTitle";
		$updateFevQuery = mysqli_query($connectDB, $updateFev);
		header('Location: DataStore/PDF/'.$pdfNameValue);
	}


?>


<!DOCTYPE html>
<html lang="en">

	<head>

		<!-------------- Langouse Sapport ------------>
		<meta charset="utf-8">

		<!-- Responsive Viewport Link -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!------------- Website Title ------------->
		<title>Most Recent</title>

		<!------------ Bootstrap Css File Link --------------->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!------------ Fontawesome Css File Link --------------->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">

		<!------------- Main Stylesheet Css File Link ------------>
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>

	<body>


<!--------------------------- full-section---- [Start] --------------------------------->
		<section class="full-section">
			
			<div class="container-fluid con-mar-0">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 con-padd-0">

						<!----------------- left-align-site -- Start ------------------->
						<div class="left-align-site">
							

							<div class="margin-20">
								<div class="add-book">
									<a href="add_book.php"><i class="fas fa-plus"></i> ADD A BOOK</a>
								</div>
							</div>


							<div class="manu-nav-list">
								<ul>
									<a href="index.php"><li class="active-LAS"><i class="fas fa-globe-americas"></i> Browse</li></a>
									<a href="Favourite_Book.php"><li><i class="fas fa-star"></i> Favourite Book</li></a>
								</ul>
							</div>


							<div class="manu-nav-list-2">
								<ul>
									<a href="#"><li><i class="fas fa-circle color-1"></i> Must Read Titles</li></a>
									<a href="#"><li><i class="fas fa-circle color-2"></i> Best Of List</li></a>
									<a href="#"><li><i class="fas fa-circle color-3"></i> Classic Novels</li></a>
									<a href="#"><li><i class="fas fa-circle color-4"></i> Non Fiction</li></a>
								</ul>
							</div>



							<div class="manu-nav-list-3">
								<ul>

									<li>
										<i class="fas fa-history"></i> 
										<div class="margin-lef">
											You added <span class="color-w9">Fight Ciub</span> by <span class="color-w9">Chuck Palahniuk</span> to your <span class="color-w9">Must Read Titles</span>
											<br><p class="time-3">24 minutes age</p>
										</div>
									</li>

									<li>
										<i class="fas fa-history"></i> 
										<div class="margin-lef">
											You added <span class="color-w9">Fight Ciub</span> by <span class="color-w9">Chuck Palahniuk</span> to your <span class="color-w9">Must Read Titles</span>
											<br><p class="time-3">24 minutes age</p>
										</div>
									</li>

								</ul>
							</div>


						</div>
						<!------------------ left-align-site -- End -------------------->

					</div>

					<div class="col-lg-10 col-md-9 col-sm-8 con-padd-0">

						<!------------------- right-align-site [Start] --------------------->
						<div class="right-align-site">
							
							<!---------------- header-site [Start] ---------------------->
							<div class="header-site">

								<h1>Browse Available Books</h1>

								<div class="list-bar-mb"><i class="fas fa-bars"></i></div>

								<div class="header-bottom-site">
									
									<div class="row">
										
										<div class="col-md-8 col-sm-12">

											<ul class="BAB-list">
												<a href="index.php"><li>All Book</li></a>
												<a href="Most_Recent.php"><li class="active-BG">Most Recent</li></a>
												<a href="Most_Popular.php"><li>Most Popular</li></a>
												<a href="Paid_Books.php"><li>Paid Books</li></a>
											</ul>

										</div>

										
									</div>

								</div>
								
							</div>
							<!---------------- header-site [End] ------------------------>


							<!----------------- contante-list [Start] ------------------------>
							<div class="contante-list">
								
								<div class="row justify-content-center">

									
									<!-- <div class="col-lg-3 col-md-4 col-sm-6">

										<div class="design-item">

											<div class="images-div">
												<img src="images/books/1.jpg">
												<input value="0" type="hidden" name="" class="favouriteVlu">
												<i class="fas fa-heart favouriteBtn"></i>
											</div>

											<h2><a href="">Jewsls of Nizam</a></h2>
											<p><marquee>by Geeta Devi</marquee></p>

											<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>

										</div>

									</div> -->


									<?php 
										
										$selectAllData = "SELECT `id`, `bookTitle`, `bookDisk`, `bookPrice`, `reting`, `favourite`, `pdfName`, `coverImg`, `view` FROM `book` WHERE reting = 5 ORDER BY id DESC";
										$selectAllDataQuery = mysqli_query($connectDB, $selectAllData);

										while ($selectAllDataArray = mysqli_fetch_array($selectAllDataQuery)) {
											$idDB = $selectAllDataArray['id'];
											$bookTitleDB = $selectAllDataArray['bookTitle'];
											$bookDiskDB = $selectAllDataArray['bookDisk'];
											$bookPriceDB = $selectAllDataArray['bookPrice'];
											$retingDB = $selectAllDataArray['reting'];
											$favouriteDB = $selectAllDataArray['favourite'];
											$pdfNameDB = $selectAllDataArray['pdfName'];
											$coverImgDB = $selectAllDataArray['coverImg'];
											$viewDB = $selectAllDataArray['view'];

									?>

									
									<div class="col-lg-3 col-md-4 col-sm-6">

										<div class="design-item">

											<div class="images-div">
												<img src="DataStore/BookCover/<?php echo $coverImgDB; ?>">

												<form method="post" action="">
													<input value="<?php echo $favouriteDB; ?>" type="hidden" name="favouriteVlu" class="favouriteVlu">
													<button name="favouriteBtn" value="<?php echo $idDB; ?>">
														<i class="fas fa-heart favouriteBtn"></i>
													</button>
												</form>

											</div>

											<form method="post" action="">
												<input type="hidden" name="ViewCount" class="ViewCount" value="<?php echo $viewDB; ?>">
												<input type="hidden" value="<?php echo $pdfNameDB;?>" name="pdfNameValue">
												<button class="titleAndViewBtn" name="viewBtnTitle" value="<?php echo $idDB; ?>">
													<h2>
														<a class="viewBtn" ><?php echo $bookTitleDB; ?></a>
													</h2>
												</button>
											</form>


											<marquee><?php echo $bookDiskDB; ?></marquee>
											<?php if (isset($bookPriceDB)) { ?>
												<p><b><del><?php echo $bookPriceDB; ?> টাকা</del></b> <br> <b>Free</b> </p>
											<?php } else { ?>
												<p><b>Free</b></p>
											<?php } ?>

											<ul>
												<?php if ($retingDB == 1) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 1.5) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star-half-alt"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 2) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 2.5) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star-half-alt"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 3) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 3.5) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star-half-alt"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 4) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													<?php } elseif ($retingDB == 4.5) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star-half-alt"></i></li>
													<?php } elseif ($retingDB == 5) { ?>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
												<?php } ?>
											</ul>

										</div>

									</div>

									<?php } ?>


								</div>

							</div>
							<!----------------- contante-list [End] -------------------------->

						</div>
						<!--------------------- right-align-site [End] ------------------------>

					</div>
				</div>
			</div>

		</section>
<!--------------------------- full-section---- [End] ----------------------------------->


	<script src="js/castom.js"></script>
	</body>

</html>