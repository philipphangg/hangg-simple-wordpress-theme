<?php
/**
 * The template for displaying the search widget
 *
 * 
 * 
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <fieldset class="screen-reader-text">
        <legend>Suchen nach</legend>
        <input type="text" value="" placeholder="Suche.." name="s" id="s" size="15" />        
        </fieldset>
        <br>
        <input type="submit" id="searchsubmit" value="suchen" />
        
    </div>
</form>