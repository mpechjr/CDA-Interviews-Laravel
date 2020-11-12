<template>
    <large-form-section @submitted="submit">
        <template #title>
            Edit Page
        </template>

        <template #description>
           Edit Page ddsdsds
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="title" value="Title" />
                <jet-input id="title" type="text" class="mt-1 block w-full" v-model="data.data.title" ref="title" autocomplete="title" />
           
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="content" value="Content" />
                
                 <textarea id="content" class="mt-1  appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="data.content" placeholder="Enter Body">

                </textarea>
              
            </div>

           
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button >
                Save
            </jet-button>
        </template>
    </large-form-section>
</template>

<script>
    
    import JetActionMessage from '@/Jetstream/ActionMessage'
    import JetButton from '@/Jetstream/Button'
    import LargeFormSection from '@/Jetstream/LargeFormSection'
    import JetInput from '@/Jetstream/Input'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'

    export default {
        components: {
            JetActionMessage,
            JetButton,
            LargeFormSection,
            JetInput,
            JetInputError,
            JetLabel,
        },
        props: ['data'],

       data() {
           
           console.log(this.data.data)
            return { 
            form: this.$inertia.form({
                    '_method': 'PUT',
                    title: this.data.title,
                    content: this.data.content, 
                }, {
                    bag: 'updateProfileInformation',
                     
                }),
            }
        },
 
        methods: {
 
            submit() {
                //this.form.processing = true;
                this.form.put(route('pages.update',1), {
                    preserveScroll: true
                })

                
            }
        }
    }
</script>
