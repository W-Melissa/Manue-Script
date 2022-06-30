function deleteMsg(id_delete){ 
    id_delete=id_delete.id; 
    id_delete = id_delete.slice(6);

    if(confirm('Confirmez-vous la suppression? Cette action est irréversible')){
        let formData = new FormData(); //formData = ce qui sera passé en données
        formData.append('id', id_delete); //Ajoute à formData 1er id = nom de celui reçu dans php, 2ème id = valeur qu'on envera dans le premier

        fetch('../model/deleteMsg.php', {
            method: 'post',
            body: formData,
        })
        .then(function (response){
            return response.text();
        })
        .then(function(data){

            if (data == 'ok'){
                id_deleteplus = Number(id_delete);

                var supparchive = document.getElementById("tr"+id_deleteplus);

                supparchive.parentNode.removeChild(supparchive);

            }
            else 
            {
                console.log('Raté, retouche ton code !');
            }
        })
    }
}

function archiveMsg(id_delete){ 
    id_delete=id_delete.id; 
    id_delete = id_delete.slice(9);

    if(confirm('Confirmez-vous l\'archivage du message ?')){
        let formData = new FormData(); //formData = ce qui sera passé en données
        formData.append('id', id_delete); //Ajoute à formData 1er id = nom de celui reçu dans php, 2ème id = valeur qu'on envera dans le premier

        fetch('../model/archiveMsg.php', {
            method: 'post',
            body: formData,
        })
        .then(function (response){
            return response.text();
        })
        .then(function(data){

            if (data == 'ok'){
                id_deleteplus = Number(id_delete);

                var supparchive = document.getElementById("tr"+id_deleteplus);

                supparchive.parentNode.removeChild(supparchive);

            }
            else 
            {
                console.log('Raté, retouche ton code !');
            }
        })
    }
}
