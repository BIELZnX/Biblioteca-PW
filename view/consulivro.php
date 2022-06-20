<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<title>Cadastro de livros</title>
</head>


<body>
   <header>
      <div class="menu">
        <nav>
          <ul>
        <li class="nivel1"><a href="index.html">Consulta</a>
            <ul class="dropsao">
                <li><a href="consulivro.php">Livros</a></li>
                <li><a href="consuretirada.php">Sócios</a></li>
                <li><a href="consusocio.php">Retiradas</a></li>
            </ul>
        </li>
        <li class="nivel1"><a href="cadastro.html">Cadastro</a>
            <ul class="dropsao">
                <li><a href="cadlivro.php">Livros</a></li>
                <li><a href="cadsocio.php">Sócios</a></li>
                <li><a href="cadretirada.php">Retiradas</a></li>
            </ul>
        </li>
            
    
    </ul>
  </nav>
</div>
</header>

    <div class="resultado">

        <?php

          include "scripts/conecta.php";

          $query = sprintf("SELECT tit_livro, aut_livro, descricao FROM tb_livro");
          $dados = ($query) or die ();

          $linha = ($dados);
          $total = ($dados);

          if($total > 0){

            do{ ?>

              <div class="dados">
              <p>
                 <spam class="tituloconsu">Título do livro: </spam><spam class="conteudoconsu"><?=$linha['tit_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Autor do Livro: </spam><spam class="conteudoconsu"><?=$linha['aut_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Descrição do livro: </spam><spam class="conteudoconsu"><?=$linha['descricao']?></spam>
              </p>
              </div>

              <?php 
            } while ($linha = ($dados));
          }

        ?>


    </div>
       
</div>
</body>
</html>