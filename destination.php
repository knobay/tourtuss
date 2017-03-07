   
   <!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>
   
    <section data-role="page" id="destination">
        <header data-role="header" data-position="fixed" data-theme="a">
                <h1>
                <a href="#destinationTmp">
                  <span class="flag-icon flag-icon-squared flag-icon-cl"></span> Santiago 
                  <div class="homeReveal">
                    <i class="fa fa-chevron-down"></i>
                </div>
                </a>
                </h1>
                

                <div class="date"><?php $today=date("j F Y");echo $today;?></div>



        </header>

        <article role="main" class="ui-content" data-theme="a">

        <div class="destinationStars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>

        <div class="hour"><?php $today=date("G");echo $today;?>:00</div>

        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-camera"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-mortar-board"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-coffee"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-futbol-o"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paw"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>



        <div class="hour"><?php $today=date("G", strtotime('+1 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-coffee"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-soccer"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paw"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

                 
        <div class="hour"><?php $today=date("G", strtotime('+2 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                    <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                    <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        



        <div class="hour"><?php $today=date("G", strtotime('+3 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        

        <div class="hour"><?php $today=date("G", strtotime('+4 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        
        <div class="hour"><?php $today=date("G", strtotime('+5 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>



        <div class="hour"><?php $today=date("G", strtotime('+6 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        


        <div class="hour"><?php $today=date("G", strtotime('+7 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        

        <div class="hour"><?php $today=date("G", strtotime('+8 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        

        <div class="hour"><?php $today=date("G", strtotime('+9 hours'));echo $today;?>:00</div>
        <div class="x-scroll-outer">
            <div class="leftFader"></div>
            <div class="rightFader"></div>  
            <div class="x-scroll-wrapper">
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a></span>
                <span class="homeExperience"><a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a></span>
            </div>
        </div>

        </article>

        <?php include ('footer.php'); ?>




        </section>

    <section data-role="page" id="destinationTmp">

        <header data-role="header" data-position="fixed" data-theme="a">
                <h1>
                <a href="#destination">
                  <span class="flag-icon flag-icon-squared flag-icon-cl"></span> Santiago 
                  <div class="homeReveal">
                    <i class="fa fa-chevron-up"></i>
                </div>
                </a>
                </h1>



        </header>

        <article role="main" class="ui-content" data-theme="a">

 
    <div id="destinationPanel">

        <div id="popupcitysearch">
                <div >
                        <input type="text" id="searchField" placeholder="Type destination">
                        <ul id="suggestions" data-role="listview" data-inset="true"></ul>
                </div>

        <div  id="popupDateChange">
            <input type="text" class="date-input-inline" data-inline="true" data-role="date">
        </div>


        </div>






    </div><!-- /panel -->

</article>

        <script>

		$("#destination").bind("pageshow", function(e) {

			var autocompleteData = $.parseJSON('[{"value":"Bath","label":"Bath, England"},{"value":"Bristol","label":"Bristol, England"},{"value":"Cardiff","label":"Cardiff, Wales"},{"value":"Edinburgh","label":"Edinburgh, Scotland"},{"value":"London","label":"London, England"},{"value":"New York","label":"New York, USA"},{"value":"Paris","label":"Paris, France"},{"value":"Santiago","label":"Santiago, Chile"}]');

			$("#searchField").autocomplete({
				target: $('#suggestions'),
				source: autocompleteData,
				callback: function(e) {
					var $a = $(e.currentTarget);
					$('#searchField').val( $a.data('autocomplete').value );
					$("#searchField").autocomplete('clear');


				},
				link: 'target.html?term=',
				minLength: 1
			});
		});

    function showPanel(){

$('#destinationPanel').show();
return false;

    }

        function hidePanel(){

$('#destinationPanel').hide();
return false;
    }
	</script>

    </section>

</body>
</html>