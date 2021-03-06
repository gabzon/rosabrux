<?php
/**
* Template Name: Artist Template
*/
?>

<?php

$list = '';
$cats = get_terms('artist');
$groups = array();

if( $cats && is_array( $cats ) ) {
    foreach( $cats as $cat ) {
        $first_letter = strtoupper( $cat->name[0] );
        $groups[ $first_letter ][] = $cat;
    }

    if( !empty( $groups ) ) {{
        $index_row .='<div class="topindex"><h3>';
        foreach ($groups as $letter => $cats) {
            $index_row .= '<a href="#' . $letter . '" title="' . $letter . '" style="text-decoration:underline">' . apply_filters( 'the_title', $letter ) . '</a> ';
        }
        $index_row .='</h3></div><br class="clear" />';}
        $list .= '<div class="ui four column grid stackable">';
        foreach( $groups as $letter => $cats ) {
            $list .= '<div class="column">';
            $list .= '<ul class="index">';
            $list .= '<li><a name="' . $letter . '"></a><h5><a href="#cats_top" title="back to top" style="color:#f9001c">' . apply_filters( 'the_title', $letter ) . '</a></h5>';
            $list .= '<ul class="links">';
            // echo '<pre>';
            // print_r($cats);
            // echo '</pre>';
            foreach( $cats as $cat ) {
                $term_link = get_term_link( $cat );
                //$url = get_category_link( $cat->term_id );
                $name = apply_filters( 'the_title', $cat->description );
                $list .= '<li><a title="' . $name . '" href="' . $term_link . '">' . $name . '</a></li>';
            } 		 $list .= '</ul></li>';
            $list .= '</ul>';
            $list .= '</div>';
        }
        $list .= '</div>';
    }
} else $list .= '<p>Sorry, but no artists were found</p>';

?>

<div class="ui container">
    <br>
    <div class="artist-list">
        <?php print $list; ?>

    </div>
</div>
