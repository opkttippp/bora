<template>
  <div class="cont_1">
    <h3>{{ name }}</h3>
  </div>
  <div class="cont_2">
    <img :src="image_1" :alt="name" width="350" height="270" alt="ноутбук">
  </div>
  <div class="cont_3">
    <div class="small-img">
      <img :src="image_2" :alt="name" width="160" height="120" alt="ноутбук">
      <img :src="image_3" :alt="name" width="160" height="120" alt="ноутбук">
    </div>
    <div class="text">
      <p>
        {{ description }}
      </p>
    </div>
  </div>
  <div class="count">
    <div>
      <p>Осталось - {{ count }} шт.</p>
    </div>


    <h5 :class="`fs-3 ${isAvailable ? 'text-success' : 'text-secondary'}`">
      {{ `$${price}` }}
    </h5>
    <p class="mt-3">
      Stock:
      <strong v-if="isAvailable" class="text-success">Available</strong>
      <strong v-else class="text-danger">Sold out</strong>
    </p>
    <button
        style="width: 25% !important;"
        v-if="!addedToCart"
        :class="`btn w-100 shadow-none ${isAvailable ? 'btn-success' : 'btn-secondary' }`"
        :disabled="!isAvailable"
        @click="$emit('add-to-cart')"

    >
      Add to cart
    </button>
    <button
        style="width: 25% !important;"
        v-else
        class="btn w-100 shadow-none btn-success"
        disabled
    >
      Added
    </button>
  </div>

</template>

<script>
export default {
  name: "Product",
  props: {
    id: {
      type: Number,
      isRequired: true,
    },
    name: {
      type: String,
      isRequired: true,
    },
    description: {
      type: String,
    },
    price: {
      type: Number,
    },
    image_1: {
      type: String,
    },
    image_2: {
      type: String,
    },
    image_3: {
      type: String,
    },
    count: {
      type: String,
    },
    isAvailable: {
      type: Boolean,
    },
  },
  computed: {
    addedToCart() {
      return !!this.$store.getters.getProductById(this.id);
    }
  },
}
</script>
