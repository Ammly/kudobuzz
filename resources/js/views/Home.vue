<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

            <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Dashboard</h1>

            <hr class="border-b border-grey-light">

            <!-- cards -->

            <div class="flex flex-wrap">
                <div class="bg-purple-light flex-1 m-4 rounded overflow-hidden shadow-lg">

                    <div class="text-center px-6 py-4">

                        <div class="font-bold text-white text-xl mb-2">Shops</div>

                        <p class="text-grey-lighter text-base">{{ statistics.shops }}</p>

                    </div>

                </div>

                <div class="bg-purple-light flex-1 m-4 rounded overflow-hidden shadow-lg">

                    <div class="text-center px-6 py-4">

                        <div class="font-bold text-white text-xl mb-2">Products</div>

                        <p class="text-grey-lighter text-base">{{ statistics.products }}</p>

                    </div>

                </div>

                <div class="bg-purple-light flex-1 m-4 rounded overflow-hidden shadow-lg">

                    <div class="text-center px-6 py-4">

                        <div class="font-bold text-white text-xl mb-2">Channels</div>

                        <p class="text-grey-lighter text-base">{{ statistics.channels }}</p>

                    </div>

                </div>

                <div class="bg-purple-light flex-1 m-4 rounded overflow-hidden shadow-lg">

                    <div class="text-center px-6 py-4">

                        <div class="font-bold text-white text-xl mb-2">Feeds</div>

                        <p class="text-grey-lighter text-base">{{ statistics.feeds }}</p>

                    </div>

                </div>
            </div>

            <!-- End: cards -->

        </div>

     </div>

</template>

<script>
    export default {
        data() {
            return {
                statistics: []
            }
        },

        created() {

           axios.get('/api/v1/home')
                .then(({data}) => this.statistics = data);
        }
    }
</script>
