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

    <?php $title = ''; ?>
    <?php foreach ($expos as $expo): ?>
        <a href="<?php echo esc_url(get_permalink( $expo->ID )); ?>" style="text-transform:uppercase;">
            <?= $expo->ID; ?>
            <?= ' ' . $expo->post_title; ?>
        </a>
        <br>
    <?php endforeach; ?>
<?php endforeach; ?>
</div>
