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
 * Strings for component 'debug', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   debug
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Nu s-a găsit plugin-ul de autentificare {$a}.';
$string['blocknotexist'] = 'Blocul {$a} nu există.';
$string['cannotbenull'] = '{$a} nu poate fi nul!';
$string['cannotdowngrade'] = 'Nu se poate face downgrade la {$a->plugin} de la {$a->oldversion} la {$a->newversion}.';
$string['cannotfindadmin'] = 'Nu s-a găsit un administrator!';
$string['cannotinitpage'] = 'Nu se poate iniţializa complet pagina: id {$a->id} {$a->name} invalid';
$string['cannotsetuptable'] = 'Tabelele {$a} NU au putut fi create cu succes!';
$string['codingerror'] = 'S-a detectat o eroare de codare, trebuie revizuită de un programator: {$a}';
$string['configmoodle'] = 'Moodle nu a fost configurat încă. Trebuie să configuraţi mai întâi config.php.';
$string['erroroccur'] = 'S-a produs o eroare în timpul acestui proces';
$string['invalidarraysize'] = 'Mărime incorectă a vectorilor în parametrii lui {$a}';
$string['invalideventdata'] = 'S-au trimis date de event incorecte: {$a}';
$string['invalidparameter'] = 'S-a detectat o valoare invalidă a unui parametru, execuţia nu poate continua.';
$string['invalidresponse'] = 'S-a detectat o valoare-răspuns invalidă, execuţia nu poate continua.';
$string['missingconfigversion'] = 'Tabelul de configurare nu conţine versiunea, nu se poate continua.';
$string['modulenotexist'] = 'Modulul {$a} nu există';
$string['morethanonerecordinfetch'] = 'S-a găsit mai mult decât o înregistrare în fetch()!';
$string['mustbeoveride'] = 'Metoda abstractă {$a} trebuie supracomandată.';
$string['noadminrole'] = 'Nu s-a găsit niciun rol de administrator';
$string['noblocks'] = 'Nu s-a instalat niciun bloc!';
$string['nocate'] = 'Nu există categorii!';
$string['nomodules'] = 'Nu s-au găsit module!';
$string['nopageclass'] = 'S-a(u) importat {$a}, dar nu s-au găsit clase de pagină';
$string['noreports'] = 'Nu există niciun raport disponibil';
$string['notables'] = 'Nu există tabele!';
$string['phpvaroff'] = 'Variabila de server PHP \'{$a->name}\' ar trebui să fie dezactivată - {$a->link}';
$string['phpvaron'] = 'Variabila de server PHP \'{$a->name}\' nu este dezactivată - {$a->link}';
$string['sessionmissing'] = 'Obiectul {$a} lipseste din sesiune';
$string['sqlrelyonobsoletetable'] = 'Acest SQL se bazează pe tabel(e) învechit(a): {$a}! Codul Dvs. trebuie revizuit de un developer.';
$string['withoutversion'] = 'Fişierul principal version.php lipseşte, nu poate fi citit sau este corupt.';
$string['xmlizeunavailable'] = 'Funcţiile xmlize nu sunt disponibile';
