   
   <!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>
   
    <section data-role="page" id="destination">
        <header data-role="header" data-position="fixed" data-theme="a">
            
            <h1>
               <span class="flag-icon flag-icon-squared flag-icon-cl"></span> <a href="#popupcitysearch" data-rel="popup" data-position-to="window"  data-transition="pop">Santiago</a> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </h1>

        <div data-role="popup" id="popupcitysearch" data-theme="a" class="ui-corner-all">
            <form>
                <div style="padding:10px 20px;">
                        <input type="text" id="searchField" placeholder="Destination">
                        <ul id="suggestions" data-role="listview" data-inset="true"></ul>
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check" onClick="alert('This function does not work yet)">Change</button>
                </div>
            </form>
        </div>
        <div class="date"><a href="#popupDateChange" data-rel="popup" data-position-to="window" data-transition="pop"><?php $today=date("j F Y");echo $today;?></a>
        </div>

        <div data-role="popup" id="popupDateChange" data-theme="a" class="ui-corner-all">
            <input type="text" class="date-input-inline" data-inline="true" data-role="date">
        </div>

        </header>

        <article role="main" class="ui-content" data-theme="a">

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G");echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-camera"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-mortar-board"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-coffee"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-futbol-o"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paw"></i><span class="typeCount">3</span></a>
            </div>
            
        </div>



        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+1 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-coffee"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-soccer"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paw"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        



        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+2 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        




        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+3 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        


        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+4 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        


        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+5 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>




        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+6 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        



        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+7 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-cutlery"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-beer"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-bank"></i><span class="typeCount">3</span></a>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        


        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
             <div class="hour"><?php $today=date("G", strtotime('+8 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>

        


        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <div class="hour"><?php $today=date("G", strtotime('+9 hours'));echo $today;?>:00</div>
                <a href="./listing.php"><i class="fa fa-bicycle"></i><span class="typeCount">1</span></a>
                <a href="./listing.php"><i class="fa fa-paint-brush"></i><span class="typeCount">3</span></a>
            </div>
        </div>


        


        </article>

        <?php include ('footer.php'); ?>

        </section>
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
	</script>

</body>
</html>