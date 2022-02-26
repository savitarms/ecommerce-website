var informacao = [
    {
        image: "dsfsf",
        name: "sdfds", 
        description: "sdfds",
        price: 3,
        quantity: 5
    }
]

var produto = {  
    image: "",
    name: "", 
    description: "",
    price: null,
    quantity: null
} 

informacao.push(produto)


function pagina() {
// Pegando todos os valores dos produtos
    var tamanhoDesc = window.document.querySelector('.selected-size').title
    var corDesc = window.document.querySelector('.selected-color').title

    var image_produto = window.document.getElementById('pic').src
    var name_produto = window.document.getElementById('titlepdt').innerText
    var description_produto = 'Cor: ' + corDesc + ' | ' + tamanhoDesc
    var price_produto = window.document.getElementById('price').title
    var quantity_produto = window.document.getElementById('quantity').value

// Enviando os valores para o array de objetos (informacao)
    produto.image = image_produto
    produto.name = name_produto
    produto.description = description_produto
    produto.price = price_produto
    produto.quantity = quantity_produto


    sessionStorage.setItem('informacao', JSON.stringify(informacao))
    console.log(JSON.stringify(informacao))
    window.location.assign('../carrinho/cart.html')
}

function openPage() {
    document.getElementById('pagecart').addEventListener('click', function(){
    pagina()

    })
}

window.addEventListener('load', openPage)