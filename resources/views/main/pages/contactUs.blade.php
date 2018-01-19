  <!-- START CONTACT SECTION -->
  <div class="section contact-section" id="contact">
   <div class="container">
     <div class="row">
       <div class="title-section white-title">
         <h1>GET I<span>N T</span> OUCH</h1>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="0.2s">
         <div class="contact-content left-content">
           <div class="logo-title">
           <h1>L<span>A</span>WM <span>A</span></h1>
           </div>
           <h3>We'd love To Meet You In Person Or Via The Web!</h3>
           <p>
             Just use any way that is convenient to you and we will always be available any time
           </p>
           <div class="contact-info">
             <p><b>Phone:</b>+256-751-922-222</p>
             {{-- <p><b>Main Office:</b> 123 Elm St. New York City, NY </p> --}}
             <p><b>Email:</b>info@lawma.ug</p>
           </div>
           <div class="footer-social-media">
             <ul>
               <li>
               <a href="https://web.facebook.com/LAWMA-1465525446862210/" target="blank">
               <i class="fa fa-facebook"></i>
               </a>
               </li>
               <li><a href="https://twitter.com/LAWMAUG"><i class="fa fa-twitter" target="blank"></i></a></li>
              {{--  <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
             </ul>
           </div><!-- END OF /. SOCIAL MEDIA -->
         </div>
       </div><!-- END OF / COLUMN -->
       <div class="col-md-6 wow fadeInRight animated" data-wow-delay="0.2s">
         <form id="contact-form" action="/api/contactMessage" name="contactform" method="post" class="contact-form">
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"/>
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" name="email" id="email" class="form-control" placeholder="Your Email"/>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject"/>
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number"/>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-12">
               <div class="form-group">
                 <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-12">
               <span class="pori-btn">
                 <input type="submit" class="submit-btn" id="submit" value="Send Message" />
               </span>
               {{-- <button class="pori-btn">
                 Send Message
               </button> --}}
             </div>
           </div>
         </form><!-- END OF /. FORM -->
         <div id="message"></div>
       </div><!-- END OF /. COLUMN -->
     </div><!-- END OF /. ROW -->
   </div><!-- END OF /. CONTAINER -->
 </div><!-- END OF /. CONTACT SECTION -->
