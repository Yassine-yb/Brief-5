<?php 

	$newGroupe = new groupeController();
	 $newGroupe->addGroupe();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter Groupe</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">Libelle Groupe*</label>
 							<input type="text" name="libellegroupe" class="form-control" placeholder="Libelle Groupe">
 						</div>
 						<div class="form-group">
 							<label for="effectif">Effectif*</label>
 							<input type="nom" name="effectif" class="form-control" placeholder="Effectif">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 <?php 

	$groupe = new groupeController();
	$groupes = $groupe->getAllGroupe();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					<a href="<?php echo BASE_URL;?>addgroupe" class='btn btn-sm btn-primary mr-2 mb-2'>
 						<i class="fas fa-plus"></i>
 					</a>
 					<a href="<?php echo BASE_URL;?>" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Libelle Groupe</th>
					      <th scope="col">Effectif</th>
					     
					      <th scope="col">action</th>
					       
					    </tr>
					  </thead>
					  <tbody>
					   <?php 
					    foreach ($groupes as $grp):?>

					      <tr>
					      <td><?php echo $grp['libellegroupe'] ;?></td>
					      <td><?php echo $grp['effectif']; ?></td>
					       <td class="d-flex flex-row">
					       	<form method="post" class="mr-1"  action="updateGroupe">
					       		<input type="hidden" name="id" value="<?php echo $grp['id'] ;?>">
					       		<button class="btn btn-sm btn-warning">
					       			<i class="fa fa-edit">
					       				
					       			</i>
					       		</button>

					       	</form>
					       	<form method="post" class="mr-1"  action="deleteGroupe">
					       		<input type="hidden" name="id" value="<?php echo $grp['id'] ;?>">
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