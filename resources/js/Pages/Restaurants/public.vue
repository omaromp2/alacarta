<template>
    <app-layout>
        <section class="text-gray-600 body-font">
          <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            <div class="text-center lg:w-2/3 w-full">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                  {{ rest.name }}
              </h1>
              <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
              <div class="flex justify-center">
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
              </div>
            </div>
          </div>
        </section>

        <section class="py-4" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <!-- {{ items }} -->

                    <div v-if="items == 0">
                        No Item at the moment, please add some
                    </div>
                    <div v-else>
                        <!-- {{ rest.menuItems }} -->

                        <!-- Tabla  -->

                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        Name</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        type</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        description</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        price</th>
                                    <th
                                        class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in items" :key="item.id"  >
                                    <td class="px-4 py-3">{{ item.name }}</td>
                                    <td class="px-4 py-3">{{ item.type }}</td>
                                    <td class="px-4 py-3"> {{ item.description }} </td>
                                    <td class="px-4 py-3 text-lg text-gray-900">{{ item.price }}</td>
                                    <td class="w-10 text-center">
                                        <!-- <input name="plan" type="radio"> -->
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>

    </app-layout>
</template>
<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        components: {
        AppLayout,
    },
    props:['rest', 'items']
}
</script>
<style scoped>
/* css style for component */
</style>
