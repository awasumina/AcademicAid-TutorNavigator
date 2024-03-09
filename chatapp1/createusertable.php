
<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="academicaid";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating teacher temporary tables
    //BLOB - binary large object
    $sql = "CREATE TABLE users(

usid INT NOT NULL AUTO_INCREMENT,
unique_id INT NOT NULL,
user_id INT NOT NULL,
PRIMARY KEY (usid),



        -- usid int NOT NULL AUTO_INCREMENT
        -- primary key(usid),
        -- id int NOT NULL,
        cfn varchar(255) not null,
        cmn varchar(255) not null,
        cln varchar(255) not null,
        dob date not null,
        email varchar(255) not null unique,
        mob varchar(10) not  null unique,
        gender varchar(255) not null,
        pw varchar(255) not null,
        cpw varchar(255) not null,
        street varchar(255) not null,
        ffn varchar(255) not null,
        mfn varchar(255) not null,
        gfn varchar(255) not null,
        ppimg varchar(455)  not null

    )";

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
