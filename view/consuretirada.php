<!DOCTYPE >
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
                <li><a href="consusocio.php">Sócios</a></li>
                <li><a href="consuretirada.php">Retiradas</a></li>
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
    <center>

    <div class="resultado">

        <?php

          include "scripts/conecta.php";

          $query = sprintf("SELECT ra, tit_livro, id_livro, prazo FROM tb_retirada");
          $dados = ($query) or die ();

          $linha = ($dados);
          $total = ($dados);

          if($total > 0){

            do{ ?>

              <div class="dados">
              <p>
                 <spam class="tituloconsu">Ra do Aluno: </spam><spam class="conteudoconsu"><?=$linha['ra']?></spam><br/>
                 <spam class="tituloconsu">Título do livro: </spam><spam class="conteudoconsu"><spam class="tituloconsu"><?=$linha['tit_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Codigo do Livro: </spam><spam class="conteudoconsu"><?=$linha['id_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Prazo da biblioteca: </spam><spam class="conteudoconsu"><?=$linha['prazo']?></spam>
              </p>
              </div>

              <?php 
            }while ($linha ($dados));
          }

        ?>



    </div>
       
</div>
</body>
</html>