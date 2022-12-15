<?php

/**
 * Plugin Name:       Transaction Time Charts
 * Description:       Creates real time charts from database.
 * Version:           0.0.1
 * Author:            Lucas Bezerra
 * Author URI:        https://github.com/bezerra-lucas
 */

// Declare WPDP as global, so we can use it inside this folder.
global $wpdb;


echo plugins_url('transaction_time_charts/scripts/moment.js');

// https://www.drive.google.com/uc?export=view&id=1sx4MoOVy1qiAV8hqh8cqLVDru10rC4M3


function wpdocs_register_plugin_styles()
{
    wp_enqueue_script('ttc_moment', plugins_url('transaction_time_charts/scripts/moment.js'), ['jquery']);

    wp_register_script('ttc_feather', plugins_url('transaction_time_charts/scripts/feather.js'), ['jquery']);
    wp_enqueue_script('ttc_feather');

    wp_register_script('ttc_index', plugins_url('transaction_time_charts/scripts/index.js'), ['jquery', 'ttc_feather', 'ttc_moment']);
    wp_enqueue_script('ttc_index');

    wp_register_style('ttc_style', plugins_url('transaction_time_charts/style.css'));
    wp_enqueue_style('ttc_style');
}
// Register style sheet.
add_action('wp_enqueue_scripts', 'wpdocs_register_plugin_styles');


// Get content from database and store it inside variables.
$dateschedules = $wpdb->get_results("SELECT * FROM wl_pretty_api_dateschedules");
$stacksone = $wpdb->get_results("SELECT * FROM wl_pretty_api_stacksone");

// Test content from database.
// echo json_encode($dateschedules[0]);
// echo json_encode($stacksone[0]);

// Assign first row to the current DateSchedule.
$current_dateschedule = $dateschedules[0];

// Add Shortcode
function return_chart_html_as_string()
{
    global $current_dateschedule;

    // Assign each object to its respective variable.
    $rdate = $current_dateschedule->rdate;
    $venue = $current_dateschedule->venue;
    $raceno = $current_dateschedule->raceno;
    $title1 = $current_dateschedule->title1;
    $title2 = $current_dateschedule->title2;
    $starttime = $current_dateschedule->starttime;
    $created_at = $current_dateschedule->created_at;

    return <<<HTML
        <div class="transaction-time-chart">
            <div class="controls">
            <div class="left">
                <div class="image-icon">1</div>
                <input class="time" value="$starttime" type="time" />
            </div>
            <div class="right">
                <div class="first-row">
                <div class="date-control">
                    <button><i data-feather="arrow-left"></i></button>
                    <input
                    type="text"
                    value="$rdate"
                    class="date-input"
                    name="date"
                    />
                    <button><i data-feather="arrow-right"></i></button>
                </div>
                <div class="st">
                    <span>ST</span>
                    <button class="number selected-number">1</button>
                    <button class="number">2</button>
                    <button class="number">3</button>
                    <button class="number">4</button>
                    <button class="number">5</button>
                    <button class="number">6</button>
                    <button class="number">7</button>
                    <button class="number">8</button>
                    <button class="number">9</button>
                    <button class="number">10</button>
                    <button class="number">11</button>
                </div>
                </div>
                <div class="second-row">
                    <div class="titles">
                        <span class="title title-1">$title1</span>
                        <span class="title title-2">$title2</span>
                    </div>
                    <div class="hv">
                        <span>HV</span>
                        <button class="number">1</button>
                        <button class="number">2</button>
                        <button class="number">3</button>
                    </div>
                </div>
                <div class="third-row">
                    <div class="bar"></div>
                    <div class="time-circles n20">20</div>
                    <div class="time-circles n15">15</div>
                    <div class="time-circles n10">10</div>
                    <div class="time-circles n5">5</div>
                    <div class="time-circles n0">0</div>
                </div>
            </div>
            </div>
            <div class="charts">CHARTS.JS</div>
        </div>

        <p>$venue</p>
        <p>$raceno</p>

    HTML;
}

// Register Shorcode
add_shortcode('transaction_time_chart', 'return_chart_html_as_string');
