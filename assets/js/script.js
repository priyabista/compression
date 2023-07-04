
function createPort(){
    document.getElementById("createPort").style.display = 'block';
}
document.addEventListener('mouseup', function(e) {
 var container = document.getElementById('createPort');
 if(!container.contains(e.target)){
    container.style.display = 'none';
 }
});


function on(){
    document.getElementById("overlay").style.display ="block";
}
 
function off(){
    document.getElementById("overlay").style.display="none";
}

// function updatePort(){
//     document.getElementById("updateForm").style.display='block';

// }
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('updateForm');
    if(!container.contains(e.target)){
       container.style.display = 'none';
    }
   });
   

document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('fileUpload');
    if(!container.contains(e.target)){
       container.style.display = 'none';
    }
   });
   
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('deleteItem');
    if(!container.contains(e.target)){
       container.style.display = 'none';
    }
   });

 