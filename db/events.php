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
 * Electronic Learning Blue Print
 *
 * ELBP is a moodle block plugin, which provides one singular place for all of a student's key academic information to be stored and viewed, such as attendance, targets, tutorials,
 * reports, qualification progress, etc... as well as unlimited custom sections.
 * 
 * @package     block_elbp
 * @copyright   2017-onwards Conn Warwicker
 * @author      Conn Warwicker <conn@cmrwarwicker.com>
 * @link        https://github.com/cwarwicker/moodle-block_elbp
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * Originally developed at Bedford College, now maintained by Conn Warwicker
 * 
 */


$observers = array(
    
    array(
        'eventname'   => '\core\event\user_enrolment_created',
        'callback'    => 'block_elbp_observer::eblp_user_enrolment',
        'internal'    => false,
    ),
    
    array(
        'eventname'   => '\core\event\user_enrolment_deleted',
        'callback'    => 'block_elbp_observer::eblp_user_unenrolment',
        'internal'    => false,
    ),
    
    array(
        'eventname'   => '\core\event\group_member_added',
        'callback'    => 'block_elbp_observer::elbp_group_member_added',
        'internal'    => false,
    ),
    
    array(
        'eventname'   => '\core\event\group_member_removed',
        'callback'    => 'block_elbp_observer::elbp_group_member_removed',
        'internal'    => false,
    ),
);