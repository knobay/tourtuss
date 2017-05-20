
<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

  
    <section data-role="page" id="feed">
        <header data-role="header" data-position="fixed" data-theme="a">
            <?php include ('hamburgerMenu.php'); ?>
            <h1>
                Notifications      
            </h1>
        </header>

       <article role="main" class="ui-content"  data-theme="a">

        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/will.png" class="miniProfile"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>Will wants to follow you</h3><p>32 mins</p></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/sam.png" class="miniProfile"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>Victor likes your picture</h3><p>Bella!</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-body ui-body-a ui-corner-all">
            <div class="feedGrid">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    <div class="feedColumn"><img src="./images/tourtuss.svg" class="miniTourtuss"></div>
                </div>
                <div class="ui-block-b">
                    <div class="feedColumn description"><h3>5 people you've travelled with are in town</h3><p>Carly, Gemma, Pete and Arturo arrived in Santiago today!</p></div>
                    </div>
                </div>
            </div>
        </div>

         </article>
        <?php include ('footer.php'); ?>
    </section>


</body>
</html>  