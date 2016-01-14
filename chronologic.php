<?php
/**
* Template Name: Chronology Template
*/
?>

<?php $expo_years = get_terms('expo_year', array( 'order' => 'DESC')); ?>

<div class="ui container">
    <pre>
        <?php //print_r($expo_years); ?>
    </pre>
    <?php foreach ($expo_years as $year): ?>
        <h1><?php echo $year->name; ?></h1>
        <?php

        $expos = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'expo_year',
                    'field' => 'term_id',
                    'terms' => $year->term_id,
                )
            )
        )
    );?>

    <?php $categories = []; ?>

    <?php foreach ($expos as $expo): ?>
        <?php $cat = wp_get_post_categories($expo->ID); ?>
        <?php if (!in_array($cat[0], $categories, true)): ?>
            <?php array_push($categories, $cat[0]); ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php foreach ($categories as $cat): ?>
        <?php switch (get_cat_name($cat)) {
            case 'EXPOSITIONS':
                echo '<br>';
                break;
            case 'Non classé':
                echo '<br>';
                break;
            default:?>
                <a href="<?= get_category_link( $cat ); ?>">
                    <?= get_cat_name($cat); ?>
                </a>
                <br>
            <?php } ?>

        <?php endforeach; ?>
    <?php endforeach; ?>
</div>


<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
    echo "Your favorite color is red!";
    break;
    case "blue":
    echo "Your favorite color is blue!";
    break;
    case "green":
    echo "Your favorite color is green!";
    break;
    default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
