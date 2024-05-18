<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard4.css') ?>">

	<title>View Profile</title>

	<style>
	
.profile-card {
    background-color: #4267B2;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 800px;
    padding: 20px ;
    color: white;
    text-align: center;
	margin-left:20px;
}

.profile-header {
    display: flex;
    margin-bottom: 20px;
}

.profile-picture {
    width: 150px;
    height: 150px;
    border-radius: 50%;
	margin:30px 0px 0px 60px;
 
}

.profile-info {
    margin: 75px 0px 0px 60px;
   
}

.profile-title {
    color: #FFD700;
    font-size: 16px;
    margin: 5px 0 0;
}

.profile-buttons {
    margin:50px 30px 50px 30px;
	display:flex;
}

.btn {
    background-color: white;
    color: #4267B2;
    border: 2px solid #4267B2;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
    margin: 0 40px;
}

.btn:hover {
    background-color: #f4f4f4;
}

.profile-details {
            width: 100%;           
            border-collapse: collapse; 
            background-color: white; 
            color: black;           
            margin: 20px 0;        
            border-radius:10px;
        }

        .profile-details th, .profile-details td {
            text-align: left;      
            padding: 10px 20px;     
            border: none;           
			text-align: justify;
        }

        .profile-details th {
            width: 150px;          
            font-weight: bold;    
        }

        .biography-text {
            text-align: justify;   
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
			<div class="profile-card">
				<div class="profile-header">
					<img src="<?php echo base_url('assets/images/profile');?>" alt="Profile Picture" class="profile-picture">
					<div class="profile-info">
						<h2><?php echo ($userdata['firstname'])." ".($userdata['lastname']); ?></h2>
						<p class="profile-title"><?php echo $leftUserData['profession']; ?></p>
					</div>
				</div>
				<div class="profile-buttons">
					<button class="btn edit-btn">Edit Profile</button>
					<button class="btn remove-btn">Remove Profile</button>
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




		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?php echo base_url('assets/javascript/dashboard4.js') ?>"></script>

</body>
</html>