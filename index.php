<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Web Devloper Assessment</title>
</head>
<body>
    <div class="container">
    <form action="success.php" method="post">
	<h4 class="display-4 text-center">Web Developer Assessment</h4><hr><br>

  <div class="form-group">
    <label for="fname" class="form-label">First Name</label>
    <input type="name" class="form-control" id="name" name="fname" placeholder="Enter First Name..." required>
  </div>

  <div class="form-group">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="email" name="lname" placeholder="Enter Last Name.." required>
  </div>

  <div class="form-group">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="email" name="dob" placeholder="Enter Date of Birth.." required>
  </div>
  
  <div class="form-group">
    <label for="gender" class="form-label">Gender:</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>