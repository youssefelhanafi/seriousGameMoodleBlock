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
 * Version details
 *
 * @package    block_seriousgame
 * @copyright  Youssef ELHANAFI
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
 
class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 

        $radioarray=array();
        $radioarray[] = $mform->createElement('radio', 'qcmqrm', '', get_string('qcm','block_seriousgame'), 1);
        $radioarray[] = $mform->createElement('radio', 'qcmqrm', '', get_string('qrm','block_seriousgame'), 0);
        $mform->addGroup($radioarray, 'radioar', '', array(' '), false);
        $mform->setDefault('qcmqrm', 1);

        $this->add_action_buttons();


 
        // $mform->addElement('text', 'email', get_string('email')); // Add elements to your form
        // $mform->setType('email', PARAM_NOTAGS);                   //Set type of element
        // $mform->setDefault('email', 'Please enter email');        //Default value


    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}