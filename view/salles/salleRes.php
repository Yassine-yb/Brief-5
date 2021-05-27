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
    

</head>

<body>

<div class="d-flex">

  <div class="col-md-3" id="myList1" role="tablist">
    
    <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/gestion-emplois/reservationCont/index" role="tab">Home</a>
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/gestion-emplois/ReservationCont/reservation" role="tab">Reseravation des Salles</a>
        
  </div>

  <div class="col-md-8 m-sm-4 ">
    <div class="d-flex justify-content-between">
      <h1 class="font-weight-bold">
        List des cours
      </h1>
      <div class="col-md-2">
          <form action="http://localhost/gestion-emplois/loginCont/logout" method="post">
            <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
          </form>
      </div>
    </div>
  <br>

  <form action="http://localhost/gestion-emplois/ReservationCont/Ajout" method="POST" class="card card-body">
      
    <div class="d-flex">
      <select class="form-control" id="salle" name="salle">
        <option value="0" disabled selected>
          Choix des Salles
        </option>
        
        <?php foreach($salles as $salle): ?>
          <option value="<?= $salle["Libelle"] ?>"><?= $salle["Libelle"] ?></option>
        <?php endforeach; ?>
                          
      </select>

      <div class="col-md-1">
      </div>

      <input type="text" name="capacite" class="form-control" id="capacite"  placeholder="Capacite">
     

      <div class="col-md-1">
      </div>
          
      <input type="date" name="date" id="date"  class="form-control">

      <div class="col-md-1">
      </div>

      <select name="heure"  id="horraire" class="form-control mr-2">
          <option disabled selected> Choix d'horraire </option>
          <option value="8-10">8-10</option>
          <option value="10-12">10-12</option>
          <option value="14-16">14-16</option>
          <option value="16-18">16-18</option>
          </option>
      </select>

    </div><br>

    <div class="col text-center">
      <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Submit" id="reserve">
    </div>
    
  </form>

  <br><br>

  <table class="table caption-top">
    
    <caption>les cours reservé</caption>
    
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Capacite</th>
        <th scope="col">Heure</th>
        <th scope="col">Salle</th>
        <th scope="col">Action</th>
      </tr>               
    </thead>
                
    <tbody id="body">

      <tr>
        <?php foreach($cours as $cour): ?>
        <td><?= $cour["Date"] ?></td>
        <td><?= $cour["Capacite"] ?></td>
        <td><?= $cour["Heure"] ?></td>
        <td><?= $cour["Salle"] ?></td>         
        <td> 
        <form action="http://localhost/gestion-emplois/ReservationCont/delete" method="post">
          <input type="hidden" name="IdCours" value="<?= $cour ['IdCours']  ?>">
          <button type="submit" class="btn btn-danger" name="delete">Delete</button>
        </form>
        </td>
      </tr>
      <?php endforeach; ?>
      
    </tbody>
  </table>



</div>
	
<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
</body>

</html>
