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

/**
 * Todo:
 *  - it would be useful to apply an incremental className to form groups, to ctrl
 *    spacing between stacked groups, eg; 'class="felement fgroup fgroup1"'
 **/

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot.'/lib/formslib.php');

$strheading = 'Theme Tester: Moodle Forms: Grouped controls';
$url = new moodle_url('/admin/tool/themetester/mform_grouped.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');
echo $OUTPUT->header();

echo html_writer::link(new moodle_url('mform.php'), '&laquo; Back to moodle forms');
echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container('Examples of different types of grouped elements. Submit the form to see server side validation message for each item when validation fails.');
echo $OUTPUT->box_end();
echo $OUTPUT->container_start();

class grouped_form_elements extends moodleform {

    // Define the form
    function definition() {

        $mform =& $this->_form;

        $mform->addElement('header', null, 'Controls');

        $mform->addElement('checkbox', 'disableelements', 'Disable all elements below', 'Use to test disabled state styles and functionality.');

        $mform->addElement('header', null, 'Heading element');

        // TODO: add more examples of grouped form elements e.g. buttons etc.
        $radioGroup=array();
        $radioGroup[] =& $mform->createElement('radio', 'more_radio', null, 'Radio A', 0);
        $radioGroup[] =& $mform->createElement('radio', 'more_radio', null, 'Radio B', 1);
        // here <br /> is a separator between elements
        $mform->addGroup($radioGroup, 'radiogroup', 'A group of radios', array('<br />'), false);
        $mform->disabledIf('radiogroup', 'disableelements', 'checked');

        $checkboxGroup=array();
        $checkboxGroup[] =& $mform->createElement('advcheckbox', 'test1', 'more_checkbox', 'checkbox_desc', array('group' => 1));
        $checkboxGroup[] =& $mform->createElement('advcheckbox', 'test2', 'more_checkbox', 'checkbox_desc', array('group' => 1));
        $checkboxGroup[] =& $mform->createElement('advcheckbox', 'test3', 'more_checkbox', 'checkbox_desc', array('group' => 1));
        $checkboxGroup[] =& $mform->createElement('advcheckbox', 'test4', 'more_checkbox', 'checkbox_desc', array('group' => 1));
        $mform->setDefault('test1', 1);
        $mform->addGroup($checkboxGroup, 'more_checkbox', 'A group of checkboxes', array('<br />'), false);
        $mform->disabledIf('more_checkbox', 'disableelements', 'checked');

        $checkboxGroup2=array();
        $checkboxGroup2[] =& $mform->createElement('advcheckbox', 'test5', 'more_checkbox_2', 'checkbox_desc', array('group' => 2));
        $checkboxGroup2[] =& $mform->createElement('advcheckbox', 'test6', 'more_checkbox_2', 'checkbox_desc', array('group' => 2));
        $checkboxGroup2[] =& $mform->createElement('advcheckbox', 'test7', 'more_checkbox_2', 'checkbox_desc', array('group' => 2));
        $checkboxGroup2[] =& $mform->createElement('advcheckbox', 'test8', 'more_checkbox_2', 'checkbox_desc', array('group' => 2));
        $mform->addGroup($checkboxGroup2, 'more_checkbox_2', 'Another group of checkboxes', array(' [first sep] ',' [second sep] ',' [third sep] '), false);
        $mform->disabledIf('more_checkbox_2', 'disableelements', 'checked');

        $mform->addElement('static', 'sepdesc', '', 'The above group uses different separators between each element.');

        $this->add_action_buttons(true, get_string('savechanges'));

    }

    function validation($formelements, $files) {
        $err = array();
        $err['radiogroup'] = 'Custom validation message';
        $err['more_checkbox'] = 'Custom validation message';
        $err['more_checkbox_2'] = 'Custom validation message';
        return $err;
    }

}

$form = new grouped_form_elements();
$data = $form->get_data(); // enables server validation
$form->display();


echo $OUTPUT->container_end();
echo $OUTPUT->footer();
