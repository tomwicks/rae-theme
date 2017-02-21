<?php/*** Template Name: BSMR - leagues */?>
<?php get_header(); ?>
<?php include("bsmr-header.php"); ?>
      <nav class="bsmr-nav">
        <div class="container">
          <ul>
            <li><a href="<?php echo site_url(); ?>/university" class="bsmr-menu-btn active">Summary</a></li>
            <!-- <li><a href="/university/team-league" class="bsmr-menu-btn">Team League</a></li> -->
            <!-- <li><a href="/university/player-league" class="bsmr-menu-btn">Player League</a></li> -->
          </ul>
        </div>
      </nav>
      <article class="bsmr-main-section">
        <section class="bsrm-description">
          <div class="container">
            <div class="g--two--third">
              <h2>Welcome to the Run An Empire University Challenge.</h2>
              <p>Run An Empire is offering you the chance to go head to head against other Universities by competing to capture and control the most territory on your running route.</p><p>To join the Run An Empire University Challenge, start by signing up using the <a href="<?php echo site_url(); ?>/university/sign-up">form here.</a></p><p>All you have to do is use Run An Empire whilst you’re training. You can use it alongside your existing fitness app.</p>
            </div>
            <div class="g--third g--last">
              <img style="padding-top: 0" class="bsmr-image" src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/gauntlet.png">
            </div>
          </div>
        </section>
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
               <?php if (($handle = fopen("https://dataclips.heroku.com/fwogmzofmyiemgxugglhljgmoams-bsmr-user-stats.csv", "r")) !== FALSE) {

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
                        if(6 == $row) {
                              break;
                        }
                    }
                    fclose($handle);
                } ?>
              </table>
              <!-- <a href="/bsmr/team-league#bsmr-main" class="link-btn-one center active">View All</a> -->
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
                          $teamScores[$team]['empire']     =   $teamScores[$team]['empire']     +   $data[2];
                          $teamScores[$team]['distance']   =   $teamScores[$team]['distance']   +   $data[1];
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
                        if(6 == $row) {
                              break;
                        }
                    }
                    fclose($handle);

                } ?>
              </table>
              <!-- <a href="/bsmr/team-league#bsmr-main" class="link-btn-one center active">View All</a> -->
            </div>
          </div>
        </section>
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
                           if(6 == $row) {
                            break;
                          }
                       }
                       fclose($handle);
                  } ?>
              </table>
              <!-- <a href="/bsmr/player-league#bsmr-main" class="link-btn-one center active">View All</a> -->
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
                          if(6 == $row) {
                            break;
                          }
                      }
                      fclose($handle);

                  } ?>
              </table>
              <!-- <a href="/bsmr/player-league#bsmr-main" class="link-btn-one center active">View All</a> -->
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
    
