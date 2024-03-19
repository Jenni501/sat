 function generarRFC() {
    var nombre = document.getElementById('nombre').value;
     var apellido_paterno = document.getElementById('apellido_paterno').value;
     var apellido_materno = document.getElementById('apellido_materno').value;
     var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;
 
   



 if (apellido_paterno && apellido_materno && nombre && fecha_nacimiento ) {
      var primerLetraNombre = nombre.charAt(0).toUpperCase();
      var primerLetraApellidoPaterno = apellidoPaterno.substring(0, 2).toUpperCase();
      var primerLetraApellidoMaterno = apellidoMaterno.charAt(0).toUpperCase();
 

     var clave = primerLetraApellidoPaterno + primerLetraApellidoMaterno + primerLetraNombre + fecha_nacimiento.slice(2, 4) + fecha_nacimiento.slice(5, 7) + fecha_nacimiento.slice(8, 10);

     // document.getElementById('resultado').innerText = "El RFC generado es: " + clave;
   // alert("Tu RFC generado es:"+clave);
  
 } else {
   //   document.getElementById('resultado').innerText = "Por favor, completa todos los campos.";
   alert("Todos los campos son obligatorios");
 }
  //}




   let lastThreeChars = generateRandomChars();




    while (lastThreeChars[0] === lastThreeChars[1] || lastThreeChars[0] === lastThreeChars[2] || lastThreeChars[1] === lastThreeChars[2]) {
        lastThreeChars = generateRandomChars();
   }

   if( clave += lastThreeChars){
    alert("Tu RFC generado es:".innerText=`RFC GENERADO: ${clave}`);

   }else{
    alert("Completa todos los campos para poder generar un RFC:");

   }


    // clave += lastThreeChars;
    // alert("Tu RFC generado es:".innerText=`RFC GENERADO: ${clave}`);

   //  document.getElementById('resultado').innerText = `RFC GENERADO: ${clave}`;
   // alert("Tu RFC generado es:"+clave);
 }

 function generateRandomChars() {
    let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let randomChars = '';
  
    for (let i = 0; i < 3; i++) {
        randomChars += chars.charAt(Math.floor(Math.random() * chars.length));
    }

    return randomChars;
 }
