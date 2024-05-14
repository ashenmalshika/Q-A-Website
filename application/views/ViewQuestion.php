<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard4.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/viewQuestion.css') ?>">

	<title>View Profile</title>

	<style>
		.data{
			width:800px;
		}
		.question-stats {
    color: #666;
    font-size: 14px;
    display: flex;
    align-items: center; /* Aligns the stats inline */
    justify-content: flex-end; /* Pushes all items inside stats to the right */
    flex-grow: 0; /* Prevents the stats section from growing */
    white-space: nowrap; /* Keeps the stats inline */
	margin-top:25px;
}
.data{
	border:1px solid #3C91E6;
}

.question-stats span {
    margin-right: 5px;
    background-color: #ddd;
    border-radius: 5px;
    padding: 2px 8px;
}
		.question-card {
        background-color: #f4f4f4;
        border: 1px solid #dcdcdc;
        padding: 10px 20px;
        margin: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .question-text {
        color: #333;
        font-size: 16px;
        font-weight: bold;
    }


    .button {
        padding: 5px 10px;
        background-color: #4CAF50; /* Green background */
        color: white; /* White text color */
        border: none; /* No borders */
        border-radius: 5px; /* Rounded borders */
        cursor: pointer; /* Pointer cursor on hover */
        font-size: 15px;
		align-items:left;
		margin-right: auto;
    }


    .button:hover {
        background-color: #45a049; /* Darker green background on hover */
    }
	</style>
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
			<li>
				<a href="<?php echo base_url('postQuestion'); ?>">
					<i class='bx bx-repost' ></i>
					<span class="text">Post a Question</span>
				</a>
			</li>
			<li  class="active">
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
				<img src="<?php echo ($userdata['profilepic']); ?>">
			</a>
			<a href="#" class="nav-link"><?php echo ($userdata['firstname'])." ".($userdata['lastname']); ?></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<?php echo ($userdata['user_id']); ?>
			<a href="#" class="nav-link">About Us</a>
		</nav>
		<!-- NAVBAR -->
		
		<!-- MAIN -->
		<main>			
				<?php if (!empty($questions)): ?>
					<?php foreach ($questions as $question): ?>    
						<div class="table-data">
							<div class="data">
								<?php echo htmlspecialchars($question['question']); ?>
						
								<div class="question-stats">
									
									<button class="button">Answers</button>
									<span>posted on 25th January 2024</span>
									<span>1</span>
									<span>4</span>
								</div>
								
							</div> 
							 
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<p>No questions found for this user.</p>
				<?php endif; ?>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?php echo base_url('assets/javascript/dashboard4.js') ?>"></script>
	<script src="<?php echo base_url('assets/javascript/viewQuestion.js') ?>"></script>

</body>
</html>