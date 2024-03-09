
<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="academicaid";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating teacher temporary tables
    //BLOB - binary large object
    $sql = "CREATE TABLE esewa(
        `id` int(11) NOT NULL,
        `invoice_no` varchar(100) DEFAULT NULL,
        `product_id` int(11) NOT NULL,
        `total` float NOT NULL,
        `status` tinyint(1) NOT NULL DEFAULT '0',
        `created_at` timestamp NULL DEFAULT NULL,

        `updated_at` timestamp NULL DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1"; // Removed extra closing parenthesis here




    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }

    mysqli_close($con);
?>
