<?php
/**
 * The template for displaying comments sction
 *
 * 
 * 
 */
?>

<div id="comments">
    <p id="comments_title">-----  <?php comments_number('Keine Kommentare', '1 Kommentar', '% Kommentare'); ?>  -----</p>
    <div id="comments_container">
        <?php $stylenum=0 ?>
        <?php foreach ($comments as $comment) : ?>
            <div class="comment_container" id="comment-<?php comment_ID(); ?>" style="<?php if($stylenum % 2 ==0) : ?> border-color: #999999; <?php else: ?> border-color:#CCCCCC; <?php endif; ?>">
                <div class="comment_meta">Kommentar von <?php comment_author_link(); ?> am <?php comment_date("j.m.y"); ?> - <?php comment_time('H:i'); ?></div>
                <p> --- </p>
                <?php comment_text(); ?>

                <?php if($comment->comment_approved == '0') : ?>
                    <div id="comment_unaproved">Dein Kommentar wird überprüft und schnellstmöglich freigegeben</div>
                <?php endif; ?>
            </div>
        <?php $stylenum = $stylenum + 1; ?>
        <?php endforeach; ?>   
    </div>


    <?php comment_form(array(
        'title_reply' => 'Dein Kommentar ',
        'comment_field' => '<fieldset class="comment-form-comment"><legend>' . _x( 'Comment', 'noun' ) . 
                            '</legend><textarea id="comment" name="comment" cols="65" rows="6" aria-required="true"></textarea></fieldset><br/>'
    )); ?>

</div>