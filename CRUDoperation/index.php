
<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    
    <style>
       body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      text-align: center;
      margin-top: 0;
      color: #333;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }
    
    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
   
    .button {
    
    margin: 550px;
    padding: 10px 20px;
    background-color: #337ab7;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #286090;
}


 
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
    
   
    <div class="form-group">
            <a href="find.php" class="button">Check Form</a>
        </div>
    </form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    include "conn.php";
    include "find.php";

    $insertQuery = "INSERT INTO register (id, name, degree, mobile, email) VALUES (NULL, '$name', '$degree', '$mobile', '$email')";

    if (mysqli_query($con, $insertQuery)) {
        mysqli_close($con);
        header(include "succes.php");
        ?>
        <script>alert("data added")</script>
        <?php
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

