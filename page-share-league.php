<?php /*** Template Name: Share League */ ?>
<?php include('slim-header.php'); ?>
	<?php
  		global $wpdb;
		
		$query_ref_id = "SELECT ref_id, COUNT(*) as total FROM wp_territory_voting WHERE ref_id IS NOT NULL GROUP BY ref_id ORDER BY COUNT(*) DESC limit 10 ";
		$result_ref_id = $wpdb->get_results($query_ref_id) or die(mysql_error());

		foreach	( $result_ref_id as $row ) {
			$id = $row->ref_id;
			settype($id, "integer");
			echo 'referred=' . $row->total;

			$name_from_id = "SELECT * FROM wp_territory_voting WHERE id='$id'";
			$result_name = $wpdb->get_results($name_from_id);

			foreach ( $result_name as $doo ) {	
				echo $doo->first_name . ' ';
				echo $doo->last_name . ' ';
				echo $doo->email . '</br>';
			}
		}

      	?>
      <article class="territory-voting">
      	<header>
      		<div class="container">
  			<h1>Run An Empire</h1>    		
  			<nav>
  				<ul>
  					<li><a class="about-rae-link" href="">About Run An Empire</a></li>
  					<li><a class="about-vote-link" href="">About the vote</a></li>
  					<li class="twitter"><a target="_blank" href="https://twitter.com/runanempire"></a></li>
  					<li class="facebook"><a target="_blank" href="https://www.facebook.com/RunAnEmpire/"></a></li>
  				</ul>
  			</nav>
  			</div>
      	</header>
      	
      	<section class="share-league">

      	</section>
      	<section class="form">
      			<div class="form-container about-rae">
      			<div class="videoWrapper">
      			<iframe width="560" height="315" src=" 
https://www.youtube.com/embed/vwq9u1JjX0c?" frameborder="0" 
allowfullscreen></iframe>
					</div>
      				<div class="form-body">
      					<h4>Run An Empire</h4>
      					<h2>A Real World Strategy Running Game.</h2>
      					<p class="large">Race against others to control the most territory in your local environment.</p>
      					<ul>
	      					<li><a class="button" href="">View Site</a></li>
	      					<li class="twitter"><a target="_blank" href="https://twitter.com/runanempire"></a></li>
	  						<li class="facebook"><a target="_blank" href="https://www.facebook.com/RunAnEmpire/"></a></li>
  						</ul>
      				</div>
      			</div>
      			<div class="form-container about-vote">
      				<div class="form-body">
      					<h4>Run An Empire</h4>
      					<p class="large">From 6th February 2017, we are opening the floor to you to help us decide where to launch Run an Empire next.</p>
      					<p>Vote for your chosen area (you don’t have to live there) by clicking the vote button and filling out the form. </p>
      					<p>We’ll ask you to specify a country, but the vote counts for the overall area.This page shows how each area is stacking up. At the end of the competition, we’ll announce the winner and let you know what’s to come.</p>
      				</div>
      			</div>
      			<div class="form-container terms-conditions">
      				<div class="form-body">
      					<h4>Terms &amp; Conditions</h4>
      					<h5>Android Development</h5>
      					<p>This competition is to determine where we will launch next for both iOS and Android. However, we can’t guarantee that these will happen at the same time – while we are working towards completing an Android version for Spring 2017, failing this we will launch only on iOS. Don’t worry Android friends, your vote absolutely still counts – the winning area will be the first location to play on Android once it’s ready.</p>
      					<h5>Global Release</h5>
      					<p>We’ll ask you to specify a country, but the vote counts for the overall area.This page shows how each area is stacking up. At the end of the competition, we’ll announce the winner and let you know what’s to come.</p>
      				</div>
      			</div>
      	</section>
      	<section class="vote-footer">
      		<div class="container">
      			<a class="terms-link">Terms &amp; Conditions</a>
      		</div>
      	</section>
      </article>
    </main>
<?php include('slim-footer.php'); ?>
    
