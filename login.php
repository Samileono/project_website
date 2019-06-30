<?php 
        session_start();
         include("includes/header.php");
        $conn = mysqli_connect("localhost", "root", "", "dardingli");

?>


<!DOCTYPE html>
<html>

<head>
    <title>DarDingli | DarDingli</title>
    <style type="text/css">
  /*
		For OVerding the background of black from the style.css for html, body!
	*/
        html,
        body {
            background-color: #eae6e6ed !important;
        }

         .c-form {
          display: grid;
          grid-gap: 10px;
          grid-template-columns: 1fr
}

.custom-bg {
    background: url("assets/images/d.png");
    height: 100%;
    width: 100%;
}

    </style>

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg w-100 custom-bg">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="img-fluid" style="height: auto;
                width: 11vw;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon " style="color: white; transform: rotate(270deg);">|||</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link custom-bg-item" href="#"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link custom-navbar-item-link" href="#">EUR (€) <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle  custom-navbar-item-link" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-briefcase"></i> Professional
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-flex align-items-center justify-md-content-center">
                    <img class="custom-img" src="assets/images/user_image.png">
                    <a class="nav-link dropdown-toggle  custom-navbar-item-link" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-briefcase"></i> My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



    <div class="custom-bg c-container light-bg px-4 py-4 mt-4">
        <h1 class="text-center h2 text-dark">Login Dardingli</h1>
        <!-- <a href="#" class="input-btn-blue-1 text-center d-block">I'm a professional</a> -->
        <div class="form-container">

            <?php if (isset($_SESSION['success'])) { ?>

                  <div class="alert alert-dismissible alert-success" style="margin-bottom: 0px;position: absolute;background:#4caf50;color: #fff; border: 1px solid #4caf50;z-index: 1;left: 445px;top: 100px;width: 475px;text-align: center;border-radius: 0px;">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                          <i class="fa fa-times"></i>
                      </button>
                      <span style="color:white;"><b><?php echo $_SESSION['success'];?></b></span>
                  </div>

                <?php unset($_SESSION['success']); } ?>

            <div class="d-user">
                <img src="assets/images/user_image.png" style="width: 50px; display: block; margin: auto;" alt=""
                    class="img-fluid">
               
                <form id="login_form" action="login_submit.php" method="post" class="form-group c-form mt-4">

                    <div class="c-reg-input">
                        <input type="text" name="email" id="email" class="form-control " placeholder="Email..">
                        <span id="error_email" class="text-danger"></span>
                    </div>

                    <div class="c-reg-input">
                        <input type="text" name="password" id="password" class="form-control" placeholder="Password..">
                        <span id="error_password" class="text-danger"></span>
                    </div>

                      <div class="c-input2">
                        <div class="d-flex align-items-center ">
                            <input type="checkbox" id="acknowledge" class="form-control mr-2" style="width: 30px">
                            <p class="info-text text-dark mb-0">I accept terms and conditions, the basic info of data
                                privacy
                            </p>&nbsp;
                            <span id="error_acknowledge" class="text-danger"></span>
                        </div>
                    </div>
                    
                    <div class="w-50 mx-auto">
                        <a href="#" id="submit" class="pink-bg-btn text-white">Create My Account</a>
                    </div>

                    <div>
                      <a  href="reg.php" class="text-center text-dark-pink font-weight-bold d-block">I already have account in dardingli</a>
                    </div>

                </form>

            </div>
            </div>
        </div>
</body>

</html>

<script type="text/javascript">
 
$(document).ready(function(){

    $('#submit').click(function(){

           var email = $('#email').val();
           var password = $('#password').val();
   
           var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


           if($.trim($('#email').val()).length == 0)
           {
             error_email = 'Email is required';
             $('#error_email').text(error_email);
             $('#email').addClass('has-error');
           }
           else
           {
             if (!filter.test($('#email').val()))
             {
               error_email = 'Invalid Email';
               $('#error_email').text(error_email);
               $('#email').addClass('has-error');
             }
             else
             {
                  error_email = '';
                  $('#error_email').text(error_email);
                  $('#email').removeClass('has-error');     
             }
            }


              if($.trim($('#password').val()).length == 0)
                  {
                     error_password = 'Password is required';
                     $('#error_password').text(error_password);
                     $('#password').addClass('has-error');
                  }
                  else
                  {
                     error_password = '';
                     $('#error_password').text(error_password);
                     $('#password').removeClass('has-error');
                  }
  

                  if(error_email == '' && error_password == '')
                    {

                        $('#login_form').submit();
                    
                    }           

    });


});

</script>