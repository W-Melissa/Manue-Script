window.onload = (test) => {
    document.getElementById('attente').addEventListener('click', function(){
        fetch('../model/fectchWaitingMsg.php')
        .then(function(response){
            return response.json();
            })
        .then(function(data){
            document.getElementById("waitingMessage").innerHTML = "";
            if(data.length == 0){
                let noMsg = document.createElement('p');
                noMsg.id='noMsg';
                noMsg.classList.add('text-center');
                noMsg.classList.add('my-5');
                noMsg.classList.add('fs-2');
                document.getElementById("waitingMessage").appendChild(noMsg);
                document.getElementById("noMsg").innerHTML = "Pas de messages en attente";
            }else{
            for (let i=0; i<data.length; i++){
                let tr = document.createElement('tr');
                tr.classList.add('row');
                tr.id='tr'+data[i].id_msg;
                document.getElementById("waitingMessage").appendChild(tr);

                //th row
                let th = document.createElement('th');
                th.classList.add('col-1');
                th.classList.add('text-wrap');
                th.classList.add('text-center');
                th.classList.add('text-break');
                th.setAttribute('scope', 'row');
                th.id='th'+i;
                document.getElementById('tr'+data[i].id_msg).appendChild(th);

                let pth = document.createElement('p');
                pth.id='pth'+i;
                pth.classList.add('mt-2');
                document.getElementById("th"+i).appendChild(pth);
                pth.innerHTML = data[i].id_msg;

                let imgfolder = document.createElement('img');
                imgfolder.id='imgfolder'+data[i].id_msg;
                imgfolder.setAttribute('src', '../images/folder.png');
                imgfolder.setAttribute('height', '20px');
                imgfolder.setAttribute('onclick', 'archiveMsg(this)');
                document.getElementById("th"+i).appendChild(imgfolder);

                let imgbin = document.createElement('img');
                imgbin.id= 'imgbin'+data[i].id_msg;
                imgbin.setAttribute('src', '../images/recyclebin.png');
                imgbin.setAttribute('height', '20px');
                imgbin.setAttribute('onclick', 'deleteMsg(this)');
                imgbin.classList.add('ms-3');
                document.getElementById("th"+i).appendChild(imgbin);
                
                //td nom 
                let tdNom = document.createElement('td');
                tdNom.classList.add('col-2');
                tdNom.classList.add('text-wrap');
                tdNom.classList.add('text-break');
                tdNom.classList.add('d-flex');
                tdNom.classList.add('align-items-center');
                tdNom.id='tdNom'+i;
                document.getElementById('tr'+data[i].id_msg).appendChild(tdNom);

                let ptdNom = document.createElement('p');
                ptdNom.id='ptdNom'+i;
                ptdNom.classList.add('mb-0');
                document.getElementById("tdNom"+i).appendChild(ptdNom);
                ptdNom.innerHTML = data[i].nom;   
                
                //td email 
                let tdEmail = document.createElement('td');
                tdEmail.classList.add('col-2');
                tdEmail.classList.add('text-wrap');
                tdEmail.classList.add('text-break');
                tdEmail.classList.add('d-flex');
                tdEmail.classList.add('align-items-center');
                tdEmail.id='tdEmail'+i;
                document.getElementById('tr'+data[i].id_msg).appendChild(tdEmail);

                let ptdEmail = document.createElement('p');
                ptdEmail.id='ptdEmail'+i;
                ptdEmail.classList.add('mb-0');
                document.getElementById("tdEmail"+i).appendChild(ptdEmail);
                ptdEmail.innerHTML = data[i].email; 

                //td Objet 
                let tdObjet = document.createElement('td');
                tdObjet.classList.add('col-2');
                tdObjet.classList.add('text-wrap');
                tdObjet.classList.add('text-break');
                tdObjet.classList.add('d-flex');
                tdObjet.classList.add('align-items-center');
                tdObjet.id='tdObjet'+i;
                document.getElementById('tr'+data[i].id_msg).appendChild(tdObjet);

                let ptdObjet = document.createElement('p');
                ptdObjet.id='ptdObjet'+i;
                ptdObjet.classList.add('mb-0');
                document.getElementById("tdObjet"+i).appendChild(ptdObjet);
                ptdObjet.innerHTML = data[i].objet; 

                //td Msg 
                let tdMsg = document.createElement('td');
                tdMsg.classList.add('col-5');
                tdMsg.classList.add('text-wrap');
                tdMsg.classList.add('text-break');
                tdMsg.classList.add('d-flex');
                tdMsg.classList.add('align-items-center');
                tdMsg.id='tdMsg'+i;
                document.getElementById('tr'+data[i].id_msg).appendChild(tdMsg);

                let ptdMsg = document.createElement('p');
                ptdMsg.id='ptdMsg'+i;
                ptdMsg.classList.add('mb-0');
                document.getElementById("tdMsg"+i).appendChild(ptdMsg);
                ptdMsg.innerHTML = data[i].msg; 
                }
            }
        })          
    })
    document.getElementById('archive').addEventListener('click', function(){
        fetch('../model/fetchArchivedMsg.php')
        .then(function(response){
            return response.json();
            })
        .then(function(data){
            document.getElementById("waitingMessage").innerHTML = "";
            if(data.length == 0){
                let noMsg = document.createElement('p');
                noMsg.id='noMsg';
                noMsg.classList.add('text-center');
                noMsg.classList.add('my-5');
                noMsg.classList.add('fs-2');
                document.getElementById("waitingMessage").appendChild(noMsg);
                document.getElementById("noMsg").innerHTML = "Pas de messages archivés";
            }else{
                for (let i=0; i<data.length; i++){
                    let tr = document.createElement('tr');
                    tr.classList.add('row');
                    tr.id='tr'+data[i].id_msg;
                    document.getElementById("waitingMessage").appendChild(tr);
    
                    //th row
                    let th = document.createElement('th');
                    th.classList.add('col-1');
                    th.classList.add('text-wrap');
                    th.classList.add('text-center');
                    th.classList.add('d-flex');
                    th.classList.add('flex-column');
                    th.classList.add('align-items-center');
                    th.classList.add('justify-content-center');
                    th.classList.add('text-break');
                    th.setAttribute('scope', 'row');
                    th.id='th'+i;
                    document.getElementById('tr'+data[i].id_msg).appendChild(th);
    
                    let pth = document.createElement('p');
                    pth.id='pth'+i;
                    document.getElementById("th"+i).appendChild(pth);
                    pth.innerHTML = data[i].id_msg;

                    let imgbin = document.createElement('img');
                    imgbin.id='imgbin'+data[i].id_msg;
                    imgbin.setAttribute('src', '../images/recyclebin.png');
                    imgbin.setAttribute('height', '20px');
                    imgbin.setAttribute('onclick', 'deleteMsg(this)');
                    document.getElementById("th"+i).appendChild(imgbin);
                    
                    //td nom 
                    let tdNom = document.createElement('td');
                    tdNom.classList.add('col-2');
                    tdNom.classList.add('text-wrap');
                    tdNom.classList.add('text-break');
                    tdNom.classList.add('d-flex');
                    tdNom.classList.add('align-items-center');
                    tdNom.id='tdNom'+i;
                    document.getElementById('tr'+data[i].id_msg).appendChild(tdNom);
    
                    let ptdNom = document.createElement('p');
                    ptdNom.id='ptdNom'+i;
                    ptdNom.classList.add('mb-0');
                    document.getElementById("tdNom"+i).appendChild(ptdNom);
                    ptdNom.innerHTML = data[i].nom;   
                    
                    //td email 
                    let tdEmail = document.createElement('td');
                    tdEmail.classList.add('col-2');
                    tdEmail.classList.add('text-wrap');
                    tdEmail.classList.add('text-break');
                    tdEmail.classList.add('d-flex');
                    tdEmail.classList.add('align-items-center');
                    tdEmail.id='tdEmail'+i;
                    document.getElementById('tr'+data[i].id_msg).appendChild(tdEmail);
    
                    let ptdEmail = document.createElement('p');
                    ptdEmail.id='ptdEmail'+i;
                    ptdEmail.classList.add('mb-0');
                    document.getElementById("tdEmail"+i).appendChild(ptdEmail);
                    ptdEmail.innerHTML = data[i].email; 
    
                    //td Objet 
                    let tdObjet = document.createElement('td');
                    tdObjet.classList.add('col-2');
                    tdObjet.classList.add('text-wrap');
                    tdObjet.classList.add('text-break');
                    tdObjet.classList.add('d-flex');
                    tdObjet.classList.add('align-items-center');
                    tdObjet.id='tdObjet'+i;
                    document.getElementById('tr'+data[i].id_msg).appendChild(tdObjet);
    
                    let ptdObjet = document.createElement('p');
                    ptdObjet.id='ptdObjet'+i;
                    ptdObjet.classList.add('mb-0');
                    document.getElementById("tdObjet"+i).appendChild(ptdObjet);
                    ptdObjet.innerHTML = data[i].objet; 
    
                    //td Msg 
                    let tdMsg = document.createElement('td');
                    tdMsg.classList.add('col-5');
                    tdMsg.classList.add('text-wrap');
                    tdMsg.classList.add('text-break');
                    tdMsg.classList.add('d-flex');
                    tdMsg.classList.add('align-items-center');
                    tdMsg.id='tdMsg'+i;
                    document.getElementById('tr'+data[i].id_msg).appendChild(tdMsg);
    
                    let ptdMsg = document.createElement('p');
                    ptdMsg.id='ptdMsg'+i;
                    ptdMsg.classList.add('mb-0');
                    document.getElementById("tdMsg"+i).appendChild(ptdMsg);
                    ptdMsg.innerHTML = data[i].msg; 
                }
            }
        }) 
    })
}

