<?php
function service_price_title($title, $count = true, $nav = true)
{
    $count_class = $count ? 'is-count' : '';
    $nav_class = $nav ? '' : 'no-navi';

    if ($count) {
        echo '<h3 class="service__price-title ' . $count_class . ' ' . $nav_class . '">';
        echo '<span class="sp-none">Price - </span>';
        echo '<span class="pc-none">#</span>';
        echo '<em>' . $title . '</em>';
        echo '</h3>';
    } else {
        echo '<h3 class="service__price-title' . $count_class . ' ' . $nav_class . '">';
        echo '<em>' . $title . '</em>';
        echo '</h3>';
    }
}

function price_table_1col($array)
{
    echo '<table class="service__price-table is-text-left">';
    foreach ($array as $i => $item) {
        if ($i == 0) {
            echo '<thead>';
            echo '<tr>';
            echo '<th>' . $item . '</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
        } else {
            echo '<tr>';
            echo '<td>' . $item . '</td>';
            echo '</tr>';
        }
        if ($i == count($array) - 1) {
            echo '</tbody>';
        }
    }
    echo '</table>';
}

function price_table_2col($array)
{
    echo '<table class="service__price-table">';
    foreach ($array as $i => $item) {
        if ($i == 0) {
            echo '<thead>';
            echo '<tr>';
            foreach ($item as $th) {
                echo '<th>' . $th . '</th>';
            }
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
        } else {
            echo '<tr>';
            foreach ($item as $td) {
                echo '<td>' . $td . '</td>';
            }
            echo '</tr>';
        }
        if ($i == count($array) - 1) {
            echo '</tbody>';
        }
    }
    echo '</table>';
}

function price_table_3col($array)
{
    echo '<table class="service__price-table">';
    foreach ($array as $i => $item) {
        if ($i == 0) {
            echo '<thead>';
            echo '<tr>';
            foreach ($item as $th) {
                echo '<th>' . $th . '</th>';
            }
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
        } else {
            echo '<tr>';
            foreach ($item as $td) {
                echo '<td>' . $td . '</td>';
            }
            echo '</tr>';
        }
        if ($i == count($array) - 1) {
            echo '</tbody>';
        }
    }
    echo '</table>';
}
