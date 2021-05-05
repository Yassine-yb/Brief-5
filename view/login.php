<!DOCTYPE html>

<html>
  <head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Description" content="Put your description here.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    

    <!--  CSS -->
    <link rel="stylesheet" href="http://localhost/gestion-emplois/public/css/style.css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/gestion-emplois/public/css/bootstrap.min.css"/>



    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fdfe2e911.js" crossorigin="anonymous"></script>


    <title> Log-In </title> 
    
    
  </head>

  <body>


    <div class="container d-flex justify-content-center">
        <div class="card mx-5 my-5">
            <div class="card-body py-2 px-2">

                <h2 class="card-heading py-3 px-5">Log In</h2>
                
                <form action="" method="post">
                    <div class="row rone mx-3 my-3">
                        <div class="col-md-6">
                            <div class="form-group"><label for="inputEmail" class="sr-only">Email</label><input type="text" class="form-control" id="inputEmail" placeholder="Email" name="username"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label for="inputPassword" class="sr-only">Password</label><input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password"></div>
                        </div>
                    </div>
                    <div class="row rtwo mx-3">
                        <div class="col-md-6">
                            <div class="form-group"><button type="submit" class="btn btn-primary mb-2">log In</button></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><a href="#" class="forgot">Forgot your Password?</a></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>





    <!-- JS & JQuery -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>

  </body>
</html>
