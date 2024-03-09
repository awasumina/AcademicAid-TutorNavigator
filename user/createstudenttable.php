
<?php 
    $host="localhost";
    $user="root";
    $password="";
    $database="academicaid";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating teacher temporary tables
    //BLOB - binary large object
    $sql = "CREATE TABLE student(
        id int NOT NULL AUTO_INCREMENT,
        primary key(id),
        cfn varchar(255) not null,
        cmn varchar(255) not null,
        cln varchar(255) not null,
        email varchar(255) not null unique,
        pw varchar(255) not null,
        cpw varchar(255) not null,
        gender varchar(255) not null,
        street varchar(255) not null,
        dob date not null,
        glevel varchar(255) not null,
        mob varchar(10) not  null unique,
        gfn varchar(255) not null,
        ffn varchar(255) not null,
        mfn varchar(255) not null,
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
