<?php require('connectDB.php');

	function salitize($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$idDB = "SELECT id FROM book ORDER BY id DESC LIMIT 1";
	$idDBquery = mysqli_query($connectDB, $idDB);
	$dataArrayID = mysqli_fetch_array($idDBquery);
	if (isset($dataArrayID)) {
		$bookID = $dataArrayID['id'];
	}


	if (isset($_POST['AddBtn'])) {
		$bookTitle = salitize($_POST['bookTitle']);
		$sortDiskiption = salitize($_POST['sortDiskiption']);
		$privacy = $_POST['privacy'];
		$bookPrice = salitize($_POST['bookPrice']);
		$bookRating = $_POST['bookRating'];

		$pdfName = $_FILES['pdfInput']['name'];
		$pdfTmpName = $_FILES['pdfInput']['tmp_name'];
		$imageName = $_FILES['imageInput']['name'];
		$imageTmpName = $_FILES['imageInput']['tmp_name'];

		$pdfNameExt = explode(".",$pdfName)[1];
		$imageNameExt = explode(".",$imageName)[1];

		if (!empty($bookID)) {
			$newPdfName = "PDF_File(" . $bookID + 1 . ")." . $pdfNameExt;
			$newImageName = "Cover_Images(" . $bookID + 1 . ")." . $imageNameExt;
		} else {
			$newPdfName = "PDF_File(1)." . $pdfNameExt;
			$newImageName = "Cover_Images(1)." . $imageNameExt;
		}


		
			if ((strlen($bookTitle) >= 10 && strlen($bookTitle) <= 50) &&
				(strlen($sortDiskiption) >= 10 && strlen($sortDiskiption) <= 300) &&
				(explode(".",$imageName)[1] == "jpg" || explode(".",$imageName)[1] == "png") &&
				explode(".",$pdfName)[1] == "pdf") {


				if ($privacy == "Free") {
					$bookInfoInsart = "INSERT INTO book(`bookTitle`, `bookDisk`, `privacy`, `reting`, `pdfName`, `coverImg`) VALUES ('$bookTitle', '$sortDiskiption', '0', '$bookRating', '$newPdfName', '$newImageName')";
					$bookInfoInsartQuery = mysqli_query($connectDB, $bookInfoInsart);
					move_uploaded_file($pdfTmpName, "DataStore/PDF/".$newPdfName);
					move_uploaded_file($imageTmpName, "DataStore/BookCover/".$newImageName);
					header('Location: index.php');
				}

				if ($privacy == "Paid" && $bookPrice >= 1) {
					$bookInfoInsart = "INSERT INTO book(`bookTitle`, `bookDisk`, `privacy`, `reting`, `pdfName`, `coverImg`, `bookPrice`) VALUES ('$bookTitle', '$sortDiskiption', '1', '$bookRating', '$newPdfName', '$newImageName', '$bookPrice')";
					$bookInfoInsartQuery = mysqli_query($connectDB, $bookInfoInsart);
					move_uploaded_file($pdfTmpName, "DataStore/PDF/".$newPdfName);
					move_uploaded_file($imageTmpName, "DataStore/BookCover/".$newImageName);
					header('Location: index.php');
				}
				
			}
		

	}


?>



<!DOCTYPE html>
<html>
	<head>

		<title>Edit Data</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/add_data.css">

	</head>

	<body>


		<section class="centerDataInput">

			<a href="index.php" id="closeBtn"><i class="fas fa-times-circle"></i></a>

			<h5 class="haderText">Add A Book</h5>

			<form class="formClass" method="post" action="" enctype="multipart/form-data">
				<label><input id="bookTitle" type="text" name="bookTitle" placeholder="Book Title (10-50 Character)"></label>
				<label><input id="sortDiskiption" type="text" name="sortDiskiption" placeholder="Diskiption (10-300 Character)"></label>

				<div class="priceAndFree">
					<div class="genderDiv">
						<label><input id="freeRadio" type="radio" name="privacy" value="Free" checked> Free</label>
						<label><input id="paidRadio" type="radio" name="privacy" value="Paid"> Paid</label>
					</div>
					<label id="priceLabel" class="priceInput"><input id="bookPrice" type="number" name="bookPrice" placeholder="Price"> <span> টাকা</span></label>
				</div>

				<div id="pdfInptBtn" class="fileInputDiv">
					<input id="pdfInput" type="file" name="pdfInput">
					<i class="fas fa-file-pdf"></i>
					<span id="pdfNameShow" class="textHide">Pdf File Name</span>
				</div>

				<div class="imageBtnAndView">
					<div class="borderDiv">
						<div id="imageInptBtn" class="fileInputDiv">
							<input id="imageInput" type="file" name="imageInput">
							<i class="fas fa-file-image"></i>
						</div>
					</div>
					<img id="inputImgView">
				</div>

				<div class="starSelect">
					<label>
						<input id="mailGender1" type="radio" name="bookRating" value="1">
						<i class="fas fa-star ratingBtn"></i>
						<span>1</span>
					</label>
					<label>
						<input id="mailGender15" type="radio" name="bookRating" value="1.5">
						<i class="fas fa-star ratingBtn"></i>
							<span>1.5</span>
					</label>
					<label>
						<input id="mailGender2" type="radio" name="bookRating" value="2" checked>
						<i class="fas fa-star ratingBtn"></i>
						<span>2</span>
					</label>
					<label>
						<input id="mailGender25" type="radio" name="bookRating" value="2.5">
						<i class="fas fa-star ratingBtn"></i>
							<span>2.5</span>
					</label>
					<label>
						<input id="mailGender3" type="radio" name="bookRating" value="3">
						<i class="fas fa-star ratingBtn"></i>
						<span>3</span>
					</label>
					<label>
						<input id="mailGender35" type="radio" name="bookRating" value="3.5">
						<i class="fas fa-star ratingBtn"></i>
							<span>3.5</span>
					</label>
					<label>
						<input id="mailGender4" type="radio" name="bookRating" value="4">
						<i class="fas fa-star ratingBtn"></i>
						<span>4</span>
					</label>
					<label>
						<input id="mailGender45" type="radio" name="bookRating" value="4.5">
						<i class="fas fa-star ratingBtn"></i>
							<span>4.5</span>
					</label>
					<label>
						<input id="mailGender5" type="radio" name="bookRating" value="5">
						<i class="fas fa-star ratingBtn"></i>
						<span>5</span>
					</label>
				</div>

				<input type="submit" class="button" name="AddBtn" id="updateBtn" value="Sign Up">
				<input id="resetBtn" class="button resetBtn" type="reset" value="Reset">
			</form>

		</section>


	<script src="js/add_data.js"></script>
	</body>
</html>