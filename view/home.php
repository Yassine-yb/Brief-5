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


    <title> Acceuil </title> 
    
    
  </head>

  <body>


    <div class="row">

        <h2 class="card-heading py-3 px-5">Acceuil</h2>
        
        <div class="col-4">

          <!-- List group -->
            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/gestion-emplois/homeCont/index" role="tab">Home</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/salleCont/salle" role="tab">Gestion des Salles</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/enseignantCont/enseignant" role="tab">Gestion des Enseignants</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/groupeCont/groupe" role="tab">Gestion des Groupes</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/matiereCont/matiere" role="tab">Gestion des Matieres</a>
            </div>

            <!-- Tab panes -->
            <!-- <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">School Management System</div>
            </div> -->

        </div>

        


    </div>




    <!-- JS & JQuery -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/all.js"></script>


  </body>
</html>
