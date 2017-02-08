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
 * Strings for component 'backup', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Alegeți dacă doriți sau nu să faceți backup-uri automate. Dacă este selectată opțiunea manuală, backup-ul automat va fi posibil doar prin scriptul automat CLI backup. Acesta se poate face fie manual în linia de comandă, fie prin intermediul cron.';
$string['autoactivedisabled'] = 'Dezactivat';
$string['autoactiveenabled'] = 'Activat';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Program';
$string['automatedbackupschedulehelp'] = 'Alege zilele din săptămână când se realizează copiile de rezervă.';
$string['automatedbackupsinactive'] = 'Administratorul site-ului încă nu a activat realizarea copiilor de rezervă programate';
$string['automatedbackupstatus'] = 'Status creare de copii de rezervă';
$string['automatedsettings'] = 'Setări copie de rezervă programată';
$string['automatedsetup'] = 'Setare backup automat';
$string['automatedstorage'] = 'Stocare backup automat';
$string['automatedstoragehelp'] = 'Alegeți locul unde doriți să fie stocate backup-urile atunci când sunt create în mod automat';
$string['backupactivity'] = 'Creează copie de rezervă a activităţii: {$a}';
$string['backupcourse'] = 'Creează copie de rezervă a cursului: {$a}';
$string['backupcoursedetails'] = 'Detalii curs';
$string['backupcoursesection'] = 'Secţiune: {$a}';
$string['backupcoursesections'] = 'Secţiuni de curs';
$string['backupdate'] = 'Data efectuării';
$string['backupdetails'] = 'Detalii copie de rezervă';
$string['backupdetailsnonstandardinfo'] = 'Fișierul selectat nu este un fișier standard back-up Moodle. Procesul de reconstituire va încerca să convertească fișierul back-up în formatul standard și apoi să îl reconstituie.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Format necunoscut';
$string['backupmode'] = 'Mod';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Centru';
$string['backupmode40'] = 'Același site';
$string['backupmode50'] = 'Automat';
$string['backupmode60'] = 'Convertit';
$string['backupsection'] = 'Creează copie de rezervă a secţunii de cursi: {$a}';
$string['backupsettings'] = 'Setări copie de rezervă';
$string['backupsitedetails'] = 'Detalii site';
$string['backupstage16action'] = 'Continuă';
$string['backupstage1action'] = 'Următorul';
$string['backupstage2action'] = 'Următorul';
$string['backupstage4action'] = 'Creează copie de rezervă';
$string['backupstage8action'] = 'Continuă';
$string['backuptype'] = 'Tip';
$string['backuptypeactivity'] = 'Activitate';
$string['backuptypecourse'] = 'Curs';
$string['backuptypesection'] = 'Secțiune';
$string['backupversion'] = 'Versiune copie de rezervă';
$string['cannotfindassignablerole'] = 'Rolul {$a} din fişierul de copie de rezervă nu poate fi mapat pe niciunul din rolurile pe care aveţi dreptul să le asignaţi.';
$string['choosefilefromactivitybackup'] = 'Zona backup activitate';
$string['choosefilefromactivitybackup_help'] = 'Când faceți backup folosind setările implicite, fișierele de backup vor fi stocate aici';
$string['choosefilefromautomatedbackup'] = 'Backup-uri automate';
$string['choosefilefromautomatedbackup_help'] = 'Conține backup-uri generate automat.';
$string['choosefilefromcoursebackup'] = 'Zona backup curs';
$string['choosefilefromcoursebackup_help'] = 'Când se face backup la cursuri folosind setările implicite, fișierele de backup vor fi stocate aici';
$string['choosefilefromuserbackup'] = 'Zona privată de back-up a utilizatorului';
$string['choosefilefromuserbackup_help'] = 'Când faceți backup la cursuri de rezervă cu opțiunea "informații utilizator anonim" bifată, fișierele backup vor fi stocate aici';
$string['configgeneralactivities'] = 'Stabileşte setarea implicită pentru includerea activităţilor într-o copie de rezervă.';
$string['configgeneralanonymize'] = 'Dacă această setare este activată, toate informaţiile legate de utilizator vor fi implicit anonimizate.';
$string['configgeneralbadges'] = 'Stabilește setarea implicită pentru includerea ecusoanelor într-un backup.';
$string['configgeneralblocks'] = 'Stabileşte setarea implicită pentru includerea blocurilor într-o copie de rezervă';
$string['configgeneralcomments'] = 'Stabileşte setarea implicită pentru includerea comentariilor într-o copie de rezervă';
$string['configgeneralfilters'] = 'Stabileşte setarea implicită pentru includerea filtrelor într-o copie de rezervă';
$string['configgeneralhistories'] = 'Stabileşte setarea implicită pentru includerea istoricului de utilizator într-o copie de rezervă';
$string['configgenerallogs'] = 'Dacă această setare este activată, jurnalele vor fi implicit incluse în copiile de rezervă';
$string['configgeneralroleassignments'] = 'Dacă această setare este activată, în copia de rezervă vor fi salvate şi asignările implicite de roluri.';
$string['configgeneralusers'] = 'Stabileşte setarea implicită pentru includerea utilizatorilor într-o copie de rezervă';
$string['configgeneraluserscompletion'] = 'Dacă această setare este activată, informaţiile legate de gradul de completare al utilizatorilor vor fi implicit incluse în copiile de rezervă';
$string['configloglifetime'] = 'Se specifică durata de timp cât doriți să păstrați backup-ul autentificărilor. Logările care sunt mai vechi decât această dată sunt șterse automat. Este recomandat să păstrați această valoare mică, deoarece pot fi foarte multe backup-uri privind autentificările.';
$string['confirmcancel'] = 'Anulare backup';
$string['confirmcancelno'] = 'Ședere';
$string['confirmcancelquestion'] = 'Sunteți sigur că doriți să ștergeți?
Orice informație ați introdus, se va pierde.';
$string['confirmcancelyes'] = 'Anulare';
$string['confirmnewcoursecontinue'] = 'Avertisment curs nou';
$string['confirmnewcoursecontinuequestion'] = 'Un curs (ascuns) temporar va fi creat prin procesul de reconstituire a cursului. Pentru a anula reconstituirea, dați click pe Anulare. Nu închideți browser-ul în timpul reconstituirii';
$string['coursecategory'] = 'Categoria în care va fi restaurat cursul';
$string['courseid'] = 'ID iniţial';
$string['coursesettings'] = 'Setări curs';
$string['coursetitle'] = 'Titlu';
$string['currentstage1'] = 'Setări iniţiale';
$string['currentstage16'] = 'Complet';
$string['currentstage2'] = 'Setări de schemă';
$string['currentstage4'] = 'Confirmare şi verificarea';
$string['currentstage8'] = 'Creează copie de rezervă';
$string['enterasearch'] = 'Introduceți o căutare';
$string['error_block_for_module_not_found'] = 'Instanță block orphan (id: {$a->bid}) pentru modulul cursului (id: {$a->mid}) găsită. Acest block nu va avea backup';
$string['error_course_module_not_found'] = 'Modul de curs Orphan (id: {$a}) găsit. Acest modul nu va avea backup.';
$string['errorfilenamemustbezip'] = 'Fişierul pe care îl introduceţi trebuie să fie un fişier ZIP şi să aibă extensia .mbz';
$string['errorfilenamerequired'] = 'Trebuie să introduceţi un nume de fişier valid pentru această copie de rezervă';
$string['errorinvalidformat'] = 'Format necunoscut de backup';
$string['errorinvalidformatinfo'] = 'Fișierul selectat nu este un fișier valid de rezervă Moodle și nu poate fi restaurat.';
$string['errorminbackup20version'] = 'Acest fişier copie de rezervă a fost creat cu o versiune de dezvoltare a copiei de rezervă Moodle ({$a->backup}). Versiunea minimă necesară este {$a->min}. Nu poate fi restaurat.';
$string['errorrestorefrontpage'] = 'Nu este permisă restaurarea peste pagina principală';
$string['executionsuccess'] = 'Copia de rezervă a fost creată cu succes.';
$string['filename'] = 'Nume fişier';
$string['filereferencesnotsamesite'] = 'Backup-ul este de la alt site, referințele către fișiere nu pot fi restaurate';
$string['filereferencessamesite'] = 'Backup-ul este de la același site, referințele către fișiere pot fi recuperate';
$string['generalactivities'] = 'Include activităţi';
$string['generalanonymize'] = 'Anonimizează informatiile';
$string['generalbackdefaults'] = 'Setări implicite copii generale de rezervă';
$string['generalbadges'] = 'Include ecusoane';
$string['generalblocks'] = 'Include blocuri';
$string['generalcomments'] = 'Include comentarii';
$string['generalfilters'] = 'Include filtre';
$string['generalgradehistories'] = 'Include istorice';
$string['generalhistories'] = 'Include istorice';
$string['generallogs'] = 'Include jurnale';
$string['generalroleassignments'] = 'Include asignări de roluri';
$string['generalsettings'] = 'Setări generale de backup';
$string['generalusers'] = 'Include utilizatori';
$string['generaluserscompletion'] = 'Include informaţiile legate de gradul de completare al utilizatorilor';
$string['importbackupstage16action'] = 'Continuă';
$string['importbackupstage1action'] = 'Următorul';
$string['importbackupstage2action'] = 'Următorul';
$string['importbackupstage4action'] = 'Efectuează importul';
$string['importbackupstage8action'] = 'Continuă';
$string['importcurrentstage0'] = 'Selecție curs';
$string['importcurrentstage1'] = 'Setări inițiale';
$string['importcurrentstage16'] = 'Complet';
$string['importcurrentstage2'] = 'Setări schemă';
$string['importcurrentstage4'] = 'Confirmare și revizuire';
$string['importcurrentstage8'] = 'Efectuează importul';
$string['importfile'] = 'Importă un fişier copie de rezervă';
$string['importgeneralmaxresults'] = 'Numărul maxim de cursuri listate pentru import';
$string['importgeneralmaxresults_desc'] = 'Se verifică numărul de cursuri afișate în timpul primului pas al procesului de import';
$string['importgeneralsettings'] = 'Valori generale implicite pentru import';
$string['importsuccess'] = 'Import complet. Faceți click pe continuă pentru a reveni la curs.';
$string['includeactivities'] = 'Include:';
$string['includeditems'] = 'Itemi incluși:';
$string['includefilereferences'] = 'Referințe despre fișier la conținuturi externe';
$string['includesection'] = 'Include secţiunea {$a}';
$string['includeuserinfo'] = 'Include informaţii de utilizator';
$string['locked'] = 'Blocat';
$string['lockedbyconfig'] = 'Această setare a fost blocată de setările implicite ale copiei de rezervă';
$string['lockedbyhierarchy'] = 'Blocat de dependinţe';
$string['lockedbypermission'] = 'Nu aveţi suficiente permisiuni pentru a schimba această setare';
$string['loglifetime'] = 'Păstrează datele de logare pentru';
$string['managefiles'] = 'Administrare fișiere backup';
$string['missingfilesinpool'] = 'Unele fișiere nu au putut fi salvate în timpul backup-ului, nu va fi posibilă reconstituirea lor.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Versiune Moodle';
$string['morecoursesearchresults'] = 'Mai mult de {$a} cursuri găsite, se afișează primele {$a} rezultate';
$string['moreresults'] = 'Sunt prea multe rezultate, inserați o căutare mai detaliată.';
$string['nomatchingcourses'] = 'Nu sunt cursuri de afișat';
$string['norestoreoptions'] = 'NU există categori sau cursuri existente către care puteți să restabiliți.';
$string['originalwwwroot'] = 'URL copie de rezervă';
$string['previousstage'] = 'Precedentul';
$string['qcategory2coursefallback'] = 'Categoria întrebări "{$a->name}", inițial la contextul categoriei sistem/curs în fișierul de backup, va fi creată la contextul cursului prin restaurare';
$string['qcategorycannotberestored'] = 'Categoria întrebări "{$a->nume}" nu poate fi creată prin reconstituire';
$string['question2coursefallback'] = 'Categoria întrebări "{$a->nume}", inițial în contextul categorie sistem/curs  în fișierul de backup, va fi creată în contextul curs la restaurare';
$string['questionegorycannotberestored'] = 'Întrebările "{$a->nume}" nu pot fi create prin reconstituire';
$string['restoreactivity'] = 'Restaurează activitate';
$string['restorecourse'] = 'Restaurează curs';
$string['restorecoursesettings'] = 'Setări curs';
$string['restoreexecutionsuccess'] = 'Cursul a fost restaurat cu succes. Dând click pe butonul Continuă veţi putea vizualiza cursul restaurat.';
$string['restorefileweremissing'] = 'Unele fișiere nu au putut fi restaurate deoarece lipsesc din backup.';
$string['restorenewcoursefullname'] = 'Nume curs nou';
$string['restorenewcourseshortname'] = 'Nume scurt curs nou';
$string['restorenewcoursestartdate'] = 'Nouă dată de început';
$string['restorerolemappings'] = 'Restaurează mapările rolului';
$string['restorerootsettings'] = 'Restaurează setări';
$string['restoresection'] = 'Restaurează secţiune';
$string['restorestage1'] = 'Confirmă';
$string['restorestage16'] = 'Verifică';
$string['restorestage16action'] = 'Efectuează restaurare';
$string['restorestage1action'] = 'Următorul';
$string['restorestage2'] = 'Destinaţie';
$string['restorestage2action'] = 'Următorul';
$string['restorestage32'] = 'Proces';
$string['restorestage32action'] = 'Continuă';
$string['restorestage4'] = 'Setări';
$string['restorestage4action'] = 'Următorul';
$string['restorestage64'] = 'Complet';
$string['restorestage64action'] = 'Continuă';
$string['restorestage8'] = 'Schemă';
$string['restorestage8action'] = 'Următorul';
$string['restoretarget'] = 'Restaurează ţintă';
$string['restoretocourse'] = 'Restaurează la curs:';
$string['restoretocurrentcourse'] = 'Restaurează în acest curs';
$string['restoretocurrentcourseadding'] = 'Include copia de rezervă a cursului în cursul existent';
$string['restoretocurrentcoursedeleting'] = 'Şterge conţinutul acestui curs şi apoi restaurează';
$string['restoretoexistingcourse'] = 'Restaurează într-un curs existent';
$string['restoretoexistingcourseadding'] = 'Include copia de rezervă a cursului în cursul existent';
$string['restoretoexistingcoursedeleting'] = 'Şterge conţinutul cursului existent şi apoi restaurează';
$string['restoretonewcourse'] = 'Restaurează ca un curs nou';
$string['restoringcourse'] = 'Restaurare curs în desfăşurare';
$string['restoringcourseshortname'] = 'se restaurează';
$string['rootenrolmanual'] = 'Restaurează ca înrolări manuale';
$string['rootsettinganonymize'] = 'Setează informațiile utilizatorului ca fiind anonime';
$string['rootsettingbadges'] = 'Include ecusoane';
$string['rootsettingblocks'] = 'Include block-uri';
$string['rootsettingcalendarevents'] = 'Include evenimentele din calendar';
$string['rootsettingcomments'] = 'Include comentariile';
$string['rootsettingfilters'] = 'Include filtrele';
$string['rootsettinggradehistories'] = 'Include arhiva notelor';
$string['rootsettingimscc1'] = 'Conversie la IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Conversie la IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = 'Include jurnale curs';
$string['rootsettingroleassignments'] = 'Include rolurile asignate ale utilizatorului';
$string['rootsettings'] = 'Setări copie de rezervă';
$string['rootsettingusers'] = 'Include utilizatorii inscriși';
$string['rootsettinguserscompletion'] = 'Include detalii completare curs ale utilizatorilor';
$string['sectionactivities'] = 'Activităţi';
$string['sectioninc'] = 'Inclus în copia de rezervă (fără informaţii de utilizator)';
$string['sectionincanduser'] = 'Inclus în copia de rezervă împreună cu informaţii de utilizator';
$string['selectacategory'] = 'Selectare categorie';
$string['selectacourse'] = 'Selectare curs';
$string['setting_course_fullname'] = 'Nume curs';
$string['setting_course_shortname'] = 'Nume scurt curs';
$string['setting_course_startdate'] = 'Dată început curs';
$string['setting_keep_groups_and_groupings'] = 'Păstrează grupurile și grupările curente';
$string['setting_keep_roles_and_enrolments'] = 'Păstrați rolurile curente și înscrierile';
$string['setting_overwriteconf'] = 'Suprascrie configuraţia cursului';
$string['skiphidden'] = 'Omiteți cursurile ascunse';
$string['skiphiddenhelp'] = 'Alegeți dacă doriți sau nu să omiteți cursurile';
$string['skipmodifdays'] = 'Omiteți cursurile nemodificate de';
$string['skipmodifdayshelp'] = 'Alegeți să omiteți cursurile nemodificate de un număr de zile';
$string['skipmodifprev'] = 'Omite cursurile nemodificate de la backup-ul anterior.';
$string['storagecourseandexternal'] = 'Locul în care sunt backup-urile cursului și directorul specificat';
$string['storagecourseonly'] = 'Locul în care sunt backup-urile cursului';
$string['storageexternalonly'] = 'Director specificat pentru backup-uri automate';
$string['title'] = 'Titlu';
$string['totalcategorysearchresults'] = 'Total categorii: {$a}';
$string['totalcoursesearchresults'] = 'Total cursuri: {$a}';
$string['unnamedsection'] = 'Secțiune nedenumită';
$string['userinfo'] = 'Informații utilizator';
