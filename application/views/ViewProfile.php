<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard4.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/viewProfile.css') ?>">
	<title>View Profile</title>

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
			<li>
				<a href="<?php echo base_url('viewQuestion'); ?>">
					<i class='bx bxs-file-find' ></i>
					<span class="text">View My Questions</span>
				</a>
			</li>
			<li class="active">
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
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="profile-card">
				<div class="profile-header">
					<img src="<?php echo base_url('assets/images/profile');?>" alt="Profile Picture" class="profile-picture">
					<div class="profile-info">
						<h2><?php echo ($userdata['firstname'])." ".($userdata['lastname']); ?></h2>
						<p class="profile-title"><?php echo $leftUserData['profession']; ?></p>
					</div>
				</div>
				<div class="profile-buttons">
					<button class="btn edit-btn" id="editProfileBtn">Edit Profile</button>
					<form id="removeProfileForm" action="<?php echo base_url('Dashboard/removeProfile'); ?>" method="post">
						<input type="hidden" name="user_id" value="<?php echo $userdata['user_id']; ?>">
						<button type="submit" class="btn remove-btn" onclick="return confirm('Are you sure you want to remove your profile? Your account will be lost');">Remove Profile</button>
					</form>
				</div>
				<table class="profile-details">
					<tr>
						<th>Username</th>
						<td>: <?php echo $leftUserData['username']; ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td>: <?php echo $leftUserData['email']; ?></td>
					</tr>
					<tr>
						<th>Profession</th>
						<td>: <?php echo $leftUserData['profession']; ?></td>
					</tr>
					<tr>
						<th>Biography</th>
						<td class="biography-text">: <?php echo $leftUserData['biography']; ?></td>
					</tr>
    			</table>
	</div>
	
	<div id="editProfileModal" class="modal" style="display:none; ">
	<div class="profile-card">
				<div class="modal-content">
					<div class="modal-header">
						<span>Edit Profile</span>
					</div>
					<form action="Dashboard/updateProfile" method="post"> 
						<label for="username">Username : </label>
						<input type="text" id="username" name="username" value="<?php echo $leftUserData['username']; ?>"><br><br>
						<label for="email">Email : </label>
						<input type="email" id="email" name="email" value="<?php echo $leftUserData['email']; ?>"><br><br>
						<label for="profession">Profession : </label>
						<input type="text" id="profession" name="profession" value="<?php echo $leftUserData['profession']; ?>"><br><br>
						<label for="biography">Biography : </label><br>
						<textarea id="biography" name="biography" rows="4" cols="50"><?php echo $leftUserData['biography']; ?></textarea><br><br>
						<div class="modal-footer">
							<button type="button" id="cancelBtn">Cancel</button>
							<button type="submit" id="saveBtn">Save</button>
						</div>
					</form>
				</div>
			</div>

			</div>

			


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script src="<?php echo base_url('assets/javascript/dashboard4.js') ?>"></script>
	<script src="<?php echo base_url('assets/javascript/viewProfile.js') ?>"></script>
</body>
</html>