
    <?php
    /* show link to shortlist page, unless this page is itself the shortlist page.  Show back button if the referrer isn't the root on my laptop */

    $previouspage = basename($_SERVER['HTTP_REFERER']);
    $isTouch = isset($previouspage);
        if ($previouspage != "tourtuss.local" AND $previouspage != "www.tourtuss-demo.co.uk" AND $isTouch != false) {
    ?>
   
    <div class="backLink">
        <i class="fa fa-chevron-left" onclick="goBack()"></i>
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
    </div>

    <?php
    } 
    ?>

    <div class="searchLink">


    


    <?php
    /* show link to shortlist page, unless this page is itself the shortlist page */

    $thispage = basename($_SERVER['SCRIPT_NAME']);
        if ($thispage != "maybes.php") {
    ?>
    <a href="maybes.php"><i class="fa fa-lightbulb-o"></i></a>
    
    <?php
    } 
    ?>

    </div>





