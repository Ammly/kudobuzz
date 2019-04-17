<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Feeds Create</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'feeds.index' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                < All Feeds
            </router-link>

        </div>

        <!-- Form -->
        <div class="w-full max-w-md mx-auto mt-4">
          <form class=" px-8 pt-6 pb-8 mb-4" @submit.prevent="onSubmit">
            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="store_name">
                Store Name
              </label>
              <select class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="store_name" type="text" placeholder="Store Name" v-model="feed.shop_id" >
                <option selected disabled>Select Store</option>
                <option v-for="shop in shops" :value="shop.id">{{ shop.store_name }}</option>
              </select>
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.store_name"
                    v-text="errors.store_name[0]"
                    role="alert"></span>
            </div>

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="product_id">
                Product Name
              </label>
              <select class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="product_id" type="text" placeholder="Product Name" v-model="feed.product_id" >
                <option selected disabled>Select Product</option>
                <option v-for="product in products" :value="product.id">{{ product.name }}</option>
              </select>
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.product_id"
                    v-text="errors.product_id[0]"
                    role="alert"></span>
            </div>

            <div class="mb-6">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="channel_id">
                Channel Name
              </label>
              <select class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="channel_id" type="text" placeholder="Channel Name" v-model="feed.channel_id" >
                <option selected disabled>Select Channel</option>
                <option v-for="channel in channels" :value="channel.id">{{ channel.name }}</option>
              </select>
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.channel_id"
                    v-text="errors.channel_id[0]"
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

                products: {},

                channels: {},

                feed: {},

                errors: {}
            }
        },

        created() {
            axios.get('/api/v1/shops')
                .then(({data}) => this.shops = data);

            axios.get('/api/v1/products')
                .then(({data}) => this.products = data);

            axios.get('/api/v1/channels')
                .then(({data}) => this.channels = data);
        },

        methods: {
            onSubmit() {

               axios.post('/api/v1/feeds', this.feed)
                    .then((response) => {this.$router.push({name: 'feeds.index'})})
                    .catch(errors => this.errors = errors.response.data.errors);
            }
        }
    }
</script>
