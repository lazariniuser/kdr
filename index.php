<?php
include 'cabecalho.php';
require_once 'connect.php';

?>


       <!-- <div id="dropinho-area" class="p-fixed bottom-0 end-0">
          <img src="dropinho.png" onclick="ativadropinho()" id="btn-dropinho" class=" img-fluid bottom-0 end-0 rounded-circle p-fixed dropinho">
         <?php  /*
            include 'chatbot.php'
          */?>
        </div>-->
         
        

    <script src="script.js"></script>
      <div id="carouselExampleControls" class="carousel Slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-item active">
            <img src="sample1.jpg" class="d-block carousel-size-image  w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="sample2.jpg" class="d-block carousel-size-image w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="sample3.jpg" class="d-block carousel-size-image w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row text-center d-flex align-items-center banner banner1">
        <div class="col-12">
          <h1><i class="fa-solid fa-book text-light fa-bounce"></i></h1>
          <h1 class="text-light alinha_texto_banner">Seu curso online<br>
            <span class="text-light fw-bolder">de coreano</span>
          </h1>

        </div>
      </div>
      <div class="row text-center bg-light d-flex align-items-center banner">
        <div class="col-12">
          <a class="text-dark" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
            <h1 class="d-block">Matricule-se já! </a><br> 
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Preencha seus dados para inscrição</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" id="modalcad">
                    <form action="cad.php" class="form-group" method="POST">
                      <h5>*Todos os campos são obrigatórios</h5>
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo"  id="nome" required>
                        <input type="email" class="form-control"name="email" placeholder="E-mail"  id="email" required>
                        <input type="number" class="form-control"name="cel" placeholder="Número de celular"  id="telefone" required>
                        <label for="nascimento" class="text-muted"><h5>Data de nascimento</h5></label>
                        <input type="date" class="form-control" name="datanascimento" id="nascimento"  required>
                        
               
                  </div>
                  <div class="modal-footer" id="rodape-inscreva">

                      <input type="submit" class="btn btn-success" onclick="validasubmit()" value="Inscrever-se">

                    </button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            

            
            <span class="text-dark fw-bolder">Vagas limitadas</span>
          </h1>
          <div class=" text-dark mt-5" id="numero-seguidores">
          ####
         
        </div>
        </div>
        
      </div>
 


      <div class="row   text-center d-flex align-items-center banner bg-dark">
        <div class="col-12">
          <i class="fa-solid fa-quote-left text-light h1 d-block"></i>
          <h1 class="text-light alinha_texto_banner">O que dizem sobre nós?</h1>
        </div>
      </div>

      <div class="row d-flex align-items-center">
        <div class="col-12 col-lg-4 depoimentos bg-dark">
          <p class="text-muted d-block text-center">Jeiza Adny - Aluna do nosso curso online</p>
          <p class="h-dep">"Aprendi bastante. Conteúdo bem completo!
            Super atenciosa e explica de forma bem clara o conteúdo.
            Tem super paciência de explicar várias vezes, amei as aulas"</p>
          
        </div>

        <div class="col-12 col-lg-4 depoimentos bg-dark">
          
          <p class="text-muted d-block text-center">Ana Cristina - Aluna do nosso curso online</p>
          <p class="h-dep">"As aulas da professora Beatriz são muito boas. Ela apresenta um material didático de
            fácil compreensão; adapta as aulas às necessidades
            do aluno e explica a gramática coreana de uma maneira que nós brasileiros conseguimos entender."</p>
         
        </div>
        <div class="col-12 col-lg-4 depoimentos bg-dark">
          
          <p class="text-muted d-block text-center">Alycyany Andrade - Aluna do nosso curso online</p>
          <p class="h-dep">"Pra mim foi uma honra ter tido a oportunidade de participar dos cursos do K-drop,a
            professora Beatriz é uma ótima e excelente professora,está sempre tirando as nossas dúvidas,nos ajudando
            e
            as explicações são sempre claras e de uma forma que conseguimos entender a matéria de uma forma
            incrível."</p>
          
        </div>

      </div>
    </div>
    <div class="card text-center">
      <div class="card-header">
        Kdrop
      </div>
      <div class="card-body bg-dark">
        <h5 class="card-title text-light">Desenvolvido por Lazarini</h5>
        <p class="card-text text-muted">gabriellazarinicontato@gmail.com</p>
        <a href="https://www.contate.me/bluesquare" class="btn btn-light">Entre em contato</a>
      </div>
      <div class="card-footer text-muted">
      </div>
    </div>


    </div>


    </div>
    </div>
    

  </body>

</html>