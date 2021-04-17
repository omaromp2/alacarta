<template>
    <app-layout>
        <div class='py-12'>
            <!-- <div class='max-w-7xl mx-auto sm:px-6 lg:px-8'>
                <div class='bg-white overflow-hidden shadow-xl sm:rounded-lg'>
                    Edit Menu Item
                </div>
            </div> -->

            <div v-if=" Object.keys($page.props.errors).length > 0"
                 class="flex w-3/4 mx-auto my-3 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-center w-12 bg-red-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path
                              d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                    </svg>
                </div>
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">
                            <jet-validation-errors></jet-validation-errors>
                        </p>
                    </div>
                </div>
            </div>

            <section class="text-gray-600 body-font relative">

                <form @submit.prevent="submit(menu.id)">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Menu Item</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fix and review your Item</p>
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                        <input type="text" id="name" name="name" v-model="form.name"
                                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <jet-input-error :message="$page.props.errors.name" class="mt-2" />
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="price" class="leading-7 text-sm text-gray-600">Price</label>
                                        <input type="number" min="1" step="any" id="price" name="price"
                                               v-model="form.price"
                                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <jet-input-error :message="$page.props.errors.price" class="mt-2" />
                                    </div>
                                </div>

                                <div class="p-2 w-3/4">
                                    <div class="relative">
                                        <label for="Type" class="leading-7 text-sm text-gray-600">Group</label>
                                        <!-- component -->
                                        <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300
                                  focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base
                                  outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                                v-model="form.type">
                                            <option v-for="type in types" :key="type" :value="type"> {{ type }}
                                            </option>
                                        </select>
                                        <jet-input-error :message="$page.props.errors.type" class="mt-2" />
                                    </div>
                                </div>

                                <div class="p-2 w-1/4">
                                    <div class="relative">
                                        <!-- <label for="Type" class="leading-7 text-sm text-gray-600">Type</label> -->
                                        <!-- component -->
                                        <a id="addBtn" @click="add = !add" class="flex mx-auto text-white text-center bg-indigo-500 border-0 py-2
                                px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                            <svg class="h-6 w-6 text-center mx-auto " xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="description"
                                               class="leading-7 text-sm text-gray-600">Description</label>
                                        <textarea id="description" name="description" v-model="form.description"
                                                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                        <jet-input-error :message="$page.props.errors.description" class="mt-2" />
                                    </div>
                                </div>



                                <div class="flex justify-between items-center" @click="form.isActive = !form.isActive">
                                    <h2>Is Published</h2>
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
            </section>

        </div>

        <section>
            <!-- MOdal  -->

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div id="add" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                 aria-modal="true" v-show="add">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                    <div
                         class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                     class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <!-- Heroicon name: outline/exclamation -->
                                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Add new type for yor menu
                                    </h3>
                                    <div class="mt-2">
                                        <label for="newType" class="leading-7 text-sm text-gray-600">New Type</label>
                                        <input type="text" id="newType" name="newType" v-model="newtype"
                                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" class="w-full inline-flex justify-center rounded-md
             border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium
             text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2
             focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" @click="addType()">
                                Save
                            </button>
                            <button type="button" class="w-full inline-flex justify-center rounded-md
             border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium
             text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2
             focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="add = !add">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </app-layout>
</template>
<script>
    ///// TODO Fix bug - Modal is submiting data
    import AppLayout from '@/Layouts/AppLayout'
    import JetInputError from '@/Jetstream/InputError'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            AppLayout,
            JetInputError,
            JetValidationErrors,
        },
        props: {
            errors: Object,
        },
        props: ['menu'],
        data() {
            return {
                types: [],
                add: false,
                newtype: '',
                form: {
                    name: this.menu.name,
                    price: this.menu.price,
                    description: this.menu.description,
                    type: this.menu.type,
                    isActive: this.menu.is_published
                }
            }
        },
        mounted() {
            this.typeGet();
        },
        methods: {
            submit(id) {
                this.$inertia.put('/menu/' + id, this.form);
            },
            typeGet() {
                console.log("Type Get Func");
                axios.get('/type/' + this.menu.id)
                    .then(resp => {
                        // console.log(resp);
                        this.types = resp.data;
                    }).catch(err => {
                        console.log(err);
                    })
            },
            addType() {
                this.types[this.newtype] = this.newtype;
                // cerramos modal
                this.add = false;
            }
        }
    }

</script>
<style scoped>
    /* css style for component */
    #addBtn {
        margin-top: 1.5em;
    }

</style>
