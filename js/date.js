	var fecha = new Date();
  	var dd = fecha.getDate();
  	var mm = fecha.getMonth()+1; //Enero es 0.
  	var yyyy = fecha.getFullYear()-18; //Mayor de edad.
  	if(dd<10){
         dd='0'+dd
     } 
    if(mm<10){
         mm='0'+mm
     } 

  fecha = yyyy+'-'+mm+'-'+dd;
  document.getElementById("birthday").setAttribute("max", fecha);
  document.getElementById("birthday").setAttribute("value", fecha);