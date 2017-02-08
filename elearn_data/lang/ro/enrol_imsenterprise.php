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
 * Strings for component 'enrol_imsenterprise', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'După salvarea setărilor recomandăm realizarea următoarelor acţiuni:';
$string['allowunenrol'] = 'Permite IMS data să  <strong>anuleze</strong> înscrierile  cursanţilor/profesorilor';
$string['allowunenrol_desc'] = 'Dacă opțiunea este activată, înscrierile la curs vor fi eliminate atunci când se specifică în datele Enterprise.';
$string['basicsettings'] = 'Setări de bază';
$string['coursesettings'] = 'Opţiuni date cursuri';
$string['createnewcategories'] = 'Creează categorii noi de cursuri (ascunse) dacă nu sunt găsite în Moodle';
$string['createnewcategories_desc'] = 'În cazul în care elementul <org> <orgunit> este prezent în datele unui curs, conţinutul acestuia va fi folosit pentru a specifica o categorie în cazul în care cursul este creat de la zero. Plugin-ul NU va reclasifica cursurile existente.

Dacă nu există o categorie cu numele dorit, va fi creată o categorie ascunsă.';
$string['createnewcourses'] = 'Creează cursuri noi (ascunse) dacă nu sunt găsite în Moodle';
$string['createnewcourses_desc'] = 'Dacă opțiunea este activată, plugin-ul de înscriere IMS Enterprise poate crea cursuri noi pentru oricare corespondent găsit în baza de date IMS, dar nu și în baza de date Moodle. Orice cursuri nou-create vor fi ascunse inițial.';
$string['createnewusers'] = 'Creează conturi pentru utilizatori care nu s-au înregistrat încă pe Moodle';
$string['createnewusers_desc'] = 'Datele din înscrierile IMS Enterprise descriu de obicei un grup de utilizatori. Dacă opțiunea este activată, pot fi create conturi pentru utilizatorii care nu figurează în baza de date Moodle.

Utilizatorii sunt căutați inițial după "idnumber", şi ulterior după numele de utilizator Moodle. Parolele nu sunt importate de către plugin-ul IMS Enterprise. Este recomandată utilizarea unui plugin de autentificare pentru autentificarea utilizatorilor.
';
$string['cronfrequency'] = 'Frecvenţă procesare';
$string['deleteusers'] = 'Şterge conturi utilizatori atunci când acest lucru este specificat în IMS data';
$string['deleteusers_desc'] = 'Dacă opțiunea este activată, datele privind înscrierea conținute de pluginul IMS Enterprise pot să specifice ştergerea conturilor de utilizator (în cazul în care stegulețul "recstatus" este setat la 3 - ştergere cont).

Aşa cum se obișnuiește în Moodle, înregistrarea utilizatorului nu este de fapt eliminată din baza de date Moodle ci se marchează ștergerea contului.';
$string['doitnow'] = 'efectuează o operaţiune de import IMS Enterprise în acest moment';
$string['emptyattribute'] = 'Lăsați necompletat';
$string['filelockedmail'] = 'Fişierul text ({$a}) pe care îl folosiţi pentru înscrierile pe bază de fişier IMS nu poate fi şters de procesul cron. Acest lucru se întâmplă cel mai adesea din cauză că nu există permisiunea necesară. Vă rugăm setaţi permisiunile necesare astfel încât Moodle să poată şterge fişierul respectiv, în caz contrar va fi procesat în buclă';
$string['filelockedmailsubject'] = 'Eroare importantă: Fişier Înscrieri';
$string['fixcasepersonalnames'] = 'Scrie numele personale cu majuscule';
$string['fixcaseusernames'] = 'Scrie numele de utilizatori cu litere mici';
$string['ignore'] = 'Ignoră';
$string['importimsfile'] = 'Importă fișiere  IMS Enterprise';
$string['imsrolesdescription'] = 'Specificaţiile IMS Enterprise includ 8 tipuri diferite de roluri. Vă rugăm stabiliţi modul în care doriţi ca aceste roluri să fie folosite în cadrul Moodle, şi de asemenea dacă doriţi să eliminaţi vreunul din ele.';
$string['location'] = 'Locaţie fişier';
$string['logtolocation'] = 'Locaţia în care se salvează fişierul cu înregistrarea activităţii (lăsaţi necompletat dacă nu doriţi înregistrarea activităţii)';
$string['mailadmins'] = 'Notifică admin prin email';
$string['mailusers'] = 'Notifică utilizatori prin email';
$string['messageprovider:imsenterprise_enrolment'] = 'Mesaj de înrolare IMS Enterprise';
$string['miscsettings'] = 'Diverse';
$string['pluginname'] = 'Fișier IMS Enterprise';
$string['processphoto'] = 'Adaugă informaţiile despre fotografia utilizatorului la profil';
$string['processphotowarning'] = 'ATENŢIE!: procesarea imaginilor va aduce o încărcătură suplimentară serverului. În cazul în care estimaţi un număr mare de utilizatori se recomandă să nu activaţi această opţiune.';
$string['restricttarget'] = 'Procesează datele doar dacă se specifică următoarea valoare';
$string['restricttarget_desc'] = 'Un fișier de date IMS Enterprise  ar putea avea mai multe întrebuințări - LMS-uri diferite sau sisteme diferite în cadrul unei școli/universități. Este posibil să se precizeze în fișierul de date IMS Enterprise destinația/destinațiile datelor prin numirea lor în tag-urile <target> cuprinse în tag-ul <properties>.

În general, nu trebuie să vă faceţi griji pentru acest lucru. Lăsaţi necompletată setarea şi Moodle va procesa întotdeauna fişierul de date, indiferent dacă se specifică o destinație sau nu. În caz contrar, completaţi numele exact, care va apărea  în interiorul tag-ului <target>.';
$string['roles'] = 'Roluri';
$string['sourcedidfallback'] = 'Foloseşte &quot;sourcedid&quot; ca userid al unei persoane dacă nu s-a găsit câmpul &quot;userid&quot;';
$string['truncatecoursecodes'] = 'Fragmentează codurile cursurilor la această lungime';
$string['truncatecoursecodes_desc'] = 'În unele situaţii este posibil să aveţi coduri de curs pe care doriţi să le scurtați la o lungime specificată înainte de prelucrare.Dacă acesta este cazul, introduceţi numărul de caractere maxim în această rubrică. În caz contrar, lăsaţi caseta goală şi scurtarea se va produce.';
$string['usecapitafix'] = 'Selectaţi această căsuţă dacă folosiţi &quot;Capita&quot; (formatul XML al acestora este puţin greşit)';
$string['usecapitafix_desc'] = 'Sistemul de date al studenților furnizat de Capita a fost gasit să conțină o eroare în codul XML eportat. Dacă utilizaţi Capita, ar trebui să activaţi această setare - în caz contrar, lăsați-o nebifată.';
$string['usersettings'] = 'Opţiuni date utilizator';
$string['zeroisnotruncation'] = 'completaţi 0 dacă nu doriţi fragmentarea';
