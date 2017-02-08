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
 * Strings for component 'enrol_mnet', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['instancename'] = 'Numele metodei de înrolare';
$string['instancename_help'] = 'Aveţi posibilitatea să redenumiţi acestă metodă de înscriere MNet. Dacă lăsaţi acest câmp gol, numele implicit va fi folosit, conţinând numele gazdei, precum şi rolul atribuit pentru utilizatorii gazdei. ';
$string['mnet_enrol_description'] = 'Publish this service to allow administrators at {$a} to enrol their students in courses you have created on your server.<br/><ul><li><em>Dependency</em>: You must also <strong>publish</strong> the SSO (Service Provider) service to {$a}.</li><li><em>Dependency</em>: You must also <strong>subscribe</strong> to the SSO (Identity Provider) service on {$a}.</li></ul><br/>Subscribe to this service to be able to enrol your students in courses on {$a}.<br/><ul><li><em>Dependency</em>: You must also <strong>subscribe</strong> to the SSO (Service Provider) service on {$a}.</li><li><em>Dependency</em>: You must also <strong>publish</strong> the SSO (Identity Provider) service to {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Moodle Networked Enrolment';
$string['remotesubscriber_help'] = 'Selectaţi "Toate gazdele" pentru a deschide acest curs pentru toți colegii MNet pentru care oferim serviciul de înscriere la distanţă. Sau alege o singură gazdă pentru a face acest curs disponibil doar pentru utilizatorii gazdei.';
$string['roleforremoteusers_help'] = 'Ce rol va atribui gazda utilizatorilor de la distanță ';
