<?php include "header.php"; ?>
<div class="page-top" id="templatemo_contact">
        </div>
        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Our Location</h3>
                        <div class="map-holder">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.17036181550944!2d90.40020329368188!3d23.79277703906001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7117e51d389%3A0xb996263ff769f175!2sBosree%20Fashion!5e0!3m2!1sen!2sbd!4v1667147856070!5m2!1sen!2sbd" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="contact-infos">
                            <ul>
                                <li>H/92, Bit Uttam Ziaur Rahman Sarak(1st Floor ),</li>
                                <li>New Airport Road, Banani C/A, Dhaka-1213</li>
                                <li>Tel: +880-2-55020518</li>
                                <li>Hotline: +8801911492255, +8801715000728</li>
                                <li>Email: <a href="mailto:pulockptt@gmail.com">pulockptt@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="mailto:pulockptt@gmail.com" method="post" enctype="text/plain">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name">
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Your Email"> 
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Subject"> 
                                </p>
                                <p>
                                    <textarea name="message" id="message" placeholder="Message"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>




<?php include "footer.php"; ?>

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
       <!--  <script type="text/javascript">
            jQuery(function($){
                $('.first-map, .map-holder').gmap3({
                    marker:{
                        address: '23.793374, 90.400529' 
                    },
                        map:{
                        options:{
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script> -->
        <!-- templatemo 409 travel -->
    </body>
</html>