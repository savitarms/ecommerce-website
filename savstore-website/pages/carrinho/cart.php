<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho | SAV STORE</title>
    <link rel="stylesheet" href="./cart.css">
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
              <a href="../produtos/products.html" class="border-menu">
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
              <a href="/savstore-website/pages/carrinho/cart.php"><div class="cart"></div></a>
            </div>
          </ul>
        </div>
      </nav>

      


      <div class="container">
			<br /><br />
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a class="navbar-brand" href="/">SavStore</a>
					</div>
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">R$ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Finalizar Compra
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Limpar
					</a>
				</div>
			</div>

			<div id="display_item">


			</div>
			
		</div>
          
</body>