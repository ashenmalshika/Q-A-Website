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
	margin-bottom:40px;
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
		.modal-header{
			padding: 20px 0 20px 0;
			font-weight: bold;
			font-size: 24px;
		}
		form{
			text-align: justify;  
			margin-left:20px;
		}
		input{
			padding:5px;
			border-radius:10px;
			width:250px;
			border:none;
		}
		label{
			margin-top:7px;
		}
		textarea {
        width: 100%;
        height: auto; 
        padding: 10px;
        border-radius: 7px;
        margin-top: 18px;
        max-width: 450px;
		font-size:14px;
		border:none;
    }
	#cancelBtn , #saveBtn {
            padding: 5px 10px;
            background-color: #4CAF50; 
            color: white; 
            border: none; 
            border-radius: 5px;
            cursor: pointer; 
            font-size: 16px;
            display: inline-block; 
			margin-right:18px;
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
	<script>
// Get the elements
var editProfileBtn = document.getElementById('editProfileBtn');
var editProfileForm = document.getElementById('editProfileModal'); // Corrected ID
var cancelBtn = document.getElementById('cancelBtn');

// When the user clicks the button, toggle the visibility of the form and scroll to it
editProfileBtn.onclick = function() {
    if (editProfileForm.style.display === 'none' || editProfileForm.style.display === '') {
        editProfileForm.style.display = 'block';
        editProfileForm.scrollIntoView({ behavior: 'smooth' });
    } else {
        editProfileForm.style.display = 'none';
    }
}

// When the user clicks on the cancel button, hide the form
cancelBtn.onclick = function() {
    editProfileForm.style.display = 'none';
}


</script>
</body>
</html>