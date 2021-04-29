<?php 

	$newSalle = new salleController();
	 $newSalle->addSalle();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Salle</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">
 							<label for="libellesalle">Libelle Salle*</label>
 							<input type="text" name="libellesalle" class="form-control" placeholder="Libelle Salle">
 						</div>
 						<div class="form-group">
 							<label for="capacitesalle">Capacite Salle*</label>
 							<input type="nom" name="capacitesalle" class="form-control" placeholder="Capacite Salle">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 <?php 

	$salle = new salleController();
	$salles = $salle->getAllSalle();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					<a href="<?php echo BASE_URL;?>addsalle" class='btn btn-sm btn-primary mr-2 mb-2'>
 						<i class="fas fa-plus"></i>
 					</a>
 					<a href="<?php echo BASE_URL;?>" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Libelle Salle</th>
					      <th scope="col">Capacite Salle</th>
					     
					      <th scope="col">action</th>
					       
					    </tr>
					  </thead>
					  <tbody>
					   <?php 
					    foreach ($salles as $sall):?>

					      <tr>
					      <td><?php echo $sall['libellesalle'] ;?></td>
					      <td><?php echo $sall['capacitesalle']; ?></td>
					       <td class="d-flex flex-row">
					       	<form method="post" class="mr-1"  action="updateSalle">
					       		<input type="hidden" name="id" value="<?php echo $sall['id'] ;?>">
					       		<button class="btn btn-sm btn-warning">
					       			<i class="fa fa-edit">
					       				
					       			</i>
					       		</button>

					       	</form>
					       	<form method="post" class="mr-1"  action="deleteSalle">
					       		<input type="hidden" name="id" value="<?php echo $sall['id'] ;?>">
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