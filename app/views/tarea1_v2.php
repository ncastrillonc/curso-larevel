<html>
    <head>   
        <link rel="stylesheet" href="./libs/pickadate/lib/themes/default.css" />
        <link rel="stylesheet" href="./libs/pickadate/lib/themes/default.date.css" />
        
        <title>Pickadate.js</title>
    </head>
    <body>
        
        <h3><label for="input_01">Pick a date. Go ahead...</label></h3>

        <input
            id="input_01"
            class="datepicker"
            name="date"
            type="text"
            autofocuss
            value="14 August, 2014"
            data-valuee="2014-08-08">

        <br><br>    
        <div id="container"></div>
        
        <script src="./libs/pickadate/tests/jquery.1.7.0.js"></script>
        <script src="./libs/pickadate/lib/compressed/legacy.js"></script>       
        <script src="./libs/pickadate/lib/compressed/picker.js"></script>
        <script src="./libs/pickadate/lib/compressed/picker.date.js"></script>
        
        <script type="text/javascript">
            var $input = $( '.datepicker' ).pickadate({
                formatSubmit: 'yyyy/mm/dd',
                // min: [2015, 7, 14],
                container: '#container',
                // editable: true,
                closeOnSelect: false,
                closeOnClear: false,
            })
            var picker = $input.pickadate('picker')
        </script>
    
    </body>
    
</html>