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
 * Strings for component 'attendance', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['acronym'] = 'Acronim';
$string['add'] = 'Adaugă';
$string['addsession'] = 'Adaugă sesiune';
$string['Afull'] = 'Absent';
$string['all'] = 'Toate';
$string['allcourses'] = 'Toate cursurile';
$string['attendance:changepreferences'] = 'Se schimbă preferințele';
$string['attendancedata'] = 'Data prezenței';
$string['attendance:export'] = 'Exportă rapoartele';
$string['attendanceforthecourse'] = 'Prezența la curs';
$string['attendancegrade'] = 'Nota pentru prezență';
$string['attendance:manageattendances'] = 'Administrează prezențele';
$string['attendancenotset'] = 'Trebuie să vă setați prezența';
$string['attendancenotstarted'] = 'Nu a început încă prezența pentru acest curs';
$string['attendancepercent'] = 'Procent de prezență';
$string['attendancereport'] = 'Raport de prezență';
$string['attendanceupdated'] = 'Prezența a fost actualizată cu succes';
$string['attendance:view'] = 'Vezi prezența';
$string['attendance:viewreports'] = 'Se vizualizează rapoartele';
$string['attrecords'] = 'Înregistrări ale prezenței';
$string['calclose'] = 'Închide';
$string['calmonths'] = 'Ianuarie,februarie,martie,aprilie,mai,iunie,iulie,august,septembrie,octombrie,noiembrie,decembrie';
$string['calshow'] = 'Alege data';
$string['caltoday'] = 'Astăzi';
$string['calweekdays'] = 'Lu,Ma,Mi,Jo,Vi,Sâ,Du';
$string['changeattendance'] = 'Schimbă prezența';
$string['changeduration'] = 'Schimbă durata';
$string['changesession'] = 'Schimbă sesiunea';
$string['column'] = 'coloană';
$string['columns'] = 'coloane';
$string['createmultiplesessions'] = 'Creează sesiuni multiple';
$string['createonesession'] = 'Creați o sesiune pentru curs';
$string['defaultdisplaymode'] = 'Mod implicit de afișare';
$string['defaults'] = 'Implicite';
$string['delete'] = 'Șterge';
$string['deletelogs'] = 'Șterge datele de prezență';
$string['deletesession'] = 'Șterge sesiunea';
$string['deletesessions'] = 'Șterge toate sesiunile';
$string['deletingsession'] = 'Șterge sesiunea acestui curs';
$string['deletingstatus'] = 'Se șterge status-ul acestui curs';
$string['description'] = 'Descriere';
$string['display'] = 'Afișează';
$string['displaymode'] = 'Mod de afișare';
$string['donotusepaging'] = 'Nu utilizați paginarea';
$string['downloadexcel'] = 'Descarcă în format Excel';
$string['downloadooo'] = 'Descarcă în format OpenOffice';
$string['downloadtext'] = 'Descarcă în format text';
$string['duration'] = 'Durată';
$string['Eacronym'] = 'E';
$string['editsession'] = 'Editează sesiunea';
$string['Efull'] = 'Învoit';
$string['endofperiod'] = 'Sfârșitul perioadei';
$string['enrolmentsuspended'] = 'Înscriere suspendată';
$string['errorgroupsnotselected'] = 'Selectați una sau mai multe grupuri';
$string['errorinaddingsession'] = 'Eroare la adăugarea sesiunii';
$string['erroringeneratingsessions'] = 'Eroare la generarea sesiunii';
$string['gradebookexplanation'] = 'Nota în catalog';
$string['gradebookexplanation_help'] = 'Modulul de prezență afișează nota actuală în funcție de numărul de puncte pe care le-ați primit până în prezent și numărul de puncte care ar fi putut fi primite până în prezent; nu include cursurile viitoare. În catalog, nota pentru prezență se bazează pe procentajul prezenței actuale și numărul de puncte care pot fi obținute pe întreaga durată a cursului, inclusiv pentru cursurile viitoare. Ca atare, notele pentru prezență afișate în Modulul de prezență și în catalog pot să nu coincidă dar au același procent.

De exemplu, dacă ați primit 8 din 10 puncte până în prezent (80% prezență) și prezența pentru întregul curs este în valoare de 50 de puncte, modulul de prezență va afișa 8/10 iar catalogul va afișa 40/50. Nu ați primit încă 40 de puncte, dar 40 reprezintă valoarea echivalentă procentajului de prezență de 80%. Valoarea punctului primit în modulul de prezență nu poate scădea niciodată, deoarece se bazează doar pe prezența până în prezent; cu toate acestea, valoarea punctului de prezență afișat în catalog poate crește sau descrește în funcție de prezența dumneavoastră viitoare, deoarece se bazează pe participarea la întregul curs.';
$string['gridcolumns'] = 'Coloane tabelare';
$string['hiddensessions'] = 'Sesiuni ascunde';
$string['hiddensessions_help'] = 'Sesiunile sunt ascunse în cazul în care sunt programate înainte de data începerii cursului.

Aveți posibilitatea să utilizați această caracteristică pentru a ascunde sesiunile mai vechi în loc de a le șterge. Numai sesiunile vizibile vor apărea în catalog.';
$string['identifyby'] = 'Identifică studentul după';
$string['includeall'] = 'Selectează toate sesiunile';
$string['indetail'] = 'În detaliu...';
$string['jumpto'] = 'Sari la';
$string['Lacronym'] = 'L';
$string['modulename'] = 'Prezență';
$string['modulename_help'] = 'Modulul de prezență permite profesorului să particie la ore iar studenților să vadă propria lor prezență.

Profesorul poate crea sesiuni multiple și poate marca statsul prezenței ca fiind "Prezent", "Absent", "Întârziat", sau "Învoit", sau poate modifica statusurile.

Rapoartele sunt disponibile pentru întreaga clasă sau individual pentru studenți.';
$string['modulenameplural'] = 'Prezențe';
$string['months'] = 'Luni';
$string['myvariables'] = 'Variabilele mele';
$string['newdate'] = 'O dată nouă';
$string['newduration'] = 'Durată nouă';
$string['noattforuser'] = 'Nu există înregistrări ale prezenței pentru utilizator';
$string['nogroups'] = 'Nu puteți adăuga sesiuni de grup. Nu există grupuri în curs.';
$string['noguest'] = 'Vizitatorii nu pot vedea prezența';
$string['noofdaysabsent'] = 'Numărul de zile de absență';
$string['noofdaysexcused'] = 'Numărul de zile în care a fost învoit';
$string['noofdayslate'] = 'Numărul de zile în care a întârziat';
$string['noofdayspresent'] = 'Numărul de zile în care a fost prezent';
$string['nosessionexists'] = 'Nu există nicio sesiune pentru acest curs';
$string['nosessionsselected'] = 'Nu există sesiuni selectate';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Prezent';
$string['pluginadministration'] = 'Administrarea prezenței';
$string['pluginname'] = 'Prezență';
$string['report'] = 'Raport';
$string['required'] = 'Necesar*';
$string['resetstatuses'] = 'Restaurează status-urile ca implicite';
$string['resultsperpage'] = 'Rezultate pe pagină';
$string['save'] = 'Salvează prezența';
$string['session'] = 'Sesiune';
$string['sessionadded'] = 'Sesiunea a adăugată cu succes';
$string['sessionalreadyexists'] = 'Sesiunea există deja pentru această dată';
$string['sessiondays'] = 'Zilele sesiunii';
$string['sessiondeleted'] = 'Sesiune eliminată cu succes';
$string['sessionexist'] = 'Sesiunea nu a fost adăugată (există deja)';
$string['session_help'] = 'Sesiune';
$string['sessions'] = 'Sesiuni';
$string['sessionscompleted'] = 'Sesiuen completă';
$string['sessionsids'] = 'ID-urile sesiunilor';
$string['sessionstartdate'] = 'Data de începere a sesiunii';
$string['sessiontypeshort'] = 'Tip';
$string['sessionupdated'] = 'Sesiune actualizată cu succes';
$string['setallstatusesto'] = 'Setează status-ul pentru toți utilizatorii la «{$a}»';
$string['settings'] = 'Setări';
$string['showduration'] = 'Afișează durata';
$string['startofperiod'] = 'Începutul perioadei';
$string['status'] = 'Status';
$string['statusdeleted'] = 'Status șters';
$string['statuses'] = 'Status-uri';
$string['strftimedm'] = '%d.%m';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y&nbsp;(%a)';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID student';
$string['submitattendance'] = 'Trimite prezența';
$string['thiscourse'] = 'Acest curs';
$string['update'] = 'Actualizare';
$string['variable'] = 'variabilă';
$string['variablesupdated'] = 'Variabilă actualizată cu succes';
$string['versionforprinting'] = 'versiune pentru tipărire';
$string['viewmode'] = 'Vezi modul';
$string['week'] = 'săptămână(săptămâni)';
$string['weeks'] = 'Săptămâni';
