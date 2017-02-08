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
 * Strings for component 'enrol_self', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnonmemberinfo'] = 'Doar membrii cohortei  \'{$a}\' se pot auto-înrola';
$string['cohortonly'] = 'Doar membrii cohortei';
$string['customwelcomemessage'] = 'Mesaj de bun venit personalizat';
$string['defaultrole'] = 'Rolul alocat implicit';
$string['enrolenddate'] = 'Data încheierii';
$string['enrolenddaterror'] = 'Data de terminare a înscrierior nu poate să fie anterioară datei de începere';
$string['enrolme'] = 'Înscrie-mă';
$string['enrolperiod'] = 'Durată înscriere';
$string['enrolstartdate'] = 'Dată început';
$string['groupkey'] = 'Folosire chei înscriere grup';
$string['groupkey_help'] = 'Pe lângă restricţionarea accesului la curs doar pentru cei care cunosc codul cheie, utilizarea unui cod cheie de grup va însemna că utilizatorii vor fi automat înscriși ca membri ai grupului atunci când se înscriu la curs.

Pentru a înscrie un grup folosind un cod cheie de acces , acest cod va trebui să fie introdus în setările de curs, precum şi în setările grupului.';
$string['longtimenosee'] = 'Revocare înscriere inactiv după';
$string['longtimenosee_help'] = 'Dacă un curs nu a mai fost accesat pentru o perioadă lungă de timp, atunci utilizatorilor li se vor revoca înscrierile la curs în mod automat. Folosiți acest parametru pentru a stabili limita de timp. ';
$string['maxenrolled'] = 'Numărul maxim de studenți înscriși';
$string['newenrols'] = 'Permite înscrieri noi';
$string['newenrols_desc'] = 'Permite utilizatorilor să se auto-înscrie la noi cursuri în mod automat';
$string['nopassword'] = 'Nu este necesară o cheie de înscriere';
$string['password'] = 'Cheie înscriere';
$string['password_help'] = 'O cheie de acces permite ca accesul la un curs să fie limitat doar la cei care cunosc cheia.

Dacă câmpul este lăsat necompletat, orice utilizator va putea să se înscrie la curs.

Dacă o cheie de acces este specificată, orice utilizator care încearcă să se înscrie în curs va fi obligat să furnizeze această cheie. Reţineţi că utilizatorii au nevoie să furnizeze cheia de înscriere O SINGURĂ DATĂ - și anume când aceștia se înscriu la curs.';
$string['passwordinvalid'] = 'Cheie de înscriere incorectă, vă rugăm să încercați din nou';
$string['passwordinvalidhint'] = 'Cheia de înscriere este incorectă, mai încercaţi o dată<br />
(Iată o sugestie - începe cu... \'{$a}\')';
$string['pluginname'] = 'Auto înscriere';
$string['requirepassword'] = 'Cheie de înscriere necesară';
$string['role'] = 'Rol alocat implicit';
$string['self:manage'] = 'Administrează utilizatorii înscriși';
$string['self:unenrolself'] = 'Renunțați la acest curs';
$string['sendcoursewelcomemessage'] = 'Trimitere mesaj de bun venit';
$string['sendcoursewelcomemessage_help'] = 'Dacă activaţi acest parametru, utilizatorii vor primi un mesaj de bun-venit prin e-mail după înscrierea la un curs.';
$string['status'] = 'Permite auto înscrieri';
$string['status_help'] = 'Această setare determină dacă un utilizator poate să se înscrie (sau să revoce înscrierea - în caz că are această permisiune) la curs.';
$string['unenrolselfconfirm'] = 'Sunteți sigur(ă) că doriți să renunțați la cursul "{$a}"?';
$string['unenroluser'] = 'Sigur doriți să renunțați "{$a->user}" la curs "{$a->course}"?';
$string['welcometocourse'] = 'Bine aţi venit la cursul {$a}';
$string['welcometocoursetext'] = 'Bine aţi venit la cursul <b>{$a->coursename}</b>: {$a->profileurl}.

Ați fost înscris la acest curs, astfel aveți acces la toate resursele lui online, puteți da testul de verificare, iar în caz de succes veți primi diploma de certificare.';
