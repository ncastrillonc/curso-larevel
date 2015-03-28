<html>
    <head>   
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

        <script type="text/javascript"> 
            //$('.datepicker').pickadate()
            /*$(function () {
                $('.datepicker').pickadate();
                // $("#datepicker").datepicker();
            });*/
             $(function () {
                $.datepicker.setDefaults($.datepicker.regional["es"]);
                $("#datepicker").datepicker({
                firstDay: 1
                });
            });
        </script>
        
    </head>
    <body>
        
        <p> 
            <br><p>Date: <input type="text" id="datepicker" /></p>
        </p>
        
    </body>
    
</html>