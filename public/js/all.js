// var i=0;

// function addSalle(){
//     var form = document.getElementById("form");
//     var libelle=document.getElementById("Libelle");
//     var capacite=document.getElementById("Capacite");

//     if(capacite.value!='' && libelle.value!='')
//     {
//         form.innerHTML+= '<br><div class="row"><div class="col-md-4"><input type="text" class="form-control" id="libelle'+i+'" value="'+libelle.value+'" name="libelle'+i+'" ></div><div class="col-md-4"><input type="number" class="form-control" id="capacite" name="capacite'+i+'" value="'+capacite.value+'"></div></div>';
//         i++;
//     }
//     else{
//         alert('Tout les champs sont obligatoires !');
//     }
    
// }

var i = 0;

function add() {
    var idForm = document.getElementById('idForm');
    var Libelle = document.getElementById('Libelle').value;
    var capacite = document.getElementById('capacite').value;

    if (Libelle != '' && capacite != '') {
      idForm.innerHTML += '<br><div class="d-flex"><div class="col-md-5"><input type="text" name="Libelle' + i +
        '" class="form-control" value="' + Libelle +
        '" placeholder="Libelle"></div><div class="col-md-1"></div><div class="col-md-5"><input type="number" name="capacite' +
        i + '" value="' + capacite + '" class="form-control col-md-6" placeholder="capacite"></div></div>';


      i++;
    } else {
      alert("please enter your data !!");
    }
}
