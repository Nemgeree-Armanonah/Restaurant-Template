<?php
// Test Function to remove white spaces and slashes from the fields
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// variables
 $first_name = " ";
 $last_name = "";
 $email = "";
 $password = "";
 $city = "";
 $state = "";
 $zip_code = "";
 $terms_conditions = "";

// Error Variables for each one.
$err_first_name = "";
$err_last_name = "";
$err_email = "";
$err_password = "";
$err_city = "";
$err_state = "";
$err_zip_code = "";
$err_terms_conditions;

// firstName Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
      echo "Name is required and You will be redirected to home page";
      exit;
      header( "refresh:5;url=../index.php" );

  } else {
    $first_name= test_input($_POST["first_name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
      $err_first_name = "Only letters and white space allowed";
    }
  }
}


  // last_name Validation
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["last_name"])) {
      echo "Last name is required and you will be redireted to Home page";
      header( "refresh:5;url=../index.php" );
      exit;
    } else {
      $last_name= test_input($_POST["last_name"]);

      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
        $err_last_name = "Only letters and white space allowed";
      }
    }
}

// username Valiation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    echo  "E-Mail is required and you will be redirected to Home page";
    header( "refresh:5;url=../index.php" );
    exit;
  } else {
    $email= test_input($_POST["email"]);


    // check if the email address is correct
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err_email = "Invalid email format";
}
  }
}

// Password Valiation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    echo "password is required and you will be redirected to Home page";
    header( "refresh:5;url=../index.php" );
    exit;
  } else {
      password_hash($password,PASSWORD_BCRYPT);
    $password= test_input($_POST["password"]);

  }
}

 //City Validation
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["city"])) {
     $err_city= "City is required and you will be redirected to Home page";
     echo $err_city;
     exit;
     header("refressh:5;url = ../index.php");
   } else {
     $city= test_input($_POST["city"]);

     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
       $err_city = "Only letters and white space allowed";
     }
   }
}

   // State Validation
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["state"])) {
       $err_state = "state is required and you will be redirected to Home page";
       echo $err_state;
        header("refressh:5;url = ../index.php");
        exit;
     } else {
       $state= test_input($_POST["state"]);

       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z-' ]*$/",$state)) {
         $state = "Only letters and white space allowed";
       }
     }
 }

     // Zipcode validation
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["zip_code"])) {
         $err_zip_code = "Zip code is required and you will be redirected to the Homepage";
         echo $err_zip_code;
         header("refressh:5;url = ../index.php");
         exit;

       } else {
         $zip_code= test_input($_POST["zip_code"]);

         // check if name only contains letters and whitespace
         if (!preg_match("/^[0-10' ]*$/",$zip_code)) {
           $err_zip_code = "Only Numbers are allowed";
         }
       }
   }

       // terms and conditions validation
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["terms_conditions"])) {
           $err_terms_conditions = "Please check terms and conditions you will be redirected soon.";
           echo $err_terms_conditions;
            header("refressh:3;url = ../index.php");
            exit;
         }
         else {
           $terms_conditions= test_input($_POST["terms_conditions"]);
         }
     }

     // Saving data to the database
        $servername = "localhost";
        $usrn = "root";
        $pass = "root";
        $dbname = "afghan";
     // Create connection
        $conn = new mysqli($servername, $usrn, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO register ( first_name,
         last_name,
         email,
         password,
         city,
         state,
         zip_code)
        VALUES ( ?,?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            die(mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt,"ssssssi",
        $first_name,
        $last_name,
        $email,
        $password,
        $city,
        $state,
        $zip_code);

        mysqli_stmt_execute($stmt);

        echo "Registeration succesful. You will be redirected to the home page soon";
        header( "refresh:5;url=../index.php" );
        $conn->close();

 ?>
