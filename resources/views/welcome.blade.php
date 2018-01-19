<!doctype html>
<html lang="en">
<head>
 <!-- META -->
 <meta charset="UTF-8">
 <meta name="author" content="Ahimbisibwe Roland" />
 <meta name="description" content="The Lawma web portal">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>Lawma</title>


 <!-- FAVICON -->
 <link rel="icon" href="images/favicon/favicon.png">

 <!-- STYLE -->
 <!-- Styles -->
 <link href="{{asset('css/main.css') }}" rel="stylesheet">

         <!--[if lt IE 9]>
             <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
             <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
             <![endif]-->
           </head>
           <body>
     

             <div class="wrapper">
               <!-- START HEADER TOP SECTION -->
               @include('main.pages.topHeader')
               @include("main.layouts.nav")
               @include('main.pages.carousel')
               @include("main.pages.aboutUs")
               @include("main.pages.whyUs")
               @include("main.pages.services")
               @include("main.pages.portfolio")
               @include("main.pages.howWeWork")
               @include("main.pages.recentWork")
               @include('main.pages.pricing')
               @include('main.pages.team')
               @include('main.pages.facts')
               {{-- @include('main.pages.clients') --}}
               @include('main.pages.blog')

               @include("main.pages.contactUs")
               @include('main.pages.footer')

             </div><!-- END OF /. WRAPPER -->
             <script src="{{asset('js/main.js') }}"></script>
           </body>
           </html>
