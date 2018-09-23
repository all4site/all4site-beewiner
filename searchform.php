
 <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
        <div class="box_one box">
          <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"/>
          <label for="s" class="screen-reader-text">Поиск</label>
        </div>
        <div class="box_two box">
          <input type="submit" id="searchsubmit"/>
        </div>
      </form>