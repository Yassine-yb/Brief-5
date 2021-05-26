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

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="p-4 pt-5">
				<a href="dashboard" class="img logo rounded-circle mb-5" style="background-image: url(public/images/logo.webp);"></a>
				
                <ul class="list-unstyled  mb-5">

					<?php if ($_SESSION["Role"] == "Admin") : ?>
						<li class="">
							<a class="" href="dashboard">
								<i class="" data-feather="sliders"></i> <span class="">Dashboard</span>
							</a>
						</li>
						<li class="">
							<a class="" href="Salle">
								<i class="" ></i> <span class="">Salle</span>
							</a>
						</li>

						<li class="">
							<a class="" href="groupe">
								<i class="" ></i> <span class="">Groupe</span>
							</a>
						</li>
						<li class="">
							<a class="" href="enseignant">
								<i class="" ></i> <span class="">Enseignant</span>
							</a>
						</li>

					<?php else : ?>
						<li class="">
							<a class="" href="cours">
								<i class="" ></i> <span class="">Cours</span>
							</a>
						</li>
					<?php endif; ?>

				</ul>


			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5">

			<nav class="card mb-4">
				<div class="card-body d-flex justify-content-between p-3">
					<button type="button" id="sidebarCollapse" class="btn btn-primary ">
						<i class="fa fa-bars"></i>
						<span class="sr-only">Toggle Menu</span>
					</button>




			</nav>

			<div class="container-fluid">

                <div class=" mb-4">
                <h1 class="font-weight-bold">
                    List des cours
                </h1>
            </div>

            <div class="card w-100">
                <div class="card-body ">
                    <form class="d-flex justify-content-between">
                        <select class="form-control" id="salle" name="IdSalle">
                            <option value="0" disabled selected>
                                Choix des Salles
                            </option>
                        
                            <option value="0">0</option>
                            
                            </select>
                            <input type="date" name="date" id="date" disabled class="form-control">

                            <select name="dt" disabled id="horraire" class="form-control mr-2">
                                <option value="0" disabled selected>
                                    Choix du date
                                </option>

                            </select>

                        <button type="Button" class="btn btn-info" id="reserve" disabled>
                            Submit
                        </button>
                    </form>
                </div>
            </div>

            <div class="data">
            <table class="table caption-top">
                <caption>les cours disponible</caption>
                <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Salle</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="body">

                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
</body>

</html>
