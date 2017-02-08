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
 * Strings for component 'assignfeedback_offline', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Confirmă importul notelor';
$string['default'] = 'Activat în mod implicit';
$string['default_help'] = 'Dacă este setată această opțiune, notarea cu foi de lucru va fi activată în mod implicit pentru toate sarcinile noi.';
$string['downloadgrades'] = 'Se descarcă worksheet-ul cu note';
$string['enabled'] = 'Foaie de lucru de notare offline';
$string['enabled_help'] = 'Dacă este activată această opțiune, profesorul va putea să descarce și să încarce o foaie de lucru cu clase de elevi atunci când notează lucrările.';
$string['feedbackupdate'] = 'Setează câmpul "{$a->field}" pentru "{$a->student}" la"{$a->text}"';
$string['gradelockedingradebook'] = 'Nota a fost blocată în catalog pentru {$a}';
$string['graderecentlymodified'] = 'Nota a fost modificată în Moodle mai recent decât în foaia de lucru cu notele pentru {$a}';
$string['gradesfile'] = 'Worksheet cu notele (format cvs)';
$string['gradesfile_help'] = 'Foaie de lucru cu notele modificate. Acest fisier trebuie să fie un fișier csv care a fost descărcat de la această lucrare și trebuie să conțină coloane pentru nota studentului și identificatorul. Codarea pentru fișier trebuie să fie &quot;UTF-8&quot;';
$string['gradeupdate'] = 'Setează nota pentru {$a->student} la {$a->grade}';
$string['ignoremodified'] = 'Se permite actualizarea înregistrărilor care au fost modificate mai recent în Moodle decât în foaia de calcul.';
$string['ignoremodified_help'] = 'Atunci când foaia de lucru cu notele este descărcată din Moodle aceasta conține ultima modificare efectuată pentru fiecare dintre note. În cazul în care oricare dintre note sunt actualizate în Moodle după ce această foaie de lucru este descărcată, în mod implicit Moodle va refuza să suprascrie aceste informații actualizate la importul notelor. Prin selectarea acestei opțiuni Moodle va dezactiva această verificare de siguranță și poate fi posibil ca markeri multipli să suprascrie notele reciproc.';
$string['importgrades'] = 'Confirmați modificările în foaia de notare';
$string['invalidgradeimport'] = 'Moodle nu a putut citi foaia de lucru încărcată. Asigurați-vă că este salvată în format de valoare separată prin virgulă (.csv) și încercați din nou.';
$string['nochanges'] = 'Nu s-au găsit note modificate în worksheet';
$string['offlinegradingworksheet'] = 'Note';
$string['pluginname'] = 'Foaie de lucru pentru notare în offline';
$string['processgrades'] = 'Import note';
$string['skiprecord'] = 'Omite înregistrarea';
$string['updatedgrades'] = 'Note și feedback actualizate {$a}';
$string['updaterecord'] = 'Actualizează înregistrarea';
$string['uploadgrades'] = 'Încărcați worksheet-ul cu note';
