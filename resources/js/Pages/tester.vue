<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tester
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Tester page

                    <!-- <t-button>Example button</t-button> -->

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    // import { TButton } from 'vue-tailwind/dist/t-button'
    import AppLayout from '@/Layouts/AppLayout'

    // createApp.use(VueTailwind)

    export default {
        components: {
            AppLayout,
            // TButton,

        },
    }
</script>
