<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Shops</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'shops.create' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded"
                >
                New Shop
            </router-link>

        </div>

        <!-- table -->
        <table class="table-auto mt-4">
            <thead>
                <th>Store Name</th>
                <th>Store URL</th>
                <th>Currency</th>
            </thead>
            <tbody>
                <tr v-for="shop in shops">
                    <td>{{ shop.store_name }}</td>
                    <td>{{ shop.store_url }}</td>
                    <td>{{ shop.currency }}</td>
                </tr>
            </tbody>
        </table>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                shops: []
            }
        },

        created() {

           axios.get('/api/v1/shops')
                .then(({data}) => this.shops = data);
        }
    }
</script>
