<template>

    <div v-if="$page.props.flash.message" class="alert">
      {{ $page.props.flash.message }}
    </div>

    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Menu
            </h2>
        </template>

        <div class="py-12">

            <!-- <div class="grid grid-flow-col auto-cols-max">
                <div></div>
                <div></div>
                <div>
                    <a class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                       :href="'/menu/create?rest=' + rest_id ">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> Add
                    </a>
                </div>
            </div>  -->


            <br>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div v-if="menuItems.length == 0">
                        No Item at the moment, please add some
                        <JetBtn @click="CreateRedir(rest_id)" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </JetBtn>
                    </div>
                    <div v-else>
                        <!-- {{ menuItems }} -->

                        <!-- Tabla  -->

                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-200 text-sm bg-navy rounded-tl rounded-bl">
                                        Name</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-200 text-sm bg-navy">
                                        Group</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-200 text-sm bg-navy">
                                        Description</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-200 text-sm bg-navy">
                                        Price</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-200 text-sm bg-navy">
                                        Published</th>

                                    <!-- <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                          <a class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" :href="'/menu/create?rest=' + rest_id ">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg> Add
                                        </a>
                                    </th> -->
                                    <th
                                        class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-navy rounded-tr rounded-br">

                                        <a class="flex mx-auto text-white bg-navy border-0 py-2 px-8 focus:outline-none hover:bg-teal rounded text-lg" :href="'/menu/create?rest=' + rest_id ">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg> Add
                                        </a>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in menuItems" :key="item.id"  >
                                    <td class="px-4 py-3">{{ item.name }}</td>
                                    <td class="px-4 py-3">{{ item.type }}</td>
                                    <td class="px-4 py-3"> {{ item.description }} </td>
                                    <td class="px-4 py-3 text-lg text-gray-900">{{ item.price }}</td>
                                    <td class="px-4 py-3" v-if="item.is_published" >
                                        <svg class="h-6 w-6 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </td>
                                    <td class="px-4 py-3" v-else >
                                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </td>
                                    <td class="w-10 text-center">
                                        <!-- <input name="plan" type="radio"> -->
                                        <a :href="'/menu/' + item.id ">
                                            <svg class="text-purple-500 hover:text-purple-900 h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
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
    import JetBtn from '@/Jetstream/Button'

    export default {
        components: {
            AppLayout,
            JetBtn

        },
        props: ['menuItems', 'rest_id'],
        methods:{
            CreateRedir(restid){
                window.location.href = '/menu/create?rest=' + restid;
            }
        }
    }

</script>
