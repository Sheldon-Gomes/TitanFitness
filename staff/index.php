<?php session_start();
include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
     
<head>
        <title>Titan Fitness</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-style.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    
    <body style="background:url(bg.jpg);background-repeat:no-repeat;background-size:100%">
    
        <div id="loginbox">            
            <form id="loginform" method="POST" class="form-vertical" action="#">
            <div class="control-group normal_text"> <h3><img src="img/icontest4.png" alt="Logo" />Staff Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="user" placeholder="Username" autofocus required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="pass" placeholder="Password" required />
                        </div>
                    </div>
                </div>
                <div class="form-actions center">
                    <!-- <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span> -->
                    <!-- <input type="submit" class="button" title="Log In" name="login" value="Admin Login"></input> -->
                    <button type="submit" class="btn btn-block btn-large btn-info" title="Log In" name="login" value="Admin Login">Login</button>
                </div>
            </form>
            <?php
                if (isset($_POST['login']))
                    {
                        $username = mysqli_real_escape_string($con, $_POST['user']);
                        $password = mysqli_real_escape_string($con, $_POST['pass']);

                        $password = md5($password);
                        
                        $query 		= mysqli_query($con, "SELECT * FROM staffs WHERE password='$password' and username='$username'");
                        $row		= mysqli_fetch_array($query);
                        $num_row 	= mysqli_num_rows($query);
                        
                        if ($num_row > 0) 
                            {			
                                $_SESSION['user_id']=$row['user_id'];
                                header('location:staff-pages/index.php');
                                
                            }
                        else
                            {
                                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                                Invalid Username and Password
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }
                    }
            ?>
            <br>
            <div class="pull-left" style="background-color:#2E363F;"> 
            <a href="../index.php"><h5>Admin Login</h5></a>
            </div>

            <div class="pull-right"style="background-color:#2E363F;">
            <a href="../customer"><h5>Customer Login</h5></a>
            </div>
            
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
    </body>

</html>
