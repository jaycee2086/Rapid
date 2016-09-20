add_shortcode('rpd_filter1', 'rpd_filter1');
function rpd_filter1() 
{
	?>
	<form class="Filterbar" id="rpd_filter" action="filter_test.php" method="get">
		<div class="Filter_prop_type">
			<h5><strong>Property Type</strong></h5>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="apartments" />Apartment
			<br>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="condos" />Condo
			<br>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="duplexes" />Duplex
			<br>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="houses" />House
			<br>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="rooms" />Room / Share
			<br>
			<input type="checkbox" id="" class="rpd_category" name="rpd_filter_type[]" data-value="townhomes" />Townhome
			<br>
			<input type="submit" name="submit" value="Submit"/>
			<hr class="Filter_dividers">
		</div> 
	</form>