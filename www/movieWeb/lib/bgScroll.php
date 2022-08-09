<!-- 연결) html (index.php / index_form.php 관련 html)
연결) css (stely_index.css / stely_index_form.css 관련 css) 
연결) js (script_index.js / script_index_form.js 관련 js)  -->

<div class="bgImg">
    <div class="bgImg_scroll">
            <!-- top_scroll_move : 이벤트 등록 -->
        <div class="bgImg_scroll_topBtn" onclick="top_scroll_move()">
            <span>Top</span>
            <div class="bgImg_scroll_t"></div>               
        </div>
        <div class="bgImg_scroll_mouse">
            <div class="bgImg_scroll_m"></div>
        </div>

            <!-- bottom_scroll_move : 이벤트 등록 -->
        <div class="bgImg_scroll_bottomBtn"  onclick="bottom_scroll_move()">
            <div class="bgImg_scroll_b"></div>
            <span>Bottom</span>
        </div>
    </div>
</div>