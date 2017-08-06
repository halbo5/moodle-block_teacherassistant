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

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_teacherassistant/categoryid', get_string('categoryid', 'block_teacherassistant'),
                       get_string('categoryid_desc', 'block_teacherassistant'), '1', PARAM_INT, 3));
    $settings->add(new admin_setting_configtext('block_teacherassistant/deletecourse', get_string('deletecourse', 'block_teacherassistant'),
                       get_string('deletecourse_desc', 'block_teacherassistant'), '', PARAM_INT, 5));
    $settings->add(new admin_setting_configtext('block_teacherassistant/cohort', get_string('cohort', 'block_teacherassistant'),
                       get_string('cohort_desc', 'block_teacherassistant'), '', PARAM_INT, 5));
    $settings->add(new admin_setting_configtext('block_teacherassistant/teacherrights', get_string('teacherrights', 'block_teacherassistant'),
                       get_string('teacherrights_desc', 'block_teacherassistant'), '', PARAM_INT, 5));
        $settings->add(new admin_setting_configtext('block_teacherassistant/learningspace', get_string('learningspace', 'block_teacherassistant'),
                       get_string('learningspace_desc', 'block_teacherassistant'), '', PARAM_INT, 5));
            $settings->add(new admin_setting_configtext('block_teacherassistant/training', get_string('training', 'block_teacherassistant'),
                       get_string('training_desc', 'block_teacherassistant'), '', PARAM_URL, 50));
}
