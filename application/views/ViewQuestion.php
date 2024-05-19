<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard4.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboardHome.css') ?>">

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
		</nav>
		<!-- NAVBAR -->
		
		<!-- MAIN -->
	
		<main>			
				<?php if (!empty($questions)): ?>
					<?php foreach ($questions as $question): ?>    
						<div class="table-data">
							<div class="data">
								<?php echo htmlspecialchars($question['question']); ?><br>
                                <div class="tags">
                                    <span>tags :<?php echo $question['tag1']; ?></span>
                                    <span><?php echo $question['tag2']; ?></span>
                                    <span><?php echo $question['tag3']; ?></span>
                                </div>
								<div class="question-stats">			
									<button class="answerButton" id="answerButton<?php echo $question['id']; ?>">Answer</button>
									<a href="#" class="viewAnswers" id="question<?php echo $question['id']; ?>">View Answers</a>
									<span>posted on <?php echo date('d F Y', strtotime($question['created_at'])); ?></span>
									<span>Answers : <?php echo $question['answer_count']; ?></span>
													
								</div>
								<div id="answerForm<?php echo $question['id']; ?>" style="display: none;">
									<textarea id="answerText<?php echo $question['id']; ?>" placeholder="Write your answer..."></textarea>
									<button class="sendButton" id="sendButton<?php echo $question['id']; ?>">Send</button>
								</div>
								<div class="answersContainer" id="answersContainer<?php echo $question['id']; ?>"></div>
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
	<script>
		
		document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.answerButton');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const questionId = this.id.replace('answerButton', '');
            const answerForm = document.getElementById('answerForm' + questionId);

            if (answerForm.style.display === 'none') {
                answerForm.style.display = 'block';
            } else {
                answerForm.style.display = 'none';
            }
        });
    });

    const sendButtons = document.querySelectorAll('[id^="sendButton"]');

    sendButtons.forEach(button => {
        button.addEventListener('click', function() {
            const questionId = this.id.replace('sendButton', '');
            const answerText = document.getElementById('answerText' + questionId).value;
            const userId = <?php echo json_encode($userdata['user_id']); ?>; //user ID of the answerer

            // Log the values to check
            console.log("Question ID:", questionId);
            console.log("Answer Text:", answerText);
            console.log("User ID:", userId);

            // AJAX request to CodeIgniter controller
            fetch('<?php echo site_url('Answers/SaveAnswers'); ?>', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    'questionId': questionId,
                    'answerText': answerText,
                    'userId': userId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message); // Show success message
                    // Optionally, clear the textarea or hide the form
                    document.getElementById('answerText' + questionId).value = '';
                    document.getElementById('answerForm' + questionId).style.display = 'none';
                } else {
                    alert(data.message); // Show error message
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});

	</script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
    const viewAnswerLinks = document.querySelectorAll('.viewAnswers');

    viewAnswerLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default action of the link

            const questionId = this.id.replace('question', '');
            const answersContainer = document.getElementById('answersContainer' + questionId);

            // Toggle display of the answers container
            if (answersContainer.style.display === 'block') {
                answersContainer.style.display = 'none';
                return;
            } else {
                answersContainer.style.display = 'block';
            }

            // AJAX request to fetch answers if the container is shown
            fetch('<?php echo site_url('Answers/getAnswers'); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    'questionId': questionId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Display answers
                    let answersHtml = '';
                    data.answers.forEach(answer => {
                        const date = new Date(answer.created_at);
                        const formattedDate = date.toLocaleDateString(); // Format the date
                        answersHtml += `<p class="answers">${answer.content}<br>(${answer.username} on ${formattedDate} ) </p>`;
                    });
                    answersContainer.innerHTML = answersHtml;

					// Update answer count
                    const answerCountElement = document.querySelector(`#question${questionId} ~ span.answer-count`);
                    if (answerCountElement) {
                        answerCountElement.textContent = data.answers.length;
                    }
                } else {
                    answersContainer.innerHTML = '<p class="answers">No answers found.</p>';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});

</script>

</body>
</html>