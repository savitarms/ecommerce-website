<?php

include('../../database/conexao.php');

$query = "SELECT * FROM produtos ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $values) {
		$output .= '<a href="#">
        <div class="main-produtos">
          <a href="/savstore-website/'.$values["id"].'/'.strtolower(preg_replace('/[ -]+/', "-", $values["name"])).'" class="produtos-icon-txt">
            <img src="./img/'.$values["image"].'" alt="">
            <h2>'.$values["name"].'</h2>
            <div class="prices">
              <span class="old-price">R$ '.number_format($values["oldprice"], 2, ',', '.').'</span>
              <span class="price">R$ '.number_format($values["price"], 2, ',', '.').'</span>
            </div>
            <div class="avista">
              <span class="span_cifrao_2">R$</span>
              <span class="span_price_2">'.number_format($values["avista_price"], 2, ',', '.').'</span>
              <span class="span_avista_2">à vista</span>
              <span class="span_desconto_2">('.$values["avista_discount"].')</span>
            </div>
            <div class="cartao">
              <span class="span_ou_2">ou</span>
              <span class="span_12x">'.$values["parcelament"].'</span>
              <span class="span_de">de</span>   
              <span class="span_cifrao">R$</span>
              <span class="span_price">'.number_format($values["parcelament_value"], 2, ',', '.').'</span>
              <span class="span_juros">sem juros</span>
            </div>
              <div class="btn-container">
                <div class="btn-purchase">
                   <h1>Ver detalhes</h1>
               </div>
             </div>
          </a>
        </div>
        </a>';
	}
} 
    $noneProduct = '<h1>Nenhum produto foi encontrado!</h1>';  

?>