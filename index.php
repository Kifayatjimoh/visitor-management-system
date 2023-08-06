<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
   
</head>
<body>
    <div class="main">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 d-flex align-items-center">
                    <div class="text">
                           <h1 class="text-white text-center"> Welcome To PacifyLab.</h1>
                           <h2 class="text-white text-center mb-4 mt-3">Integrated Solutions.</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-12">
                <div class="form-box px-5 py-4" >  
                 
                <form  method="post" action="config.php">
                    <h2 class="text-center mb-4">Sign In. <span class="text-white">OR</span> <a href="admin.php" class="btn btn-primary btn-md mx-3 " tabindex="-1" role="button" >sign in as admin</a> </h2>
                   
                    <input type="text" name="firstname" placeholder="First Name" class="form-control mb-3" required>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control mb-3" required>
                  
                    <input type="phone" name="phone" placeholder="Phone Number" class="form-control mb-3" required>
                   
                   <input type="datetime-local" name="datetime" placeholder="Enter Date and time of visit" class="form-control mb-4" required>
                   <div class="d-flex justify-content-around">  
                    <div> 
                   <input type="radio" value="male" id="checkbox" name="gender" required>
                   <label for="male" >Male</label>
                   </div>
                   <div> 
                   <input type="radio" value="female" id="checkbox" name="gender" required>
                   <label for="female">female</label>
                   </div>
                   <div> 
                   <input type="radio" value="other" id="checkbox" name="gender" required>
                   <label for="other">Prefer not to say</label>
                   </div>
                   </div>
                   <input type="text" name="visit" placeholder="Visiting" class="form-control mb-3 mt-3" required>
                   <select name="selects" class="form-select mb-3 mt-4" required>
                        <option value="" required>--Select</option>
                        <option value="personal">Personal</option>
                        <option value="business">Business</option>
                    </select>
                    <div class="mt-5">
                        <button name="submit" class="register-btn form-control text-white">Sign In</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>
</html>



























<!-- // if (!empty($firstname) && !empty($lastname) && !empty($phone)  && !empty($datetime) && !empty($gender) && !empty($visit) && !empty($select) ) {
           
           //     if(!preg_match('/^[0-9]*$/',$phone)){
           //         $msg="only mobile number ";
           //         $msgClass = 'alert-danger';
           //         echo '<script> alert("only mobile number "); document.location.href= "index.php"</script>';
           //     }
           //     if(!preg_match('/^[a-z]+$/', $firstname))
           //     {
                  
           //         echo '<script> alert("enter proper name "); document.location.href= "index.php"</script>';
       
           //     }
               
              
           //     if (strlen($phone)>11){
           //         // $msg = 'Your Mobile Number is too Large';
           //         // $msgClass = 'alert-danger';
           //         '<script> alert("Your Mobile Number is too Large"); document.location.href= "index.php"</script>';
           //     }
           //     if (strlen($phone)<11){
           //         $msg='please Enter proper Mobile Number Here';
           //         $msgClass = 'alert-danger';
           //         // echo '<script> alert("please Enter proper Mobile Number Here "); document.location.href= "index.php"</script>';
           //     }else{
           //         echo '<script> alert("succssful "); document.location.href= "homepage.php"</script>';
           //     }
           // }  -->