<?php
include 'config.php';

// Check if the subject is provided in the GET request
if(isset($_GET['subject'])) {
    $subject = $_GET['subject'];

    // Prepare the SQL query
    // SELECT id, cfn FROM teacher WHERE subtype = ? AND subtype2 = ?

    $query = "SELECT id, cfn,cln,email FROM teacher WHERE subtype = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind the parameter to the statement
        mysqli_stmt_bind_param($stmt, "s", $subject);
        
        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result set
        $result = mysqli_stmt_get_result($stmt);

        // Initialize an empty array to store the teachers
        $teachers = [];

        // Fetch the result set and store teachers in the array
        while($row = mysqli_fetch_assoc($result)) {
            $teachers[] = $row;
        }

        // Close prepared statement
        mysqli_stmt_close($stmt);

        // Close database connection
        mysqli_close($conn);

        // Send the response as JSON
        echo json_encode($teachers);
    } else {
        // Handle the case where preparing the statement failed
        echo "Failed to prepare the statement.";
    }
} else {
    // Handle the case where the subject is not provided
    echo json_encode([]);
}
?>
