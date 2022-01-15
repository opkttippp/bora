<template>
  <form method="post" class="row g-3 mb-3" ref="formHTML">
    <h5>Billing details</h5>
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input v-model="firstName" type="text" :class="{ 'form-control': true, 'is-invalid': firstNameInvalidMsg }"
             id="firstName" placeholder="First Name" name="firstName">
      <div v-if="firstNameInvalidMsg" class="invalid-feedback">
        {{ firstNameInvalidMsg }}
      </div>
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input v-model="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
    </div>
    <div class="col-12">
      <label for="city" class="form-label">City</label>
      <input v-model="city" type="text" class="form-control" id="city" placeholder="City" name="city">
    </div>
    <div class="col-12">
      <label for="address" class="form-label">Address</label>
      <input v-model="address" type="text" class="form-control" id="address" placeholder="Address" name="address">
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email Address</label>
      <input v-model="email" type="email" class="form-control" id="email" placeholder="Email Address" name="email">
    </div>
    <div class="col-md-6">
      <label for="phone" class="form-label">Phone</label>
      <input v-model="phone" type="text" class="form-control" id="phone" placeholder="+38(099) 999-99-99" name="phone">
    </div>
    <div class="col-12 d-flex justify-content-end">
      <button type="submit" class="btn btn-success"
              @click="fetchProducts"
      >
        Place Order
      </button>
    </div>
  </form>
</template>

<script>
export default {
  name: "CartBillingForm",
  data: () => ({
    products: [],
    firstName: "",
    lastName: "",
    city: "",
    address: "",
    email: "",
    phone: "",
    firstNameInvalidMsg: "",
  }),
  watch: {
    firstName(newFirstName) {
      if (newFirstName.length > 20) {
        this.firstNameInvalidMsg = "First name must be shorter than 20 characters.";
      } else {
        this.firstNameInvalidMsg = "";
      }
    }
  },
  computed: {
    isPlaceOrderDisabled() {
      return !!this.firstNameInvalidMsg;
    },
    removeAll() {
      this.$store.commit("removeOrder")
    },
  },
  methods: {
    placeOrder() {
    },
    fetchProducts: async function() {
      let formData = this.firstName;
      try {
        const response = await fetch("/api/product/mail.php",
            {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },

              body: JSON.stringify({formData})
            }
        );

        this.products = await response.json()
        alert(this.products)
      } catch (e) {
        console.error(e)
      }
    },
  }
}
</script>
