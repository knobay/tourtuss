<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

    <section data-role="page" id="book">
        <header data-role="header" data-position="fixed" data-theme="a">
            <?php include ('hamburgerMenu.php'); ?>
            <h1>
                <i class="fa fa-shopping-basket"></i> Join        
            </h1>
        </header>

        <article role="main" class="ui-content"  data-theme="a">
     
                <h2>Colonial history walking tour</h2><h3>17 February 2017, 13:00</h3>
  
   <div class="ui-body ui-body-a ui-corner-all">
    <h2>Joining</h2>
    <p>
     Valentina Argento (You) <i class="fa fa-minus fa-1x fa-border pallette-gray"></i>
     </p>
     <p>
    <i class="fa fa-plus fa-1x fa-border pallette-gray"></i>
  </p>

    <form action="#">
            <p class="disclaimer">There is a large hill with 146 steps that we walk up in the park to finish at the cafe for lunch. The cafe serve meals and drinks including alcohol. People joining must be physically fit enough to walk up the steps or make their own way to the cafe. There are no vegetarian options at the cafe. 
            </p>

        <label for="consent">I understand</label>
        <input id="consent" name="consent" data-mini="true" type="checkbox">
        <a href="confirmation.php" class="ui-btn">Confirm</a>

    </form>


      
</div>



<div class="ui-body ui-body-a ui-corner-all">


<h2>Details</h2>



                <div class="detailsGrid">   
                   <div class="ui-grid-a">
                                <div class="ui-block-a">
                                    <div>Tour</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>Photographing colonial architecture, 13:00, 17 February 2017</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Guide</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>Lisa Sanchez Garcia</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Language</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>English</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Operator</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>Maria Sanchez Tours</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>When</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>13:00, 17 February 2017</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Meet</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>
                                        <a href="#bookCitymap" data-rel="popup" data-position-to="window"  data-transition="pop">
                                            <i class="fa fa-map-marker"></i> San Cristóbal 460<br>Recoleta<br>Región Metropolitana<br>Chile
                                        </a>
                                    </div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Duration</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>2 hours</div>
                                </div>
                                <div class="ui-block-a">
                                    <div>Price</div>
                                </div>
                                <div class="ui-block-b">
                                    <div>8000 pesos (€12.55) per person</div>
                                </div>
                            </div>
                </div>



  </div>

        <!-- hidden popups -->
        <div data-role="popup" id="bookCitymap" data-theme="a" class="ui-corner-all">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.0917488473656!2d-70.64453768480145!3d-33.42085228078241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5eb02e7ab69%3A0xac01fedfc8bee8ff!2sSan+Crist%C3%B3bal+460%2C+Recoleta%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1sen!2suk!4v1488590931531" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- /popups -->

</article>

        <?php include ('footer.php'); ?>

</section>


</body>
</html> 