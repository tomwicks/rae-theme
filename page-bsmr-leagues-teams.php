<?php/*** Template Name: BSMR - leagues teams */?>
<?php get_header(); ?>
<?php include("bsmr-header.php"); ?>
    <nav class="bsmr-nav">
        <div class="container">
          <ul>
             <li><a href="<?php echo site_url(); ?>/bsmr/bsmr-leagues" class="bsmr-menu-btn">Summary</a></li>
            <li><a href="<?php echo site_url(); ?>/bsmr/team-league" class="bsmr-menu-btn active">Team League</a></li>
            <li><a href="<?php echo site_url(); ?>/bsmr/player-league" class="bsmr-menu-btn">Player League</a></li>
          </ul>
        </div>
      </nav>
      <article id="bsmr-main" class="bsmr-main-section">
        <section class="league-table bsmr-teams">
          <div class="container">
            <h4 class="teams">Top Teams By Square Mile</h4>
            <a data-league="team-distance"  title="TOP TEAMS BY DISTANCE" data-team="teams" class="link-btn-one bsmr-league-switch">Distance League</a>
            <a data-league="team-square-mile" title="TOP TEAMS BY SQUARE MILE" data-team="teams" class="link-btn-one bsmr-league-switch active">Square Mile League</a>
          </div>

          <div class="container">
            <div class="league-table-container team-square-mile active">
              <table class="league-table">
                <tr>
                  <th></th>
                  <th>Team</th>
                  <th>Distance</th> 
                  <th>Empire</th>
                </tr>
               <?php
                if (($handle = fopen("https://dataclips.heroku.com/fwogmzofmyiemgxugglhljgmoams-bsmr-user-stats.csv", "r")) !== FALSE) {

                    $firstLine = true;
                    $teamScores = array();

                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        if($firstLine) {
                          $firstLine = false;
                        }

                        else {
                          $team = $teams[$data[0]]; // The player's team
                          $teamScores[$team]['name']       =   $team;
                          $teamScores[$team]['distance']   =   $teamScores[$team]['distance']   +   $data[1];
                          $teamScores[$team]['empire']     =   $teamScores[$team]['empire']     +   $data[2];
                        }
                    }

                    // Sort the scores
                    function sortByEmpire($a, $b) {
                      $a = $a['empire'];
                      $b = $b['empire'];
                      if ($a == $b) {
                        return 0;
                      }
                      return ($a > $b) ? -1 : 1;
                    }
                    usort($teamScores, 'sortByEmpire');

                    
                    // Loop through the scores array and output
                    $row = 1;
                    foreach ($teamScores as $key => $team) {
                        echo("<tr class=\"row-" . ($row) . "\">");
                        echo('<td class="medal">' . ($row) .  ' </td>');
                        echo('<td>' . $team['name'] . '</td>');
                        echo('<td>' . round($team['distance'] / 1000) . ' meters </td>');
                        echo('<td>' . round((int) $team['empire'] * 0.0009) . ' sq miles </td>');
                        echo("</tr>");
                        $row++;
                    }
                    fclose($handle);
                } ?>
              </table>
            </div>
            <div class="league-table-container team-distance">
              <table class="league-table">
                <tr>
                  <th></th>
                  <th>Team</th> 
                  <th>Empire</th>
                  <th>Distance</th>
                </tr>
               <?php

                if (($handle = fopen("https://dataclips.heroku.com/fwogmzofmyiemgxugglhljgmoams-bsmr-user-stats.csv", "r")) !== FALSE) {

                    $firstLine = true;
                    $teamScores = array();

                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        if($firstLine) {
                          $firstLine = false;
                        }

                        else {
                          $team = $teams[$data[0]]; // The player's team
                          $teamScores[$team]['name']       =   $team;
                          $teamScores[$team]['distance']   =   $teamScores[$team]['distance']   +   $data[1];
                          $teamScores[$team]['empire']     =   $teamScores[$team]['empire']     +   $data[2];
                        }
                    }

                    // Sort the array by Distance
                    function sortByDistance($a, $b) {
                      $a = $a['distance'];
                      $b = $b['distance'];
                      if ($a == $b) {
                        return 0;
                      }
                      return ($a > $b) ? -1 : 1;
                    }
                    usort($teamScores, 'sortByDistance');

                    // Loop through the scores array and output
                    $row = 1;
                    foreach ($teamScores as $key => $team) {
                        echo("<tr class=\"row-" . ($row) . "\">");
                        echo('<td class="medal">' . ($row) .  ' </td>');
                        echo('<td>' . $team['name'] . '</td>');
                        echo('<td>' . round($team['empire'] * 0.0009) . ' sq miles </td>');
                        echo('<td>' . round($team['distance'] / 1000) . ' meters </td>');
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
    
