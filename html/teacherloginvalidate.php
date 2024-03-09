
<?php session_start();?>
<?php
$host="localhost";
$user="root"; 
$password="";
$database="academicaid";
$con = mysqli_connect($host,$user,$password,$database);
if(!$con){ 
    die('Could not Connect My Sql:');
} 
$conn = mysqli_connect($host,$user,$password,$database);

//for chatapp
$email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)) {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE TRIM(email) = TRIM('$email')");

        if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $stored_password = $row['pw']; // Fetch the password from the database
            
            if($password==$stored_password) {
                $status = "Active now";

                // $_SESSION["unique_id"] = $row['unique_id'];
                // $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                // if($sql2) {
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                // } else {
                    // echo "Something went wrong. Please try again!";
                    // echo $_SESSION['unique_id'];
                    // echo $row['unique_id'];
                // }
            } else { 
            // echo $password;
            // echo $stored_password;
                echo "Email or Password is Incorrect!";
            }
        } else {
            // echo $stored_password;
            // echo ($_SESSION['unique_id']);
            // echo mysqli_num_rows($sql);
            // echo $_POST['email'];            
            echo $email."Email does not exist..!<br>";
        }
    } else {
        echo "All input fields are required!";
    }


//for teacher login

if(isset($_POST['login'])) {	
    $email = $_POST['email'];
    echo "email entered: " . $email."  "; // Debug statement
    $password = $_POST['password'];
    echo "pw entered: " . $password."<br>"; // Debug statement
    $sql = "SELECT * FROM teacher WHERE TRIM(email)=TRIM('$email')";
    echo $email;
    $result = mysqli_query($con, $sql);
    // echo $name;

    if($result) {
        if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
    // Print the result depending if they match
            if ($row['pw'] == $password) {
                $_SESSION["username"] = $name;
                $_SESSION["user_id"] = $row['id'];
                header('location: profile.php?success=true');
            } else {
                echo 'Error: Password mismatch'; // Debug statement
            }
        }
    } else {
        echo 'Error: .invalid data' . mysqli_error($con); // Debug statement
    }
}















$sqll = "SELECT * FROM teachertemp WHERE TRIM(cfn)=TRIM('$name')";
// echo $name;
$resultt = mysqli_query($con, $sqll);
// echo $name;

if($resultt) {
    if(mysqli_num_rows($resultt) > 0) {

    while($roww = mysqli_fetch_assoc($resultt)) {
// Print the result depending if they match
        if ($roww['pw'] == $password) {
            $_SESSION["username"] = $name;
            $_SESSION["user_id"] = $roww['id'];
            echo '<div style="color: red; font-size:25px;">Error: the registration form is still pending</div>';
            // echo 'the registration form is still pending'; // Debug statement
            
        } else {
            echo '<div style="color: red;">Error: Password mismatch</div>';

            // echo 'Error: Password mismatch'; // Debug statement
        }
    }
} else {
    echo 'Error: ...' . mysqli_error($con); // Debug statement
}
}
  
    mysqli_close($con);
}
?>




