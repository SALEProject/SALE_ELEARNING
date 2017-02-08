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
 * Strings for component 'enrol', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugin-uri disponibile pentru înscriere la curs';
$string['addinstance'] = 'Adaugă metoda';
$string['ajaxnext25'] = 'Urmatorii 25 ...';
$string['ajaxoneuserfound'] = '1 utilizator găsit';
$string['ajaxxusersfound'] = '{$a} utilizatorii găsiți';
$string['assignnotpermitted'] = 'Nu aveți permisiunea sau nu puteți atribui roluri în acest curs.';
$string['bulkuseroperation'] = 'Operație utilizator în masă';
$string['configenrolplugins'] = 'Vă rugăm să selectați toate plugin-urile necesare și să le aranjați apoi în ordinea corespunzătoare.';
$string['custominstancename'] = 'Nume instanță personalizat';
$string['defaultenrol'] = 'Adaugă instanță la noi cursuri';
$string['defaultenrol_desc'] = 'Este posibil să adăugați acest plugin pentru toate cursurile noi în mod implicit.';
$string['deleteinstanceconfirm'] = 'Sunteți pe punctul de a șterge metoda de înscriere "{$a->nume}". Toți {$a->utilizatorii} utilizatorii inscriși în prezent prin această metodă vor fi scoși de la curs și orice date referitoare la curs, cum ar fi notele utilizatorilor, apartenența la un grup sau abonamentele la forum vor fi șterse.

Sunteți sigur(ă) că doriți să continuați?';
$string['deleteinstancenousersconfirm'] = 'Sunteți pe punctul de a șterge metoda de înscriere "{$a->nume}". Sigur doriți să continuați?';
$string['durationdays'] = '{$a} zile';
$string['editenrolment'] = 'Editare înscriere';
$string['enrol'] = 'Înscriere';
$string['enrolcandidates'] = 'Utilizatorii care nu sunt înscriși';
$string['enrolcandidatesmatching'] = 'Grupare utlizatori neînscriși';
$string['enrolcohort'] = 'Înscriere cohorta';
$string['enrolcohortusers'] = 'Înscriere utilizatorilor';
$string['enrollednewusers'] = 'Utilizatori noi {$a} înscriși cu succes';
$string['enrolledusers'] = 'Utilizatori înscriși';
$string['enrolledusersmatching'] = 'Grupare utilizatori înscriși';
$string['enrolme'] = 'Înscrie-mă la cursul acesta';
$string['enrolmentinstances'] = 'Metode de înscriere';
$string['enrolmentnew'] = 'Înscriere nouă la {$a}';
$string['enrolmentnewuser'] = 'utilizatorul {$a->user} s-a înscris la cursul "{$a->course}"';
$string['enrolmentoptions'] = 'Opțiunile de înscriere';
$string['enrolments'] = 'Inscrieri';
$string['enrolnotpermitted'] = 'Nu aveți permisiunea să înscrieți pe cineva la acest curs';
$string['enrolperiod'] = 'Durată înscrieri';
$string['enroltimecreated'] = 'Înscriere creată';
$string['enroltimeend'] = 'Înscrierea se încheie';
$string['enroltimestart'] = 'Înscrierea începe';
$string['enrolusage'] = 'Instanțe / inscrieri';
$string['enrolusers'] = 'Înscriere utilizatorilor';
$string['errajaxfailedenrol'] = 'Nu a reușit să se înscrie utilizatorul';
$string['errajaxsearch'] = 'A apărut o eroare când se căutau utilizatorii';
$string['erroreditenrolment'] = 'A apărut o eroare în timp ce se edita înscrierea utilizatorilor';
$string['errorenrolcohort'] = 'Eroare la crearea exemplului înscrierii cohortei sincronizate în acest curs.';
$string['errorenrolcohortusers'] = 'Eroare la înscrierea membrilor cohortei la acest curs.';
$string['errorthresholdlow'] = 'Pragul de notificare trebuie să fie de cel puțin o zi.';
$string['errorwithbulkoperation'] = 'A apărut o eroare în timp ce se procesa modificarea înscrierii dumneavoastră.';
$string['expirynotify'] = 'Notificare înaintea expirării înscrierii';
$string['expirynotifyall'] = 'Înscriere și utilizator înscris';
$string['expirynotifyenroller'] = 'Doar înscriere';
$string['expirynotify_help'] = 'Această setare determină dacă mesajele de notificare a expirării sunt trimise.';
$string['expirynotifyhour'] = 'Ora pentru a trimite notificări de expirare a înscrierii';
$string['expirythreshold'] = 'Prag de notificare';
$string['expirythreshold_help'] = 'Utilizatorii trebuie să fie notificați cu cît timp înainte ca înscrierea să expire?';
$string['extremovedaction'] = 'Acțiune externă de anulare a înscrierii';
$string['extremovedaction_help'] = 'Selectaţi un curs de acțiune care să se urmeze în cazul în care opțiunea de înscriere nu mai este disponibilă din sursa externă de înscriere. Reţineţi că unele date ale utilizatorilor cât şi unele setări vor fi pierdute din cursurile la care aceștia erau înscriși.';
$string['extremovedkeep'] = 'Păstrare utilizator înscris';
$string['extremovedsuspend'] = 'Dezactivați înscriere curs';
$string['extremovedsuspendnoroles'] = 'Dezactivați înscriere curs și eliminați rolurilor';
$string['extremovedunenrol'] = 'Anulare înscriere utilizator la curs';
$string['finishenrollingusers'] = 'Terminare înscriere utilizatori';
$string['invalidenrolinstance'] = 'Instanță de înscriere invalidă';
$string['invalidrole'] = 'Rol invalid';
$string['manageenrols'] = 'Gestionați plugin-uri înscriere';
$string['manageinstance'] = 'Administrare';
$string['nochange'] = 'Nici o schimbare';
$string['noexistingparticipants'] = 'Nu există participanți';
$string['none'] = 'Nici unul';
$string['notenrollable'] = 'Nu te poți înscrie singur la acest curs.';
$string['notenrolledusers'] = 'Alți utilizatori';
$string['otheruserdesc'] = 'Următorii utilizatori nu sunt înscriși la acest curs, dar au roluri moștenite sau atribuite în cadrul acestuia.';
$string['participationactive'] = 'Activ';
$string['participationstatus'] = 'Stare';
$string['participationsuspended'] = 'Suspendat';
$string['periodend'] = 'până la {$a}';
$string['periodnone'] = 'înscris {$a}';
$string['periodstart'] = 'de la {$a}';
$string['periodstartend'] = 'de la {$a->start} până la {$a->end}';
$string['recovergrades'] = 'Dacă este posibil, recuperează notele vechi ale utilizatorului';
$string['rolefromcategory'] = '{$a->rol} (Moștenit de la categoria de curs)';
$string['rolefrommetacourse'] = '{$a-> rol} (Moștenit de la cursul părinte)';
$string['rolefromsystem'] = '{$a->rol} (Asignat la nivel de site)';
$string['rolefromthiscourse'] = '{$a->role} (Atribuit în acest curs)';
$string['startdatetoday'] = 'Azi';
$string['synced'] = 'Sincronizat';
$string['totalenrolledusers'] = '{$a} utilizatori înscriși';
$string['totalotherusers'] = '{$a} alți utilizatori';
$string['unassignnotpermitted'] = 'Nu aveți permisiunea de a anula roluri în acest curs';
$string['unenrol'] = 'Revocă înscrierea';
$string['unenrolconfirm'] = 'Chiar vrei să anulezi înscrierea utilizatorului "{$a->user}" de la cursul "{$a->course}"?';
$string['unenrolme'] = 'Revocă înscrierea la {$a}';
$string['unenrolnotpermitted'] = 'Nu aveți permisiunea sau nu puteți scoate acest utilizator de la acest curs.';
$string['unenrolroleusers'] = 'Revocă înscriere utilizatori';
$string['uninstallmigrating'] = 'Schimbare "{$a}" înscrieri';
$string['unknowajaxaction'] = 'Acțiune solicitată necunoscută';
$string['unlimitedduration'] = 'Nelimitat';
$string['usersearch'] = 'Căutați';
$string['withselectedusers'] = 'Cu utilizatorii selectați';
