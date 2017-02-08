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
 * Strings for component 'local_welcome', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   local_welcome
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Plugin-uri auth';
$string['auth_plugins_desc'] = 'Alegeți plugin-urile auth pentru care ar trebui să fie trimis un mesaj de întâmpinare';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Utilizator nou pe site [[fullname]]</h3>
     A fost creat un cont nou cu următoarele detalii:</td></tr>
<tr><td>Nume:</td><td>[[fullname]]</td></tr>
<tr><td>Nume utilizator: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Un nou utilizator s-a înscris pe [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Bine ați venit! [[fullname]]</h3>
Contul dumneavoastră Moodle a fost creat și puteți începe activitatea! Contul dumneavoastră
a fost creat pe [[sitelink]] cu următoarele detalii:</td></tr>
<tr><td>Nume:</td><td>[[fullname]]</td></tr>
<tr><td>Nume de utilizator: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Dacă pierdeți parola vreodată, este ușor să o resetați:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Bună ziua, [[fullname]] Bine ați venit pe [[sitename]]';
$string['message_moderator'] = 'Mesaj moderator';
$string['message_moderator_desc'] = 'Mesaj trimis moderatorilor';
$string['message_moderator_enabled'] = 'Activați mesajele moderatorilor';
$string['message_moderator_enabled_desc'] = 'Această căsuță activează trimiterea mesajelor de notificare către moderatori';
$string['message_moderator_subject'] = 'Moderatorul subiectului';
$string['message_user'] = 'Mesaj utilizator';
$string['message_user_desc'] = 'Mesaj trimis noilor utilizatori';
$string['message_user_enabled'] = 'Activează mesajele utilizatorului';
$string['message_user_subject'] = 'Subiect utilizator';
$string['moderator_email'] = 'Email-ul moderatorului';
$string['moderator_email_desc'] = 'Notificările utilizatorului nou sunt trimise la această adresă de email.';
$string['pluginname'] = 'Bine ați venit la Moodle';
$string['resetpass'] = 'Resetați parola dumneavoastră aici';
$string['sender_email'] = 'Adresa de e-mail a expeditorului';
$string['sender_email_desc'] = 'Când utilizatorii noi se conectează, această adresă de e-mail este folosită pentru a trimite un mesaj de notificare, utilizatorii vor putea vedea această adresă de email';
$string['sender_firstname'] = 'Numele expeditorului mesajului de bun venit';
$string['sender_firstname_desc'] = 'Prenume folosit la trimiterea e-mailului către utilizatori.';
$string['sender_lastname'] = 'Numele de familie al moderatorului';
$string['sender_lastname_desc'] = 'Numele de familie folosit la trimiterea e-mailului către utilizatori.';
