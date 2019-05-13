<?php
/**
Template Name: Search Form
**/
?>
<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="input-group mb-3">
        <input class="capture-search" type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
        <div class="input-group-append">
        <button type="submit" class="capture-email-button btn btn-secondary">
            <span class="fas fa-search"></span>Procurar
        </button>
            </div>
    </div>
</form>