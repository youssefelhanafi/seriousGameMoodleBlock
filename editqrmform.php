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

require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/blocks/seriousgame/classes/form/editqrmform.php');

$PAGE->set_url(new moodle_url('/blocks/seriousgame/editqrm.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Formulaire du QRM');


// We want to display our form
$mform = new editqrm();
//Form processing and displaying is done here
if ($mform->is_cancelled()) {
    //Handle form cancel operation, if cancel button is present on form
    // go back to manage.php page
    redirect($CFG->wwwroot . '/blocks/seriousgame/manage.php', 'You canceled the form');

} else if ($fromform = $mform->get_data()) {
  //In this case you process validated data. $mform->get_data() returns data posted in form.
    
}
echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();