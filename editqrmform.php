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
$PAGE->set_heading('Formulaire QRM pour le Serious Game');
$context = get_system_context();

// We want to display our form
$mform = new editqrm();
//Form processing and displaying is done here
if ($mform->is_cancelled()) {
    //Handle form cancel operation, if cancel button is present on form
    // go back to manage.php page
    redirect($CFG->wwwroot . '/blocks/seriousgame/manage.php', 'You canceled the form');

} else if ($fromform = $mform->get_data()) {
  //In this case you process validated data. $mform->get_data() returns data posted in form.
  $fs = get_file_storage();
 
// Prepare file record object
    $fileinfo = array(
        'contextid' => $context->id, // ID of context
        'component' => 'mod_mymodule',     // usually = table name
        'filearea' => 'myarea',     // usually = table name
        'itemid' => 0,               // usually = ID of row in table
        'filepath' => '/blocks/seriousgame/',           // any path beginning and ending in /
        'filename' => 'wafink.txt'); // any filename
    
    // Create file containing text 'hello world'
    $fs->create_file_from_string($fileinfo, 'hello world');
    
}
echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();