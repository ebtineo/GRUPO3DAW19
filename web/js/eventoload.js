'use strict'
//Cuando la página esté cargada podré acceder a todos los elementos del DOM
window.addEventListener('load',()=>{   
//Evento Focus
//Capturamos el evento focus del elemento con id="campo_nombre"
var mi_input = document.querySelector("#campo_nombre");
	mi_input.addEventListener('focus', function(){
		console.log("Dentro del input");
	});
//Evento Blur --> Cuando salimos de donde está el foco
	mi_input.addEventListener('blur', function(){
		console.log("Estamos fuera del input");
	});
//Keydown --> Cuando estamos pulsando una tecla
	mi_input.addEventListener('keydown', function(event){  //Con event-->Capturamos los datos del evento
		console.log("Pulsando una tecla", String.fromCharCode(event.keyCode)); 
		//String.fromCharCode() --> Captura las cosas del teclado
		//String.fromCharCode(event.keyCode) --> Capturamos la tecla que estoy pulsando en ese evento y lo convierte a string
	});

//Keypress --> Cuando tengo la tecla presionada 
	mi_input.addEventListener('keypress', function(event){  //Con event-->Capturamos los datos del evento
		console.log("Tecla presionada", String.fromCharCode(event.keyCode)); 
	});
	
//Keyup --> Capturamos el evento cuando levanto el dedo de la tecla
	mi_input.addEventListener('keyup', function(event){  //Con event-->Capturamos los datos del evento
		console.log("Cuando levanto el dedo", String.fromCharCode(event.keyCode)); 
	});

//Combinación de teclas (shortcut) y ejecución de función
// shortcut.js es una libreria  de javaScript que la podemos encontrar en OpenJs
shortcut.add("F2", function () {
        alert("Tecla F2");
      }, {
        "type": "keydown",
        "propagate": true,
        "target": document
      });
 
      shortcut.add("Ctrl+G", function () {
        alert("Combinación de teclas Ctrl+G");
      }, {
        "type": "keydown",
        "propagate": true,
        "target": document
      });
	});
	
