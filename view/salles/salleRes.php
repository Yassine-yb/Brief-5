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


    <title> Réservation des Salles </title> 
    
    
  </head>

<body>


  <div class="d-flex">


    <div class="col-md-3" id="myList1" role="tablist">
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/reservationCont/index" role="tab">Home</a>
      <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/gestion-emplois/salleCont/salle" role="tab">Réservation des Salles</a>
    </div>


    <div class="col-md-8 m-sm-4 ">
      <div class="d-flex justify-content-between">
          <h1 class="text-center">Réservation des Salles</h1>
          <div class="col-md-2">
              <form action="http://localhost/gestion-emplois/loginCont/logout" method="post">
                <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
              </form>
          </div>
      </div>
      <br>

      <form action="http://localhost/gestion-emplois/ResSalleCont/Ajout" method="post" class="card card-body">
        
        <div class="d-flex">
          <div class="col-md-6">
            <input type="text" name="libelle" class="form-control" placeholder="Libelle">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
            <input type="text" name="capacite" class="form-control col-md-6" placeholder="Capacite">
          </div>&nbsp;&nbsp;

        </div><br>

        <div class="col text-center">
          <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Submit">
        </div>
      </form><br>



    </div>

  </div>



  <!-- JS & JQuery -->
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/jquery.min.js"></script>
  <script src="../public/js/all.js"></script>

</body>
</html>