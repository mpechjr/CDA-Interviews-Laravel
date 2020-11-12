<template>
    <large-form-section @submitted="submit">
        <template #title>
            Edit Analytics 
        </template>
    

        <template #description>
           Analytics
        </template>

        <template #form>
           
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="ga" value="GA " />
                <textarea class="form-input rounded-md shadow-sm mt-1 block w-full" id="ga" v-model="form.ga" ref="ga">
                </textarea>
                 
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="fbpixel" value="FB Pixel" />
                <textarea class="form-input rounded-md shadow-sm mt-1 block w-full" id="fbpixel" v-model="form.fbpixel" ref="fbpixel">
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
    import { VueEditor } from "vue2-editor";

    export default {
     mounted() {
        this.form.ga =  this.data.data.ga;
        this.form.fbpixel =  this.data.data.fbpixel;
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
                    ga: '',
                    fbpixel: '', 
                }, { 
                    resetOnSuccess: false,
                     
                }),
            }
        },

        methods: {
 
            submit: function() { 
                
                
               // this.form = Object.assign({}, this.data);
                //this.form.processing = true;
                
                this.form.post(route('pages.socialupdate',1), {
                    preserveScroll: true
                })

                
            }
        }
    }
</script>
