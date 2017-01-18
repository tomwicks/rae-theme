<?php/*** Template Name: Voting */?>
<?php get_header(); ?>
      <article class="territory-voting">
      	<div id="update-div">
      	<?php 	
      		global $wpdb;

			$sqlregion = 'SELECT region, COUNT(*) as total FROM wp_territory_voting GROUP BY region';
			$sqltotal = "SELECT region, COUNT(*) as mySum FROM wp_territory_voting";

			$result = $wpdb->get_results($sqlregion) or die(mysql_error());
			$resulttotal = $wpdb->get_results($sqltotal) or die(mysql_error());

			foreach	( $resulttotal as $row ) {
				$totalentries = $row->mySum;
			}

			foreach( $result as $row ) {

				$region = $row->region . ' ';
				$total = $row->total . ' ';
				$percentage = ($total / $totalentries ) * 100 . '%';
				$percentagerounded = round($percentage, 1) . '% ';

				
			   	echo $region;
			   	echo $total;
			   	echo $percentagerounded;

			}
      	?>
      	</div>
      	<h1>Europe: <?php echo $total ?></h1>
        <form id="rae-vote" action="<?php echo get_site_url(); ?>/wp-content/plugins/rae-voting/vote-form-submit.php" method="post">
        	<label>First Name</label>
        	<?php
			if(isset($_GET['refer'])){ //Checks for refer code
				?><input type="hidden" value="<?php echo $_GET['refer'];?>" id="refer" name="refer">
			<?php
				}
			?>
        	<input name="firstname" id="firstName" type="text">
        	<label>Last Name</label>
        	<input name="lastname" id="lastName" type="text">
        	<label>email</label>
        	<input name="email" id="email" type="text">
        	<label>region</label>
        	<select name="region" id="region">
			  <option selected value="europe">Europe</option>
			  <option value="usa">United States</option>
			  <option value="rest_of_world">Rest of World</option>
			</select>
			<label>Country</label>
        	<select name="country" id="country">
			  <option selected value="germany">Germany</option>
			  <option value="france">France</option>
			  <option value="spain">Spain</option>
			</select>
			<input type="submit" 
      name="submit" value="Sent">
        </form>
      </article>
    </main>
<?php get_footer(); ?>
    
