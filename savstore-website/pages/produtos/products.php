<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | SAV STORE</title>
    <link rel="stylesheet" href="./products.css">
    <link rel="shortcut icon" href="../favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="menu-container">
        <!-- Burger menu -->
        <input class="inputburger" type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>
      
        <!-- Logo -->
        <a href="/index.html" class="part-logo">
          <img src="../../savstore.png" alt="logo" draggable="false">
        </a>
      
        <!-- Header principal -->
        <div class="menu">
          <ul>
            <li>
              <a href="/index.html" class="border-menu">
                Início
              </a>
            </li>
            <li>
                <a href="#promocoes" class="border-menu">
                  Promoções
                </a>
            </li>
            <li>
              <a href="#produtos" class="border-menu">
                Produtos
              </a>
            </li>
            <li>
              <a href="#sobre" class="border-menu">
                Sobre
              </a>
            </li>
            <li>
              <a href="#contato" class="border-menu">
                Contato
              </a>
            </li>
          </ul>

          <ul class="menu-search">
            <div class="wrap" id="wrap">
              <form action="" autocomplete="on">
              <input class="search-box" id="search" name="search" type="text" placeholder="Pesquisar">
              <input class="search-icon" id="search_submit" value="Rechercher" type="submit">
              </form>
            </div>
            <div class="login-cart">
              <a href="#login"><div class="login"></div></a>
              <a href="/carrinho.html"><div class="cart"></div></a>
            </div>
          </ul>
        </div>
      </nav>

      <!-- Header produtos -->
      <div class="products-txt">
          <h1>Produtos</h1>
      </div>

      <!-- Filtro de pesquisas -->
      <div class="filtro-container">
        <div class="filtro-box">
          <div class="filtro-main">
              <div class="select">
                <select name="format" id="format">
                   <option selected disabled>Ordenar por</option>
                   <option value="maior">Maior preço</option>
                   <option value="menor">Menor preço</option>
                   <option value="popular">Popularidade</option>
                   <option value="promo">Promoções</option>
                   <option value="nome">Nome: A - Z</option>
                </select>
              </div>
          </div>
        </div>
      </div>

      <!-- Segurando todo o conteúdo -->
      <div class="content">
          <div class="container-content">

      <!-- Produtos -->
      <div class="produtos">
        <div class="container-produtos">
          <div class="box-produtos">

            <?php 
            include('item.php');

            if($result) {
              echo $output;
            } else {
              echo $noneProduct; 
            }
            ?>

              </div>
          </div>
        </div>
      </div>
    </div>
</div>

</body>

</html>