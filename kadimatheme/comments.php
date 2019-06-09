<?php

if( post_password_required() ){
    return;
}

?>

<div id="comments">

    <?php
    if(have_comments()):
    ?>
        <h2 class="comment-title">
            <?php
                printf(
                    esc_html( _nx( 'Um comentário em &ldquo;%2$s&rdquo;', '%1$s comentários em &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title') ),
                    number_format_i18n (get_comments_number() ),
                    '<span>'.get_the_title() . '</span>'
                );
            ?>
        </h2>

        <?php //if(get_comment_pages_count()>1 && get_option('page_comments') ): ?>

            <nav id="comment-nav-bottom" class="comment-navigation" role="navigation">

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="post-link-nav">
                            <span aria-hidden="true">Comentários anteriores</span>
                            <?php previous_comments_link( esc_html__( 'Comentários antigos' ) ); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-right">
                        <div class="post-link-nav">

                            <?php next_comments_link( esc_html__( 'Próximos comentários' ) ); ?>
                            <span aria-hidden="true">Próximos comentários</span>
                        </div>
                    </div>
                </div>

            </nav>

       <?php // endif; ?>
        <ol class="comment-list">

            <?php
            $args = array(
                'walker' => null,
                'max_depth' => '',
                'style' => 'ol',
                'callback' => null,
                'end-callback' => null,
                'type' => 'all',
                'reply_text' => 'Responder',
                'page' => '',
                'per_page' => '',
                'avatar_size' => 32,
                'reverse_top_level' => null,
                'reverse_children' => '',
                'format' => 'html5',
                'short_ping' => false,
                'echo' => true,

            );

            wp_list_comments( $args );
            ?>

        </ol>

        <?php
            if( !comments_open() && get_comments_number() ):
        ?>

        <p><?php esc_html_e('Comentarios estão fechados!') ?></p>

        <?php endif; ?>

    <?php
    endif;
    ?>

    <?php
    $fields = array(

        'author' =>
        '<div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '<span class="required">*</span>' . '</label>' .
        '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" required="required" /></div>',

        'email' =>
        '<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '<span class="required">*</span>' . '</label>' .
        '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" required="required" /></div>',

        'url' =>
            '<div class="form-group"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
            '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '"/></div>',
    );

    $args = array(
        'class_submit' => 'btn btn-lg btn-primary',
        'comment_field' =>
            '<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .
            '</label><textarea class="form-control" id="comment" name="comment" rows="4" required="required">' .
            '</textarea></div>',
        'fields' => apply_filters('comment_form_default_fields', $fields)

    );
    comment_form($args);

    ?>

</div>