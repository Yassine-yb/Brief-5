<?php 

	$newMatiere = new matiereController();
	 $newMatiere->addMatiere();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Matiere</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">
 							<label for="libelle">Libelle Matiere*</label>
 							<input type="text" name="libelle" class="form-control" placeholder="Libelle">
 						</div>
 					
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 <?php 

	$matiere = new matiereController();
	$matieres = $matiere->getAllMatiere();
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					<a href="<?php echo BASE_URL;?>addmatiere" class='btn btn-sm btn-primary mr-2 mb-2'>
 						<i class="fas fa-plus"></i>
 					</a>
 					<a href="<?php echo BASE_URL;?>" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Libelle Matiere</th>
					      
					     
					      <th scope="col">action</th>
					       
					    </tr>
					  </thead>
					  <tbody>
					   <?php 
					    foreach ($matieres as $matt):?>

					      <tr>
					      <td><?php echo $matt['libelle'] ;?></td>
					       <td class="d-flex flex-row">
					       	<form method="post" class="mr-1"  action="updateMatiere">
					       		<input type="hidden" name="id" value="<?php echo $matt['id'] ;?>">
					       		<button class="btn btn-sm btn-warning">
					       			<i class="fa fa-edit">
					       				
					       			</i>
					       		</button>

					       	</form>
					       	<form method="post" class="mr-1"  action="deleteMatiere">
					       		<input type="hidden" name="id" value="<?php echo $matt['id'] ;?>">
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