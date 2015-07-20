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

$strheading = 'Theme Tester: Lists';
$url = new moodle_url('/admin/tool/themetester/lists.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();

echo $OUTPUT->container_start();
echo $OUTPUT->heading('Unordered List', 3);
$items = array('item one', 'item two', 'item three', 'item four', 'item five');
echo html_writer::alist($items);

echo $OUTPUT->heading('Ordered List', 3);
echo html_writer::alist($items, null, 'ol');

echo $OUTPUT->heading('Nested unordered List', 3);
$subitems = array('item two point one', 'item two point two');
$sublist = html_writer::alist($subitems);
$items = array('item one', "item two\n$sublist", 'item three', 'item four', 'item five');
echo html_writer::alist($items);


echo $OUTPUT->heading('Nested ordered List', 3);
$sublist = html_writer::alist($subitems, null, 'ol');
$items = array('item one', "item two\n$sublist", 'item three', 'item four', 'item five');
echo html_writer::alist($items, null, 'ol');

echo $OUTPUT->heading('Deeply nested unordered List', 3);

echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 1');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 2');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 3');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 4');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 5');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 6');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 7');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 8');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 9');
echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'level 10');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');
echo html_writer::end_tag('ul');

echo $OUTPUT->heading('Deeply nested ordered List', 3);

echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 1');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 2');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 3');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 4');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 5');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 6');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 7');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 8');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 9');
echo html_writer::start_tag('ol');
echo html_writer::tag('li', 'level 10');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');
echo html_writer::end_tag('ol');

echo $OUTPUT->container_end();

echo $OUTPUT->box_end();

echo $OUTPUT->footer();
