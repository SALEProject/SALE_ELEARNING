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
 * Strings for component 'role', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Adăugare rol nou';
$string['addingrolebycopying'] = 'Adăugare rol nou, bazat pe {$a}';
$string['addrole'] = 'Adaugă un nou rol';
$string['advancedoverride'] = 'Suprascriere rol avansată';
$string['allow'] = 'Permite';
$string['allowassign'] = 'Permite asocierea de roluri';
$string['allowed'] = 'Permis';
$string['allowoverride'] = 'Permite suprascrierea rolurilor';
$string['allowroletoassign'] = 'Permiteți utilizatorilor cu rolul {$a->fromrole} să atribuie rolul {$a->targetrole}';
$string['allowroletooverride'] = 'Permiteți utilizatorilor cu rolul {$a->fromrole} să suprascrie rolul {$a->targetrole}';
$string['allowroletoswitch'] = 'Permiteți utilizatorilor cu rolul {$a->fromrole} să treacă la rolul {$a->targetrole}';
$string['allowswitch'] = 'Permite schimbarea rolurilor';
$string['allsiteusers'] = 'Toți utilizatorii sit-ului';
$string['archetype'] = 'Arhetip rol';
$string['archetypecoursecreator'] = 'ARHETIP: Creator curs';
$string['archetypeeditingteacher'] = 'ARHETIP: Profesor (editare)';
$string['archetypefrontpage'] = 'ARHETIP: Utilizatori autentificați pe pagina principală';
$string['archetypeguest'] = 'ARHETIP: Vizitator';
$string['archetype_help'] = 'Rolul arhetip determină permisiunile atunci când un rol este resetat la valorile implicite .Determină, de asemenea, noi permisiuni ale rolului atunci când site-ul este actualizat.';
$string['archetypemanager'] = 'ARHETIP: Administrator';
$string['archetypestudent'] = 'ARHETIP: Student';
$string['archetypeteacher'] = 'ARHETIP: Profesor (fără editare)';
$string['archetypeuser'] = 'ARHETIP: Utilizator autentificat';
$string['assignanotherrole'] = 'Alocare alt rol';
$string['assignedroles'] = 'Roluri alocate';
$string['assignerror'] = 'A apărut o eroare în timp ce se asigna rolul {$a->role} utilizatorului {$a->user}.';
$string['assignglobalroles'] = 'Asociază roluri de sistem';
$string['assignmentcontext'] = 'Context temă';
$string['assignmentoptions'] = 'Opțiuni temă';
$string['assignrole'] = 'Alocare rol';
$string['assignrolenameincontext'] = 'Alocare rol  \'{$a->role}\' în {$a->context}';
$string['assignroles'] = 'Asociază roluri';
$string['assignroles_help'] = 'Prin asignarea unui rol unui utilizator într-un context, îi oferiți persmiunile conținute de acel rol pentru contextul actual și toate celelalte inferioare. De exemplu, dacă un user este asignat cu rolul de student la un curs, va avea, de asemenea, rolul de student pentru toate activitățile și block-urile din curs.';
$string['assignrolesin'] = 'Asociază roluri în {$a}';
$string['assignrolesrelativetothisuser'] = 'Asignează roluri  acestui utilizator';
$string['backtoallroles'] = 'Înapoi la lista cu toate rolurile';
$string['backup:anonymise'] = 'Anonimizează datele utilizatorului la backup';
$string['backup:backupactivity'] = 'Activități de backup';
$string['backup:backupcourse'] = 'Backup cursuri';
$string['backup:backupsection'] = 'Backup secțiuni';
$string['backup:backuptargethub'] = 'Backup pentru centru';
$string['backup:backuptargetimport'] = 'Backup pentru import';
$string['backup:configure'] = 'Configurare opțiuni backup';
$string['backup:downloadfile'] = 'Descărcare fișiere din zona de backup';
$string['backup:userinfo'] = 'Creează o copie de rezervă pentru informaţiile despre utilizator';
$string['badges:awardbadge'] = 'Acordă ecuson utilizatorului';
$string['badges:configurecriteria'] = 'Configurează/editează criteriile pentru câștigarea unui ecuson';
$string['badges:configuredetails'] = 'Configurare/editare detalii ecuson';
$string['badges:configuremessages'] = 'Configurează mesajele ecusoanelor';
$string['badges:createbadge'] = 'Creează/multiplică ecusoane';
$string['badges:deletebadge'] = 'Șterge ecusoane';
$string['badges:earnbadge'] = 'Câștigă ecusoane';
$string['badges:manageglobalsettings'] = 'Administrează setările generale ale etichetelor';
$string['badges:manageownbadges'] = 'Vizualizează și gestionează ecusoanele proprii obținute';
$string['badges:viewawarded'] = 'Vezi utilizatorii care au câștigat un anume ecuson fără a putea să acorde un ecuson';
$string['badges:viewbadges'] = 'Vezi ecusoanele disponibile fără a le câștiga';
$string['badges:viewotherbadges'] = 'Vezi ecusoanele publice din profilurile altor utilizatori';
$string['block:edit'] = 'Editare setările unui block';
$string['block:view'] = 'Vezi block';
$string['blog:associatecourse'] = 'Asociere postări blog la cursuri';
$string['blog:associatemodule'] = 'Această capabilitate este veche și nu are niciun rol.';
$string['blog:create'] = 'Creare articol nou';
$string['blog:manageentries'] = 'Modificare și gestionare articole';
$string['blog:manageexternal'] = 'Editează și gestionează bloguri externe';
$string['blog:manageofficialtags'] = 'Administrează ecusoane oficiale';
$string['blog:managepersonaltags'] = 'Administrează ecusoane personale';
$string['blog:search'] = 'Căutare postări blog';
$string['blog:view'] = 'Vizualizare articole blog';
$string['blog:viewdrafts'] = 'Vizualizare ciorne blog';
$string['calendar:manageentries'] = 'Administrare articole calendar';
$string['calendar:managegroupentries'] = 'Administrare articole calendar pentru grup';
$string['calendar:manageownentries'] = 'Administrare articole calendar în nume propriu';
$string['capabilities'] = 'Capacităţi';
$string['capability'] = 'Capacitate';
$string['category:create'] = 'Creare categori';
$string['category:delete'] = 'Ștergere categori';
$string['category:manage'] = 'Administrare categorii';
$string['category:update'] = 'Actualizează categorii';
$string['category:viewhiddencategories'] = 'Afişează categorii ascunse';
$string['category:visibility'] = 'Afişează categorii ascunse';
$string['checkglobalpermissions'] = 'Verificare permisiuni sistem';
$string['checkpermissions'] = 'Verificare permisiuni';
$string['checkpermissionsin'] = 'Verificare permisiuni în {$a}';
$string['checksystempermissionsfor'] = 'Verificare permisiuni sistem pentru {$a->fullname}';
$string['checkuserspermissionshere'] = 'Verificare permisiuni pentru {$a->fullname} în {$a->contextlevel}';
$string['chooseroletoassign'] = 'Te rog alege un rol de alocat';
$string['cohort:assign'] = 'Adăugare și ștergere membrii cohortă';
$string['cohort:manage'] = 'Creare, ștergere și mutare cohorte';
$string['cohort:view'] = 'Vizualizare cohorte la nivel de site';
$string['comment:delete'] = 'Ștergere comentarii';
$string['comment:post'] = 'Postare comentarii';
$string['comment:view'] = 'Citire comentarii';
$string['community:add'] = 'Utilizați block-ul community pentru a căuta hub-uri și a găsi cursuri';
$string['community:download'] = 'Descărcați un curs din block-ul community';
$string['confirmaddadmin'] = 'Sunteți sigur(ă) că doriți să adăugați utilizatorul <strong>{$a}</strong> ca nou admin al site-ului?';
$string['confirmdeladmin'] = 'Sunteți sigur(ă) că doriți să eliminați utilizatorul <strong>{$a}</strong> din lista de admini ai site-ului ?';
$string['confirmunassign'] = 'Sunteți sigur că  doriți să îi retrageți acest rol utilizatorului?';
$string['confirmunassignno'] = 'Anulare';
$string['confirmunassigntitle'] = 'Confirmare schimbare rol';
$string['confirmunassignyes'] = 'Scoatere';
$string['context'] = 'Context';
$string['course:activityvisibility'] = 'Ascunde/afişează activităţi';
$string['course:bulkmessaging'] = 'Trimite un mesaj la mai multe persoane';
$string['course:changecategory'] = 'Schimbă categoria cursului';
$string['course:changefullname'] = 'Modificare nume curs';
$string['course:changeidnumber'] = 'Schimbă nr ID al cursului';
$string['course:changeshortname'] = 'Schimbă numele prescurtat al cursului';
$string['course:changesummary'] = 'Schimbă rezumat curs';
$string['course:create'] = 'Creare cursuri';
$string['course:delete'] = 'Ștergere cursuri';
$string['course:enrolconfig'] = 'Configurați exemplele enrol în cursuri';
$string['course:enrolreview'] = 'Revizuire înscrieri curs';
$string['course:ignorefilesizelimits'] = 'Utilizați fișiere mai mari decât orice restricții de mărime a fișierului';
$string['course:isincompletionreports'] = 'De a fi afișate pe rapoartele de completare';
$string['course:manageactivities'] = 'Administrare activităţi';
$string['course:managefiles'] = 'Administrare fişiere';
$string['course:managegrades'] = 'Administrare note';
$string['course:managegroups'] = 'Administrare grupuri';
$string['course:managescales'] = 'Administrare scări';
$string['course:markcomplete'] = 'Setați utilzatorii ca fiind complet în finalizarea cursului';
$string['course:movesections'] = 'Mută secțiuni';
$string['course:publish'] = 'Publică curs în centru';
$string['course:request'] = 'Solicitare cursuri noi';
$string['course:reset'] = 'Resetare curs';
$string['course:sectionvisibility'] = 'Controlează vizibilitate secţiune';
$string['course:setcurrentsection'] = 'Setează secţinea curentă';
$string['course:update'] = 'Actualizează setări curs';
$string['course:useremail'] = 'Activează/dezactivează adresă de email';
$string['course:view'] = 'Vezi cursuri fără participarea';
$string['course:viewcoursegrades'] = 'Afişează note cursuri';
$string['course:viewhiddenactivities'] = 'Afişează activităţi ascunse';
$string['course:viewhiddencourses'] = 'Afişează cursuri ascunse';
$string['course:viewhiddensections'] = 'Afişează secţiuni ascunse';
$string['course:viewhiddenuserfields'] = 'Afişează câmpuri utilizator ascunse';
$string['course:viewparticipants'] = 'Afişează participanţi';
$string['course:viewscales'] = 'Afişează scări';
$string['course:viewsuspendedusers'] = 'Vizualizare utilizatori suspendați';
$string['course:visibility'] = 'Ascunde/afişează cursuri';
$string['createrolebycopying'] = 'Creare rol nou prin copierea {$a}';
$string['createthisrole'] = 'Creare rol';
$string['currentcontext'] = 'Context curent';
$string['currentrole'] = 'Rol curent';
$string['customroledescription'] = 'Descriere particularizată';
$string['customroledescription_help'] = 'Descrierile rolurilor standard sunt localizate în mod automat în cazul în care descrierea personalizată este necompletată.';
$string['customrolename'] = 'Personalizează numele complet';
$string['customrolename_help'] = 'Numele rolurilor standard sunt localizate în mod automat în cazul în care numele particularizat este necompletat. Trebuie să furnizați un nume complet pentru toate rolurile personalizate.';
$string['defaultrole'] = 'Rol implicit';
$string['defaultx'] = 'Implicit: {$a}';
$string['defineroles'] = 'Definește roluri';
$string['deletecourseoverrides'] = 'Ștergere toate suprascrierile din curs';
$string['deletelocalroles'] = 'Şterge toate rolurile atribuite la nivel local';
$string['deleterolesure'] = 'Sunteţi sigur că doriţi ştergerea rolului "{$a->name} ({$a->shortname})"?</p><p>În prezent acest rol este deţinut de {$a->count} utilizatori.';
$string['deletexrole'] = 'Ștergere rol  {$a}';
$string['duplicaterole'] = 'Duplică rolul';
$string['duplicaterolesure'] = 'Sunteţi sigur că doriţi duplicarea rolului "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editare rol {$a}';
$string['editrole'] = 'Modifică rol';
$string['editxrole'] = 'Editare rol {$a}';
$string['errorbadrolename'] = 'Nume rol incorect';
$string['errorbadroleshortname'] = 'Nume scurt rol incorect';
$string['errorexistsrolename'] = 'Există deja un rol cu acest nume';
$string['errorexistsroleshortname'] = 'Există deja un rol cu acest nume';
$string['existingadmins'] = 'Administratori site în prezent';
$string['existingusers'] = '{$a} utilizatori existenţi';
$string['explanation'] = 'Explicație';
$string['extusers'] = 'Utilizatori existenți';
$string['extusersmatching'] = 'Utilizatori existenți care se potrivesc cu \'{$a}\'';
$string['filter:manage'] = 'Administrare setări filtru local';
$string['frontpageuser'] = 'Utilizator autentificat pe pagina principală';
$string['frontpageuserdescription'] = 'Toți utilizatorii autentificați pe prima pagină a cursului.';
$string['globalrole'] = 'Rol de sistem';
$string['globalroleswarning'] = 'ATENŢIE! Rolurile pe care le atribuiţi în cadrul acestei pagini vor fi propagate în cadrul întregului sistem, inclusiv pe prima pagină şi în cadrul tuturor cursurilor';
$string['gotoassignroles'] = 'Mergi la rolurile asignate pentru acest {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Mergi la sistemul de asignare a rolurilor';
$string['grade:edit'] = 'Modifică note';
$string['grade:export'] = 'Exportă note';
$string['grade:hide'] = 'Ascunde/Afişează note sau elemente';
$string['grade:import'] = 'Importă note';
$string['grade:lock'] = 'Blochează note sau elemente';
$string['grade:manage'] = 'Administrare elemente note';
$string['grade:managegradingforms'] = 'Administrează metodele avansate de notare';
$string['grade:manageletters'] = 'Administrează note sub formă de litere';
$string['grade:manageoutcomes'] = 'Administrare note finale';
$string['grade:managesharedforms'] = 'Administrați notarea avansată din șabloane';
$string['grade:override'] = 'Anulează note';
$string['grade:unlock'] = 'Deblochează note sau elemente';
$string['grade:view'] = 'Vizualizare note proprii';
$string['grade:viewall'] = 'Vizualizare note ale altor utilizatori';
$string['grade:viewhidden'] = 'Vezi notele ascunse ale utilizatorului';
$string['hidden'] = 'Ascundere';
$string['inactiveformorethan'] = 'inactiv timp de mai mult de {$a->timeperiod}';
$string['ingroup'] = 'în grupul "{$a->group}"';
$string['inherit'] = 'Moștenește';
$string['legacy:admin'] = 'ROL MOŞTENIT: Administrator';
$string['legacy:coursecreator'] = 'ROL MOŞTENIT: Creator curs';
$string['legacy:editingteacher'] = 'ROL MOŞTENIT: Profesor (modificare)';
$string['legacy:guest'] = 'ROL MOŞTENIT: Vizitator';
$string['legacy:student'] = 'ROL MOŞTENIT: Cursant';
$string['legacy:teacher'] = 'ROL MOŞTENIT: Profesor (fără drept de modificare)';
$string['legacytype'] = 'Tip rol moştenit';
$string['legacy:user'] = 'ROL MOŞTENIT: Utilizator autentificat';
$string['listallroles'] = 'Listează toate rolurile';
$string['localroles'] = 'Roluri atribuite local';
$string['mainadmin'] = 'Administrator principal';
$string['mainadminset'] = 'Stabilire administrator principal';
$string['manageadmins'] = 'Gestionare administratori site';
$string['manager'] = 'Administrator';
$string['managerdescription'] = 'Managerii pot accesa cursurile și le pot modifica, de obicei nu participă la cursuri.';
$string['manageroles'] = 'Administrează roluri';
$string['maybeassignedin'] = 'Tipurile de context unde acest rol poate fi asignat';
$string['morethan'] = 'Mai mult de {$a}';
$string['multipleroles'] = 'Roluri multiple';
$string['my:manageblocks'] = 'Administrare blocuri pagina mea';
$string['neededroles'] = 'Roluri cu permisiune';
$string['nocapabilitiesincontext'] = 'În acest context nu este disponibilă nicio permisiune';
$string['noneinthisx'] = 'Nimic în acest {$a}';
$string['noneinthisxmatching'] = 'Niciun utilizator găsit \'{$a->search}\'  în acest {$a->contexttype}';
$string['noroleassignments'] = 'Acest utilizator nu are niciun rol asignat în acest site.';
$string['noroles'] = 'Nu există roluri';
$string['notabletoassignroleshere'] = 'Nu puteți asigna roluri aici';
$string['notabletooverrideroleshere'] = 'Nu aveți permisiunea să suprascrieți niciun rol aici';
$string['notes:manage'] = 'Administrează note';
$string['notes:view'] = 'Vezi note';
$string['notset'] = 'Nu a fost setat';
$string['overrideanotherrole'] = 'Suprascriere alt rol';
$string['overridecontext'] = 'Suprascriere context';
$string['overridepermissions'] = 'Suprascrie permisiuni';
$string['overridepermissionsforrole'] = 'Suprascrie permisiunea pentru rolul \'{$a->role}\' în {$a->context}';
$string['overridepermissions_help'] = 'Suprascrierea permisiunea activează capabilitățile selectate pentru a fi permise sau prevenite într-un anumit context.';
$string['overridepermissionsin'] = 'Suprascrie permisiuni în {$a}';
$string['overrideroles'] = 'Suprascrie roluri';
$string['overriderolesin'] = 'Suprascrie roluri în {$a}';
$string['overrides'] = 'Suprascrie';
$string['overridesbycontext'] = 'Suprascrieri (prin context)';
$string['permission'] = 'Permisiune';
$string['permission_help'] = 'Permisiunile sunt setări ale capabilităților. Există 4 opțiuni:

* Nu este setat
* Permis - Se acordă permisiunea pentru capabilitate
* Nepermis - Permisiunea este eliminată din capabilitate, chiar dacă este permisă într-un context mai larg
* Interzisă - Permisiunea este complet blocată si nu poate fi suprascrisă în orice context inferior (mai specific)';
$string['permissions'] = 'Permisiuni';
$string['permissionsforuser'] = 'Permisiuni pentru utilizatorul {$a}';
$string['permissionsincontext'] = 'Permisiuni în {$a}';
$string['portfolio:export'] = 'Export către portofolii';
$string['potentialusers'] = '{$a} utilizatori potenţiali';
$string['potusers'] = 'Utilizatori potențiali';
$string['potusersmatching'] = 'Potențiali utilizatori care corespund \'{$a}\'';
$string['prevent'] = 'Împiedică';
$string['prohibit'] = 'Interzice';
$string['prohibitedroles'] = 'Interzis';
$string['question:add'] = 'Adaugă întrebări noi';
$string['question:config'] = 'Configurează tipuri întrebări';
$string['question:editall'] = 'Modifică toate întrebările';
$string['question:editmine'] = 'Modifică propriile întrebări';
$string['question:managecategory'] = 'Editează categorii întrebări';
$string['question:moveall'] = 'Mută toate întrebările';
$string['question:movemine'] = 'Mută doar întrebările proprii';
$string['question:useall'] = 'Foloseşte toate întrebările';
$string['question:usemine'] = 'Foloseşte întrebările proprii';
$string['question:viewall'] = 'Afişează toate întrebările';
$string['question:viewmine'] = 'Afişează toate întrebările proprii';
$string['rating:rate'] = 'Adaugare evaluări la elementele';
$string['rating:view'] = 'Vezi nota totală primită';
$string['rating:viewall'] = 'Vezi toate rating-urile primite';
$string['rating:viewany'] = 'Vezi toate notele primite de toți studenții';
$string['resetrole'] = 'Revenire la parametri impliciţi';
$string['resetrolenolegacy'] = 'Şterge permisiuni';
$string['resetrolesure'] = 'Sunteţi sigur că doriţi să resetaţi rolul "{$a->name} ({$a->shortname})" la parametrii impliciţi?<p></p>Parametrii impliciţi sunt preluaţi din arhetipul selectat ({$a->legacytype}).';
$string['resetrolesurenolegacy'] = 'Sunteţi sigur că doriţi să ştergeţi toate permisiunile definite pentru acest rol "{$a->name} ({$a->shortname})"?';
$string['restore:configure'] = 'Configurare opțiuni restaurare';
$string['restore:createuser'] = 'Creare utilizatori la restaurare';
$string['restore:restoreactivity'] = 'Restaurare activități';
$string['restore:restorecourse'] = 'Restaurare cursuri';
$string['restore:restoresection'] = 'Restaurare secțiuni';
$string['restore:restoretargethub'] = 'Restaurați din fișierele direcționate ca hub';
$string['restore:restoretargetimport'] = 'Restaurați din fișierele direcționate ca import';
$string['restore:rolldates'] = 'Permite trecerea datele de configurare a activității la restaurare';
$string['restore:uploadfile'] = 'Încărcați fișiere în zona de backup';
$string['restore:userinfo'] = 'Restaurare date utilizator';
$string['risks'] = 'Riscuri';
$string['roleallowheader'] = 'Permite rol:';
$string['role:assign'] = 'Atribuie roluri utilizatorilor';
$string['roleassignments'] = 'Atribuire roluri';
$string['roledefinitions'] = 'Definiții rol';
$string['rolefullname'] = 'Nume';
$string['roleincontext'] = '{$a->role} în {$a->context}';
$string['role:manage'] = 'Creează şi administrează roluri';
$string['role:override'] = 'Anulează permisiuni pentru alţii';
$string['roleprohibitheader'] = 'Interzicere rol';
$string['role:review'] = 'Revizuirea permisiunii pentru alții';
$string['rolerisks'] = 'Riscuri ale rolurilor';
$string['roles'] = 'Roluri';
$string['role:safeoverride'] = 'Suprascrieți permisiunle de securitate pentu alții';
$string['roleselect'] = 'Selectare rol';
$string['rolesforuser'] = 'Rol pentru utilizator {$a}';
$string['roles_help'] = 'Un rol este o colecție de permisiuni definite pentru întregul sistem pe care le puteți atribui anumitor utilizatori în contexte specifice.';
$string['roleshortname'] = 'Nume prescurtat';
$string['role:switchroles'] = 'Trecere la alte roluri';
$string['roletoassign'] = 'Rol de atribuit';
$string['roletooverride'] = 'Rolul care este anulat';
$string['safeoverridenotice'] = 'Notă: Capabilitățile cu riscuri mai mari sunt blocate deoarece vă este permis să suprascrieți doar capabilitățile sigure.';
$string['selectanotheruser'] = 'Selectare alt utilizator';
$string['selectauser'] = 'Selectare utilizator';
$string['selectrole'] = 'Selectaţi un rol';
$string['showallroles'] = 'Afişează toate rolurile';
$string['showthisuserspermissions'] = 'Arată permisiunile acestui utilizator';
$string['site:accessallgroups'] = 'Accesează toate grupurile';
$string['siteadministrators'] = 'Administratori site';
$string['site:approvecourse'] = 'Aprobă crearea de cursuri';
$string['site:backup'] = 'Creează copii de siguranţă cursuri';
$string['site:config'] = 'Schimbă configurare sit';
$string['site:doanything'] = 'Are permisiunea de a efectua orice operaţiune';
$string['site:doclinks'] = 'Afişează link-uri spre documente offsite';
$string['site:import'] = 'Importare alte cursuri în curs';
$string['site:manageblocks'] = 'Administrare blocuri la nivel de sit';
$string['site:mnetloginfromremote'] = 'Autentificare printr-o aplicație de la distanță prin MNet';
$string['site:mnetlogintoremote'] = 'Trecere la o aplicație la distanță prin MNet';
$string['site:readallmessages'] = 'Citeşte toate mesajele din cadrul sitului';
$string['site:restore'] = 'Restaurează cursuri';
$string['site:sendmessage'] = 'Trimite mesaje oricărui utilizator';
$string['site:trustcontent'] = 'Conţinutul trimis este de încredere';
$string['site:uploadusers'] = 'Încarcă utilizatori noi din fişier';
$string['site:viewfullnames'] = 'Vizualizează întotdeauna numele complete ale utilizatorilor';
$string['site:viewparticipants'] = 'Afişează participanţi';
$string['site:viewreports'] = 'Afişează rapoarte';
$string['site:viewuseridentity'] = 'Vezi identitatea completă a utilizatorului în liste';
$string['tag:create'] = 'Creează etichete noi';
$string['tag:edit'] = 'Modifică etichete existente';
$string['tag:editblocks'] = 'Modifică blocuri în tags pages';
$string['tag:flag'] = 'Etichete flag ca fiind necorespunzător';
$string['tag:manage'] = 'Administrare toate etichetele';
$string['thisusersroles'] = 'Rolurile asignate ale acestui utilizator';
$string['unassignarole'] = 'Revocare rol {$a}';
$string['unassignconfirm'] = 'Sunteți sigur(ă) că doriți să retrageți "{$a->role}"  rolul utilizatorului "{$a->user}"?';
$string['unassignerror'] = 'Eroare la eliminarea rolului {$a->role} de la utilizatorul {$a->user}.';
$string['user:changeownpassword'] = 'Schimbă parola proprie';
$string['user:create'] = 'Creează utilizatori';
$string['user:delete'] = 'Şterge utilizatori';
$string['user:editmessageprofile'] = 'Editare profil utilizator de corespondență';
$string['user:editownmessageprofile'] = 'Editare profil propriu de corespondență';
$string['user:editownprofile'] = 'Modificare profil utilizator propriu';
$string['user:editprofile'] = 'Modificare profil utilizator';
$string['user:loginas'] = 'Logare în conturile altor utilizatori';
$string['user:manageblocks'] = 'Administrare blocuri ale altor utilizatori de pe profilul utilizatorului';
$string['user:manageownblocks'] = 'Administrare blocuri de pe propriul profil public';
$string['user:manageownfiles'] = 'Administrare fișiere din zona proprie de fișiere personale';
$string['user:managesyspages'] = 'Configurați pagina de layout-ul implicit pentru profile de utilizator publice';
$string['user:readuserblogs'] = 'Vizualizare bloguri toţi utilizatorii';
$string['user:readuserposts'] = 'Vizualizare intervenţii pe blog ale tuturor utilizatorilor';
$string['usersfrom'] = 'Utilizatorii de la {$a}';
$string['usersfrommatching'] = 'Utilizatorii din {$a->contextname} se potrivesc \'{$a->search}\'';
$string['usersinthisx'] = 'Utilizatori în acest {$a}';
$string['usersinthisxmatching'] = 'Utilizatorii din acest {$a->contexttype} se potrivesc \'{$a->search}\'';
$string['userswithrole'] = 'Toţi utilizatorii cărora le-a fost atribuit un rol';
$string['userswiththisrole'] = 'Utilizatori cu rol';
$string['user:update'] = 'Actualizare profile utilizatori';
$string['user:viewalldetails'] = 'Vizualizare informații complete despre utilizator';
$string['user:viewdetails'] = 'Vizualizare profile utilizatori';
$string['user:viewhiddendetails'] = 'Vezi informaţii ascunse despre utilizatori';
$string['user:viewuseractivitiesreport'] = 'Vizualizează rapoarte despre activitatea utilizatorilor';
$string['user:viewusergrades'] = 'Vizualizează note utilizator';
$string['useshowadvancedtochange'] = 'Folosiți \'Arată avansat\' pentru modificare';
$string['viewingdefinitionofrolex'] = 'Vizualizare definiție rol  \'{$a}\'';
$string['viewrole'] = 'Vizualizează detalii roluri';
$string['webservice:createmobiletoken'] = 'Creare jeton serviciu web pentru acces mobil';
$string['webservice:createtoken'] = 'Creare jeton serviciu web';
$string['whydoesuserhavecap'] = 'De ce are {$a->fullname} are capacitatea de {$a->capability}, în contextul {$a->context}?';
$string['whydoesusernothavecap'] = 'De ce are {$a->fullname} nu are capacitatea de {$a->capability}, în contextul {$a->context}?';
$string['xroleassignments'] = 'Temele rolului lui {$a}';
$string['xuserswiththerole'] = 'Utilizatori cu rol "{$a->role}"';
