<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Menu
            </h2>
        </template>

        <div class="py-12">

            <div class="grid grid-flow-col auto-cols-max">
                <div></div>
                <div></div>
                <div>
                    <a class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                       :href="'/menu/create?rest=' + rest_id ">
                        Add
                    </a>
                </div>
            </div>


            <br>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div v-if="menuItems.length == 0">
                        No Item at the moment, please add some
                    </div>
                    <div v-else>
                        <!-- {{ menuItems }} -->

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
                                <tr v-for="item in menuItems" :key="item.id"  >
                                    <td class="px-4 py-3">{{ item.name }}</td>
                                    <td class="px-4 py-3">{{ item.type }}</td>
                                    <td class="px-4 py-3"> {{ item.description }} </td>
                                    <td class="px-4 py-3 text-lg text-gray-900">{{ item.price }}</td>
                                    <td class="w-10 text-center">
                                        <input name="plan" type="radio">
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,

        },
        props: ['menuItems', 'rest_id'],
    }

</script>
