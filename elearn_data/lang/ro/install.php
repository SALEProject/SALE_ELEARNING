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
 * Strings for component 'install', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Directorul admin specificat este incorect';
$string['admindirname'] = 'Director Admin';
$string['admindirsettinghead'] = 'Se setează Admin Directory...';
$string['availablelangs'] = 'Pachete de limbă disponibile';
$string['caution'] = 'Atenţie';
$string['chooselanguage'] = 'Selectaţi o limbă';
$string['chooselanguagehead'] = 'Selectare limbă';
$string['chooselanguagesub'] = 'Vă rugăm selectaţi limba pentru interfaţa de instalare, limba selectată va fi folosită EXCLUSIV în cadrul procedurii de instalare. Ulterior veţi putea selecta limba în care doriţi să fie afişată interfaţa.';
$string['cliadminpassword'] = 'Noua parola de utilizator a adminului';
$string['cliadminusername'] = 'Numele de utilizator pentru contul de admin';
$string['clialreadyconfigured'] = 'Fișierul de configurare';
$string['clialreadyinstalled'] = 'Fișierul de configurare config.php există deja. Vă rugăm să folosiți dmin/cli/install_database.php to pentru a upgrada Moodle pentru acest site.';
$string['cliinstallfinished'] = 'Instalare completă realizată cu succes.';
$string['cliinstallheader'] = 'Program  command line installation Moodle {$a}';
$string['climustagreelicense'] = 'În modul non interactiv trebuie să acceptați licența prin specificarea opțiunii -- sunt de acord cu licența';
$string['clitablesexist'] = 'Tabelele bazei de date există deja, instalarea cli nu poate continua.';
$string['compatibilitysettings'] = 'Se verifică setările PHP...';
$string['compatibilitysettingshead'] = 'Se verifică setările PHP...';
$string['compatibilitysettingssub'] = 'Server-ul dumneavoastră ar trebui să treacă toate aceste teste pentru ca Moodle să ruleze corect';
$string['configfilenotwritten'] = 'Script-ul de instalare nu a putut să creze în mod automat un fișier care conține setările dumneavoastră config.php  probabil pentru că directorul Moodle nu poate fi scris. Aveți posibilitatea să copiați manual următorul cod într-un fișier denumit config.php în directorul root Moodle.';
$string['configfilewritten'] = 'config.php a fost creat cu succes';
$string['configurationcomplete'] = 'Configurare finalizată';
$string['configurationcompletehead'] = 'Finalizare configurare';
$string['configurationcompletesub'] = 'Moodle a făcut o încercare de salvare a fişierului de configurare a sitului dumneavoastră în directorul root al Moodle.';
$string['database'] = 'Bază de date';
$string['databasecreationsettings'] = 'Acum va trebui să configuraţi setările bazei de date unde vor fi stocate majoritatea datelor Moodle. Această bază de date va fi creată în mod automat de aplicaţia de instalare cu parametrii specificaţi mai jos.<br />
<br /> <br />
<b>Type:</b> fixed to "mysql" by the installer<br />
<b>Host:</b> fixed to "localhost" by the installer<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> fixed to "root" by the installer<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasecreationsettingshead'] = 'Acum va trebui să configuraţi setările pentru baza de date unde se vor stoca datele Moodle. Această bază de date va fi creată automat de installer cu parametrii specificaţi mai jos.';
$string['databasecreationsettingssub'] = '<b>Type:</b> fixed to "mysql" by the installer<br />
<b>Host:</b> fixed to "localhost" by the installer<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> fixed to "root" by the installer<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasehead'] = 'Setări baza de date';
$string['databasehost'] = 'Gazdă baza de date';
$string['databasename'] = 'Nume baza de date';
$string['databasepass'] = 'Parolă baza de date';
$string['databasesettings'] = 'Acum va trebui să configuraţi baza de date unde se vor restaura marea majoritate a informaţiilor din baza de date Moodle. Această bază de date ar fi trebuit să fi fost deja creată şi să aveţi nevoie de un nume de utilizator şi de o parolă să o accesaţi.<br />
<br /> <br />
<b>Type:</b> mysql or postgres7<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettingssub'] = '<b>Type:</b> mysql or postgres7<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (non UTF-8) <b><strong class="errormsg">Experimental! (not for use in production)</strong></b><br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (UTF-8 enabled)<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MySQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (optional)';
$string['databasesettingssub_mysqli'] = '<b>Type:</b> Improved MySQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (optional)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Host:</b> not used, must be left blank<br />
<b>Name:</b> given name of the tnsnames.ora connection<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (over ODBC) <b><strong class="errormsg">Experimental! (not for use in production)</strong></b><br />
<b>Host:</b> given name of the DSN in the ODBC control panel<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Host:</b> eg localhost or db.isp.com<br />
<b>Name:</b> database name, eg moodle<br />
<b>User:</b> your database username<br />
<b>Password:</b> your database password<br />
<b>Tables Prefix:</b> prefix to use for all table names (mandatory)';
$string['databasesettingswillbecreated'] = '<b>Notă:</b> În cazul în care nu există o bază de date installerul va încerca să creeze în mod automat una.';
$string['databasesocket'] = 'Socket Unix';
$string['databasetypehead'] = 'Alegere driver baza de date';
$string['databasetypesub'] = 'Moodle permite mai multe tipuri de servere de baze de date. Vă rugăm să contactați administratorul serverului, dacă nu știți ce tip să utilizați.';
$string['databaseuser'] = 'Utilizator baza de date';
$string['dataroot'] = 'Director date';
$string['datarooterror'] = 'Data Directory specificat de dumneavoastră nu a putut fi găsit sau creat. Verificaţi corectitudinea căii furnizate sau creaţi manual directorul.';
$string['datarootpermission'] = 'Permisiuni directoare date';
$string['datarootpublicerror'] = 'Data Directory specificat de dumneavoastră este accesibil în mod direct via Web, trebuie să folosiţi un alt director.';
$string['dbconnectionerror'] = 'Nu s-a putut realiza conexiunea cu baza de date specificată de dumneavoastră. Vă rugăm verificaţi setările făcute pentru baza de date.';
$string['dbcreationerror'] = 'Eroare creare bază de date. Nu s-a putut crea baza de date cu numele şi setările furnizate.';
$string['dbhost'] = 'Server gazdă';
$string['dbpass'] = 'Parolă';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Prefix tabele';
$string['dbtype'] = 'Tip';
$string['directorysettings'] = '<p>Vă rugăm să confirmați locațiile unde a fost instalat Moodle.</p>

<p><b>Adresa web:</b>
Se specifică adresa de web completă de unde va fi accesat Moodle.
Dacă site-ul web este accesibil prin intermediul mai multor adrese URL, selectați-o pe cea mai simplă  pe care cursanții dumneavoastră o folosesc. Nu includeți un trailing slash.</p>

<p><b>Director Moodle :</b>
Specificați calea completă a directorului în această instalare
Asigurați-vă că upper/lower case este corect.</p>

<p><b>Data directory:</b>
Aveți nevoie de un loc undeMoodle poate salva fișierele încărcate. Acest director ar trebui să fie ușor de citit și poate fi SCRiS de către utilizatorii serverului web (de obicei, "nobody" sau "apache"), dar nu trebuie să fie accesibile în mod direct, pe web. Programul de instalare va încerca să-l creeze, dacă nu există.</p>';
$string['directorysettingshead'] = 'Vă rugăm să confirmați locația acestei instalări Moodle';
$string['directorysettingssub'] = '<b>Adresa web:</b>
Se specifică adresa de web completă în cazul unde va fi accesat Moodle .
Dacă site-ul web este accesibil prin intermediul mai multor adrese URL, selectați-o pe cea mai simplă pe care o folosesc cursanții
Nu includeți a trailing slash.
<br />
<br />
<b>Director Moodle :</b>
Specificați completă a directorului la această instalare
Asigurați-vă că upper/lower case este corect.
<br />
<br />
<b>Data directory:</b>
Aveți nevoie de un loc undeMoodle poate salva fișierele încărcate. Acest director ar trebui să fie ușor de citit și poate fi SCRiS de către utilizatorii serverului web (de obicei, "nobody" sau "apache"), dar nu trebuie să fie accesibile în mod direct, pe web. Programul de instalare va încerca să-l creeze, dacă nu există.</p>';
$string['dirroot'] = 'Director Moodle';
$string['dirrooterror'] = 'Setarea "Moodle directory " pare a fi incorectă - nu putem găsi o instalare Moodle . Valoarea de mai jos a fost resetată.';
$string['download'] = 'Descarcă';
$string['downloadlanguagebutton'] = 'Descarcă modulul de localizare  &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Descarcă modulul de localizare';
$string['downloadlanguagenotneeded'] = 'Puteţi continua procesul de instalare folosind modulul de localizare implicit "{$a}".';
$string['downloadlanguagesub'] = 'Aveți acum posibilitatea de a descărca un language pack și să continuați procesul de instalare în această limbă. <br /><br /> Dacă nu puteți să descărcați language pack, procesul de instalare va continua în limba engleză. (Odată ce procesul de instalare este complet, veți avea posibilitatea de a descărca și instala language pack suplimentare.)';
$string['doyouagree'] = 'Sunteți de acord? (da/nu):';
$string['environmenthead'] = 'Se verifică mediul...';
$string['environmentsub'] = 'Verificăm dacă diferitele componente ale sistemului dumneavoastră îndeplinesc cerințele sistemului';
$string['environmentsub2'] = 'Fiecare versiune Moodle are o anumită cerință minimă PHP și un număr de extensii PHP obligatorii.
Verificarea completă a mediului se face înainte de fiecare instalare și upgrade. Vă rugăm să contactați administratorul serverului, dacă nu știți cum se instalează noua versiune sau dacă activați extensiile PHP.';
$string['errorsinenvironment'] = 'Verificarea mediului eșuată!';
$string['fail'] = 'Eșuare';
$string['fileuploads'] = 'Încărcare fişiere';
$string['fileuploadserror'] = 'Acest parametru ar trebuie să fie activat';
$string['inputdatadirectory'] = 'Director date:';
$string['inputwebadress'] = 'Adresă web:';
$string['inputwebdirectory'] = 'Director Moodle:';
$string['installation'] = 'Instalare';
$string['langdownloaderror'] = 'Din păcate, limba "{$a}" nu a putut fi descărcată. Procesul de instalare va continua în limba engleză.';
$string['langdownloadok'] = 'Limba "{$a}" a fost instalată cu succes. Procesul de instalare va continua în această limbă.';
$string['magicquotesruntimeerror'] = 'Acest parametru ar trebui să fie dezactivat';
$string['memorylimit'] = 'Limită de memorie';
$string['memorylimiterror'] = 'Limita de memorie PHP este setată destul de jos... să aveți probleme mai târziu.';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server with UTF-8 support (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['nativemssql'] = 'SQL*Server FreeTDS (native/mssql)';
$string['nativemssqlhelp'] = 'Acum trebuie să configurați baza de date în care vor fi stocate cele mai multe date Moodle.
Această bază de date trebuie să fi fost deja creată, plus un nume de utilizator și o parolă create pentru a o accesa. Tabelul cu prefixe este obligatoriu.';
$string['nativemysqli'] = 'MySQL îmbunătațit (native/mysqli)';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Acum trebuie să configurați baza de date în care vor fi stocate cele mai multe date Moodle.
Această bază de date trebuie să fi fost deja creată și un nume de utilizator și o parolă create pentru a o accesa. Prefixul tabelului este obligatoriu.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Acum trebuie să configurați baza de date în care vor fi stocate cele mai multe date Moodle.
Această bază de date trebuie să fi fost deja creată și un nume de utilizator și o parolă create pentru a o accesa. Prefixul tabelului este obligatoriu.';
$string['nativesqlsrvnodriver'] = 'Microsoft Drivers pentru SQL Server pentru PHP nu sunt instalate sau nu sunt configurate corect.';
$string['nativesqlsrvnonwindows'] = 'Microsoft Drivers for pentru Server pentru PHP sunt disponibile doar pentru Windows OS.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['pass'] = 'Trecere';
$string['paths'] = 'Căi';
$string['pathserrcreatedataroot'] = 'Data directory ({$a->dataroot}) nu poate fi creat de către installer.';
$string['pathshead'] = 'Confirmare căi';
$string['pathsrodataroot'] = 'Directorul dataroot nu poate fi scris.';
$string['pathssubdirroot'] = '<p>Calea completă către directorul care conține codul Moodle .</p>';
$string['pathsunsecuredataroot'] = 'Locația dataroot nu este sigură';
$string['pathswrongadmindir'] = 'Directorul admin nu există';
$string['phpextension'] = 'extensie PHP {$a}';
$string['phpversion'] = 'Versiune PHP';
$string['phpversionhelp'] = '<p>Moodle necesită o versiune PHP de cel puțin  4.3.0 or 5.1.0 (5.0.x are un număr de probleme cunscute).</p>
<p>Momentan rulați versiunea {$a}</p>
<p>Trebuie să upgradați PHP sau să îl mutați pe o gazdă cu o nouă versiune de PHP!<br />
(În cazul 5.0.x puteți, de asemenea, să downgradați la versiunea 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Pentru informații despre această versiune Moodle, vă rugăm să citiți notele informative de la {$a}';
$string['safemode'] = 'Modul de siguranță';
$string['safemodeerror'] = 'Este posibili ca Moodle să nu poată funcţiona cu Safe Mode';
$string['sessionautostart'] = 'Sesiune Auto Start';
$string['sessionautostarterror'] = 'Acest parametru ar trebui să fie dezactivat';
$string['skipdbencodingtest'] = 'Trecere peste testul de codare DB';
$string['sqliteextensionisnotpresentinphp'] = 'PHP nu a fost configurat corect cu extensia SQLite. Vă rugăm să verificați fișierul php.ini sau să recompilați PHP.';
$string['upgradingqtypeplugin'] = 'Se actualizează întrebarea/tipul de plugin';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Vedeți această pagină deoarece ați instalat și lansat cu succes pachetul  <strong>{$a->packname} {$a->packversion}</strong> în computerul dumneavoastră. Felicitări!';
$string['welcomep40'] = 'Pachetul include și <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['wwwroot'] = 'Adresă Web';
$string['wwwrooterror'] = '"Adresa Web" nu pare să fie valabilă - această instalare Moodle nu pare să se afle la această adresă. Valoarea de mai jos a fost resetată.';
