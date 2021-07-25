<template>
    <app-layout>
        <template #header>
            <h2 class='font-semibold text-xl text-gray-800 leading-tight'>
                Subs
            </h2>
        </template>
    <div class='py-12'>
        <div class='max-w-7xl mx-auto sm:px-6 lg:px-8'>
            <div class='bg-white overflow-hidden shadow-xl sm:rounded-lg'>
              Hang on you need an active subcription before proceeding.   
                <jet-button @click="checkout()" >
                    Go to subs
                </jet-button>
            </div>
        </div>
    </div>
    </app-layout>
</template>
<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from "@/Jetstream/Button";
    export default {
        components: {
        AppLayout,
        JetButton
        },
        props: ['stripeKey', 'checkoutSessionId'],
        methods:{
            checkout(){
                // console.log("Hello");
                window.Stripe(this.stripeKey).redirectToCheckout({
                    sessionId: this.checkoutSessionId
                });
            }
        }
    }
</script>
<style scoped>
/* css style for component */ 
</style>