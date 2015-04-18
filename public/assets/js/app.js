// 
/* alert("Hola Mundo"); */

//-----------------------------

/* var a = 5, b = 6;
c = a + b;

console.log(c);*/

//-----------------------------

/* function menor_edad(edad){
    if(edad<18){
        alert("Menor de edad");
        // Redirecciona a:
        location.href="http://www.google.com";
    }
}

menor_edad(17); */

//-----------------------------

/* name = prompt("Ingrese su nombre: ");
alert("Hola " + name); */

//-----------------------------

/*do{
    edad = prompt("Ingrese su edad: ");
} while (edad<18);

location.href="http://www.google.com";*/

//-----------------------------
// Notacion JSON -> JavaScript Object Notation

/*var persona = {
    nombre : "Andres",
    apellido : "Pineda",
    lugar_de_nacimiento : "Medellin",
    interes : ['programacion', 'futbol']
}

alert (persona.nombre);*/

/*var personas = [{
    nombre : "Andres",
    apellido : "Pineda",
    lugar_de_nacimiento : "Medellin",
    interes : ['programacion', 'futbol']
}, {
    nombre : "Luka",
    apellido : "Rojas",
    lugar_de_nacimiento : "Medellin",
    interes : ['programacion', 'futbol']
}];*/

//-----------------------------

/* var managerScreen = managerScreen || {}

managerScreen = {
    cambiarColorFondo : function(color){
        // Con JavaScript
        /* document.body.style.background = color; */
        
        // Con JQuery
        /* $('body').css('background-color', color);
    },
    
    saludar : function(){
        alert("Hola");
    },
    
    ocultarUnParrafo : function(){
        document.getElementById('oculto').style.display = 'none';
    },
    
    ocultarParrafos : function(){
        // Con JavaScript
        /*var x = document.getElementsByTagName("p");
        
        for (i = 0; i < x.length; i++) { 
            x[i].style.display = 'none';
        }*/
        
        // Con JQuery
        /* $("p").hide();
    },
    
    verUnParrafo : function(){
        document.getElementById('oculto').style.display = '';
    },
    
    verElementos : function(tag){
        // Con JavaScript
        /*var x = document.getElementsByTagName(tag);
        
        for (i = 0; i < x.length; i++) { 
            x[i].style.display = '';
        }*/
        
        // Con JQuery
        /* $(tag).show();
    },
    
    verOcultar : function(tag){
        // Con JQuery
        $(tag).toggle();
        
        // $("div > p").toggle();
        // $("div, p").toggle();
    },
    
    desvanecer : function(){
        // Con JQuery
        $('p').fadeOut(3000);
    },
    
    desvanecerAparecer : function(){
        // Con JQuery
        $('p').fadeToggle(3000);
    },
    
    alertify : function(){
        // Con JQuery
        alertify.alert("Holi");
    },
    
    alertifyLog : function(){
        // Con JQuery
        alertify.log("Noificacion", "Success", 10000);
        alertify.log("Seguridad", "Error", 7000);
        alertify.log("Acceso", "Success", 7000);
        alertify.log("Error", "Error", 8000);
    }
}

var ms = managerScreen; */

var fb = {
    comentar: function(id){
        // alert('Estas comentado: ' + id);
         
        var comentario = $("#comentario-"+id);
        
        if(comentario.val() != ""){
            $.ajax({
                url: 'publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    usuario: 1,
                    comentario: comentario.val()
                },
                success: function(response){
                    alert('Se ejecutó correctamente');
                },
            });
        } else {
            alert('Este campo es obligatorio');
        }
    }
}