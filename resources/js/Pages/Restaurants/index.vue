<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Restaurants
            </h2>
        </template>

        <div v-if="$page.props.flash.message">
            <success-flash>
                {{ $page.props.flash.message }}
            </success-flash>
        </div>



        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <a :href="route('restaurant/create')" class="flex items-center px-2 py-2 font-medium tracking-wide
                       text-white capitalize transition-colors duration-200
                       transform bg-navy rounded-md dark:bg-gray-800 hover:bg-blue-700
                       dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-700
                       dark:focus:bg-gray-700">


                        <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-1">Add</span>
                    </a>

                    <!-- Rest -->
                    <!-- <div class="bg-red">
                        {{ rests.data }}
                    </div> -->


                </div>
            </div>
        </div>

        <!-- Restaurantes  -->

        <div v-for="rest in rests" :key="rest.id"
            class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 my-4 ">
            <!-- <img class="object-cover object-center w-full h-56"
                 src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                 alt="avatar"> -->

            <img v-if="rest.profileImg" class="object-cover object-center w-full h-56" :src="rest.profileImg"
                alt="avatar">
            <img v-else class="object-cover object-center w-full h-56"
                src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                alt="avatar">

            <div class="px-6 py-4">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white"> {{ rest.name }} </h1>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">

                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                    </svg>

                    <h1 class="px-2 text-sm"> {{ rest.open }} </h1>
                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>

                    <h1 class="px-2 text-sm"> {{ rest.close }} </h1>
                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <h1 class="px-2 text-sm">Locations</h1>
                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">

                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>

                    <h1 class="px-2 text-sm">
                        <a :href="'menu?rest=' + rest.id "> Menu </a>
                    </h1>

                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">

                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                    </svg>

                    <h1 class="px-2 text-sm">
                        <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                        <!-- <a :href="'qr/' + rest.id " target="_blank" > QR </a> -->

                        <!-- <a href="#" data-bs-toggle="modal" :data-bs-target="'#Modal' + rest.id "> QR </a> -->

                        <a href="#" @click="getQR(rest.id, rest.name)" > QR </a>

                    </h1>

                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>

                    <h1 class="px-2 text-sm">
                        <a :href="'restaurant/' + rest.id + '/edit' "> Edit </a>
                    </h1>

                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">

                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>

                    <h1 class="px-2 text-sm">
                        <a :href="'rest/' + rest.id " target="_blank"> Preview </a>
                    </h1>

                </div>

            </div>

        </div>


        <div class="grid grid-cols-3 gap-4 my-3 ">
            <div></div>
            <!-- <div></div> -->
            <div>
                <div class="flex flex-wrap -mb-1">
                    <template v-for="link in links.links" :key="link">
                        <div v-if="link.url == null"
                            class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                            v-html="link.label" />
                        <div v-else
                            class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                            :class="{ 'bg-white': link.active }" v-html="link.label"
                            @click="restGetter(user_id, link.url)" />
                    </template>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <jet-dialog-modal :show="modal" @close="closeModal">
            <template #title>
                {{ selectedRest }}
            </template>
            <template #content>

                <!-- <iframe type="text/plain" frameborder="0"
                  :data-bind="img" >
                </iframe> -->

                <iframe :src="img" frameborder="0" height="350" width="325" class="mx-auto" ></iframe>

            </template>
            <template #footer>
                <jet-button @click="closeModal">
                    Cancel
                </jet-button>
            </template>
        </jet-dialog-modal>




        <!-- <paging :links="links" ></paging> -->

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import paging from '@/components/paging'
    import SuccessFlash from '@/components/success-flash'
    import JetDialogModal from '@/Jetstream/DialogModal'
    import JetButton from "@/Jetstream/Button";

    export default {
        props: ['user_id'],
        components: {
            AppLayout,
            paging,
            SuccessFlash,
            JetDialogModal,
            JetButton
        },
        data() {
            return {
                modal: false,
                rests: [],
                id: this.user_id,
                img: '',
                selectedRest: '',
                links: []
            }
        },
        mounted() {
            this.restGetter(this.id)
        },
        methods: {
            restGetter(id, page) {
                console.log(id);
                let uri = '';

                console.log(page);

                if (page == null) {
                    uri = "/restBack/" + id;
                } else {
                    uri = page;
                }


                axios.get(uri)
                    .then(resp => {
                        console.log(resp);
                        this.links = resp.data;
                        this.rests = this.links.data;

                    })
                    .catch(err => {
                        console.log(err);
                    });
            },

            getQR(id, name) {

                // console.log(id);
                let uri = "/qr/" + id;

                this.selectedRest = name;

                this.img = uri;

                // axios.get(uri)
                //     .then(resp => {
                //         console.log(resp);
                //         // this.links = resp.data;
                //         // this.rests = this.links.data;

                //         let rep = resp.data.qr;

                //         let helper = rep.replace( /\\/g , "");

                //         console.log(helper);


                //         this.img = helper;

                //     })
                //     .catch(err => {
                //         console.log(err);
                //     });


                // Prendemos modal
                this.modal = true;

            },

            closeModal() {
                this.selectedRest = '';
                this.img = '';
                this.modal = false;
            }

        },

    }

</script>
