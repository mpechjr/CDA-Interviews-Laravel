<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Page
            </h2>
        </template>
        <div class="py-12">
           
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="  overflow-hidden  ">    
                         
                    <page-list :data="$page"/>
            </div>
          </div>
 <jet-section-border />
 
        
        </div>
 <div class="py-12">
    
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden">         
                     
                    <page-meta :data="$page"/>
            </div>
          </div>
 </div>

  <div class="py-12">
    
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden">         
                     
                    <page-social-meta :data="$page"/>
            </div>
          </div>
 </div>
    </app-layout>
</template>
<script>
    import AppLayout from '@/Layouts/AppLayout'  
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import PageList from './PageList'
    import PageMeta from './PageMeta'
    import PageSocialMeta from './PageSocialMeta.vue'
    

    export default {
         props: ['data'],
        components: {
            AppLayout,  
            JetSectionBorder,
            PageList,
            PageMeta,
            PageSocialMeta,
        },
     
     
    }
</script>