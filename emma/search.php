
<!doctype html>

<html lang="en">
<?php include ('head.php'); ?>
<body>

  
<!-- pop down panel -->


        <section data-role="page" id="destinationTmp">

        <header data-role="header" data-position="fixed" data-theme="a">
                <h1>
                    Search
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
<h2> People search down here too.  TBC</h2>
        </div>

    </div>

</article>

        <?php include ('footer.php'); ?>
        <script>

		$("#destination").bind("pageshow", function(e) {

			var autocompleteData = $.parseJSON('[<?php include ('./autocomplete/cities.json'); ?>]');

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


    </section>



</body>
</html>  