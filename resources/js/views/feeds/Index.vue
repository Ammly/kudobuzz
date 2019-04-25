<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Feeds</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'feeds.create' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                New Feed
            </router-link>

        </div>

        <!-- table -->
        <table class="text-left m-4" style="border-collapse: collapse;">
            <thead>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Shop Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Product Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Channel Name</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Action</th>
            </thead>
            <tbody>
                <tr class="hover:bg-purple-lightest" v-if="feeds.length" v-for="feed in feeds">
                    <td class="py-4 px-6 border-b border-purple-light">{{ feed.shop.store_name }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ feed.product.name }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ feed.channel.name }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">
                        <router-link
                             :to="{ name: 'feeds.download' }"

                             class="bg-transparent hover:bg-purple text-purple-dark font-thin hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                             >
                             <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                            <span>Download</span>
                         </router-link>
                    </td>
                </tr>
                <tr class="hover:bg-purple-lightest" v-else>

                    <td colspan="3" class="py-4 px-6 border-b border-purple-light">No Feeds yet.</td>

                </tr>
            </tbody>
        </table>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                feeds: []
            }
        },

        created() {

           axios.get('/api/v1/feeds')
                .then(({data}) => this.feeds = data);
        }
    }
</script>
