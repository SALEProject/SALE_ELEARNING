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
 * Strings for component 'grading', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '"{$a->method} \'este selectată ca metodă de notare activă pentru        "{$a->area}\' zona';
$string['activemethodinfonone'] = 'Nu este selectată nicio metodă avansată de notare pentru \'{$a->area}\' zona. Va fi folosită notarea simplă.';
$string['changeactivemethod'] = 'Schimbă metoda actuală de notare';
$string['clicktoclose'] = 'click pentru a închide';
$string['formnotavailable'] = 'Metoda de clasificare avansată a fost selectată pentru a fi utilizată, dar formularul de clasificare nu este disponibil încă. Este posibil să trebuiască să îl definiți mai întâi prin intermediul unui link în block-ul  de Administrare.';
$string['gradingformunavailable'] = 'Vă rugăm să rețineți: formularul de notare avansată nu este finalizat acum. Metodă de clasificare simplă va fi utilizată până când formularul va avea un statut valid.';
$string['gradingmanagement'] = 'Notare avansată';
$string['gradingmanagementtitle'] = 'Notare avansată: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metodă de notare';
$string['gradingmethod_help'] = 'Alegeți metoda de notare avansată care ar trebui să fie utilizată pentru calcularea notelor în contextul dat.

Pentru a dezactiva notarea avansată și a reveni la mecanismul de notare implicit, alegeți "clasificare directă simplă".';
$string['gradingmethodnone'] = 'Notare simplă directă';
$string['gradingmethods'] = 'Metode de notare';
$string['manageactionclone'] = 'Creează formular nou de notare dintr-un șablon';
$string['manageactiondelete'] = 'Șterge formularul definit în prezent';
$string['manageactiondeleteconfirm'] = 'Aveți de gând să ștergeți formularul de notare \'{$a->formname}\'  și toate informațiile asociate de la \'{$a->component} ({$a->area})\'.  Vă rugăm să vă asigurați că ați înțeles următoarele consecințe:

* Nu există nici o modalitate de a anula această operație.
* Puteți alege o altă metodă de clasificare, inclusiv "clasificarea simplă directă" fără a șterge acest formular.
* Toate informațiile cu privire la modul în care formularele sunt completate vor fi pierdute.
* Notele calculate și stocate în catalog nu vor fi afectate. Cu toate acestea, explicația privind modul în care acestea au fost calculate nu va fi disponibilă.
* Această operațiune nu afectează eventualele copii ale acestui formular în alte activități.';
$string['manageactiondeletedone'] = 'Formularul a fost șters cu succes';
$string['manageactionedit'] = 'Editează definiția actuală a formularului';
$string['manageactionnew'] = 'Definește noul formular  de clasificare de la zero';
$string['manageactionshare'] = 'Publică formularul sub formă de șablon nou';
$string['manageactionshareconfirm'] = 'Veți salva o copie a formularului de clasificare \'{$a}\' ca un nou șablon public. Alti utilizatori din site-ul dumneavoastră vor putea să creeze noi formulare de notare în activitățile lor din acel șablon.';
$string['manageactionsharedone'] = 'Formularul a fost salvat cu succes sub formă de șablon';
$string['noitemid'] = 'Notarea nu este posibilă. Elementul notat nu există.';
$string['nosharedformfound'] = 'Nu a fost găsit niciun șablon';
$string['searchownforms'] = 'Include propriile mele formulare';
$string['searchtemplate'] = 'Căutare formulare de notare';
$string['searchtemplate_help'] = 'Puteți căuta un formular de notare și să îl folosiți ca un șablon pentru noile formulare de notare de aici. Pur și simplu tastați cuvinte care ar trebui să apară undeva în numele formularului, în descrierea sau în cuprinsul formularului. Pentru a căuta o frază, inserați întreaga interogare în ghilimele duble.

În mod implicit, numai formularele de notare care au fost salvate ca șabloane comune sunt incluse în rezultatele de căutare. Puteți include, de asemenea toate formularele dumneavoastră de notare în rezultatele de căutare. În acest fel, puteți pur și simplu re-utiliza formularele de clasificare fără partajarea lor. Doar formularele marcate ca "gata de utilizare" pot fi re-utilizat în acest fel.';
$string['statusdraft'] = 'Draft';
$string['statusready'] = 'Gata pentru utilizare';
$string['templatedelete'] = 'Șterge';
$string['templatedeleteconfirm'] = 'Doriți să ștergeți șablonul partajat \'{$a}\'. Ștergerea unui șablon nu afectează formularele existente care au fost create pe baza lui.';
$string['templateedit'] = 'Editează';
$string['templatepick'] = 'Folosește acest șablon';
$string['templatepickconfirm'] = 'Doriți să utilizați formularul de notare "{$a->formname}\' ca un șablon pentru noul formular de notare în \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utilizați acest formular ca un șablon';
$string['templatesource'] = 'Locație: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formular propriu';
$string['templatetypeshared'] = 'Șablon partajat';
