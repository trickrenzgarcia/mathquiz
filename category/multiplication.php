<?php 
  include_once('../connections/connection.php');
  session_start();
  $con = connection();
  $number = $_GET['n'];

  //Query for the Question
  $query = "SELECT * FROM questions WHERE question_number = $number";

  // Get the question
  $result = mysqli_query($con, $query);
	$question = mysqli_fetch_assoc($result);

  // Get Choices
  $query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($con,$query);
	$u = $con->query($query) or die ($con->error);
	$row = $u->fetch_assoc();
	
	

  // Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../static/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../static/css/index.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="../static/images/logo.jpg">
	<title>Math Quiz Game MULTIPLICATION</title>
</head>
<body class="multiplication_layout">

<header>
	<div class="container">
		<p>Under development.....</p>
	</div>
</header>

<main>
	<div class="container">
		<div class="current">
		<h4>Question <?php echo $number; ?> of <?php echo $total_questions; ?> </h4>
		
		</div>
		<h1 class="question"><?php echo $question['question_text']; ?> </h1>
		<form method="POST" action="process.php">
			<?php while($row=mysqli_fetch_assoc($choices)){ ?>
				<p>
					<label>
						<input class="validate" type="radio" name="choice" value="<?php echo $row['id'];?>" required/>
						<span><?php echo $row['coption']; ?></span>
					</label>
				</p>
			<?php } ?>
			<input type="hidden" name="number" value="<?php echo $number; ?>">
			<button class="btn" type="submit" name="submit" value="Submit">NEXT</button>
		</form>
	</div>
</main>

</body>
</html>