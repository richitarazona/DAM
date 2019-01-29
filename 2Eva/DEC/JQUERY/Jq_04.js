<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="jquery-3.3.1.min.js"></script>
    <title>JQ_03</title>

    <script>
      $(function() {
        $("li").click(function() {
          $(this).hide();
        });
      });
    </script>
  </head>
  <body>
    <ul>
      <li>Primero</li>
      <li>Segundo</li>
      <li>Tercero</li>
      <li>Cuarto</li>
    </ul>
  </body>
</html>
