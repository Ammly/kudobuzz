<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Channels</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'channels.create' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                New Channel
            </router-link>

        </div>

        <!-- table -->
        <table class="text-left m-4" style="border-collapse: collapse;">
            <thead>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">#</th>
                <th class="py-4 px-6 bg-purple font-medium uppercase text-sm text-white border-b border-purple-light">Channel Name</th>
            </thead>
            <tbody>
                <tr class="hover:bg-purple-lightest" v-if="channels.length" v-for="channel in channels">
                    <td class="py-4 px-6 border-b border-purple-light">{{ channel.id }}</td>
                    <td class="py-4 px-6 border-b border-purple-light">{{ channel.name }}</td>
                </tr>
                <tr class="hover:bg-purple-lightest" v-else>

                    <td colspan="1" class="py-4 px-6 border-b border-purple-light">No Channels yet.</td>

                </tr>
            </tbody>
        </table>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                channels: []
            }
        },

        created() {

           axios.get('/api/v1/channels')
                .then(({data}) => this.channels = data);
        }
    }
</script>
