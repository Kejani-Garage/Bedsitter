<form method="get" action="<?php echo home_url() ?>">
    <input type="search" name="s" placeholder="Search Here..." value="<?php echo
        get_search_query();
    ?>">
    <input type="submit" id="search-btn" value="">
</form>