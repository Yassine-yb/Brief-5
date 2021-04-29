<?php 
if (isset($_POST['id'])) {
	$existSalle = new salleController();
	$salle = $existSalle->getOneSalle();
}
if (isset($_POST['submit'])) {
	$existSalle = new salleController();
    $existSalle->updateSalle();
}
	
	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Modifier une Salle</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">
 							<label for="libellesalle">Libelle Salle*</label>
 							<input type="text" name="libellesalle" class="form-control" placeholder="Libelle Salle" value="<?php echo $salle->libellesalle; ?>">
 							<input type="hidden" name="id" value="<?php echo $salle->id ;?>">
 						</div>
 						<div class="form-group">
 							<label for="capacitesalle">Capacite Salle*</label>
 							<input type="nom" name="capacitesalle" class="form-control" placeholder="Capacite Salle" value="<?php echo $salle->capacitesalle; ?>">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 