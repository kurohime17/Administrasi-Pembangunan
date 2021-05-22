<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head
<body>
    <?php
        $servername = "localhost:3308";
        $username = "username";
        $password = "root";
        $dbname = "mydb";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        /*
        // Create database
        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }
        */
        
        // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

        // sql to create table
        $sql = "CREATE TABLE datalogin (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(30) NOT NULL,
          sandi VARCHAR(30) NOT NULL,
          reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
        
  $conn->close();
  ?>

<div class="container">
    <h1>Pendaftaran Pengguna Baru</h1>
    <form method="POST" action="http://localhost:8080/login/login.php">
    <input name="tujuan" type="hidden" value="LOGIN">
    <label>Username</label><br>
    <input name="username" type="text"><br>
    <label>Password</label><br>
    <input name="password" type="password"><br>
    <button>Batal</button>
    <button>Daftar</button>
    </div>
    </form>
</div>

  <?php
    if(isset($_POST["tujuan"])){
      $tujuan=$_POST["tujuan"];

    if($tujuan=="LOGIN"){
      $username=$_POST["username"];
      $username=$_POST["password"];

      if($username =="admin" && $password == "admin"){
        echo "welcome, ".$username."!";
      }else {
        echo "USERNAME SALAH index.php";
      }
    }
    }
  ?>  

</body>
</html>