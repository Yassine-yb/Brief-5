<?php 
if (isset($_POST['id'])) {
	$exitEnsignement = new ensignementController();
	$ensignement =  $exitEnsignement->getOneEnsignement();
	
}
if (isset($_POST['submit'])) {
	$exitEnsignement = new ensignementController();
	$exitEnsignement->updateEnsignement();
	
}	

 ?>
 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Modifier un employé</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post">
 						<div class="form-group">

 							<label for="nom">Nom*</label>
 							
 							<input type="text" name="nom" class="form-control" placeholder="Nom" 
 							value="<?php echo $ensignement->nom;?>">
 							<input type="hidden" name="id" value="<?php echo $ensignement->id ;?>">
                        </div>
 						<div class="form-group">
 							<label for="prenom">Prenom*</label>
 							<input type="text" name="prenom" class="form-control" placeholder="Prenom"
 							value="<?php echo $ensignement->prenom;?>">
 						</div>
 						<div class="form-group">
 							<label for="email">Email*</label>
 							<input type="email" name="email" class="form-control" placeholder="Email"
 							value="<?php echo $ensignement->email;?>">

 						</div>
 						<div class="form-group">
 							<label for="password">Password*</label>
 							<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $ensignement->password;?>">
 						</div>
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 