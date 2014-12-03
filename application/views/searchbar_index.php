<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Ajax - Search Bar</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#keywords').keyup(function() {
           $.post( 
            $('#searchform').attr('action'),
            $('#searchform').serialize(),
            function(output) 
            {
              $('#result').html('');
              for(var i=0; i<output.length; i++)
              {
                $('#result').append('<li>'+output[i].name+'</li>');
              }
            },
            "json"
           );
         return false;
        });
    });
    </script>
  </head>
  <body>
    <form id="searchform" action="getjson" method="post">
      <label>Search: </label>
      <input id="keywords" type="text" name="keywords">
    </form>  
    <ul id="result">
      
    </ul>
  </body>
</html>