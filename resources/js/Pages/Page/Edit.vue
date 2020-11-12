<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Page!
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <edit-page-form :user="$page.user" />

                <jet-section-border />

               
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout' 
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import EditPageForm from './EditPageForm'
   

    export default {
        props: ['sessions'],

        components: {
            AppLayout, 
            JetSectionBorder,
            EditPageForm,


        },
    }
</script>
