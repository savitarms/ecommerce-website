function preto(){
document.getElementById('pic').src='./img/camiseta.jpg';
}

	function branco(){
document.getElementById('pic').src='./img/camiseta.jpg';
}

	function amarelo(){
document.getElementById('pic').src='./img/camiseta-amarelo.jpg';
}

	function vermelho(){
document.getElementById('pic').src='./img/camiseta-vermelho.jpg';
}

	function verde(){
document.getElementById('pic').src='./img/camiseta-verde.jpg';
}

// Alterando o nome da class [selected]
var cart = $(".all-c-border");

cart.on("click", function() {
	
	cart.removeClass("selected-color")
	$(this).addClass("selected-color");

})



    