var app = new Vue({
  el: "#app",
  data: {
    products: [],

    tax: 5,
    promotions: [
      {
        code: "2DESCONTO",
        discount: "2%"
      },
      {
        code: "5DESCONTO",
        discount: "5%"
      }
    ],
    promoCode: "",
    discount: 0
  },

  mounted() {
    if(id > 0) {
      this.products = JSON.parse(sessionStorage.getItem('informacao'))
    }
    else {
      this.products = []
    }
  },

  computed: {
    itemCount: function() {
      var count = 0;

      for (var i = 0; i < this.products.length; i++) {
        count += parseInt(this.products[i].quantity) || 0;
      }

      return count;
    },
    subTotal: function() {
      var subTotal = 0;

      for (var i = 0; i < this.products.length; i++) {
        subTotal += this.products[i].quantity * this.products[i].price;
      }

      return subTotal;
    },
    discountPrice: function() {
      return this.subTotal * this.discount / 100;
    },
    totalPrice: function() {
      return this.subTotal - this.discountPrice + this.tax;
    }
  },
  filters: {
    currencyFormatted: function(value) {
      return Number(value).toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL"
      });
    }
  },

  methods: {
    updateQuantity: function(index, event) {
      var product = this.products[index];
      var value = event.target.value;
      var valueInt = parseInt(value);

      // Minimum quantity is 1, maximum quantity is 100, can left blank to input easily
      if (value === "") {
        product.quantity = value;
      } else if (valueInt > 0 && valueInt < 100) {
        product.quantity = valueInt;
      }

      this.$set(this.products, index, product);
    },

    checkQuantity: function(index, event) {
      // Update quantity to 1 if it is empty
      if (event.target.value === "") {
        var product = this.products[index];
        product.quantity = 1;
        this.$set(this.products, index, product);
      }
    },

    removeItem: function(index) {
      this.products.splice(index, 1);
    },

    checkPromoCode: function() {
      for (var i = 0; i < this.promotions.length; i++) {
        if (this.promoCode === this.promotions[i].code) {
          this.discount = parseFloat(
            this.promotions[i].discount.replace("%", "")
          );
          return;
        }
      }

      alert("Cupom inválido");
    }
  }
});

// function addToCart(id) {
//   if(!data[id].itemInCart){
//       cartList = [...cartList,data[id]];
//       addItem()
//       alert('Item adicionado ao carrinho')
//   }
//   else{
//       alert('Seu item já foi adicionado')
//   }
//   data[id].itemInCart = true
// }

