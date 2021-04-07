<template>
    <app-layout>
        <template #header>
            <h2 class='font-semibold text-xl text-gray-800 leading-tight'>
                New Restaurant
            </h2>
        </template>
        <div class='py-12'>

            <div class='max-w-7xl mx-auto sm:px-6 lg:px-8'>
                <div class='bg-white overflow-hidden shadow-xl sm:rounded-lg'>

                    <!-- <img src="../../../../storage/app/public/img/img1.svg"
                    alt="img1"
                    class=" py-2 w-2/5 h-2/5 block mx-auto " > -->

                    <form @submit.prevent="submit">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">New Restaurant
                                </h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Add your Restaurant</p>
                            </div>
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name" v-model="form.name"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="open" class="leading-7 text-sm text-gray-600">Open</label>
                                            <input type="time" min="1" step="any" id="open" name="open"
                                                   v-model="form.open"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="close" class="leading-7 text-sm text-gray-600">Close</label>
                                            <input type="time" min="1" step="any" id="close" name="close"
                                                   v-model="form.close"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>



                                    <div class="flex justify-between items-center"
                                         @click="form.isActive = !form.isActive">
                                        <h2>Multiple Locations</h2>
                                        <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                                             :class="{ 'bg-green-400': form.isActive}">
                                            <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                                                 :class="{ 'translate-x-6': form.isActive,}"></div>
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <button type="submit"
                                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    // directo en el folder
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout
        },

        props: {
            errors: Object,
        }, //variables from laravel
        data() {
            return {
                form: {
                    name:'',
                    open:'',
                    close:'',
                    isActive: false
                },

            }
        },
        methods: {
            submit(){
                this.$inertia.post('/restaurant', this.form);
            }
        }
    }

</script>

<style scoped>
    /* css style for component */

</style>
