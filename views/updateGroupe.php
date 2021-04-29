<?php 
if (isset($_POST['id'])) {
	$existGroupe = new groupeController();
	$groupe = $existGroupe->getOneGroupe();
}
if (isset($_POST['submit'])) {
	$existGroupe = new groupeController();
    $existGroupe->updateGroupe();
}
	
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter Groupe</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">Libelle Groupe*</label>
 							<input type="text" name="libellegroupe" class="form-control" placeholder="Libelle Groupe" value="<?php echo $groupe->libellegroupe; ?>">
 							<input type="hidden" name="id" value="<?php echo $groupe->id ;?>">
 						</div>
 						<div class="form-group">
 							<label for="effectif">Effectif*</label>
 							<input type="nom" name="effectif" class="form-control" placeholder="Effectif"
 							value="<?php echo $groupe->effectif; ?>">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 