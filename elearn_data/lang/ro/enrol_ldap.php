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
 * Strings for component 'enrol_ldap', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Se asignează rolul  \'{$a->role_shortname}\' utilizatorului\'{$a->user_username}\' în cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nu s-a putut asigna rolul \'{$a->role_shortname}\' utilizatorului \'{$a->user_username}\' în cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = 'Cursurile pot fi create automat dacă există înscrieri la cursuri care nu există încă în Moodle.';
$string['autocreate_key'] = 'Auto-creare';
$string['autocreation_settings'] = 'Setări creare automată de cursuri';
$string['bind_dn'] = 'Dacă doriţi să folosiţi bind-user la căutarea utilizatorilor specificaţi acest lucru aici. Iată un exemplu: \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Nume ales pentru utilizator-bind';
$string['bind_pw'] = 'Parolă pentru bind-user.';
$string['bind_pw_key'] = 'Parolă';
$string['bind_settings'] = 'Setări bind';
$string['cannotcreatecourse'] = 'Nu se poate crea cursul: lipsesc datele necesare din înregistrarea LDAP!';
$string['category'] = 'Categoria pentru cursurile create automat.';
$string['category_key'] = 'Categorie';
$string['contexts'] = 'Contexte LDAP';
$string['couldnotfinduser'] = 'Nu s-a găsit utilizatorul \'{$a}\', treci peste';
$string['course_fullname'] = 'Opţional: câmpul LDAP îşi va lua numele complet din.';
$string['course_fullname_key'] = 'Categorie';
$string['course_idnumber'] = 'Asociaţi cu un identificator unic în LDAP, de obicei <em>cn</em> sau <em>uid</em>.  Se recomandă să blocaţi valoarea dacă folosiţi crearea automată de cursuri.';
$string['course_idnumber_key'] = 'ID';
$string['coursenotexistskip'] = 'Cursul  \'{$a}\' nu există iar auto-crearea este dezactivată, treci peste';
$string['course_search_sub'] = 'Căutare apartenență la grup în subcontexte';
$string['course_search_sub_key'] = 'Căutare subcontexte';
$string['course_settings'] = 'Setări înscriere la curs';
$string['course_shortname'] = 'Opţional: câmpul LDAP îşi va lua numele prescurtat din.';
$string['course_shortname_key'] = 'Nume prescurtat';
$string['course_summary'] = 'Opţional: câmpul LDAP îşi va lua rezumatul din.';
$string['course_summary_key'] = 'Rezumat';
$string['createcourseextid'] = 'CREEAZĂ Utilizator înscris la un curs inexistent';
$string['createnotcourseextid'] = 'Utilizator înscris la un curs inexistent  \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Se creează cursul \'{$a}\'...';
$string['duplicateshortname'] = 'Nu s-a putut crea cursul. Numele prescurat există deja.  Se trece peste cursul cu ID  \'{$a->idnumber}\'...';
$string['editlock'] = 'Blocare valoare';
$string['emptyenrolment'] = 'Înscriere necompletată pentru rolul \'{$a->role_shortname}\' în cursul \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Înscriere utilizator  \'{$a->user_username}\' în cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Înscriere necompletată pentru rolul "{$a-> rol shortname}" în cursul "{$a-> curs shortname}';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() nu acceptă tipul de utilizator selectat {$a}';
$string['extcourseidinvalid'] = 'ID-ul extern al cursului este invalid!';
$string['extremovedsuspend'] = 'Înscriere invalidă pentru utilizator  \'{$a->user_username}\' în cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Înscriere invalidă și roluri anulate pentru utilizator \'{$a->user_username}\' în cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Anularea înscrierii utilizatorului \'{$a->user_username}\' din cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Eșuare!';
$string['general_options'] = 'Opţiuni generale';
$string['group_memberofattribute'] = 'Numele atributului care menționează căror grupuri le aparține un anume utilizator sau un grup (e.g., memberOf, groupMembership, etc.)';
$string['group_memberofattribute_key'] = '\'Membru al\' atributului';
$string['host_url'] = 'Specificaţi LDAP host în format URL, ex:
\'ldap://ldap.myorg.com/\'
or \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'Gazdă URL';
$string['ldap_encoding_key'] = 'codare LDAP';
$string['memberattribute'] = 'Atribut membru LDAP';
$string['nosuchrole'] = 'Nu există un asemenea rol: \'{$a}\'';
$string['objectclass'] = 'objectClass folosit la căutarea cursurilor. De obicei
\'posixGroup\'.';
$string['objectclass_key'] = 'Clasă de obiecte';
$string['ok'] = 'OK!';
$string['pluginname'] = 'Înrolări LDAP';
$string['pluginname_desc'] = '<p>Aveţi posibilitatea de a utiliza un server LDAP pentru a controla înscrierile la cursuri.
Se presupune că structura arborescentă LDAP conţine grupuri ce corespund cursurilor, şi că fiecare din aceste grupuri/cursuri va avea elemente echivalente studenţilor.</p>
<p>Cursurile sunt considerate echivalentul grupurilor în
LDAP, cu fiecare din grupuri având mai multe câmpuri de membership
(<em>member</em> sau <em>memberUid</em>) care conţin un cod de identificare unic pentru utilizator.</p>
<p>Pentru a putea utiliza LDAP pentru înscrieri, utilizatorii sitului dumneavoastră <strong>trebuie</strong>
să aibă asociat un valid idnumber field. The LDAP groups must have
that idnumber in the member fields for a user to be enrolled
in the course.
Acest proces ar trebui să funcţioneze bine dacă folosiţi deja Autentificarea LDAP.</p>
<p>Situaţia înscrierilor va fi actualizată la logarea unui utilizator. De asemenea, pentru a controla situaţia înscrierilor puteţi rula un script. Accesaţi
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Acest plugin poate fi configurat astfel încât la crearea de noi grupuri în LDAP să fie create şi cursuri noi.</p>';
$string['pluginnotenabled'] = 'Plugin neactivat!';
$string['role_mapping_context'] = 'Contexte LDAP pentru {$a}';
$string['role_mapping_key'] = 'Mapare roluri de la LDAP';
$string['roles'] = 'Mapare roluri';
$string['server_settings'] = 'Setări Server LDAP';
$string['synccourserole'] = '== Se sincronizează cursul  \'{$a->idnumber}\' pentru rolul \'{$a->role_shortname}\'';
$string['template'] = 'Opţional: cursurile create automat pot copia setările dintr-un curs şablon.';
$string['template_key'] = 'Șablon';
$string['updatelocal'] = 'Actualizează date locale';
$string['user_contexts_key'] = 'Contexte';
$string['user_search_sub_key'] = 'Caută subcontexte';
$string['user_type'] = 'Dacă grupul conține nume specifice, menționați modul în care membrii sunt stocați în LDAP';
$string['user_type_key'] = 'Tipul utilizatorului';
$string['version'] = 'Versiunea protocolului LDAP utilizată de serverul dumneavoastră.';
$string['version_key'] = 'Versiune';
