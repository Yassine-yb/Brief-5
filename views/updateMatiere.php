<?php 
if (isset($_POST['id'])) {
	$existMatiere = new matiereController();
	$matiere = $existMatiere->getOneMatiere();
}
if (isset($_POST['submit'])) {
	$existMatiere = new matiereController();
    $existMatiere->updateMatiere();
}
	
	

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
 							<input type="text" name="libelle" class="form-control" placeholder="Libelle" 
 							value="<?php echo $matiere->libelle ;?>">
 							<input type="hidden" name="id" value="<?php echo $matiere->id ;?>">
 						</div>
 					
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>