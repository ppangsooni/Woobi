<!-- <p>' . $jb_row[ 'movie_code' ] .'</p>
<p>'. $jb_row[ 'movie_title' ] .'</p>
<p>' . $jb_row[ 'movie_director_code' ] . '</p>
<p>' . $jb_row[ 'rating_code' ] . '</p>
<p>' . $jb_row[ 'country' ] . '</p>
<p>' . $jb_row[ 'movie_actor_code' ] . '</p>
<p>' . $jb_row[ 'movie_genre_code' ] . '</p>
<p>' . $jb_row[ 'runtime' ] . '</p>
<p>' . $jb_row[ 'story' ] . '</p>
<img src="' . $jb_row[ 'image' ] . '"/>'; -->
<?php
    include("../lib/dbconn.php");
    $mysql1 = "SELECT * FROM movie where movie_code=1;";
    $mysql2 = "SELECT * FROM movie where movie_code=2;";
    $mysql3 = "SELECT * FROM movie where movie_code=3;";
    $mysql4 = "SELECT * FROM movie where movie_code=4;";
    $mysql5 = "SELECT * FROM movie where movie_code=5;";

    $mysql1result = mysqli_query( $conn, $mysql1 );
    $mysql2result = mysqli_query( $conn, $mysql2 );
    $mysql3result = mysqli_query( $conn, $mysql3 );
    $mysql4result = mysqli_query( $conn, $mysql4 );
    $mysql5result = mysqli_query( $conn, $mysql5 );
    
    $row1 = mysqli_fetch_array( $mysql1result );
    $row2 = mysqli_fetch_array( $mysql2result );
    $row3 = mysqli_fetch_array( $mysql3result );
    $row4 = mysqli_fetch_array( $mysql4result );
    $row5 = mysqli_fetch_array( $mysql5result );
    // while( $row1 = mysqli_fetch_array( $mysql1result ) ) {
    //     echo '
    //          src="' . $row1[ 'image' ] . '" alt="탑건_영화_포스터"/>
    //         </div>
    //         <div class="screening_movie_textWrap">
    //         <p>'. $row1[ 'movie_title' ] .'</p>
    //         </div>            
    //         ';
    // }
?>

<div class="screening_movie_container">
    <div class="screening_movie_listWrap">
        <div class="screening_movie_listBox">
            <a>
                <div class="screening_movie_imgWrap">
                    <img src="
                        <?php
                         echo $row1[ 'image' ]
                          ?>
                          " alt="탑건_영화_포스터">
                </div>
                <div class="screening_movie_textWrap">
                    <p><?php
                         echo $row1[ 'movie_title' ]
                        ?>
                    </p>
                </div>
            </a>
            <button class="screening_movie_ticketBtn" type="button">지금 예매하기</button>
        </div>
        <div class="screening_movie_listBox">
            <a>
                <div class="screening_movie_imgWrap">
                    <img src="
                        <?php
                         echo $row2[ 'image' ]
                          ?>
                          " alt="탑건_영화_포스터">
                </div>
                <div class="screening_movie_textWrap">
                    <p><?php
                         echo $row2[ 'movie_title' ]
                        ?>
                    </p>
                </div>
            </a>
            <button class="screening_movie_ticketBtn" type="button">지금 예매하기</button>
        </div>
        <div class="screening_movie_listBox">
            <a>
                <div class="screening_movie_imgWrap">
                    <img src="
                        <?php
                         echo $row3[ 'image' ]
                          ?>
                          " alt="탑건_영화_포스터">
                </div>
                <div class="screening_movie_textWrap">
                    <p><?php
                         echo $row3[ 'movie_title' ]
                        ?>
                    </p>
                </div>
            </a>
            <button class="screening_movie_ticketBtn" type="button">지금 예매하기</button>
        </div>
        <div class="screening_movie_listBox">
            <a>
                <div class="screening_movie_imgWrap">
                    <img src="
                        <?php
                         echo $row4[ 'image' ]
                          ?>
                          " alt="탑건_영화_포스터">
                </div>
                <div class="screening_movie_textWrap">
                    <p><?php
                         echo $row4[ 'movie_title' ]
                        ?>
                    </p>
                </div>
            </a>
            <button class="screening_movie_ticketBtn" type="button">지금 예매하기</button>
        </div>
        <div class="screening_movie_listBox">
            <a>
                <div class="screening_movie_imgWrap">
                    <img src="
                        <?php
                         echo $row5[ 'image' ]
                          ?>
                          " alt="탑건_영화_포스터">
                </div>
                <div class="screening_movie_textWrap">
                    <p><?php
                         echo $row5[ 'movie_title' ]
                        ?>
                    </p>
                </div>
            </a>
            <button class="screening_movie_ticketBtn" type="button">지금 예매하기</button>
        </div>

        
    </div>
  
</div>
