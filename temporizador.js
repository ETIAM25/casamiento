let dias=98;
let horas=24;
let minutos=0;
let segundos=0;
cargarSegundos

//Definimos y ejecutamos los segundos
function cargarSegundos(){
    let txtsegundos;
    if(segundos<0){
        segundos= 59;
    }

//Mostrar segundos en pantalla
if(segundos < 10){
    txtsegundos=  `0${segundos}`;
}else{
    txtsegundos=segundos;
}
document.getElementById(`segundos`).innerHTML=txtsegundos;
segundos --;
 
cargarMinutos(segundos);
}

//Definimos y ejecutamos los muniutos
  function cargarMinutos(segundos){
   let txtMinutos;

    if(segundos == -1 && minutos !==0){
    setTimeout(()=>{
    minutos--;
},500)
  }else if(segundos == -1 && minutos ==0){
    setTimeout(()=>{
        minutos =59;
    },500)
  }
  //Mostrar Minutos en pantalla
  if(minutos < 10){
    txtMinutos= `0${minutos}`;
  }else{
    txtMinutos = minutos;
  }
    document.getElementById(`minutos`).innerHTML = txtMinutos;
    cargaHoras(segundos,minutos)
}
//Definimos y ejecutamos las horas
function cargaHoras(segundos,minutos){
    let txtHoras;
    if(segundos == -1 && minutos == 0 && horas !== 0){
        setTimeout(()=>{
            horas--;
        },500)
    }else if(segundos == -1 && minutos == 0 && horas == 0){
      setTimeout(() =>{
         horas = 24;
      },500)  
    }
    //Mostrar Horas en pantalla 
    if(horas < 10){
    txtHoras = `0${horas}`;
    }else{
        txtHoras = horas;
    }
    document.getElementById(`horas`).innerHTML = horas;
    cargaDias(segundos,minutos,horas)
}
//Definimos y ejecutamos los Dias
function cargaDias(segundos,minutos,horas){
    let txtDias;
    if(segundos == -1 && minutos == 0 && horas == 0 && dias !==0 ){
        setTimeout(()=>{
            dias--;
        },500)
    }else if(segundos == -1 && minutos == 0 && horas == 0 && dias ==0){
        setTimeout(()=>{
            dias = 98;
        },500)
    }
//Mostrar en pantalla
if (dias < 10){
    txtDias = `0${dias}`;
}else{
    txtDias = dias;
}
document.getElementById(`dias`).innerHTML = dias;
}
//Ejecutamos cada segundo
setInterval(cargarSegundos,1000)