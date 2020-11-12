@extends('layouts.main-template')
@section('page_meta')

<title> {{$page->meta_title_2}} </title>

<meta name="description" content="{{$page->meta_description_2}}" />

@if ($page->no_index_2)
<meta NAME="robots" content="noindex">
@endif
@endsection
@section('content')
    <link rel="stylesheet" type="text/css" media="screen" href="css/colourtag-page3.css"  />
   
    <div class="banner video_banner">
        <div  >
            <div id="">
                <img width="100%" src="https://cdainterview.com/resources/contact-us.png">
            </div>


        </div>


    </div>



    </div>


 

    <div id="container"> 

        <section>

            <div id="padding">
                <div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br /><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br /></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; "><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5acaba3aa85a7a0a8aaa4a6a4a1a0a8aca6a6aaabb6b0a9b1acaba2eba6aaa8">[email&#160;protected]</a></span></div><br />

                <form action="{{url('email/send')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <label>Name:</label> *<br />
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="" name="name" size="40"/><br /><br />

                        <label>Email Address:</label> *<br />
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="" name="email" size="40"/><br /><br />

                        <label>How can we help you?</label> *<br />
                        <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="message" rows="8" cols="38"></textarea><br /><br />

                         
                        <input type="hidden" name="form_token" value="19719802925fac665189fa0" /> 
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" name="submitButton" value="Submit" />
                    </div>
                </form>

                 
            <div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to <a href="mailto:{{$page->email_1}}"  >[email&#160;protected]</a> (copy & paste the email address)</span><span style="font-size:13px; "><br /></span></div><br />

            </div>

        </section>
  
      </div>
@endsection
