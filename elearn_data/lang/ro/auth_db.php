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
 * Strings for component 'auth_db', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Nu se poate conecta la baza de date specificată...';
$string['auth_dbchangepasswordurl_key'] = 'URL schimbare parolă';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdeleteuser'] = 'Utilizator eliminat {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Eroare la eliminarea utilizatorului {$a}';
$string['auth_dbdescription'] = 'Această metodă folosește un tabel din baza de date externă pentru a verifica dacă un anumit nume de utilizator și o parolă sunt valide. În cazul în care contul este unul nou, informațiile din alte domenii pot fi copiate, de asemenea, în Moodle.';
$string['auth_dbextencoding'] = 'Codare db externă';
$string['auth_dbextencodinghelp'] = 'Codare folosită în baza de date externă';
$string['auth_dbfieldpass'] = 'Numele câmpului care conține parole';
$string['auth_dbfieldpass_key'] = 'Câmp parolă';
$string['auth_dbfielduser'] = 'Numele câmpului care conține nume de utilizatori';
$string['auth_dbfielduser_key'] = 'Câmp nume de utilizator';
$string['auth_dbhost_key'] = 'Gazdă';
$string['auth_dbinsertuserduplicate'] = 'Eroare la înscrierea utilizatoruluui {$a->username} - utilizatorul cu acest nume  a fost deja creat prin plugin-ul \'{$a->auth}\'';
$string['auth_dbinsertusererror'] = 'Eroare la inserarea utilizatorului {$a}';
$string['auth_dbname'] = 'Denumirea bazei de date. Lăsați necompletat dacă folosiți un ODBC DSN.';
$string['auth_dbname_key'] = 'Nume DB';
$string['auth_dbpass'] = 'Parola corespunde numelui de utilizator de mai sus';
$string['auth_dbpass_key'] = 'Parolă';
$string['auth_dbpasstype_key'] = 'Format parolă';
$string['auth_dbsetupsql'] = 'SQL setup command';
$string['auth_dbsuspendusererror'] = 'Eroare la suspendarea utilizatorului {$a}';
$string['auth_dbsybasequoting'] = 'Utilizați citate sybase';
$string['auth_dbtable'] = 'Numele tabelului în baza de date';
$string['auth_dbtable_key'] = 'Tabel';
$string['auth_dbtype_key'] = 'Bază de date';
$string['auth_dbuser_key'] = 'Utilizator DB';
$string['auth_dbusernotexist'] = 'Nu se poate actualiza utilizatorul neexistent: {$a}';
$string['auth_dbuserstoadd'] = 'Postările utilizatorului pentru a fi adăugate: {$a}';
$string['auth_dbuserstoremove'] = 'Postările utilizatorului pentru a fi șterse: {$a}';
$string['pluginname'] = 'Bază de date externă';
