<?php

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/lib.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Element Library: Progress Bars';
$url = new moodle_url('/admin/tool/themetester/progress.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);
$perpetualjs = new moodle_url('perpetual.js');
$PAGE->requires->js($perpetualjs);
admin_externalpage_setup('toolthemetester');
tool_themetester_add_pretend_block();

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('index.php'), '&laquo; Back to index');

echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();

echo $OUTPUT->container_start();

$perpetual = new progress_bar("perpetual");
$perpetual->create();
$perpetual->update(0, 100, "waiting for javascript");

for ($i = 0; $i <= 100; $i += 10) {
    $progress = new progress_bar("percent$i");
    $progress->create();
    $progress->update($i, 100, "$i% full");
}


echo $OUTPUT->container_end();

echo $OUTPUT->box_end();

echo $OUTPUT->footer();

