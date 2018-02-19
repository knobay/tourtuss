 <!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

 
    <section data-role="page" id="profile">
        <header data-role="header" data-position="fixed" data-theme="a">    
           <?php include ('hamburgerMenu.php'); ?>         
            <h1><span class="flag-icon flag-icon-squared flag-icon-it"></span> Velentina</h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">

            <div class="ui-body ui-body-a ui-corner-all">

                            <div class="profileSettings" onClick="alert('To be completed - edit settings and profile')"><i class="fa fa-gear"></i></div>

<p>
  <img src="images/lizzie.png" class="img-circle">
</p>


<p>

</p>           


<p>
                <i class="fa fa-smile-o fa-2x"></i><span class="tourCount">325</span>
                <i class="fa fa-meh-o fa-2x"></i><span class="tourCount">116</span>
                <i class="fa fa-frown-o fa-2x"></i><span class="tourCount">10</span>

</p>
<p>


                            <i class="fa fa-boat"></i><span class="tourCount">23</span>
                            <i class="fa fa-beer"></i><span class="tourCount">15</span>
                            <i class="fa fa-camera"></i><span class="tourCount">15</span>
                            <i class="fa fa-bicycle"></i><span class="tourCount">1</span>
                            <i class="fa fa-bank"></i><span class="tourCount">1</span>
                            <i class="fa fa-paint-brush"></i><span class="tourCount">1</span>
                            <i class="fa fa-music"></i><span class="tourCount">5</span>

</p>

<p>
<span class="flag-icon flag-icon-squared flag-icon-es"></span><span class="tourCount">17</span>
<span class="flag-icon flag-icon-squared flag-icon-br"></span><span class="tourCount">12</span>
<span class="flag-icon flag-icon-squared flag-icon-au"></span><span class="tourCount">3</span>
<span class="flag-icon flag-icon-squared flag-icon-no"></span><span class="tourCount">2</span>
<span class="flag-icon flag-icon-squared flag-icon-cz"></span><span class="tourCount">2</span>
<span class="flag-icon flag-icon-squared flag-icon-dk"></span><span class="tourCount">1</span>
<span class="flag-icon flag-icon-squared flag-icon-ie "></span><span class="tourCount">1</span>
</p>

<p>
<div class="languagesGrid">   
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <div class="languageColumn">Italian</div>
                </div>
                <div class="ui-block-b">
                    <div class="languageColumn score"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></div>
                </div>
                <div class="ui-block-a">
                    <div class="languageColumn">German</div>
                </div>
                <div class="ui-block-b">
                    <div class="languageColumn score"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></div>
                </div>
                <div class="ui-block-a">
                    <div class="languageColumn">French</div>
                </div>
                <div class="ui-block-b">
                    <div class="languageColumn score"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                </div>
                <div class="ui-block-a">
                    <div class="languageColumn">Spanish</div>
                </div>
                <div class="ui-block-b">
                    <div class="languageColumn score"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                </div>
                <div class="ui-block-a">
                    <div class="languageColumn">English</div>
                </div>
                <div class="ui-block-b">
                    <div class="languageColumn score"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle-o"></i></div>
                </div>
            </div>
</div>
</p>


    
<cite>
                    I'm a music lover and a freestyle skiing freak. Vale Vale Vale!
</cite>
    
 <p>

                <a href="#"><i class="fa fa-snapchat-square  fa-2x" onClick="alert('would open snapchat profile if provided')"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x" onClick="alert('would open twitter profile if provided')"></i></a>
                <a href="#"><i class="fa fa-facebook fa-2x" onClick="alert('would open facebook profile if provided')"></i></a>
                <a href="#"><i class="fa fa-link fa-2x" onClick="alert('would open personal weblink if provided')"></i></a>
</p>

        <a onClick="alert('To be completed - becoming a seller')">Become a seller</a>

</div>


        <div class="ui-body ui-body-a ui-corner-all">
            <h2><a href="experience.php">3rd April</a></h2> 
                <figure>
                    <img src="images/mosque.jpg" class="img-circle">
                    <figcaption>Istanbul by bike</figcaption>
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