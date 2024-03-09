<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/regiss.css">
</head>
<body>
    <div class="container">
        <h2>Registration-Form</h2>
        <div class="form-container">
            <form action="insertstudent.php" method="POST">
                <div class="input-field">
                    <div class="input-name">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="First Name" class="name" name="cfn">
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Middle Name" class="name" name="cmn">  
                        </span>
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Last Name" class="name" name="cln">  
                        </span>
                    </div>   
                       
                    <div class="input-name">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Email" class="e-name" name="email">
                    </div>
                    
                    <div class="input-name">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" class="p-name" name="pw">
                        <span>
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Confirm password" class="p-name" name=" cpw">  
                        </span>
                    </div>

                     <div class="input-name">
                        <input type="radio" class="gender" name="gender" value="male">
                        <label>Male</label>
                        
                        <input type="radio"  class="gender" name="gender" value="female">
                        <label>Female</label>
                     </div>

                     <div class="input-name">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" placeholder="Address" class="e-name" name="street">
                    </div>

                    <div class="input-name">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="date"  class="e-name" name="dob">
                    </div>

                    <div class="input-name">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <input type="text"  placeholder="Education level" class="e-name" name="glevel">
                    </div>

                    <div class="input-name">
                        <i class="fa-solid fa-phone"></i>
                        <input type="number"  placeholder="Phone-number" class="e-name" name="mob">
                    </div>

                    <div class="input-name">
                            <h5>Upload Your Imag</h5>
                            <input type="file" name="ppimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png">
                        </div>

                    <div class="input-name">
                        <h5>Parent-Info</h5>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Grandaparent Name" class="name"  name="gfn">
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Father Name" class="name" name="ffn">  
                        </span>
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Mother Name" class="name" name="mfn">  
                        </span>
                    </div>   
                   
                    <div class="input-name">
                       
                        <input type="submit"   class="r-btn" value="Register" name="register">
                    </div>
                    
 
                </div>
            </form>
        </div>
    </div>
</body>
</html>