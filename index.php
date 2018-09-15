<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container center-align">
    <table class="striped">
        <thead>
            <tr>
                <th>Time 1</th>
                <th>Placar1</th>
                <th>Placar2</th>
                <th>Time 2</th>
              </tr>
            </thead>
            <tbody>
                <?php include('requisit.php') ?>
            </tbody>
          </table>
    </div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script src="js/script.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', function() {
    var options;
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
   </script>


  </body>
</html>