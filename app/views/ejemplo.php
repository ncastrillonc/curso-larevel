<html>
    <head>   
        <script src="./assets/js/app.js" ></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./libs/alertify/lib/alertify.min.js"></script>     
        
        <script type="text/javascript" src="./libs/complexify/jquery.complexify.min.js"></script>
        
        <link rel="stylesheet" href="./libs/alertify/themes/alertify.core.css">
        <link rel="stylesheet" href="./libs/alertify/themes/alertify.default.css">
        
        <script type="text/javascript"> 
            $(function () {  
                $("#txtPassword").complexify({}, function (valid, complexity) { document.getElementById("PassValue").value = complexity; }); 
            }); 
        </script>

        
    </head>
    <body>
        <!-- <br><button onclick="ms.saludar()"> Saludar </button><br><br>
        <button onclick="ms.cambiarColorFondo('red')"> Rojo </button><br><br>
        <button onclick="ms.cambiarColorFondo('green')"> Verde </button><br><br>
        <button onclick="ms.ocultarUnParrafo()"> Ocultar un Parrafo </button><br><br>
        <button onclick="ms.ocultarParrafos()"> Ocultar Parrafos </button><br><br>
        <button onclick="ms.verUnParrafo()"> Ver un Parrafo </button><br><br>
        <button onclick="ms.verElementos('p')"> Ver Parrafos </button><br><br>
        <button onclick="ms.verOcultar('p')"> Ver Ocultar </button><br><br>
        <button onclick="ms.desvanecer()"> Desvanecer </button><br><br>
        <button onclick="ms.desvanecerAparecer()"> Desvanecer Aparecer </button><br><br>
        <button onclick="ms.alertify()"> Alertify </button><br><br>
        <button onclick="ms.alertifyLog()"> AlertifyLog </button><br><br>
        
        <p id='oculto'> Esto es un parrafo 1 </p>
        <p id='oculto'> Esto es un parrafo 2 </p> -->
       
        <p> 
            <span>Password:</span>
            <input type="password" id="txtPassword" /> 
            <meter value="0" id="PassValue" max="100"></meter> 
        </p>

    </body>
    
</html>