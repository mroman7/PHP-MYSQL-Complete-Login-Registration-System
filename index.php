<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <!-- Login START -->
            <div class="col-sm-12 col-md-6 px-5">
                <h3>Login Form</h3>
                <form action="login.php" method="post" class="mt-5">
                    <div class="form-group">
                        <label for="userEmail">Email address</label>
                        <input type="email" class="form-control" name="email" id="userEmail" aria-describedby="emailHelp" require>                        
                    </div>
                    <div class="form-group">
                        <label for="userPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="userPassword" require>
                    </div>
                    <input type="submit" name="submit_login" value="Login" class="btn btn-primary">
                </form>
            </div>
            <!-- Login ENDS -->

            <!-- Register Form START -->
            <div class="col-sm-12 col-md-6 px-5">
                <h3>Registration Form</h3>

                <form action="register.php" method="post" class="mt-5">
                    <div class="form-row">
                        <div class="col">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newEmail">Email address</label>
                        <input type="email" class="form-control" name="email" id="newEmail" aria-describedby="emailHelp">                        
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="newPassword">
                    </div>
                    <input type="submit" name="submit_registeration" value="Register" class="btn btn-primary">
                </form>

            </div>
            <!-- Register Form Ends -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>