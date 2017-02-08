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
 * Strings for component 'tool_xmldb', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftertable'] = 'After Table:';
$string['back'] = 'Înapoi';
$string['backtomainview'] = 'Înapoi la început';
$string['cannotuseidfield'] = 'Nu se poate insera câmpul "id". Este o coloană automatiă.';
$string['change'] = 'Schimbă';
$string['charincorrectlength'] = 'Lungime incorectă a câmpului caracter';
$string['checkbigints'] = 'Verifică Bigints';
$string['check_bigints'] = 'Caută numere întregi incorecte in baza de date';
$string['checkdefaults'] = 'Verifică valori implicite';
$string['check_defaults'] = 'Caută valori implicite inconsecvente';
$string['checkindexes'] = 'Verfică indecşii';
$string['check_indexes'] = 'Caută indecşi bază de date lipsă';
$string['completelogbelow'] = '(vezi mai jos înregistrarea completă a tuturor detaliilor căutării)';
$string['confirmcheckbigints'] = 'Această funcţionalitate va căuta <a href="http://tracker.moodle.org/browse/MDL-11038">potential wrong integer fields</a> în cadrul serverului dumneavoastră Moodle şi va genera (însă nu va executa) statement-urile SQL necesare care ar asigura corectitudinea valorilor implicite.<br /><br />
Odată generate aceste statement-uri le veţi putea copia şi rula din interfaţa favorită SQL (nu uitaţi să realizaţi o copie de rezervă a datelor înainte de a rula aceste statement-uri).<br /><br />
Înainte de a lansa căutarea de potential wrong integer fields asiguraţi-vă că rulaţi cea mai recentă versiune a Moodle (1.8, 1.9, 2.x ...).<br /><br />
Această funcţionalitate nu realizează niciun fel de operaţiune de modificare a bazei de date DB (realizează doar o operaţiune de citire), şi de aceea poate fi rulată în siguranţă în orice moment.';
$string['confirmcheckdefaults'] = 'Această funcţionalitate va căuta inconsecvenţe în valorile implicite setate în cadrul serverului dumneavoastră Moodle şi va genera (însă nu va executa) statement-urile SQL necesare care ar asigura corectitudinea valorilor implicite.<br /><br />
Odată generate aceste statement-uri le veţi putea copia şi rula din interfaţa favorită SQL (nu uitaţi să realizaţi o copie de rezervă a datelor înainte de a rula aceste statement-uri).<br /><br />
Înainte de a lansa căutarea de numere întregi asiguraţi-vă că rulaţi cea mai recentă versiune a Moodle (1.8, 1.9, 2.x ...).<br /><br />
Această funcţionalitate nu realizează niciun fel de operaţiune de modificare a bazei de date DB (realizează doar o operaţiune de citire), şi de aceea poate fi rulată în siguranţă în orice moment.';
$string['confirmcheckindexes'] = 'Această funcţionalitate va căuta indecşii care ar putea să lipsească în cadrul serverului dumneavoastră Moodle şi va genera (însă nu va executa) statement-urile SQL necesare astfel încât totul să fie la actualizat zi.<br /><br />
Odată generate aceste statement-uri le veţi putea copia şi rula din interfaţa favorită SQL (nu uitaţi să realizaţi o copie de rezervă a datelor înainte de a rula aceste statement-uri).<br /><br />
Înainte de a lansa căutarea de indecşi care ar putea să lipsească asiguraţi-vă că rulaţi cea mai recentă versiune a Moodle (1.8, 1.9, 2.x ...).<br /><br />
Această funcţionalitate nu realizează niciun fel de operaţiune de modificare a bazei de date DB (realizează doar o operaţiune de citire), şi de aceea poate fi rulată în siguranţă în orice moment.';
$string['confirmdeletefield'] = 'Sunteți absolut siguri că doriți să eliminați acest câmp:';
$string['confirmdeleteindex'] = 'Sunteţi absolut siguri că doriţi să eliminaţi acest index:';
$string['confirmdeletekey'] = 'Sunteţi absolut siguri că doriţi să eliminaţi această cheie:';
$string['confirmdeletetable'] = 'Sunteţi absolut siguri că doriţi să eliminaţi acest tabel:';
$string['confirmdeletexmlfile'] = 'Sunteţi absolut siguri că doriţi să eliminaţi  acest fişier:';
$string['confirmrevertchanges'] = 'Sunteţi absolut siguri că doriţi să anulaţi modificările realizate asupra:';
$string['create'] = 'Creează';
$string['createtable'] = 'Creează tabel';
$string['defaultincorrect'] = 'Valoare implicită incorectă';
$string['delete'] = 'Șterge';
$string['delete_field'] = 'Şterge câmp';
$string['delete_index'] = 'Şterge index';
$string['delete_key'] = 'Şterge cheie';
$string['delete_table'] = 'Șterge tabel';
$string['delete_xml_file'] = 'Șterge fișier XML';
$string['down'] = 'Jos';
$string['duplicate'] = 'Creează un duplicat';
$string['duplicatefieldname'] = 'Există deja un câmpul cu acest nume';
$string['edit'] = 'Modifică';
$string['edit_field'] = 'Modifică câmp';
$string['edit_index'] = 'Modifică index';
$string['edit_key'] = 'Modifică cheie';
$string['edit_table'] = 'Modifică tabel';
$string['edit_xml_file'] = 'Modifică fișier XML';
$string['enumvaluesincorrect'] = 'Valori incorecte pentru câmp de enumerare';
$string['field'] = 'Câmp';
$string['fieldnameempty'] = 'Numele câmpului gol';
$string['fields'] = 'Câmpuri';
$string['filenotwriteable'] = 'Fişier fără permisiuni de scriere';
$string['floatincorrectdecimals'] = 'Număr incorect de zecimale pentru câmp de tip real';
$string['floatincorrectlength'] = 'Lungime incorectă pentru câmp de tip real';
$string['gotolastused'] = 'Du-te la ultimul fişier folosit';
$string['incorrectfieldname'] = 'Nume incorect';
$string['index'] = 'Index';
$string['indexes'] = 'Indecşi';
$string['integerincorrectlength'] = 'Lungime incorectă pentru câmp de tip întreg';
$string['key'] = 'Cheie';
$string['keys'] = 'Chei';
$string['listreservedwords'] = 'Lista de Cuvinte Rezervate <br />(se foloseşte la actualizarea listei cu cuvinte rezervate <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> updated)';
$string['load'] = 'Încarcă';
$string['main_view'] = 'Pagina principală';
$string['missing'] = 'Lipsesc';
$string['missingindexes'] = 'Indecşii care lipseau au fost găsiţi';
$string['mustselectonefield'] = 'Pentru a putea vizualiza acţiunile legate de un câmp trebuie să selectaţi câmpul dorit!';
$string['mustselectoneindex'] = 'Pentru a putea vizualiza acţiunile legate de un index trebuie să selectaţi indexul dorit!';
$string['mustselectonekey'] = 'Pentru a putea vizualiza acţiunile legate de o cheie trebuie să selectaţi cheia dorită!';
$string['newfield'] = 'Câmp nou';
$string['newindex'] = 'Index nou';
$string['newkey'] = 'Cheie nouă';
$string['newtable'] = 'Tabel nou';
$string['newtablefrommysql'] = 'Tabel nou de la MySQL';
$string['new_table_from_mysql'] = 'Tabel nou de la MySQL';
$string['nomissingindexesfound'] = 'Nu există indecşi lipsă, nu este nevoie să realizaţi nicio acţiune asupra bazei de date.';
$string['nowrongdefaultsfound'] = 'Nu au fost identificate valori implicite inconsecvente, nu este nevoie să realizaţi nicio acţiune asupra bazei de date.';
$string['nowrongintsfound'] = 'Nu au fost identificate numere întregi greşite, nu este nevoie să realizaţi nicio acţiune asupra bazei de date.';
$string['numberincorrectdecimals'] = 'Număr incorect de zecimale pentru câmp numeric';
$string['numberincorrectlength'] = 'Lungime incorectă pentru câmp numeric';
$string['pluginname'] = 'Editor XMLDB';
$string['reserved'] = 'Rezervat';
$string['reservedwords'] = 'Cuvinte rezervate';
$string['revert'] = 'Revino';
$string['revert_changes'] = 'Anulează schimbările';
$string['save'] = 'Salvează';
$string['searchresults'] = 'Rezultatele căutării';
$string['selectaction'] = 'Selectaţi acţiunea:';
$string['selectdb'] = 'Selectaţi baza de date:';
$string['selectfieldkeyindex'] = 'Selectaţi câmp/cheie/index:';
$string['selectonecommand'] = 'Pentru a vedea codul PHP al unei Acţiuni selectaţi-o din listă';
$string['selectonefieldkeyindex'] = 'Pentru a vedea codul PHP al unui Câmp/Chei/Index selectaţi-l din listă';
$string['selecttable'] = 'Selectaţi tabel:';
$string['table'] = 'Tabel';
$string['tables'] = 'Tabele';
$string['unload'] = 'Descarcă';
$string['up'] = 'Sus';
$string['view'] = 'Vizualizare';
$string['viewedited'] = 'Vizualizaţi modificările';
$string['vieworiginal'] = 'Vizualizaţi originalul';
$string['viewphpcode'] = 'Vizualizaţi codul PHP';
$string['view_reserved_words'] = 'Vizualizaţi cuvintele rezervate';
$string['viewsqlcode'] = 'Vizualizaţi codul SQL';
$string['view_structure_php'] = 'Vizualizaţi structura PHP';
$string['view_structure_sql'] = 'Vizualizaţi structura SQL';
$string['view_table_php'] = 'Vizualizaţi tabel PHP';
$string['view_table_sql'] = 'Vizualizaţi tabel SQL';
$string['wrong'] = 'Greșit';
$string['wrongdefaults'] = 'Au fost identificaţi parametri impliciţi greşiţi';
$string['wrongints'] = 'Au fost identificate numere întregi greşite';
$string['wronglengthforenum'] = 'Lungime incorectă pentru câmpul de tip enumerare';
$string['wrongreservedwords'] = 'Cuvinte rezervate utilizate în prezent<br />(numele tablelelor nu sunt importante dacă utilizaţi $CFG->prefix)';
$string['yesmissingindexesfound'] = 'În baza dumneavoastră de date a fost identificată lipsa unor indecşi. În continuare vă prezentăm detalii despre aceştia precum şi statement-urile SQL ce vor putea fi rulate, din interfaţa SQL pe care o preferaţi pentru corectarea acestora (nu uitaţi să realizaţi o copie de siguranţă a datelor înainte de a realiza această operaţiune). <br /><br /> După realizarea corecturii se recomandă să rulaţi din nou căutarea pentru a vă asigura că toţi indecşii sunt prezenţi în baza de date.';
$string['yeswrongdefaultsfound'] = 'În baza dumneavoastră de date au fost identificate valori implicite inconsecvente. În continuare vă prezentăm detalii despre aceştia precum şi statement-urile SQL ce vor putea fi rulate, din interfaţa SQL pe care o preferaţi pentru corectarea acestora (nu uitaţi să realizaţi o copie de siguranţă a datelor înainte de a realiza această operaţiune). <br /><br /> După realizarea corecturii se recomandă să rulaţi din nou căutarea pentru a vă asigura că toate valorile implicite din baza dumneavoastră de date sunt consecvente.';
$string['yeswrongintsfound'] = 'În baza dumneavoastră de date au fost identificate numere întregi incorecte. În continuare vă prezentăm detalii despre acestea precum şi statement-urile SQL ce vor putea fi rulate, din interfaţa SQL pe care o preferaţi pentru corectarea acestora (nu uitaţi să realizaţi o copie de siguranţă a datelor înainte de a realiza această operaţiune). <br /><br /> După realizarea corecturii se recomandă să rulaţi din nou căutarea pentru a vă asigura că într-adevăr nu mai există în baza de date numere întregi greşite.';
