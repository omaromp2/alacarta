<template>
    <!-- <app-layout> -->
        <section class="text-gray-600 body-font">
          <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img v-if="rest.profileImg" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" :src="rest.profileImg">
            <img v-else class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            <div class="text-center lg:w-2/3 w-full">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                  {{ rest.name }}
              </h1>
              <p class="mb-8 leading-relaxed">Your slogan gere</p>
            </div>
          </div>
        </section>

        <section>
            <select class="w-3/4 mx-auto block bg-gray-100 bg-opacity-50 rounded border border-gray-300
                 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base
                 outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            v-model="selected" @change="filter(selected)" >
              <option v-for="type in types" :key="type"
              :value="type" > {{ type }} </option>
            </select>
        </section>

        <section class="py-4" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div>
                    <!-- bg-white overflow-hidden shadow-xl sm:rounded-lg -->

                    <!-- {{ items }} -->

                    <div v-if="items == 0">
                        No Item at the moment, please add some
                    </div>
                    <div v-else>
                        <!-- {{ rest.menuItems }} -->

                        <!-- Version 0.1 -->

                        <!-- <div v-for="item in items" :key="item.id" class="flex max-w mx-auto my-4 py-4 overflow-hidden bg-white
                         rounded-lg shadow-lg dark:bg-gray-800 ">
                            <div class="w-2/3 p-4 md:p-4">

                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                                            {{ item.name }}
                                        </h1>
                                    </div>
                                    <div></div>
                                    <div>
                                        <div class="flex justify-between mt-3 item-center">
                                            <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$ {{ item.price }} </h1>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    {{ item.description }}
                                </p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
                                    </svg>
                                </div>

                            </div>
                        </div> -->

                        <!-- V 0.2 -->
                        <div v-for="item in items" :key="item.id" class="w-full px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800 my-8 ">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">
                                    {{ item.type }}
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">
                                    {{ item.name }}
                                </a>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">
                                    {{ item.description }}
                                </p>
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">Read more</a>

                                <div class="flex items-center">
                                    <!-- <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar"> -->
                                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">
                                        $ {{ item.price }}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <!-- </app-layout> -->
</template>
<script>
    // import AppLayout from '@/Layouts/AppLayout'
    export default {
        components: {
        // AppLayout,
    },
    props:['rest', 'items', 'types'],
    methods:{
        filter(selected){
            // alert("Voy a: " + selected );
            window.location.href = "/rest/ " + this.rest.id + "?filter=" + selected;
        }
    }
}
</script>
<style scoped>
/* css style for component */
</style>
