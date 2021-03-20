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
                href="/menu/create" >
                    Add
                </a>
              </div>
            </div>


            <br>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>Hello</h1>
                    <div>
                        {{ menuItems }}
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
        props:['menuItems'],
    }
</script>
