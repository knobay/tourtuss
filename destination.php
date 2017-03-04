    <section data-role="page" id="destination">
        <header data-role="header" data-position="fixed" data-theme="a">
            
            <h1>
               <span class="flag-icon flag-icon-squared flag-icon-cl"></span> <a href="#popupcitysearch" data-rel="popup" data-position-to="window"  data-transition="pop">Santiago</a><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
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
        </header>

        <article role="main" class="ui-content"  data-theme="a">

        <div data-role="popup" id="popupDateChange" data-theme="a" class="ui-corner-all">
            <input type="text" class="date-input-inline" data-inline="true" data-role="date">
        </div>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <a href="#listing"><i class="fa fa-camera"></i>(1)</a>
                <a href="#listing"><i class="fa fa-cutlery"></i>(3)</a>
                <a href="#listing"><i class="fa fa-beer"></i>(1)</a>
                <a href="#listing"><i class="fa fa-bank"></i>(3)</a>
                <a href="#listing"><i class="fa fa-bicycle"></i>(1)</a>
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
            <hr></hr>
        </div>

        <span class="hour">13:00</span>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <a href="#listing"><i class="fa fa-beer"></i>(1)</a>
                <a href="#listing"><i class="fa fa-bank"></i>(3)</a>
                <a href="#listing"><i class="fa fa-bicycle"></i>(1)</a>
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
        </div>

        <hr></hr>
        <span class="hour">14:00</span>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <a href="#listing"><i class="fa fa-bicycle"></i>(1)</a>
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
        </div>

        <hr></hr>
        <span class="hour">16:00</span>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <a href="#listing"><i class="fa fa-cutlery"></i>(3)</a>
                <a href="#listing"><i class="fa fa-beer"></i>(1)</a>
                <a href="#listing"><i class="fa fa-bank"></i>(3)</a>
                <a href="#listing"><i class="fa fa-bicycle"></i>(1)</a>
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
        </div>

        <hr></hr>
        <span class="hour">17:00</span>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
        </div>

        <hr></hr>
        <span class="hour">18:00</span>

        <div class="x-scroll-outer">
            <div class="x-scroll-wrapper">

                <a href="#listing"><i class="fa fa-bicycle"></i>(1)</a>
                <a href="#listing"><i class="fa fa-paint-brush"></i>(3)</a>
            </div>
        </div>

        <hr></hr>
        <span class="hour">19:00</span>

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

