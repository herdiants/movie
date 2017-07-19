<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
     <section class="content">
          <!-- post -->
          <div class="post">
            <!-- post-inner -->
            <div class="post-inner">
              <header>
                <h2>~ Top Rated Movies ~</h2> </header>
    <hr>
    <ul>
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>
            </div>
            <!-- post-inner -->
          </div>
         
           </div>
          <!-- end of post -->
         </section>
        <!-- end of content -->

