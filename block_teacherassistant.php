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

class block_teacherassistant extends \block_base {
    public function init() {
        $systemcontext = context_system::instance();
        // The title is different for teachers and students.
        if (has_capability('moodle/course:create', $systemcontext)) {
            $this->title = get_string('teacher', 'block_teacherassistant');
        } else {
            $this->title = get_string('student', 'block_teacherassistant');
        }
        $this->config = new stdClass();
    }

    public function get_content() {
        global $CFG;
        $config = get_config('block_teacherassistant');
        $rightsid  = (isset($config->teacherrights)) ? $config->teacherrights : 0;
        $systemcontext = context_system::instance();
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content  =  new stdClass();

        // Content for students.
        if (!has_capability('moodle/course:create', $systemcontext)) {
            if ($rightsid != 0) {
                $this->content->text  = html_writer::start_tag('p');
                $this->content->text .= get_string('askforrights', 'block_teacherassistant');
                $this->content->text .= html_writer::end_tag('p');
                $this->content->text .= html_writer::start_tag('p');
                $url = new moodle_url('/course/view.php', array('id' => $rightsid));
                $this->content->text .= html_writer::link($url, get_string('askforrights_link', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
        } else {
            // Content for teachers.
            $categoryid = (isset($this->config->categoryid)) ? $this->config->categoryid : $config->categoryid;
            $deleteid = (isset($config->deletecourse)) ? $config->deletecourse : 0;
            $cohortid = (isset($config->cohort)) ? $config->cohort : 0;
            $learningspaceid = (isset($config->learningspace)) ? $config->learningspace : 0;
            $trainingurl = (isset($config->training)) ? $config->training : '';
            $createurl = new moodle_url('/course/edit.php', array('category' => $categoryid, 'returnto' => 'category'));
            $deleteurl = new moodle_url('/course/view.php', array('id' => $deleteid));
            $cohorturl = new moodle_url('/course/view.php', array('id' => $cohortid));
            $rightsurl = new moodle_url('/course/view.php', array('id' => $rightsid));
            $learningspaceurl = new moodle_url('/course/view.php', array('id' => $learningspaceid));

            $this->content->text  = html_writer::start_tag('p', array('class' => 'btn btn-primary'));
            $this->content->text .= html_writer::link($createurl, get_string('text_createcourse', 'block_teacherassistant'), array('style' => 'color:inherit'));
            $this->content->text .= html_writer::end_tag('p');
            if ($deleteid != 0) {
                $this->content->text .= html_writer::start_tag('p');
                $this->content->text .= html_writer::link($deleteurl, get_string('text_deletecourse', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
            if ($cohortid != 0) {
                $this->content->text .= html_writer::start_tag('p');
                $this->content->text .= html_writer::link($cohorturl, get_string('text_findcohort', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
            if ($rightsid != 0) {
                $this->content->text .= html_writer::start_tag('p');
                $this->content->text .= html_writer::link($rightsurl, get_string('text_modifyrights', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
            if ($learningspaceid != 0) {
                $this->content->text .= html_writer::start_tag('p');
                $this->content->text .= html_writer::link($learningspaceurl, get_string('text_learningspace', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
            if ($trainingurl != '') {
                $this->content->text .= html_writer::start_tag('p');
                $this->content->text .= html_writer::link($trainingurl, get_string('text_training', 'block_teacherassistant'));
                $this->content->text .= html_writer::end_tag('p');
            }
    }
    return $this->content;
}

public function specialization() {
    if (isset($this->config)) {
        if (empty($this->config->title)) {
            $this->title = get_string('defaulttitle', 'block_teacherassistant');
        } else {
            $this->title = $this->config->title;
        }
    }
}

public function instance_allow_multiple() {
    return true;
}

public function html_attributes() {
    $attributes = parent::html_attributes();
    $attributes['class'] .= ' block_'. $this->name();
    return $attributes;
}

public function has_config() {
    return true;
}

public function instance_allow_config() {
    return true;
    }
}