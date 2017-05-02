
<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

  
    <section data-role="page" id="feed">
        <header data-role="header" data-position="fixed" data-theme="a">
            <?php include ('hamburgerMenu.php'); ?>
            <h1>
                Feed       
            </h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">

        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/aisha.png" class="miniProfile"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>Aisha</h3><p>32 mins</p></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/will.png" class="miniProfile"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>Will</h3><p>3 hours</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/john.png" class="miniProfile"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>John N</h3><p>2 days</p></div>
                    </div>
                </div>
            </div>
        </div>

         </article>
        <?php include ('footer.php'); ?>
    </section>


</body>
</html>  