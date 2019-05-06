<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded font-sans">

        <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Dashboard</h1>

        <hr class="border-b border-grey-light">

        <div class="container my-12 mx-auto px-4 md:px-12">
            <!-- cards -->
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <!-- Column -->
                <router-link :to="{ name: 'shops.index' }" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 no-underline">

                    <!-- Article -->
                    <article class="bg-purple-light overflow-hidden rounded-lg shadow hover:shadow-lg text-center">

                        <header class="leading-tight p-2 md:p-4">
                            <h1 class="text-lg text-white">
                                Shops
                            </h1>
                        </header>

                        <footer class="justify-between leading-none p-2 md:p-4 text-center">
                            <p class="ml-2 text-sm text-grey-lighter">
                                {{ statistics.shops }}
                            </p>
                        </footer>

                    </article>
                    <!-- END Article -->

                </router-link>
                <!-- END Column -->
                <!-- Column -->
                <router-link :to="{ name: 'products.index' }"" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 no-underline">

                    <!-- Article -->
                    <article class="bg-purple-light overflow-hidden rounded-lg shadow hover:shadow-lg text-center">

                        <header class="leading-tight p-2 md:p-4">
                            <h1 class="text-lg text-white">
                                Products
                            </h1>
                        </header>

                        <footer class="justify-between leading-none p-2 md:p-4 text-center">
                            <p class="ml-2 text-sm text-grey-lighter">
                                {{ statistics.products }}
                            </p>
                        </footer>

                    </article>
                    <!-- END Article -->

                </router-link>
                <!-- END Column -->
                <!-- Column -->
                <router-link :to="{ name: 'channels.index' }" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 no-underline">

                    <!-- Article -->
                    <article class="bg-purple-light overflow-hidden rounded-lg shadow hover:shadow-lg text-center">

                        <header class="leading-tight p-2 md:p-4">
                            <h1 class="text-lg text-white">
                                Channels
                            </h1>
                        </header>

                        <footer class="justify-between leading-none p-2 md:p-4 text-center">
                            <p class="ml-2 text-sm text-grey-lighter">
                                {{ statistics.channels }}
                            </p>
                        </footer>

                    </article>
                    <!-- END Article -->

                </router-link>
                <!-- END Column -->
                <!-- Column -->
                <router-link :to="{ name: 'feeds.index' }" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 no-underline">

                    <!-- Article -->
                    <article class="bg-purple-light overflow-hidden rounded-lg shadow hover:shadow-lg text-center">

                        <header class="leading-tight p-2 md:p-4">
                            <h1 class="text-lg text-white">
                                Feeds
                            </h1>
                        </header>

                        <footer class="justify-between leading-none p-2 md:p-4 text-center">
                            <p class="ml-2 text-sm text-grey-lighter">
                                {{ statistics.feeds }}
                            </p>
                        </footer>

                    </article>
                    <!-- END Article -->

                </router-link>
                <!-- END Column -->
            </div>
            <!-- End cards -->
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
