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
 * Block "Teacher Assistant"
 *
 * @package    block_teacherassistant
 * @copyright  2017 Alain Bolli, <alain.bolli@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_teacherassistant_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_teacherassistant'));
        $mform->setDefault('config_title', get_string('defaulttitle', 'block_teacherassistant'));
        $mform->setType('config_title', PARAM_TEXT);

        // Default category for creating courses.
        $mform->addElement('text', 'config_categoryid', get_string('categoryid', 'block_teacherassistant'));
        $mform->setDefault('config_categoryid', '1');
        $mform->setType('config_categoryid', PARAM_INT);
    }
}