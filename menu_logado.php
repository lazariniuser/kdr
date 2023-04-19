<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ce1ceb1925.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<title>Kdrop</title>
 
  </head>

    <body class="bg-dark">

        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
        <button onclick="closeLeftMenu()" class="w3-bar-item w3-large">&times;</button>
        <a href="#" class="w3-bar-item">Meu Perfil</a>
        <a href="#" class="w3-bar-item ">Cursos</a>
        <a href="#" class="w3-bar-item ">Amigos</a>
        <a href="#" class="w3-bar-item ">Configurações</a>
        <a href="#" class="w3-bar-item ">Sair</a>
        </div>


        <div>
        <button class="btn-light border-0 rounded p-3 m-2" onclick="openLeftMenu()">&#9776;</button>
        <h3 class="text-light d-inline">Kdrop</h3>

        </div>
        <script>
        function openLeftMenu() {
        document.getElementById("leftMenu").style.display = "block";
        }

        function closeLeftMenu() {
        document.getElementById("leftMenu").style.display = "none";
        }

        </script>
            
        </body>


</html>