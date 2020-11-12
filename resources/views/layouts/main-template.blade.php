
<!doctype html>
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="online" content="true">
    <meta name="viewport" content="initial-scale=1 maximum-scale=1"/>


    @yield('page_meta')
 
    @if ($page->ga)
    {!!$page->ga!!}
@endif
@if ($page->fbpixel)
{!!$page->fbpixel!!}
@endif
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>
    <![endif]-->
 

</head>

<body>


<div id="wrapper">


    <div id="hwrap">
        <header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <div id="headwrap">

                <div id="titlelogo">
                    <a href="/">
                        <div id="logo"><img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo"/></div>
                        </a> 
                </div>


                <div id="mwrap">
                    <div id="lt"></div>
                    <div id="lm"></div>
                    <div id="lb"></div>
                </div>


                <div id="nwrap">
                    <div id="menuBtn"></div>
                    <nav><ul class="navigation"><li ><a href="/" rel="self"  >Main</a></li><li><a href="contact-us" rel="self">Contact Us</a></li></ul></nav>
                </div>
            </div>
        </header>

        @yield('content')


    <footer>

        <div id="footer">&copy;2013-2016 BeMo Academic Consulting Inc. All rights reserved. <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html"target="_blank"><span style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a> <a href="#" id="rw_email_contact"><span style="text-decoration:underline;">Contact Us</span></a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":in";var _rwObsfuscatedHref3 = "fo@";var _rwObsfuscatedHref4 = "bem";var _rwObsfuscatedHref5 = "oac";var _rwObsfuscatedHref6 = "ade";var _rwObsfuscatedHref7 = "mic";var _rwObsfuscatedHref8 = "con";var _rwObsfuscatedHref9 = "sul";var _rwObsfuscatedHref10 = "tin";var _rwObsfuscatedHref11 = "g.c";var _rwObsfuscatedHref12 = "om";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10+_rwObsfuscatedHref11+_rwObsfuscatedHref12; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></div>

        <div id="socialicons">
            <div id="socialicons1"></div>
        </div>

    </footer>


</div>

<a href="#" class="scrollup">Scroll</a>



</div>

</body>
</html>
