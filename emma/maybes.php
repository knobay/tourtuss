<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

 
    <section data-role="page" id="maybes">
        <header data-role="header" data-position="fixed" data-theme="a">
           
            <h1>
                 <i class="fa fa-lightbulb-o"></i> Shortlist        
            </h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">



        <div class="ui-body ui-body-a ui-corner-all">
            <div class="deleteCard"><i class="fa fa-window-close"></i></div>
                 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>

                
                <h2><a href="experience.php">Colonial history walking tour</a></h2> 
                
                <p>Maria Sanchez Tours, Recoleta
                <br>
                    <a href="#shortListCitymap" data-rel="popup" data-position-to="window"  data-transition="pop"><i class="fa fa-map-marker"></i> 4.6km</a> | $8.00 | 1 hour
                </p>
                <figure>
                    <img src="images/lisa.png" class="img-circle">
                    <figcaption>Lisa Sanchez Garcia</figcaption>
                </figure>

        </div>    

        <div class="ui-body ui-body-a ui-corner-all">
            <div class="deleteCard"><i class="fa fa-window-close"></i></div>
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                <h2><a href="experience.php">Yoga in Pucon Park</a></h2>                
                <p>Mindful Days
                <br>
                <a href="#listingcitymap" data-rel="popup" data-position-to="window"  data-transition="pop"><i class="fa fa-map-marker"></i> 6.2km</a> | $5.00 | 45 minutes
                </p>
                <figure>
                    <img src="images/niki.png" class="img-circle">
                    <figcaption>Nikita San Martin</figcaption>
                </figure>
        </div>

        <div class="ui-body ui-body-a ui-corner-all">
              <div class="deleteCard"><i class="fa fa-window-close"></i></div>
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                <h2><a href="experience.php">Discover Chardonnay</a></h2>                
                <p>Bikes and boozers
                <br>
                <a href="#listingcitymap" data-rel="popup" data-position-to="window"  data-transition="pop"><i class="fa fa-map-marker"></i> 15.5km</a> | $24.00 | 2 hours
                </p>
                <figure>
                    <img src="images/basil.png" class="img-circle">
                    <figcaption>Eduardo Jaen</figcaption>
                </figure>
        </div>


        <!-- hidden popups -->
        <div data-role="popup" id="shortListlistingcitymap" data-theme="a" class="ui-corner-all">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.0917488473656!2d-70.64453768480145!3d-33.42085228078241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5eb02e7ab69%3A0xac01fedfc8bee8ff!2sSan+Crist%C3%B3bal+460%2C+Recoleta%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1sen!2suk!4v1488590931531" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- /popups -->


         </article>

        <?php include ('footer.php'); ?>

    </section>

</body>
</html> 