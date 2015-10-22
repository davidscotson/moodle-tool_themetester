<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme tester tool
 *
 * @package   tool_themetester
 * @copyright  2012 Simon Coggins
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Theme Tester';
$url = new moodle_url('/admin/tool/themetester/index.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container('This page contains a set of sample elements used on this site. It can be used to ensure that everything has been correctly themed (remember to check in a right-to-left language too), and for developers to see examples of how to implement particular elements. Developers: if you need an element that is not represented here, add it here first - the idea is to build up a library of all the elements used across the site.');

echo $OUTPUT->container_start();
echo $OUTPUT->heading('Moodle elements', 3);

$contents = array(
    'Headings' => 'headings.php',
    'Common tags' => 'common.php',
    'Lists' => 'lists.php',
    'Tables' => 'tables.php',
    'Form elements' => 'forms.php',
    'Moodle form elements' => 'mform.php',
    'Moodle tab bar' => 'tabs.php',
    'Paging bar' => 'paging.php',
    'Images' => 'images.php',
    'Notifications' => 'notifications.php',
    'Confirmation' => 'confirm.php',
    'Progress Bars' => 'progress.php',
    'Page Layouts' => 'pagelayouts.php',
    'Bootstrap CSS' => 'bs_css.php',
    'Bootstrap Components' => 'bs_components.php',
    'Bootstrap Javascript' => 'bs_javascript.php',
    'Bootswatch Examples' => 'bootswatch.php',
);

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
