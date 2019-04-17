<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Products Create</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'products.index' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                < All Products
            </router-link>

        </div>

        <!-- Form -->
        <div class="w-full max-w-md mx-auto mt-4">
          <form class=" px-8 pt-6 pb-8 mb-4" @submit.prevent="onSubmit">
            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="store_name">
                Store Name
              </label>
              <select class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="store_name" type="text" placeholder="Store Name" v-model="product.shop_id" >
                  <option v-for="shop in shops" :value="shop.id">{{ shop.store_name }}</option>
              </select>
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.store_name"
                    v-text="errors.store_name[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="name">
                Name
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Product Name" v-model="product.name">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.name"
                    v-text="errors.name[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                Title
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Product Title" v-model="product.title">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.title"
                    v-text="errors.title[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="brand">
                Brand
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="brand" type="text" placeholder="Product Brand" v-model="product.brand">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.brand"
                    v-text="errors.brand[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="sales_price">
                Price
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="sales_price" type="text" placeholder="Product Price" v-model="product.sales_price">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.sales_price"
                    v-text="errors.sales_price[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="description">
                Description
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Product Description" v-model="product.description">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.description"
                    v-text="errors.description[0]"
                    role="alert"></span>
            </div>

            <div class="mb-6">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="quantity">
                Quantity
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="quantity" type="text" placeholder="Product Quantity" v-model="product.quantity">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.quantity"
                    v-text="errors.quantity[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <button class="bg-purple hover:bg-purple-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
              </button>
            </div>
          </form>
        </div>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                shops: {},

                product: {},

                errors: {}
            }
        },

        created() {
            axios.get('/api/v1/shops')
                .then(({data}) => this.shops = data);
        },

        methods: {
            onSubmit() {

               axios.post('/api/v1/products', this.product)
                    .then((response) => {this.$router.push({name: 'products.index'})})
                    .catch(errors => this.errors = errors.response.data.errors);
            }
        }
    }
</script>
