var i=0;

function addSalle(){
    var form = document.getElementById("form");
    var libelle=document.getElementById("Libelle");
    var capacite=document.getElementById("Capacite");

    if(capacite.value!='' && libelle.value!='')
    {
        form.innerHTML+= '<br><div class="row"><div class="col-md-4"><input type="text" class="form-control" id="libelle'+i+'" value="'+libelle.value+'" name="libelle'+i+'" ></div><div class="col-md-4"><input type="number" class="form-control" id="capacite" name="capacite'+i+'" value="'+capacite.value+'"></div></div>';
        i++;
    }
    else{
        alert('Tout les champs sont obligatoires !');
    }
    
}