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

        if(isset($_POST['login']))
        {	
           
	        $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "select * from teachertable where username='$username'";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    
                    // Print the result depending if they match
                    if ($row['PASSWORD']==$password) {
                        $_SESSION["username"]= $username;
                        // header('location:../dashboard/dashboard.php?success='.'true');
                        header('location:about.php?success='.'true');

                    } 
                    else {
                        header('location:loginforteacher.php?success='.'false');
                    }
                }
            }
            else {
                header('location:login.php?success='.'false');
            }
	        mysqli_close($con);
        }
?>