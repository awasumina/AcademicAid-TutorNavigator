<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND type = 't' ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    } 
    echo $output;
?>





<!-- 

<?php
// session_start();
include_once "config.php";

// Check if the user is logged in
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
    exit(); // Ensure script execution stops after redirecting
}

$outgoing_id = $_SESSION['unique_id'];

// Check if the connection to the database is successful
if ($conn) {
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY unique_id DESC";
    $query = mysqli_query($conn, $sql);

    // Check if the query is successful
    if ($query) {
        // Initialize the output variable
        $output = "";

        // Check if there are rows returned by the query
        if(mysqli_num_rows($query) == 0) {
            $output .= "No users are available to chat";
        } else {
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($query)) {
                // Display user details (you can customize this part based on your HTML structure)
                // $output .= "<div class='user'>";
                // $output .= "<img src='php/images/{$row['ppimg']}' alt=''>";
                // $output .= "<div class='details'>";
                // $output .= "<span>{$row['cfn']} {$row['cln']}</span>";
                // // Add more details here if needed
                // $output .= "</div></div>";

        include_once "data.php";

            }
        }
    } else {
        // Output error message if the query fails
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    // Output error message if the connection fails
    echo "Error connecting to the database.";
}

// Output the generated HTML content
// echo $output;
?>

 -->


