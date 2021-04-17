<template>
    <app-layout>
        <template #header>
            <h2 class='font-semibold text-xl text-gray-800 leading-tight'>
                New Restaurant
            </h2>
        </template>


        <div v-if=" Object.keys($page.props.errors).length > 0"
            class="flex w-3/4 mx-auto my-3 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-red-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
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

        <div class='py-2'>

            <div class='max-w-7xl mx-auto sm:px-6 lg:px-8'>
                <div class='bg-white overflow-hidden shadow-xl sm:rounded-lg'>

                    <!-- <img src="../../../../storage/app/public/img/img1.svg"
                    alt="img1"
                    class=" py-2 w-2/5 h-2/5 block mx-auto " > -->

                    <form @submit.prevent="submit">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Restaurant
                                </h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fix your Restaurant</p>
                            </div>
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name" v-model="form.name"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <jet-input-error :message="errors.name" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="open" class="leading-7 text-sm text-gray-600">Open</label>
                                            <input type="time" min="1" step="any" id="open" name="open"
                                                   v-model="form.open"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <jet-input-error :message="errors.open" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="close" class="leading-7 text-sm text-gray-600">Close</label>
                                            <input type="time" min="1" step="any" id="close" name="close"
                                                   v-model="form.close"
                                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <jet-input-error :message="errors.close" class="mt-2" />
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

        <div class=" py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2 w-full">
                    <div class="relative">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit your Restaurant Image
                                </h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fix your Restaurant Logo</p>
                            </div>
                        </div>
                        <!-- <label for="img" class="leading-7 text-sm text-gray-600">Image</label>
                        <input type="file" id="img" name="img" @change="imgSubmit" accept="image/*"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500
                            focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        <button @click="imgUpload" >Test</button> -->

                        <img v-if="img.length == 0" :src="rest.profileImg" alt="">

                        <vue-base64-file-upload
                            class="v1"
                            accept="image/png,image/jpeg"
                            image-class="v1-image"
                            input-class="v1-input"
                            :max-size="customImageMaxSize"
                            @size-exceeded="onSizeExceeded"
                            @file="onFile"
                            @load="onLoad" />

                            <jet-button @click="imgUpload" >Test</jet-button>

                    </div>
                </div>

             </div>
        </div>

    </app-layout>
</template>

<script>
    // directo en el folder
    import AppLayout from '@/Layouts/AppLayout'
    import JetInputError from '@/Jetstream/InputError'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import JetButton from '@/Jetstream/Button'
    import VueBase64FileUpload from 'vue-base64-file-upload'

    export default {
        components: {
            AppLayout,
            JetInputError,
            JetValidationErrors,
            VueBase64FileUpload,
            JetButton,
        },

        props:['restaurant'],
        props: {
            errors: Object,
            rest: Array
        }, //variables from laravel
        data() {
            return {
                customImageMaxSize: 2, // megabytes
                img: [],
                form: {
                    name:this.rest.name,
                    open: this.rest.open,
                    close: this.rest.close,
                    isActive: this.rest.multi_location
                },

            }
        },
        methods: {
            submit(){
                this.$inertia.put('/restaurant/' + this.rest.id , this.form);
            },
            imgSubmit(event){
                // console.log(event);
                const imageFile = event;
                const imgBlob = imageFile.target.files[0];
                const reader = new FileReader();

                reader.addEventListener = ("load", function() {
                    this.img = imageFile.target.result
                }, false);

                // reader.readAsDataURL(imgBlob);

                if (imgBlob) {
                    reader.readAsDataURL(imgBlob);
                }

                console.log( "Blon:", this.img);
                // console.log("PIPI:",pipi);

            },
            imgUpload(){
                // console.log('A subir' ,this.img);
                const param = {
                    'img': this.img
                };
                axios.post('/imgrest/' + this.rest.id, param )
                .then(resp =>{
                    console.log(resp.data);
                    if (resp.data.code == 200) {
                        alert("Lo subi");
                        // location.reload('/restaurant');
                        window.location.href = "/restaurant";
                    } else {
                        alert("Error");
                    }
                })
                .catch(err => {
                    console.log(err);
                });
            },

            onFile(file) {
              console.log("On File:",file); // file object
            },

            onLoad(dataUri) {
              console.log( "On Load:", dataUri); // data-uri string
                //   paso el valor
                this.img = dataUri;
            },

            onSizeExceeded(size) {
              alert(`Image ${size}Mb size exceeds limits of ${this.customImageMaxSize}Mb!`);
            }

        }
    }

</script>

<style scoped>
    /* css style for component */

</style>
