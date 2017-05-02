<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>


 
    <section data-role="page" id="bookings">
        <header data-role="header" data-position="fixed" data-theme="a">
             <?php include ('hamburgerMenu.php'); ?>
            <h1>
                <i class="fa fa-shopping-basket"></i> Bookings        
            </h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">


        <div class="ui-body ui-body-a ui-corner-all">
            <h2><a href="experience.php">3rd April</a></h2> 
                <figure>
                    <img src="images/mosque.jpg" class="img-circle">
                    <figcaption>Mosque Tour</figcaption>
                </figure>

                <p>Starts at 10am</p>
                <p>2 hour experience in Istanbul</p>
        </div>    

     
        <div class="ui-body ui-body-a ui-corner-all">
            <h2><a href="experience.php">4th-10th April</a></h2> 
                <figure>
                    <img src="images/camel.jpg" class="img-circle">
                    <figcaption>Camel trekking</figcaption>
                </figure>

                <p>Starts at 2pm</p>
                <p>7 day experience in Kayakoy</p>
        </div>    


        <div class="ui-body ui-body-a ui-corner-all">
            <h2><a href="experience.php">20th April</a></h2> 
                <figure>
                    <img src="images/dervish.jpg" class="img-circle">
                    <figcaption>Meet the Dirvishes</figcaption>
                </figure>

                <p>Starts at 1pm</p>
                <p>1 hour experience in Ankara</p>
        </div>  


         </article>

        <?php include ('footer.php'); ?>

    </section>

</body>
</html> 