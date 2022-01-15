<template>
  <div class="container">
    <product
        :key="products.id"
        :id="products.id"
        :name="products.name"
        :description="products.description"
        :price="products.price"
        :image_1="products.image_1"
        :image_2="products.image_2"
        :image_3="products.image_3"
        :count="products.count"
        :is-available="products.is_available"
        @add-to-cart="addProductToCart(products)"
    />
  </div>
</template>

<script>
import Product from "./Product"

export default {
  name: "ProductsList",
  components: {
    Product,
  },
  data: () => ({
    products: [],
    getId: Number(window.location.pathname.split('/')[3])
  }),
  mounted() {
    this.fetchProducts()
  },
  methods: {
    async fetchProducts() {
      try {
        let id = this.getId
        const response = await fetch("/api/product/read.php",
            {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({id})
            }
        );
        this.products = await response.json()
      } catch (e) {
        console.error(e)
      }
    },
    addProductToCart(product) {
      this.$store.commit("addProductToCart", product)
    },
  },
}
</script>
