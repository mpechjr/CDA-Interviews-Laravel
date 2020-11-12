<template>
    <large-form-section @submitted="submit">
        <template #title>
            Edit Page Meta
        </template>
    

        <template #description>
            
        </template>

        <template #form>
   
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="meta_title_1" value="Home Meta Title" />
                <jet-input id="meta_title_1" type="text" class="mt-1 block w-full" v-model="form.meta_title_1" ref="meta_title_1"   />
           
            </div>
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="meta_description_1" value="Home Meta Description" />
                <jet-input id="meta_description_1" type="text" class="mt-1 block w-full" v-model="form.meta_description_1" ref="meta_description_1"   />
           
            </div>

             <div class="col-span-6 sm:col-span-4">
                <jet-label for="no_index_1" value="Home No Index " />
                <input type="checkbox" value=1  v-model="form.no_index_1" ref="no_index_1">
           
                 
            </div>


            <div class="col-span-6 sm:col-span-4">
                 <jet-label for="meta_title_2" value="Contact Us Meta Title" />
                <jet-input id="meta_title_2" type="text" class="mt-1 block w-full" v-model="form.meta_title_2" ref="meta_title_2"   />
              
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="meta_description_2" value="Contact Us Meta Description" />
                <jet-input id="meta_description_2" type="text" class="mt-1 block w-full" v-model="form.meta_description_2" ref="meta_description_2"   />
           
            </div>
             <div class="col-span-6 sm:col-span-4">
                <jet-label for="email_1" value="Contact Us email" />
                <jet-input id="email_1" type="text" class="mt-1 block w-full" v-model="form.email_1" ref="email_1"   />
           
            </div>

               <div class="col-span-6 sm:col-span-4">
                <jet-label for="no_index_2" value="Contact Us No Index " />
                <input type="checkbox" value=1  v-model="form.no_index_2" ref="no_index_2">
           
                 
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
    import JetInputCheckbox from '@/Jetstream/InputCheckbox'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'

    export default {
     mounted() {
        this.form.meta_title_1 =  this.data.data.meta_title_1;
        this.form.meta_description_1 =  this.data.data.meta_description_1;
         this.form.meta_title_2 =  this.data.data.meta_title_2;
        this.form.meta_description_2 =  this.data.data.meta_description_2;
        this.form.email_1 =  this.data.data.email_1;

        this.form.no_index_1 =  this.data.data.no_index_1 === 1 ? true : false;
         this.form.no_index_2 =  this.data.data.no_index_2 === 1 ? true : false;
        //this.form.widget_count = this.count;
    },
        components: {
            JetActionMessage,
            JetButton,
            LargeFormSection,
            JetInput,
            JetInputCheckbox,
            JetInputError,
            JetLabel,
        },
        props: ['data'],

       data() {
           
            return { 
            form: this.$inertia.form({
                    '_method': 'PUT',
                    id: 1, 
                    meta_title_1: '',
                    meta_description_1:'', 
                    meta_title_2: '',
                    meta_description_2:'', 
                    email_1:'',
                    no_index_1:0,
                    no_index_2:0,
                }, { 
                    resetOnSuccess: false,
                     
                }), 
                
            }
        },
 
        methods: {
 
            submit() {
                //this.form.processing = true;
                this.form.post(route('pages.metaupdate',1), {
                    preserveScroll: true
                })

                
            }
        }
    }
</script>
