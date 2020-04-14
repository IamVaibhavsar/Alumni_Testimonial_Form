<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD in PHP|MySQL|AJAX</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="header">
  <h1>ALUMNI TESTIMONIAL FORM</h1>
</div>

  <div class="wrapper">
  	<?php echo $comments; ?>
  	<form class="comment_form">
      <div>
        <label for="name">Name:</label>
      	<input type="text" name="name" id="name">
      </div>
      <div>
      	<label for="comment">Testimonial about College:</label>
      	<textarea name="comment" id="comment" cols="30" rows="5"></textarea>
      </div>
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  	</form>
  </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>








