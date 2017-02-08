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
 * Strings for component 'group', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Adăugat de  {$a}';
$string['addgroup'] = 'Adaugă utilizatorul în grup';
$string['addgroupstogrouping'] = 'Adaugă grup la grupare';
$string['addgroupstogroupings'] = 'Adaugă/şterge grupuri';
$string['adduserstogroup'] = 'Adaugă/şterge utilizatori';
$string['allocateby'] = 'Alocă membri';
$string['anygrouping'] = '[Orice grupare]';
$string['autocreategroups'] = 'Creare automată de grupuri';
$string['backtogroupings'] = 'Înapoi la grupări';
$string['backtogroups'] = 'Înapoi la grupuri';
$string['badnamingscheme'] = 'Trebuie să conţină nici mai mult nici mai puţin decât unul din caracterele \'@\' sau \'#\'';
$string['byfirstname'] = 'În ordine alfabetică după prenume, nume';
$string['byidnumber'] = 'În ordine alfabetică după număr ID';
$string['bylastname'] = 'În ordine alfabetică după nume, prenume';
$string['createautomaticgrouping'] = 'Creează automat grupare';
$string['creategroup'] = 'Creează grup';
$string['creategrouping'] = 'Creează grupare';
$string['creategroupinselectedgrouping'] = 'Creează grup în cadrul grupării';
$string['createingrouping'] = 'Creează în grupare';
$string['createorphangroup'] = 'Creează grup neafiliat';
$string['databaseupgradegroups'] = 'Versiunea grupurilor este în prezent {$a}';
$string['defaultgrouping'] = 'Grupare implicită';
$string['defaultgroupingname'] = 'Grupare';
$string['defaultgroupname'] = 'Grup';
$string['deleteallgroupings'] = 'Şterge toate grupările';
$string['deleteallgroups'] = 'Şterge toate grupurile';
$string['deletegroupconfirm'] = 'Sigur doriţi ştergerea grupului \'{$a}\'?';
$string['deletegrouping'] = 'Şterge grupare';
$string['deletegroupingconfirm'] = 'Sunteţi sigur că doriţi să ştergeţi gruparea {$a}? (Grupurile din cadrul grupării nu vor fi şterse)';
$string['deletegroupsconfirm'] = 'Sigur doriţi ştergerea următoarelor grupuri?';
$string['deleteselectedgroup'] = 'Şterge grupul selectat';
$string['editgroupingsettings'] = 'Editează setări grupare';
$string['editgroupsettings'] = 'Editează setări grup';
$string['enrolmentkey'] = 'Cheie de înregistrare';
$string['enrolmentkey_help'] = 'O cheie de acces permite ca accesul la un curs să fie limitat doar la cei care cunosc cheia. Dacă se specifică o cheie de acces pentru un grup atunci pe lângă curs, utilizatorul va fi automat înscris ca membru al acestui grup ';
$string['erroraddremoveuser'] = 'S-a produs o eroare la adăugarea/ştergerea utilizatorului {$a} la grup';
$string['erroreditgroup'] = 'S-a produs o eroare la crearea/actualizarea grupului {$a}';
$string['erroreditgrouping'] = 'S-a produs o eroare la crearea/actualizarea grupării {$a}';
$string['errorinvalidgroup'] = 'Eroare, grup {$a} incorect';
$string['errorremovenotpermitted'] = 'Nu aveți permisiunea de a șterge membrii grupului {$a} adăugați în mod automat';
$string['errorselectone'] = 'Înainte de a alege această opţiune selectaţi un singur grup';
$string['errorselectsome'] = 'Înainte de a alege această opţiune selectaţi unul sau mai multe grupuri';
$string['evenallocation'] = 'Notă: pentru a balansa alocarea grupurilor, numărul de membri din cadrul fiecărui grup diferă de cel pe care l-aţi specificat.';
$string['existingmembers'] = 'Membri existenţi: {$a}';
$string['filtergroups'] = 'Filtrează grupuri după:';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = 'Operaţiunea de adăugare a grupului {$a} s-a realizat cu success';
$string['groupaddedtogroupingsuccesfully'] = 'Grup {$a->groupname} adăugat în grupare {$a->groupingname} cu succes';
$string['groupby'] = 'Specificaţi';
$string['groupdescription'] = 'Descriere grup';
$string['groupinfo'] = 'Informaţii despre grupul selectat';
$string['groupinfomembers'] = 'Informaţii despre membrii selectaţi';
$string['groupinfopeople'] = 'Informaţii despre persoanele selectate';
$string['grouping'] = 'Grupare';
$string['groupingaddedsuccesfully'] = 'Grupare {$a} adăugată cu succes';
$string['groupingdescription'] = 'Descriere grupare';
$string['grouping_help'] = 'O grupare este o colecţie de grupuri din cadrul unui curs. Dacă se selectează o grupare, cursanții atribuiți diferitelor grupuri din cadrul grupării vor avea posibilitatea să lucreze împreună.';
$string['groupingname'] = 'Nume grupare';
$string['groupingnameexists'] = 'În cadrul acestui curs există deja o grupare cu numele \'{$a}\'. Vă rugăm alegeţi alt nume.';
$string['groupings'] = 'Grupări';
$string['groupingsection'] = 'Acces la grupări';
$string['groupingsection_help'] = 'O grupare este un ansamblu de grupuri din cadrul unui curs. Dacă se selectează o grupare, doar studenții asignați grupurilor din cadrul acestei grupări vor avea acces la această secțiune.';
$string['groupingsonly'] = 'Exclusiv grupări';
$string['groupmember'] = 'Membru al grupului';
$string['groupmemberdesc'] = 'Rol standard pentru un membru al grupului.';
$string['groupmembers'] = 'Membri ai grupului';
$string['groupmembersonly'] = 'Disponibil doar pentru membrii grupului';
$string['groupmembersonlyerror'] = 'Ne pare rău, pentru a putea realiza această operaţiune trebuie să fiţi membrul unui grup utilizat în cadrul aceste activităţi';
$string['groupmembersonly_help'] = 'Dacă se bifează caseta, activitatea (sau resursa) vor fi disponibile numai cursanților atribuiți la grupuri din cadrul grupării selectate.';
$string['groupmemberssee'] = 'Afişează membri grup';
$string['groupmembersselected'] = 'Membrii grupului selectat';
$string['groupmode'] = 'Mod Grupuri';
$string['groupmodeforce'] = 'Mod Grupuri obligatoriu';
$string['groupmodeforce_help'] = 'În cazul în care modul de grup al cursului se suprascrie, se va aplica modul de grup la toate activitățile din curs. Setările modului de grup pentru fiecare activitate vor fi ignorate. ';
$string['groupmode_help'] = 'Această setare are 3 optiuni:

* Fără grupuri - Nu se creează subgrupuri, toată lumea face parte dintr-o mare comunitate
* Grupuri separate - Fiecare membru al grupului poate vedea doar propriul grup, restul fiind invizibilile
* Grupuri vizibile - fiecare membru al grupului lucrează în propriul grup, dar poate vedea și restul grupurilor.

Modul de grup, definit la nivel de curs,  este modul care se aplică implicit pentru toate activităţile din cadrul cursului.Fiecare activitate care suportă crearea de grupuri poate însă să adopte modul său propriu de grupare, deşi în cazul în care modul de grup al cursului este suprascris, setările modului de grup la nivel de activitate vor fi ignorate.';
$string['groupmy'] = 'Grupul meu';
$string['groupname'] = 'Nume grup';
$string['groupnameexists'] = 'Există deja un grup cu numele \'{$a}\' în cadrul acestui curs, vă rugăm alegeţi alt nume.';
$string['groupnotamember'] = 'Ne pare rău, nu sunteţi membru al acestui grup';
$string['groups'] = 'Grupuri';
$string['groupscount'] = 'Grupuri ({$a})';
$string['groupsettingsheader'] = 'Grupuri';
$string['groupsgroupings'] = 'Grupuri &amp; Grupări';
$string['groupsinselectedgrouping'] = 'Grupuri în:';
$string['groupsnone'] = 'Fără grupuri';
$string['groupsonly'] = 'Doar grupuri';
$string['groupspreview'] = 'Previzualizare grupuri';
$string['groupsseparate'] = 'Grupuri separate';
$string['groupsvisible'] = 'Grupuri vizibile';
$string['grouptemplate'] = 'Grup @';
$string['hidepicture'] = 'Ascunde imagine';
$string['importgroups'] = 'Importă grupuri';
$string['javascriptrequired'] = 'Pentru a putea activa această pagină este nevoie de Javascript';
$string['members'] = 'Număr de membri într-un grup';
$string['membersofselectedgroup'] = 'Membri ai:';
$string['namingscheme'] = 'Convenţie nume';
$string['namingscheme_help'] = 'Simbolul (@) poate fi utilizat pentru a crea grupuri cu nume care conţin litere. De exemplu, Grupul @ va genera grupuri numite Grupul A, Grupul B, Grupul C, ...

Simbolul diez (#) poate fi utilizat pentru a crea grupuri cu nume care conţin numere. De exemplu, Grupul # va genera grupurile Grupul 1, Grupul 2, Grupul 3, ...';
$string['newgrouping'] = 'Grupare nouă';
$string['newpicture'] = 'Imagine nouă';
$string['newpicture_help'] = '<P ALIGN=CENTER><B>Încarcă o imagine</B></P>

<P>Poţi încărca o imagine din calculatorul tău pe acest server, imaginea fiind folosită în diferite locuri pentru a te reprezenta.
<P>Din această cauză, cea mai bună imagine este fotografie a chipului tău, făcută de aproape (nu este obligatoriu - poţi folosi ce imagine vrei).
<P>Imaginea trebuie să fie în format JPG sau PNG (numele fişierului se termină de obicei în .jpg sau .png).
<P>Poţi să faci rost de o imagine prin cel puţin una dintre cele 4 metode enumerate mai jos:

<OL>
<LI>Folosind o cameră digitală, imaginea ta ajunge pe calculator în formatul cerut.
<LI>Poţi scana o fotografie tipărită.  Asigură-te că o salvezi în format JPG sau PNG.
<LI>Dacă eşti artist , poţi să desenezi o imagine folosind un program de desen.
<LI>Ultima soluţie, poţi să "furi" imagini de pe web.  <A TARGET=google HREF="http://images.google.com/">http://images.google.com</A> este un loc superb pentru căutarea de imagini. Odată ce ai găsit-o,
    poţi apăsa click-dreapta pe imagine şi să alegi "Save this image..." din meniu.
</OL>

<P>Pentru a încărca imaginea pe server, apasă butonul "Browse" de pe această pagină şi alege imaginea de pe hard disk-ul tău.
<P>NOTĂ: Asigură-te că dimensiunea imaginii nu este mai mare decât valoarea maximă admisă. Dacă dimensiunea este mai mare decât pragul stabilit, imaginea nu va fi încărcată.
<P>Apoi apasă "Update my Profile"  - imaginea va fi tăiată sub forma unui pătrat şi redimensionată la 100x100 pixeli.
<P>Când te întorci la pagina de profil, este posibil ca imaginea să nu apară. Dacă acesta este cazul, apasă butonul "Reload" din bara cu instrumente a browserului.';
$string['noallocation'] = 'Fără alocare';
$string['nogroups'] = 'În cadrul acestui curs nu au fost definite încă grupuri';
$string['nogroupsassigned'] = 'Nu au fost atribuite grupuri';
$string['nopermissionforcreation'] = 'Grupul "{$a}" nu a putut fi creat deoarece nu aveţi permisiunea de a crea grupuri';
$string['nosmallgroups'] = 'Prevent last small group';
$string['notingrouping'] = '[Nu face parte dintr-o grupare]';
$string['nousersinrole'] = 'Nu există utilizatori care să aibă rolul selectat şi să îndeplinească condiţiile cerute';
$string['number'] = 'Număr grupuri/membri';
$string['numgroups'] = 'Număr de grupuri';
$string['nummembers'] = 'Număr de membri în cadrul unui grup';
$string['overview'] = 'Privire generală';
$string['potentialmembers'] = 'Membri potenţiali: {$a}';
$string['potentialmembs'] = 'Membri potențiali';
$string['printerfriendly'] = 'Afişare pentru imprimare';
$string['random'] = 'Aleatoriu';
$string['removefromgroup'] = 'Elimină utilizatorul din grup {$a}';
$string['removefromgroupconfirm'] = 'Sunteți sigur că doriți să eliminați utilizatorul "{$a->user}" din grup "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Şterge grup din grupare';
$string['removegroupingsmembers'] = 'Şterge toate grupurile din toate grupările';
$string['removegroupsmembers'] = 'Şterge toţi membrii grupului';
$string['removeselectedusers'] = 'Şterge utilizatorii selectaţi';
$string['selectfromrole'] = 'Selectează membri din roluri';
$string['showgroupsingrouping'] = 'Afişează grupuri în grupare';
$string['showmembersforgroup'] = 'Afişează membrii unui grup';
$string['toomanygroups'] = 'Nu există suficienţi utilizatori pentru a completa numărul de grupuri existente - există doar {$a} utilizatori cărora le-a fost atribuit rolul selectat.';
$string['usercount'] = 'Număr utilizatori';
$string['usercounttotal'] = 'Număr utilizatori ({$a})';
$string['usergroupmembership'] = 'Apartenenţa utilizatorului selectat:';
