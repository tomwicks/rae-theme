<?php/*** Template Name: BSMR - leagues players */?>
<?php get_header(); ?>
<?php include("bsmr-header.php"); ?>
      <nav class="bsmr-nav">
        <div class="container">
          <ul>
             <li><a href="<?php echo site_url(); ?>/bsmr/bsmr-leagues" class="bsmr-menu-btn">Summary</a></li>
            <li><a href="<?php echo site_url(); ?>/bsmr/team-league" class="bsmr-menu-btn">Team League</a></li>
            <li><a href="<?php echo site_url(); ?>/bsmr/player-league" class="bsmr-menu-btn active">Player League</a></li>
          </ul>
        </div>
      </nav>
      <article id="bsmr-main" class="bsmr-main-section">
        <section class="league-table bsmr-players">
          <div class="container">
            <h4 class="players">Top Players By Square Mile</h4>
            <a data-league="player-distance" title="TOP PLAYERS BY DISTANCE" data-team="players" class="link-btn-one bsmr-league-switch">Distance League</a>
            <a data-league="player-square-mile" title="TOP PLAYERS BY SQUARE MILE" data-team="players" class="link-btn-one bsmr-league-switch active">Square Mile League</a>
          </div>
          <div class="container">
            <div class="league-table-container player-square-mile active">
              <table class="league-table">
                <tr>
                  <th></th>
                  <th>Player</th>
                  <th>Team</th> 
                  <th>Distance</th>
                  <th>Empire</th>
                </tr>
               <?php $row = 1;
                  if (($handle = fopen("https://dataclips.heroku.com/fwogmzofmyiemgxugglhljgmoams-bsmr-user-stats.csv", "r")) !== FALSE) {

                      $firstLine = true;
                       $playerScores = array();

                       while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                           if($firstLine) {
                             $firstLine = false;
                           }

                           else {
                             $player                              =   $data[0];
                             $playerScores[$player]['name']       =   $player;
                             $playerScores[$player]['team']       =   $teams[$data[0]];
                             $playerScores[$player]['distance']   =   $data[1];
                             $playerScores[$player]['empire']     =   $data[2];
                           }
                       }

                       // Sort the scores
                       usort($playerScores, 'sortByEmpire');

                       // Loop through the scores array and output
                       $row = 1;
                       foreach ($playerScores as $key => $player) {
                           echo("<tr class=\"row-" . ($row) . "\">");
                           echo('<td class="medal">' . ($row) .  ' </td>');
                           echo('<td>' . $player['name'] . '</td>');
                           echo('<td>' . $player['team'] . '</td>');
                           echo('<td>' .  round($player['distance'] / 1000) . ' meters </td>');
                           echo('<td>' .  round((int) $player['empire'] * 0.0009) . ' sq miles </td>');
                           echo("</tr>");
                           $row++;
                       }
                       fclose($handle);
                  } ?>
              </table>
            </div>
            <div class="league-table-container player-distance">
              <table class="league-table">
                <tr>
                  <th></th>
                  <th>Player</th>
                  <th>Team</th> 
                  <th>Empire</th>
                  <th>Distance</th>
                </tr>
               <?php $row = 1;
      
                $team_summaries = array();

                  if (($handle = fopen("https://dataclips.heroku.com/fwogmzofmyiemgxugglhljgmoams-bsmr-user-stats.csv", "r")) !== FALSE) {

                      $firstLine = true;
                      $playerScores = array();

                      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                          if($firstLine) {
                            $firstLine = false;
                          }

                          else {
                            $player                              =   $data[0];
                            $playerScores[$player]['name']       =   $player;
                            $playerScores[$player]['team']       =   $teams[$data[0]];
                            $playerScores[$player]['distance']   =   $data[1];
                            $playerScores[$player]['empire']     =   $data[2];
                          }
                      }

                      function sortByDistance($a, $b) {
                      $a = $a['distance'];
                      $b = $b['distance'];
                      if ($a == $b) {
                        return 0;
                      }
                      return ($a > $b) ? -1 : 1;
                      }
                      // Sort the scores
                      usort($playerScores, 'sortByDistance');

                      // Loop through the scores array and output
                      $row = 1;
                      foreach ($playerScores as $key => $player) {
                          echo("<tr class=\"row-" . ($row) . "\">");
                          echo('<td class="medal">' . ($row) .  ' </td>');
                          echo('<td>' . $player['name'] . '</td>');
                          echo('<td>' . $player['team'] . '</td>');
                          echo('<td>' . round((int) $player['empire'] * 0.0009) . ' sq miles </td>');
                          echo('<td>' . round($player['distance'] / 1000) . ' meters </td>');
                          echo("</tr>");
                          $row++;
                      }
                      fclose($handle);

                  } ?>
              </table>
            </div>
          </div>
        </section>
        <section class="mini-footer">
          <div class="container">
            <p>Run An Empire <?php echo date("Y"); ?>. All rights reserved.</p>
            <a class="bsmr-js-to-top">Go To Top</a>
          </div>
        </section>
      </article>
    </main>
<?php get_footer(); ?>
    
