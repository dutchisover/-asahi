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

function price_table_3col($data)
{
    $output = '<div class="service__price-switch">';

    // PC版テーブル
    $output .= '<div class="service__price-switch-pc">';
    $output .= '<table class="service__price-table"><thead><tr>';
    $output .= '<th>' . $data[0][0] . '</th><th>' . $data[0][1] . '</th><th>' . $data[0][2] . '</th>';
    $output .= '</tr></thead><tbody>';

    foreach ($data as $index => $row) {
        // 最初の行（見出し）を飛ばす
        if ($index === 0) {
            continue;
        }
        $output .= '<tr>';
        $output .= '<td>' . $row[0] . '</td>';
        $output .= '<td>' . $row[1] . '</td>';
        $output .= '<td>' . $row[2] . '</td>';
        $output .= '</tr>';
    }

    $output .= '</tbody></table></div>';

    // SP版テーブル
    $output .= '<div class="service__price-switch-sp">';

    foreach ($data as $index => $row) {
        // 最初の行（見出し）を飛ばす
        if ($index === 0) {
            continue;
        }
        $output .= '<div class="service__price-switch-section">';
        $output .= '<p class="service__price-switch-title">';
        $output .= '<span>' . $data[0][0] . '</span>';
        $output .= '<em>' . $row[0] . '</em>';
        $output .= '</p>';
        $output .= '<table class="service__price-table"><thead><tr>';
        $output .= '<th>' . $data[0][1] . '</th><th>' . $data[0][2] . '</th>';
        $output .= '</tr></thead><tbody><tr>';
        $output .= '<td>' . $row[1] . '</td>';
        $output .= '<td>' . $row[2] . '</td>';
        $output .= '</tr></tbody></table>';
        $output .= '</div>';
    }

    $output .= '</div></div>';

    echo $output;
}

function price_table_5col($data)
{
    $output = '<div class="service__price-switch">';

    // PC版テーブル
    $output .= '<div class="service__price-switch-pc">';
    $output .= '<table class="service__price-table is-special"><thead><tr>';
    $output .= '<th>' . $data[0][0] . '</th><th colspan="2">' . $data[0][1] . '</th>';
    $output .= '</tr></thead><tbody>';

    foreach (array_slice($data, 1) as $row) {
        $output .= '<tr>';
        $output .= '<td rowspan="2">' . $row[0] . '</td>';
        $output .= '<th>' . $row[1] . '</th>';
        $output .= '<th>' . $row[2] . '</th>';
        $output .= '</tr><tr>';
        $output .= '<td>' . $row[3] . '</td>';
        $output .= '<td>' . $row[4] . '</td>';
        $output .= '</tr>';
    }

    $output .= '</tbody></table></div>';

    // SP版テーブル
    $output .= '<div class="service__price-switch-sp">';

    foreach (array_slice($data, 1) as $row) {
        $output .= '<div class="service__price-switch-section">';
        $output .= '<p class="service__price-switch-title">';
        $output .= '<span>' . $data[0][0] . '</span>';
        $output .= '<em>' . $row[0] . '</em>';
        $output .= '</p>';
        $output .= '<table class="service__price-table is-special"><thead><tr>';
        $output .= '<th colspan="2">' . $data[0][1] . '</th>';
        $output .= '</tr></thead><tbody><tr>';
        $output .= '<th>' . $row[1] . '</th>';
        $output .= '<th>' . $row[2] . '</th>';
        $output .= '</tr><tr>';
        $output .= '<td>' . $row[3] . '</td>';
        $output .= '<td>' . $row[4] . '</td>';
        $output .= '</tr></tbody></table>';
        $output .= '</div>';
    }

    $output .= '</div></div>';

    echo $output;
}
