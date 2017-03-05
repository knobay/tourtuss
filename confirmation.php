<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

 
    <section data-role="page" id="confirmation">
        <header data-role="header" data-position="fixed" data-theme="a">

            <h1>
              <i class="fa fa-tick"></i> Confirmation        
            </h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">

<h2>Your tour is confirmed</h2>
<p>You’re going to the Colonial History Walking Tour
    <br>on...<br>17 February 2017 at 13:00-14:00.</p>
<p>
  <img class="img-circle" src="./images/santiago.jpg">
</p>
<p>Meet at   <a href="#citymap3" data-rel="popup" data-position-to="window"  data-transition="pop">
        <i class="fa fa-map-marker"></i> San Cristóbal 460<br>Recoleta<br>Región Metropolitana<br>Chile
        </a>
 


     <div data-role="popup" id="citymap3" data-theme="a" class="ui-corner-all">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.0917488473656!2d-70.64453768480145!3d-33.42085228078241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5eb02e7ab69%3A0xac01fedfc8bee8ff!2sSan+Crist%C3%B3bal+460%2C+Recoleta%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1sen!2suk!4v1488590931531" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

<figure>
    <img src="images/lisa.png" class="img-circle">
    <figcaption>Lisa Sanchez Garcia</figcaption>
</figure>

<p>Lisa Sanchez Garcia is your guide.</p>
<a href="#messageGuide" class="ui-btn" data-rel="popup" data-position-to="window"  data-transition="pop"><i class="fa fa-envelope"></i> Message guide</a>

  <div data-role="popup" id="messageGuide" data-theme="a" class="ui-corner-all">
          <form>
        <div style="padding:10px 20px;">
            <h3>Message Lisa</h3>
    <textarea name="textarea-1" id="textarea-1"></textarea>
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Send</button>
        </div>
    </form>
    </div>
<p><i class="fa fa-phone"></i> Tel no. +56 76786</p>
<p>Operator: Maria Sanchez Tours, Pallermo</p>

         </article>

        <?php include ('footer.php'); ?>

    </section>


</body>
</html> 