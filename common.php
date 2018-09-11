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

$strheading = 'Theme Tester: Common tags';
$url = new moodle_url('/admin/tool/themetester/common.php');

// Start setting up the page.
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
echo $OUTPUT->container('Examples of common HTML tags');

echo $OUTPUT->container_start();
echo $OUTPUT->heading('Inline elements', 3);
echo html_writer::start_tag('p');
// List of inline elements from http://htmlhelp.com/reference/html40/inline.html
echo ' Lorum Ipsum ';
$params = array('t' => time()); // to prevent the link being visited
echo html_writer::link(new moodle_url('index.php', $params), 'an unvisited text link');
echo ' Lorum Ipsum ';
echo html_writer::link(new moodle_url(qualified_me()), 'a visited text link');
echo ' Lorum Ipsum ';
echo html_writer::tag('strong', 'some strong text');
echo ' Lorum Ipsum ';
echo html_writer::tag('em', 'some text with emphasis');
echo ' Lorum Ipsum ';
echo html_writer::tag('s', 'strikethough some text');
echo ' Lorum Ipsum ';
echo html_writer::tag('b', 'old fashioned bold');
echo ' Lorum Ipsum ';
echo html_writer::tag('i', 'old fashioned italics');
echo ' Lorum Ipsum ';
echo html_writer::tag('u', 'underlined but not a link');
echo ' Lorum Ipsum ';
echo html_writer::tag('blink', 'blinking text');
echo ' Lorum Ipsum ';
echo html_writer::tag('abbr', 'Abbr. txt.', array('title' => 'Abbreviated text'));
echo ' Lorum Ipsum ';
echo html_writer::tag('acronym', 'RADAR acronym text', array('title' => 'radio detecting and ranging'));
echo ' Lorum Ipsum ';
echo html_writer::tag('big', 'big text');
echo ' Lorum Ipsum ';
echo html_writer::tag('small', 'small text');
echo ' Lorum Ipsum ';
echo html_writer::tag('cite', 'A text citation');
echo ' Lorum Ipsum ';
echo html_writer::tag('code', 'A string of code');
echo ' Lorum Ipsum ';
echo html_writer::tag('mark', 'A highlighted search string');
echo ' Lorum Ipsum ';
echo html_writer::tag('dfn', 'A defined term as text');
echo ' Lorum Ipsum ';
echo html_writer::tag('kbd', 'Text to be entered on the keyboard');
echo ' Lorum Ipsum ';
echo html_writer::tag('q', 'Quotation Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('samp', 'Sample output');
echo ' Lorum Ipsum ';
echo html_writer::tag('span', 'Text in a span element');
echo ' Lorum Ipsum ';
echo html_writer::tag('sub', 'Subscript Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('sup', 'Superscript Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('tt', 'Teletype Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('var', 'Variable Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('del', 'Deleted Text');
echo ' Lorum Ipsum ';
echo html_writer::tag('ins', 'Inserted Text');
echo ' Lorum Ipsum ';
echo html_writer::end_tag('p');

echo $OUTPUT->container_end();

echo $OUTPUT->container_start();
echo $OUTPUT->heading('Block level elements', 3);
// From http://htmlhelp.com/reference/html40/block.html

echo $OUTPUT->heading('Address text', 4);
echo html_writer::tag('address', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo $OUTPUT->heading('Blockquote text', 4);
echo html_writer::tag('blockquote', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo $OUTPUT->heading('Div enclosed text', 4);
echo html_writer::tag('div', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo $OUTPUT->heading('Definition list', 4);
echo html_writer::start_tag('dl');
echo html_writer::tag('dt', 'This is where the definition term goes.');
echo html_writer::tag('dd', 'This is where the definition description goes.');

echo html_writer::tag('dt', 'Another longer definition term. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo html_writer::tag('dd', 'Another longer definition description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo html_writer::end_tag('dl');

echo $OUTPUT->heading('Preformatted text', 4);
echo html_writer::tag('pre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non
ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis
commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed.
    Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');


echo $OUTPUT->container_end();
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
