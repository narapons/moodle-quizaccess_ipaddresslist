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
 * Checking access to quiz by list of IP adresses defined by admin.
 *
 * @package    quizaccess_ipaddresslist
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Add subnet';
$string['editsubnet'] = 'Edit subnet';
$string['managesubnets'] = 'Subnets list management';
$string['pluginname'] = 'IP address list quiz access rule';
$string['subnet'] = 'Subnet';
$string['subnet_help'] = '<p>Specify comma-separated list of partial or full IP address numbers.</p><p>Examples:</p><ul><li>192.168.10.1</li><li>192.168.</li><li>231.54.211.0/20</li><li>231.3.56.10-20</li><li>192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20</li></ul>';
