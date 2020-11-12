@extends('layouts.main-template')

@section('page_meta')

<title>{{$page->meta_title_1}} </title>

<meta name="description" content="{{$page->meta_description_1}}" />
@if ($page->no_index_1)
<meta NAME="robots" content="noindex">
@endif
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" media="screen" href="css/colourtag-page0.css"  />
   
 

    <div class="flex h-screen bg-cover" style="background-image:url(https://cdainterview.com/resources/cda-interview-guide.jpg)">
        <div class="m-auto">
        <div id="extraContainer9">
            <div id="myExtraContent9">    {{$page->title}} </div>
         </div>
         
        </div>
      </div>


 

 


    <div id="container" class="font-sans   ">
        <div id="extraContainer7"></div>
        <div id="extraContainer8"></div>

        <section>

            <div id="padding">

                <!-- Stacks v1198 --><div id='stacks_out_7815_page0' class='stacks_top'><div id='stacks_in_7815_page0' class=''><div id='stacks_out_7822_page0' class='stacks_out'>
                    <div id='stacks_in_7822_page0' class='stacks_in com_joeworkman_stacks_justifytext_stack'><!-- Justify Text v1.0.7 Copyright @2010-2012 Joe Workman -->
                                
                                    
                                
                               
                                {!!$page->content!!}

                            </div></div></div></div>



                <!-- End of Stacks Content -->


            </div>

        </section>
        <div id="asidewrap">
            <aside>
                <div id="sidecontent">
                    <div id="sideTitle"></div>
                    <a class= "social" href= "https://www.facebook.com/bemoacademicconsulting">F</a>
                    <a class= "social" href= "https://twitter.com/BeMo_AC">L</a>

                </div>
            </aside>
        </div>
        <div class="clear"></div>

        <div id="ecwrap"></div>
        <div id="ec2wrap">	<div id="extraContainer2"></div></div>
        <div id="ec3wrap">	<div id="extraContainer3"></div></div>
        <div id="ec4wrap">	<div id="extraContainer4"></div></div>
        <div id="ec5wrap">	<div id="extraContainer5"></div></div>
        <div id="ec6wrap">	<div id="extraContainer6"></div></div>

        <div id="extraContainer10"></div></div>
@endsection