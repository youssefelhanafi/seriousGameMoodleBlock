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
 
class editqcm extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 


        //Question
        $mform->addElement('text', 'question', get_string('question','block_seriousgame')); // Add elements to your form
        $mform->setType('question', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('question', 'Entrez la question');        //Default value
        //Bonne réponse
        $mform->addElement('text', 'bonnereponse', get_string('bonnereponse','block_seriousgame')); // Add elements to your form
        $mform->setType('bonnereponse', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('bonnereponse', 'Entrez la Bonnee réponse');        //Default value
        //Choix1
        $mform->addElement('text', 'choix1', get_string('choix1','block_seriousgame')); // Add elements to your form
        $mform->setType('choix1', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('choix1', 'Choix 1');        //Default value
        //Choix2
        $mform->addElement('text', 'choix2', get_string('choix2','block_seriousgame')); // Add elements to your form
        $mform->setType('choix2', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('choix2', 'Choix 2');        //Default value
        //Choix3
        $mform->addElement('text', 'choix3', get_string('choix3','block_seriousgame')); // Add elements to your form
        $mform->setType('choix3', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('choix3', 'Choix 3');        //Default value

        $this->add_action_buttons();

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
    
}