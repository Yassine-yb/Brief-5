<?php 

	$newEnsignement= new ensignementController();
	 $newEnsignement->addEnsignement();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter Ensignement</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">
 							<label for="nom">nom*</label>
 							<input type="text" name="nom" class="form-control" placeholder="Nom ">
 						</div>
 						<div class="form-group">
 							<label for="prenom">Prenom*</label>
 							<input type="nom" name="prenom" class="form-control" placeholder="Prenom">
 						</div>
 						<div class="form-group">
 							<label for="email">Email*</label>
 							<input type="email" name="email" class="form-control" placeholder="email">
 						</div>
 						<div class="form-group">
 							<label for="capacitesalle">Password*</label>
 							<input type="password" name="password" class="form-control" placeholder="Password">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 <?php 

	$Ensignement = new ensignementController();
	$Ensignements = $Ensignement->getAllEnsignement();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					<a href="<?php echo BASE_URL;?>addensignement" class='btn btn-sm btn-primary mr-2 mb-2'>
 						<i class="fas fa-plus"></i>
 					</a>
 					<a href="<?php echo BASE_URL;?>" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Nom</th>
					      <th scope="col">Prenom</th>
					     <th scope="col">Email</th>
					      <th scope="col">Password</th>
					      <th scope="col">action</th>
					       
					    </tr>
					  </thead>
					  <tbody>
					   <?php 
					    foreach ($Ensignements as $ensignement):?>

					      <tr>
					      <td><?php echo $ensignement['nom'] ;?></td>
					      <td><?php echo $ensignement['prenom']; ?></td>
					      <td><?php echo $ensignement['email'] ;?></td>
					      <td><?php echo $ensignement['password']; ?></td>
					       <td class="d-flex flex-row">
					       	<form method="post" class="mr-1"  action="update">
					       		<input type="hidden" name="id" value="<?php echo $ensignement['id'] ;?>">
					       		<button class="btn btn-sm btn-warning">
					       			<i class="fa fa-edit">
					       				
					       			</i>
					       		</button>

					       	</form>
					       	<form method="post" class="mr-1"  action="delete">
					       		<input type="hidden" name="id" value="<?php echo $ensignement['id'] ;?>">
					       		<button class="btn btn-sm btn-danger">
					       			<i class="fa fa-trash">
					       				
					       			</i>
					       		</button>

					       	</form>

					       </td>
					    </tr> 
					    <?php endforeach; ?>
					    
					  </tbody>
					</table>
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>