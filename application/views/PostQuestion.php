<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard4.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/postQuestion.css') ?>">
	<title>Post a Question</title>

</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Q & A </span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="<?php echo base_url('home'); ?>">
					<i class='bx bx-home-alt' ></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('searchQuestion'); ?>">
					<i class='bx bx-search' ></i>
					<span class="text">Search Question</span>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url('postQuestion'); ?>">
					<i class='bx bx-repost' ></i>
					<span class="text">Post a Question</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('viewQuestion'); ?>">
					<i class='bx bxs-file-find' ></i>
					<span class="text">View My Questions</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('viewProfile'); ?>">
					<i class='bx bxs-group' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
            <li>
				<a href="<?php echo base_url('logout'); ?>" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
            <a href="#" class="profile">
				<img src="<?php echo $profilepic; ?>">
			</a>
			<a href="#" class="nav-link"><?php echo $firstname." ".$lastname; ?></a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>		
			<div class="table-data">
				<div>
					<form method="post" action="<?php echo base_url('Questions/SaveQuestions'); ?>">
						<label for="question">Any Question? Ask from Community</label>
						<textarea id="askQuestion" name="askQuestion" rows="3" required></textarea>

						<label for="tags" id="tagsLabel">Add Tags </label>
						<input type="text" id="tag" name="tag1">
						<input type="text" id="tag" name="tag2">
						<input type="text" id="tag" name="tag3">

						<label for="question" id="questionImgLabel">Attach image related to Question</label>
						<input type="file" id="questionImg" name="questionImg">

						<?php if ($this->session->flashdata('message')): ?>
							<div class="alert" id='alertBox'>
								<?php echo $this->session->flashdata('message'); ?>
							</div>
						<?php endif; ?>

						<div class="button-container">
							<button type="submit" class="submitQuestion">Submit</button>
						</div>
					</form>
				</div>	
			</div>
		
		</main>
	</section>
	<!-- CONTENT -->
	

	<script src="<?php echo base_url('assets/javascript/dashboard4.js') ?>"></script>
	<script src="<?php echo base_url('assets/javascript/postQuestion.js') ?>"></script>

</body>
</html>