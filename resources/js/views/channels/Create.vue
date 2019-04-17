<template>

    <div class="w-full lg:w-4/5 p-8 mt-6 mb-4 lg:mt-0 text-black leading-normal bg-white border border-grey-light border-rounded">
        <!--Title-->
        <div class="font-sans">

           <h1 class="font-sans break-normal text-black pt-6 pb-2 text-xl">Channels Create</h1>

           <hr class="border-b border-grey-light mb-4">

           <router-link
                :to="{ name: 'channels.index' }"

                class="bg-transparent hover:bg-purple text-purple-dark font-semibold hover:text-white mt-4 mb-4 py-2 px-4 border border-purple hover:border-transparent rounded no-underline"
                >
                < All Channels
            </router-link>

        </div>

        <!-- Form -->
        <div class="w-full max-w-md mx-auto mt-6">
          <form class=" px-8 pt-6 pb-8 mb-4" @submit.prevent="onSubmit">
            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2" for="name">
                Channel Name
              </label>
              <input class="shadow appearance-none border rounded w-full mb-2 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Channel Name" v-model="channel.name">
              <span class="bg-red-lightest border border-red-light text-red-dark px-2 py-1 rounded relative"
                    v-if="errors.name"
                    v-text="errors.name[0]"
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

                channel: {},

                errors: {}
            }
        },

        methods: {
            onSubmit() {

               axios.post('/api/v1/channels', this.channel)
                    .then((response) => {this.$router.push({name: 'channels.index'})})
                    .catch(errors => this.errors = errors.response.data.errors);
            }
        }
    }
</script>
