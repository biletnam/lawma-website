let mix = require('laravel-mix');




mix.scripts([
       "resources/assets/js/main/vendor/jquery-1.11.2.min.js",
       //bootstrap nav bar and collapse fro panels
      "resources/assets/main/bootstrap/js/bootstrap.js",
       "resources/assets/js/main/jquery.appear.js",
       "resources/assets/js/main/waypoints.min.js",
       "resources/assets/js/main/jquery.counterup.min.js",
       "resources/assets/js/main/isotope.pkgd.min.js",
       "resources/assets/js/main/owl.carousel.min.js",

       "resources/assets/js/main/jquery.prettyPhoto.js",
       "resources/assets/js/main/wow.min.js",
       "resources/assets/js/main/custom.js",

    ],"public/js/main.js");
  mix.sass("resources/assets/sass/main.scss","public/css");
