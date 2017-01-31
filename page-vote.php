<?php/*** Template Name: Voting */?>
<?php include('slim-header.php'); ?>
      <article class="territory-voting">
      	<header>
      		<div class="container">
  			<h1>Run An Empire</h1>    		
  			<nav>
  				<ul>
  					<li><a class="about-rae" href="">About Run An Empire</a></li>
  					<li><a class="about-vote" href="">About the vote</a></li>
  					<li class="twitter"><a target="_blank" href="https://twitter.com/runanempire"></a></li>
  					<li class="facebook"><a target="_blank" href="https://www.facebook.com/RunAnEmpire/"></a></li>
  				</ul>
  			</nav>
  			</div>
      	</header>
      	<section class="description">
      		<div class="container">
  				<div class="col-4">
	      			<h2>Where should Run An </br> Empire Launch Next</h2>
	      			<p>Vote for your region as the next territory where <a class="about-rae">Run An Empire</a> is available to play.</p>
  				</div>
      		</div>
      	</section>
      	<section class="article-map">
      		<div class="world-container">
      			<div class="world-inner-container">
	      			<div class="country vote-btn north-america" id="north-america" name="North America">
	      				<img src="<?php echo get_bloginfo('template_url') ?>/images/vote/north-america.svg">
	      			</div>
	      			<div class="country vote-btn south-america" id="south-america" name="South America">
	      				<img src="<?php echo get_bloginfo('template_url') ?>/images/vote/south-america.svg">
	      			</div>
	      			<div class="country vote-btn europe" id="europe" name="Europe">
	      				<img src="<?php echo get_bloginfo('template_url') ?>/images/vote/europe.svg">
	      			</div>
	      			<div class="country vote-btn asia-oceania" id="asia-oceania" name="Asia &amp; Oceania">
	      				<img src="<?php echo get_bloginfo('template_url') ?>/images/vote/asia-oceania.svg">
	      			</div>
	      			<div class="country vote-btn africa" name="Africa" id="africa">
	      				<img src="<?php echo get_bloginfo('template_url') ?>/images/vote/africa.svg">
	      			</div>
	      		</div>
      		</div>
      	</section>
      	<section class="form">
      		<div class="form-container">
      				<div class="form-header">
      					<h3></h3>
      				</div>
			        <form id="rae-vote" action="<?php echo get_site_url(); ?>/wp-content/plugins/rae-voting/vote-form-submit.php" method="post">
			        	<?php
						if(isset($_GET['refer'])){ //Checks for refer code
							?><input type="hidden" value="<?php echo $_GET['refer'];?>" id="refer" name="refer">
						<?php
							}
						?>
						<label>First Name</label>
			        	<input name="firstname" id="firstName" type="text">
			        	<label>Last Name</label>
			        	<input name="lastname" id="lastName" type="text">
			        	<label>Email</label>
			        	<input name="email" id="email" type="text">
			        	<label>Continent</label>
			        	<select name="region" id="region">
			        	<option disabled selected value>Select an region...</option>
						  <option value="north-america">North America</option>
						  <option value="south-america">South America</option>
						  <option value="europe">Europe</option>
						  <option value="asia-oceania">Asia &amp; Oceania</option>
						  <option value="africa">Africa</option>
						</select>
						<select name="device" id="device">
							<option disabled selected value>Select a device...</option>
						  <option value="Android">Android</option>
						  <option value="iOS">iOS</option>
						</select>
						<label>Country</label>
			        	<select name="country" id="country">
			        	  <option disabled selected value>Select an option...</option>
						  
						</select>
						<input type="submit" 
			      name="submit" value="Sent">
			        </form>
      			</div>
      	</section>
      	<div id="update-div">
      	<?php 	
      		global $wpdb;

			$sqlregion = 'SELECT region, COUNT(*) as total FROM wp_territory_voting GROUP BY region ORDER BY COUNT(*) DESC';
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
      </article>
    </main>
<?php include('slim-footer.php'); ?>
    
