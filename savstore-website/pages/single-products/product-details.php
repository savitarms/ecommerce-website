<?php 
include("../../database/conexao.php");
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$query_products = "SELECT * FROM `produtos` WHERE `id` =:id LIMIT 1"; 
$result_products = $connect->prepare($query_products);
$result_products->bindParam(':id', $id, PDO::PARAM_INT);
$result_products->execute();
$values = $result_products->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $values["name"]; ?> | SAV STORE</title>
    <base href="http://localhost/savstore-website/pages/single-products/product-details.php" />
    <link rel="stylesheet" href="./product-details.css" type="text/css">
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Produto -->
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
              <a href="/produtos.html" class="border-menu">
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
              <a href="../carrinho/cart.html"><div class="cart"></div></a>
            </div>
          </ul>
        </div>
      </nav>


    <div class="product-container">
      <div class="product-box">
        <div class="main-product">
          <div class="gallery-image">

            <div class="product-small-image">
              <img id="glr1" src="./img/camiseta-amarelo.jpg" alt="" draggable="false" onclick="galleryselect(this)">
              <img id="glr2" src="./img/camiseta-azul.jpg" alt="" draggable="false" onclick="galleryselect(this)">
              <img id="glr3" src="./img/camiseta-verde.jpg" alt="" draggable="false" onclick="galleryselect(this)">
              <img id="glr4" src="./img/camiseta-vermelho.jpg" alt="" draggable="false" onclick="galleryselect(this)">
              <img id="glr5" src="./img/camiseta.jpg" alt="" draggable="false" onclick="galleryselect(this)">
            </div>

            <div class="image-product">
              <img id="pic" src="./img/camiseta.jpg" alt="" draggable="false">
            </div>
          </div>

          <div class="details-container">
          <div class="details-product">
            <div class="return-link">
                <a href="#" class="hover_home"><p>Home</p></a>
                <a href="#"><p>❭❭</p></a>
                <a href="#" class="hover_produtos"><p>Produtos</p></a>
            </div>

            <div class="title-product">
              <h1 id="titlepdt"><?php echo $values["name"]; ?></h1>
            </div>

            <div class="price-product">
              <h1 id="price">R$<?php echo number_format($values["price"], 2, ',', '.'); ?></h1>
              <div class="align-price">
              <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	
		.st1{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3;}
	.st2{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
	.st3{fill:none;}
</style>
<path class="st0" d="M27,25H5c-1.1,0-2-0.9-2-2V10c0-1.1,0.9-2,2-2h22c1.1,0,2,0.9,2,2v13C29,24.1,28.1,25,27,25z"/>
<line class="st0" x1="3" y1="12" x2="29" y2="12"/>
<circle class="st0" cx="19" cy="19" r="2"/>
<circle class="st0" cx="23" cy="19" r="2"/>
<line class="st0" x1="7" y1="21" x2="9" y2="21"/>
<line class="st0" x1="7" y1="18" x2="12" y2="18"/>
<rect y="-216" class="st3" width="536" height="680"/>
              </svg>
                  <span class="parcelas-product">
                  <span class="parcelas_span"><?php echo $values["parcelament"]; ?> de</span>
                  <span class="valor_span">R$<?php echo number_format($values["parcelament_value"], 2, ',', '.'); ?></span>
              </span>
              </div>
            </div>

          <div class="variations-cart">
            <div class="container-color">
                <div class="label-cor">
                  <label for="color">Cor</label>
                </div>
              <div class="value-cor">
                    <div class="all-c-border" id="btn-c-1" onclick="border1(this)" value="addClass" data-bs-toggle="tooltip" data-bs-placement="top" title="Preto">
                       <button id="cor-preto" onclick="preto()"></button>
                    </div>
                    <div class="all-c-border" id="btn-c-2" onclick="border2(this)" value="addClass" data-bs-toggle="tooltip" data-bs-placement="top" title="Branco">
                      <button id="cor-branco" onclick="branco()"></button>
                    </div>
                    <div class="all-c-border" id="btn-c-3" onclick="border3(this)" value="addClass" data-bs-toggle="tooltip" data-bs-placement="top" title="Amarelo">
                      <button id="cor-amarelo" onclick="amarelo()"></button>
                    </div>
                    <div class="all-c-border" id="btn-c-4" onclick="border4(this)" value="addClass" data-bs-toggle="tooltip" data-bs-placement="top" title="Vermelho">
                      <button id="cor-vermelho" onclick="vermelho()"></button>
                    </div>
                    <div class="all-c-border" id="btn-c-5" onclick="border5(this)" value="addClass" data-bs-toggle="tooltip" data-bs-placement="top" title="Verde">
                      <button id="cor-verde" onclick="verde()"></button>
                    </div>
              </div>
            </div>

            <div class="container-sizes">
              <div class="label-size">
                <label for="size">Tamanho</label>
              </div>
            <div class="value-size">
                    <div class="all-s-border" id="btn-s-1" title="Tamanho P">
                      <button id="btnsize">P</button>
                    </div>
                    <div class="all-s-border" id="btn-s-2" title="Tamanho M">
                      <button id="btnsize">M</button>
                    </div>
                    <div class="all-s-border" id="btn-s-3" title="Tamanho G">
                      <button id="btnsize">G</button>
                    </div>
                    <div class="all-s-border" id="btn-s-4" title="Tamanho GG">
                      <button id="btnsize">GG</button>
                    </div>
                    <div class="all-s-border" id="btn-s-5" title="Tamanho XG">
                      <button id="btnsize">XG</button>
                    </div>
              </div>
           </div> 
          </div>

          <div class="system-cart">
            <div action="cadastrar.php" class="quantity-items">
              <button type="button" id="sub" class="sub">-</button>
              <input name="quantidades" id="quantity" value="1" min="1" max="6" />
              <button type="button" id="add" class="add">+</button>
            </div>

            <div class="carrinho">
              <div class="add-cart">
                <button id="pagecart">
                  <svg width="20px" height="21px" viewBox="0 0 20 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
    <title>Adicionar ao carrinho</title>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Rounded" transform="translate(-441.000000, -155.000000)">
            <g id="Action" transform="translate(100.000000, 100.000000)">
                <g id="-Round-/-Action-/-add_shopping_cart" transform="translate(340.000000, 54.000000)">
                    <g transform="translate(0.000000, 0.000000)">
                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M12,9 C12.55,9 13,8.55 13,8 L13,6 L15,6 C15.55,6 16,5.55 16,5 C16,4.45 15.55,4 15,4 L13,4 L13,2 C13,1.45 12.55,1 12,1 C11.45,1 11,1.45 11,2 L11,4 L9,4 C8.45,4 8,4.45 8,5 C8,5.55 8.45,6 9,6 L11,6 L11,8 C11,8.55 11.45,9 12,9 Z M7,18 C5.9,18 5.01,18.9 5.01,20 C5.01,21.1 5.9,22 7,22 C8.1,22 9,21.1 9,20 C9,18.9 8.1,18 7,18 Z M17,18 C15.9,18 15.01,18.9 15.01,20 C15.01,21.1 15.9,22 17,22 C18.1,22 19,21.1 19,20 C19,18.9 18.1,18 17,18 Z M8.1,13 L15.55,13 C16.3,13 16.96,12.59 17.3,11.97 L20.68,5.84 C20.95,5.36 20.77,4.75 20.29,4.48 C19.81,4.22 19.2,4.39 18.94,4.87 L15.55,11 L8.53,11 L4.54,2.57 C4.38,2.22 4.02,2 3.64,2 L2,2 C1.45,2 1,2.45 1,3 C1,3.55 1.45,4 2,4 L3,4 L6.6,11.59 L5.25,14.03 C4.52,15.37 5.48,17 7,17 L18,17 C18.55,17 19,16.55 19,16 C19,15.45 18.55,15 18,15 L7,15 L8.1,13 Z" id="🔹Icon-Color" fill="#1D1D1D"></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
                  </svg>
                </button>
              </div>
            </div>

            <div class="btn-comprar">
              <div class="comprar">
                <a href="#"><p>COMPRAR</p></a>
              </div>
            </div>
          </div>

            </div>
          </div>
         </div>
        </div>
      </div>

      <!-- descrições adicionais -->
      <div class="description-container">
        <div class="description-box">

          <div class="main-description">
            <div class="description">

              <div class="desdet">
                <button class="changeitem active" id="descricao" onclick="openDesc('description-on')">Descrição</button>
                <button class="changeitem" id="detalhes" onclick="openDesc('details-on')">Detalhes</button>
              </div>
              <div id="description-on" class="desc">
                <div class="desc-title">
                  <h1 id="nameproduct">Descrição</h1>
                </div>
                  <p>Descrição</p>
                  <P>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</P>
              </div>
              
              <div class="temp">
          <div id="details-on" class="desc" style="display:none">
                <div class="tamanho">
                <div class="pert">
                  <span class="per">Tamanho</span>
                </div>
                <div class="rest">
                  <span class="res">P, M, G, GG, XG</span>
                </div>
                </div>

                <div class="cor">
                <div class="pert">
                  <span class="per">Cor</span>
                </div>
                <div class="rest">
                  <span class="res">Preto, Branco, Amarelo, Vermelho, Verde</span>
                </div>
                </div>

                <div class="peso">
                <div class="pert">
                  <span class="per">Peso</span>
                </div>
                <div class="rest">
                  <span class="res">0.25 kg</span>
                </div>
                </div>
            </div>
          </div>
            
            </div>
          </div>

        </div>
      </div>

    <script src="./js/cart-value.js"></script>
    <script src="./js/galleryimgselect.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="./js/color-table.js"></script>
    <script src="./js/size-chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="./js//quantity-items.js"></script>
    <script src="./js/description.js"></script>

  </body>
</html>