<?php

setcookie("cookie", "õ÷âõþ¶ûó", time() + (86400 * 30), "/");
if($_COOKIE['cookie'] ==="ïãõâð"){
    echo "<script>alert('yuctf{1_L1k3_c00k135}')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>

		/* Styling the body */
		* {
			padding: 0;
			margin: 0;
		}

		/* Styling the background image by
		giving its url and position */
		.container {
			height: 100vh;
			width: 100%;
			background-image: url("no-oh.gif");
			
			/* Image used: */
			background-size: center;
			background-position: cover;
			position: relative;
		}

		/* Styling the list tags to the
		right of the navigation bar */
		.nav li {
			float: right;
			list-style: none;
		}

		/* Styling the anchor tags of
		the navigation bar */
		.nav a {
			list-style: none;
			height: 50px;
			line-height: 50px;
			font-size: 1rem;
			font-weight: 550;
			display: block;
			padding: 5px 35px;
			color: black;
			text-decoration: none;
		}

		/* Giving position and margin
		to the content-div */
		.content {
			width: 100%;
			position: absolute;
			top: 45%;
		}

		/* Styling the left-col by
		giving margin */
		.left-col {
			margin-left: 11%;
		}

		/* Styling the my sound placed
		in the left-col */
		.left-col h1 {
			font-size: 50px;
			color: crimson;
		}

		/* Styling the right-col */
		.right-col {
			float: right;
			margin-right: 10%;
			margin-top: -5%;
			display: flex;
			align-items: center;
		}

		/* Styling the text in the right-col */
		.right-col p {
			font-size: 21px;
			color: black;
			font-weight: 650;
			margin-right: 20px;
		}

		/* Styling the cursor type
		of the icon to pointer */
		#icon {
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="container">
		<ul class="nav">
			<li><a href="#">CONTACT</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">ARTISTS</a></li>
			<li><a href="#">MUSIC</a></li>
			<li><a href="#">HOME</a></li>
		</ul>
	</div>

	<div class="content">
		<div class="left-col">
			<h1>MY <br> Funny Dog </h1>
		</div>

		<div class="right-col">
			


</body>

</html>

