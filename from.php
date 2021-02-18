<!DOCTYPE html>
<html>
<head>
	<title>
		Task1
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Task 1</h1>
<div class="container">
<form action="login.php"method="POST">
<input class="form-control" type="number" name="id" placeholder="Enter your id" required>
<br>
<input class="form-control" type="password" name="password" placeholder="Enter password" required>
<br>
<input  class="form-control btn btn-primary text-light" type="submit" value="LOGIN">
</form>
<h1>Task 2</h1>
<div class="container">
<form action="admit.php"method="POST">
<input class="form-control" type="number" name="percentage" placeholder="Enter your percentage" required>
<br>
<input  class="form-control btn btn-secondary text-light" type="submit" value="SUBMIT">
</form>
<h1>Task 3</h1>
<div class="container">
<form action="bill.php"method="POST">
<input class="form-control" type="number" name="units" placeholder="Enter your units" required>
<br>
<input  class="form-control btn btn-info text-dark" type="submit" value="calcaulate">
</form>
</div>
</body>
</html>
