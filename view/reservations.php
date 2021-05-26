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


    <title> Espace Enseignant </title> 
    
    
  </head>

  <body>


    <div class="row">

        <div id="lgout" class="d-flex justify-content-between">
          <h2 class="card-heading py-3 px-5">Espace Enseignant</h2>
          
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
          </div>

        </div>  
        
        <div class="col-4">

          <!-- List group -->
            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/gestion-emplois/reservationCont/index" role="tab">Home</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/ResSalleCont/salleRes" role="tab">Reseravation des Salles</a>
            </div>


        </div>

        


    </div>




    <!-- JS & JQuery -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/all.js"></script>


  </body>
</html>
