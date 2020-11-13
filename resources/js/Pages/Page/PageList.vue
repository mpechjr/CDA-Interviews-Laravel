<template>
    <large-form-section @submitted="submit">
        <template #title>
            Edit Page Content   
        </template>
    

        <template #description>
           Upate Home Page Content and Title
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="title" value="Title" />
                <jet-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" ref="title"  />

                
            
           
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="content" value="Content" />
                <vue-editor v-model="form.content" />
                 
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
    import { VueEditor } from "vue2-editor";

    export default {
     mounted() {
        this.form.title =  this.data.data.title;
        this.form.content =  this.data.data.content;
        //this.form.widget_count = this.count;
    },

        components: {
            JetActionMessage,
            JetButton,
            LargeFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            VueEditor
        },
        props: ['data'],
        
       data : function() { 
            
           
            return { 
            form: this.$inertia.form({
                    '_method': 'PUT',
                    id: 1,
                    title: '',
                    content: '', 
                }, { 
                    resetOnSuccess: false,
                     
                }),
            }
        },

        methods: {
 
            submit: function() {
                console.log(this.form)
                
                
               // this.form = Object.assign({}, this.data);
                //this.form.processing = true;
                
                this.form.post(route('pages.update',1), {
                    preserveScroll: true
                })

                
            }
        }
    }
</script>
