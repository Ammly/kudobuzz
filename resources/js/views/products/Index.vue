<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Products</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'products.create' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                New Product
            </router-link>

        </div>

        <!-- table -->
        <table class="text-left m-4" style="border-collapse: collapse;">
            <thead>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Shop Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Product Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Title</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Brand</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Sales Price</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Description</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Quantity</th>
            </thead>
            <tbody>
                <tr class="hover:bg-purple-lightest" v-if="products.length" v-for="product in products">
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.shop_id }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.name }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.title }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.brand }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.sales_price }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.description }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ product.quantity }}</td>
                </tr>
                <tr class="hover:bg-purple-lightest" v-else>

                    <td colspan="6" class="py-4 px-6 border-b border-purple-light">No Products yet.</td>

                </tr>
            </tbody>
        </table>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                products: []
            }
        },

        created() {

           axios.get('/api/v1/products')
                .then(({data}) => this.products = data);
        }
    }
</script>
