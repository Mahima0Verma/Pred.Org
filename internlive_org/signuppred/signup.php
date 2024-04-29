
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MKDt7hQ/VQOMkBO4xt73YZzy4CeVp+VoxF0Lb0gZ6isfHcY2LG2KyBzE+g2v/ACo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        
body{
    background-color: #fafafa;
}
.form-section{
  
    position: relative;
    padding-top: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.mainbody{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: Inter, sans-serif;
}
.header  h2{
    font-size: 40px;
    line-height: 1.2;
    font-weight: 800;
}
.header  h2 span{
    color: #4faf8e;
    text-decoration: wavy;
    /* text-decoration: underline; */
    text-underline-position:  under;
}

.google_signup{
    border-radius: 20px;
    border: solid 1px #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.signup_container{
    background-color: #fff;
    margin: 20px 0px;
    padding: 40px ;
    border: solid 1px #ddd;
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap:  10px;
    box-shadow: -2px -2px 6px rgba(0,107,194,.12), 2px 2px 6px rgba(0,107,194,.12);
    border-radius: 12px;
}

.or{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.or p{
    background-color: #fff;
    z-index: 9;
}
.or .border{
    margin-top: -27px;
    color: #4faf8e;
    width: 100%;
}

button{
    border: none;
    font-size: 16px;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
}

.signup_button{
    background-color: #4faf8e;
    color: white;

}
.email_signup {
    display:flex;
    flex-direction: column;
    gap: 35px;
}
.email_signup p{
    text-align: left;
    line-height: 1px;
}
.email_signup input{
    width: 100%;
    height: 40px;
    border-radius: 5px;
    border: solid 1px #ddd;
    outline:  #4faf8e;

}

.name{
    width: 100%;
    display: flex;
    flex-direction: row;
    gap: 2rem;
    justify-content: left;
}

.firstname{
    width: 100%;
}

.lastname{
    width: 100%;
}


@media (max-width: 980px) {
    .mainbody .header{
        display: block;
        text-align: left;
    }

    .signup_container{
        margin: 0px;
        border: none;
        padding: 0;

    }
} 
    </style>
    <title>PREDULIVE</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <!-- nav starts -->
    <div class="main-header container-fluid position-fixed"
        style="z-index: 1000; transition: 0.3s ease-in-out;background-color: rgba(0, 0, 0, 0.682); ">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid Roboto-font">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/Predulive_Org_Logo_-removebg-preview.png" width="80px" alt="Logo">
                </a>
            </div>
        </nav>
    </div>
    <!-- nav ends -->



    <!--  -->
    <section class="form-section">
        <div class="mainbody">
            <!-- header -->
            <div class="header">
                <h2>Sign-up and <span>apply for free</span></h2>
                <h4>1,50,000+ companies hiring on Internlive</h4>
            </div>

            <!-- php code starts from here  -->
            <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $firstname =$_POST['firstname'];
                        $lastname =$_POST['lastname'];
                       
                        // connecting to the database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "signup";

                        // create a connection

                        $conn = mysqli_connect($servername, $username, $password, $dbname);


                        // Die if connection was not successful

                        if (!$conn) {
                            die("Sorry we failed to connect: ". mysqli_connect_error());
                            }
                        else{
                            
                            // submit these data to the database
                            
                            // sql query to be executed
                            $sql =" INSERT INTO `signuoform`(`email`, `password`, `firstname`, `lastname`) VALUES ('$email','$password','$firstname','$lastname')";
                            $result = mysqli_query($conn, $sql);


                            // add a new record to the signuoform table
                            if ($result) {  
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Success !</strong> ' . $firstname . ' , your email '.$email.' and password  '. $password .' has been submitted successfully .
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                            }else{
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Your entry is not submitted successfully . We regret the inconvienence caused. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                            }
                        } 

                    }
                   ?>



<!-- php code ends from here  -->
            <!-- signup container -->
            <div class="signup_container mt-4">
                <button class="google_signup">
                    <i class="fa-brands fa-google"></i>
                    Sign up with Google
                </button>

                <div class="or">
                    <p>OR</p>
                    <div class="border"></div>
                </div>
                <form action="signup.php" method="post" class="email_signup mt-4">
                    <div class="email">
                        <p>Email</p>
                        <input type="email" placeholder="john@example.com" name="email">
                    </div>

                    <div class="password">
                        <p>Password</p>
                        <input type="password" placeholder="Must be atleast 6 characters" name="password">
                    </div>
                    <div class="name">
                        <div class="firstname">
                            <p>First Name</p>
                            <input type="text" placeholder="John" name="firstname">
                        </div>

                        <div class="lastname">
                            <p>Last Name</p>
                            <input type="text" placeholder="Doe" name="lastname">
                        </div>
                    </div>


                    <p>By signing up, you agree to our <a href="#">Terms and Conditions</a>.</p>

                    <button class="signup_button" >
                        Sign Up
                    </button>
                </form>


                <!-- here is the php -->


                <p>Already registered?<a href="#">Login</a></p>
            </div>

        </div>
    </section>
</body>

</html>