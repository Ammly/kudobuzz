<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Shops Create</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'shops.index' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                < All Shops
            </router-link>

        </div>

        <!-- Form -->
        <div class="w-full max-w-md mx-auto mt-4">
          <form class=" px-8 pt-6 pb-8 mb-4" @submit.prevent="onSubmit">
            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="store_name">
                Store Name
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="store_name" type="text" placeholder="Store Name" v-model="shop.store_name">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.store_name"
                    v-text="errors.store_name[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="store_url">
                Store URL
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="store_url" type="text" placeholder="Store URL" v-model="shop.store_url">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.store_url"
                    v-text="errors.store_url[0]"
                    role="alert"></span>
            </div>

            <div class="mb-6">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="currency">
                Currency
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="currency" type="text" placeholder="Currency" v-model="shop.currency">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.currency"
                    v-text="errors.currency[0]"
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
                shop: {
                    store_name: '',
                    store_url: '',
                    currency: ''
                },

                errors: {}
            }
        },

        methods: {
            onSubmit() {

               axios.post('/api/v1/shops', this.shop)
                    .then((response) => {this.$router.push({name: 'shops.index'})})
                    .catch(errors => this.errors = errors.response.data.errors);
            }
        }
    }
</script>
