<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Shops</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'shops.create' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                New Shop
            </router-link>

        </div>

        <!-- table -->
        <table class="text-left m-4" style="border-collapse: collapse;">
            <thead>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Store Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Store URL</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Currency</th>
            </thead>
            <tbody>
                <tr class="hover:bg-purple-lightest" v-if="shops.length" v-for="shop in shops">
                    <td class="py-4 px-6 border-b border-purple-light">{{ shop.store_name }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ shop.store_url }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ shop.currency }}</td>
                </tr>
                <tr class="hover:bg-purple-lightest" v-else>

                    <td colspan="6" class="py-4 px-6 border-b border-purple-light">No Shops yet.</td>

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
