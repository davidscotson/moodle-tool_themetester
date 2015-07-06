<?php

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/lib.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Element Library';
$url = new moodle_url('/admin/tool/themetester/index.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');
tool_themetester_add_pretend_block();

echo $OUTPUT->header();

echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container('This page contains a set of sample elements used on this site. It can be used to ensure that everything has been correctly themed (remember to check in a right-to-left language too), and for developers to see examples of how to implement particular elements. Developers: if you need an element that is not represented here, add it here first - the idea is to build up a library of all the elements used across the site.');

echo $OUTPUT->container_start();
echo $OUTPUT->heading('Moodle elements', 3);

$contents = tool_themetester_get_items();

echo html_writer::start_tag('ul');
foreach ($contents as $title => $file) {
    $url = new moodle_url($file);
    $link = html_writer::link($url, $title);
    echo html_writer::tag('li', $link);
}
echo html_writer::end_tag('ul');

echo $OUTPUT->container_end();

echo $OUTPUT->box_end();

echo $OUTPUT->footer();
