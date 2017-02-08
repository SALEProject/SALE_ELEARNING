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
 * Strings for component 'badges', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acțiuni';
$string['activate'] = 'Permite acces';
$string['activatesuccess'] = 'Accesul la ecusoane a fost activat cu succes';
$string['addbadgecriteria'] = 'Adaugă criteriu pentru ecuson';
$string['addcourse'] = 'Adaugă cursuri';
$string['addcourse_help'] = 'Selectează toate cursurile care ar trebui să fie adăugate la această cerință a ecusonului. Țineți tasta CTRL pentru a selecta mai multe elemente.';
$string['addcriteria'] = 'Adaugă criteriu';
$string['addcriteriatext'] = 'Pentru a începe adăugarea de criterii, vă rugăm să selectați una dintre opțiunile din meniul drop-down.';
$string['addtobackpack'] = 'Adaugă la backpack';
$string['adminonly'] = 'Această pagină este restricționată pentru administratorii site-ului.';
$string['after'] = 'după data emiterii';
$string['aggregationmethod'] = 'Metodă de agregare';
$string['all'] = 'Toate';
$string['allmethod'] = 'Toate condițiile selectate sunt îndeplinite';
$string['allmethodactivity'] = 'Toate activitățile selectate sunt finalizate';
$string['allmethodcourseset'] = 'Toate cursurile selectate sunt finalizate';
$string['allmethodmanual'] = 'Toate rolurile selectate acordă ecusonul';
$string['allmethodprofile'] = 'Toate câmpurile de profil selectate sunt completate';
$string['allowcoursebadges'] = 'Activează ecusoanele cursului';
$string['allowcoursebadges_desc'] = 'Permite ca ecusoanele să fie create și acordate în contextul cursului.';
$string['allowexternalbackpack'] = 'Permite conectarea la backpack-uri externe';
$string['allowexternalbackpack_desc'] = 'Permite utilizatorilor să creeze conexiuni și să afișeze ecusoane de la providerii lor externi de backup.

Notă: Este recomandat să lăsați această opțiune dezactivată, în cazul în care site-ul nu poate fi accesat pe Internet (de exemplu, din cauza firewall-ului).';
$string['any'] = 'Oricare';
$string['anymethod'] = 'Oricare din condițiile selectate sunt îndeplinite';
$string['anymethodactivity'] = 'Oricare dintre activitățile selectate sunt finalizate';
$string['anymethodcourseset'] = 'Oricare dintre cursurile selectate sunt finalizate';
$string['anymethodmanual'] = 'Oricare din rolurile selectate acordă ecusonul';
$string['anymethodprofile'] = 'Oricare dintre câmpurile de profil selectate a fost completat';
$string['attachment'] = 'Adaugă o etichetă mesajului';
$string['award'] = 'Acordă ecuson';
$string['awardedtoyou'] = 'Emis mie';
$string['awardoncron'] = 'Accesul la ecusoane a fost activat cu succes. Prea mulți utilizatori pot câștiga instantaneu acest ecuson. Pentru a asigura performanța site-ului, această acțiune va necesita ceva timp pentru procesare.';
$string['awards'] = 'Destinatari';
$string['backpackavailability'] = 'Verificare ecusoane externe';
$string['backpackbadges'] = 'Aveți {$a->totalbadges} ecuson(ecusoane) afișate din {$a->totalcollections} collecție(colecții). <a href="mybackpack.php">Modificați setările backpack</a>.';
$string['backpackconnection'] = 'Conectare backpack';
$string['backpackconnection_help'] = 'Această pagină vă permite să configurați conexiunea la un furnizor extern de backpack. Conectarea la un backpack vă permite să afișați ecusoane externe în acest site si să stocați ecusoanele câștigate aici în backpack-ul dumneavoastră.

În prezent, numai <a href="http://backpack.openbadges.org"> Mozilla OpenBadges Rucsac </a> este permis . Trebuie să vă înscrieți la un serviciu de backpack  înainte de a încerca să configurați conexiunea backpack-ului pe această pagină.';
$string['backpackdetails'] = 'Setări backpack';
$string['backpackemail'] = 'Adresă email';
$string['backpackemail_help'] = 'Adresa de e-mail asociată cu backpack-ul dumneavoastră. În timp ce sunteți conectat, orice ecusoane câștigate pe acest site vor fi asociate cu această adresă de e-mail.';
$string['backpackimport'] = 'Setări privind importul ecusonului';
$string['badgedetails'] = 'Detalii ecuson';
$string['badgeimage'] = 'Imagine';
$string['badgeimage_help'] = 'Aceasta este o imagine care va fi utilizată atunci când este emis acest ecuson.

Pentru a adăuga o nouă imagine, răsfoiți și selectați o imagine (în format JPG sau PNG), apoi faceți click pe "Salvați modificările". Imaginea va fi decupată sub formă de pătrat și redimensionată pentru a se potrivi cerințelor ecusonului.';
$string['badgeprivacysetting'] = 'Setări de confidențialitate pentru ecuson';
$string['badgeprivacysetting_str'] = 'Afișează automat ecusoanele câștigate pe pagina mea de profil';
$string['badgesalt_desc'] = 'Utilizând un hash se permite serviciilor backpack să confirme câștigarea ecusonului, fără a fi nevoie să afișeze adresa de e-mail. Această setare ar trebui să folosească doar cifre și litere.

Notă: În scopul verificării destinatarului, vă rugăm să evitați să schimbați această setare odată ce a început emiterea ecusoanelor.';
$string['badgesdisabled'] = 'Ecusoanele nu sunt activate pe acest site.';
$string['badgesearned'] = 'Numărul ecusoanelor câștigate: {$a}';
$string['badgesettings'] = 'Setări ecusoane';
$string['badgestatus_0'] = 'Nu este permis utilizatorilor';
$string['badgestatus_1'] = 'Permis utilizatorilor';
$string['badgestatus_2'] = 'Nu este permis utilizatorilor';
$string['badgestatus_3'] = 'Nu este permis utilizatorilor';
$string['badgestatus_4'] = 'Arhivat';
$string['badgestoearn'] = 'Numărul ecusoanelor disponibile: {$a}';
$string['badgesview'] = 'Ecusoane curs';
$string['badgeurl'] = 'Link către ecusoanele emise';
$string['bawards'] = 'Destinatari ({$a})';
$string['bcriteria'] = 'Criteriu';
$string['bdetails'] = 'Editează detalii';
$string['bmessage'] = 'Mesaj';
$string['boverview'] = 'Prezentare generală';
$string['bydate'] = 'completat de';
$string['clearsettings'] = 'Șterge setări';
$string['completioninfo'] = 'Ecusonul a fost atribuit pentru completarea:';
$string['completionnotenabled'] = 'Completarea cursului nu este activată pentru acest curs, așa că nu poate fi inclusă în criteriile ecusonului. Completarea cursului poate fi activată în setările cursului.';
$string['configenablebadges'] = 'Când este activată, această caracteristică vă permite să creați și să acordați ecusoane utilizatorilor site-ului.';
$string['configuremessage'] = 'Mesaj ecuson';
$string['connect'] = 'Conectează';
$string['connected'] = 'Conectat';
$string['connecting'] = 'Se conectează...';
$string['contact'] = 'Contact';
$string['contact_help'] = 'O adresă de email asociată cu emitentul ecusonului.';
$string['copyof'] = 'Copie a {$a}';
$string['coursebadges'] = 'Ecusoane';
$string['coursebadgesdisabled'] = 'Ecusoanele pentru curs nu sunt activate pe acest site.';
$string['coursecompletion'] = 'Utilizatorul trebuie să completeze acest curs.';
$string['create'] = 'Ecuson nou';
$string['createbutton'] = 'Creează ecuson';
$string['creatorbody'] = '<p>{$a->user} a finalizat toate cerințele ecusoanelor și a fost recompensat cu un ecuson. Vezi ecusonul emis la {$a->link} </p>';
$string['creatorsubject'] = '\'{$a}\' a fost atribuit!';
$string['criteria_0'] = 'Acest ecuson este atribuit când...';
$string['criteria_1'] = 'Completarea activității';
$string['criteria_1_help'] = 'Permite ca un ecuson să fie acordat utilizatorilor pe baza completării unui set de activități în cadrul unui curs.';
$string['criteria_2'] = 'Emitere manuală pe baza rolului';
$string['criteria_2_help'] = 'Permite ca un ecuon să fie acordat manual de către utilizatorii care au un rol special pe site sau la curs.';
$string['criteria_3'] = 'Participare socială';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Completare curs';
$string['criteria_4_help'] = 'Permite ca un ecuson să fie acordat utilizatorilor care au absolvit cursul. Acest criteriu poate avea parametri suplimentari, cum ar fi nota minimă și data de finalizare a cursului.';
$string['criteria_5'] = 'Se completează un set de cursuri';
$string['criteria_5_help'] = 'Permite ca ecusonul să fie acordat utilizatorilor care au absolvit un set de cursuri. Fiecare curs poate avea parametri suplimentari, cum ar fi nota minim și data finalizării cursului.';
$string['criteria_6'] = 'Completare profil';
$string['criteria_6_help'] = 'Permite ca un ecuson să fie acordat utilizatorilor pentru completarea anumitor câmpuri din profilul său. Puteți selecta câmpurile implicite și să le personalizați pe cele care sunt disponibile pentru utilizatori.';
$string['criteriacreated'] = 'Criterul pentru ecuson a fost creat cu succes';
$string['criteriadeleted'] = 'Criterul pentru ecuson a fost șters cu succes';
$string['criteria_descr'] = 'Utilizatorii primesc acest ecuson când îndeplinesc următoarea cerință:';
$string['criteria_descr_0'] = 'Utilizatorii primesc aceast ecuson atunci când completează <strong> {$a}</strong> din cerințele enumerate.';
$string['criteria_descr_1'] = 'strong>{$a}</strong> dintre următoarele activități sunt completate:';
$string['criteria_descr_2'] = 'Acest ecuson trebuie să fie acordat utilizatorilor cu <strong>{$a}</ strong> din următoarele roluri:';
$string['criteria_descr_4'] = 'Utilizatorii trebuie să completeze cursul';
$string['criteria_descr_5'] = '<strong>{$a}</strong> dintre următoarele cursuri trebuie să fie completate:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> dintre următoarele câmpuri de profil de utilizator trebuie completate:';
$string['criteria_descr_bydate'] = 'de către <em>{$a}</em>';
$string['criteria_descr_grade'] = 'cu nota minimă <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Completat <strong>{$a}</strong> din:';
$string['criteria_descr_short1'] = 'Completat <strong>{$a}</strong> din:';
$string['criteria_descr_short2'] = 'Acordat de către <strong>{$a}</strong> din:';
$string['criteria_descr_short4'] = 'Completează cursul';
$string['criteria_descr_short5'] = 'Completat <strong>{$a}</strong> din:';
$string['criteria_descr_short6'] = 'Completat <strong>{$a}</strong> din:';
$string['criteria_descr_single_1'] = 'Următoarea activitate trebuie să fie completată:';
$string['criteria_descr_single_2'] = 'Ecusonul trebuie să fie acordat de către un utilizator cu următorul rol:';
$string['criteria_descr_single_4'] = 'Utilizatorii trebuie să completeze cursul';
$string['criteria_descr_single_5'] = 'Următorul curs trebuie să fie completat:';
$string['criteria_descr_single_6'] = 'Următorul câmp de utilizator trebuie să fie completat:';
$string['criteria_descr_single_short1'] = 'Completat:';
$string['criteria_descr_single_short2'] = 'Acordat de către:';
$string['criteria_descr_single_short4'] = 'Completează cursul';
$string['criteria_descr_single_short5'] = 'Complet:';
$string['criteria_descr_single_short6'] = 'Complet:';
$string['criteriasummary'] = 'Rezumat criterii';
$string['criteriaupdated'] = 'Criteriile ecusonului actualizate cu succes';
$string['criterror'] = 'Parametrii curenți ai problemei';
$string['criterror_help'] = 'Acest câmp afișează toți parametrii care au fost adăugați inițial la  această cerință a ecusonului insignă, dar acum nu mai sunt disponibili. Se recomandă să debifați astfel de parametri pentru a vă asigura că utilizatorii pot câștiga acest ecuson în viitor.';
$string['currentimage'] = 'Imagine curentă:';
$string['currentstatus'] = 'Status curent:';
$string['dateawarded'] = 'Data emiterii';
$string['dateearned'] = 'Data: {$a}';
$string['day'] = 'Zi(Zile)';
$string['deactivate'] = 'Dezactivează accesul';
$string['deactivatesuccess'] = 'Accesul la ecusoane a fost dezactivat cu succes';
$string['defaultissuercontact'] = 'Datele de contact ale emitentului implicit al ecusoanelor';
$string['defaultissuercontact_desc'] = 'O adresă de email asociată cu emitentul ecusonului.';
$string['defaultissuername'] = 'Numele emitentului implicit al ecusonului';
$string['defaultissuername_desc'] = 'Numele agentului emitent sau al autorității emitente.';
$string['delcritconfirm'] = 'Sunteți sigur că doriți să ștergeți acest criteriu?';
$string['delparamconfirm'] = 'Sunteți sigur că doriți să ștergeți acest parametru?';
$string['description'] = 'Descriere';
$string['disconnect'] = 'Deconectează';
$string['donotaward'] = 'În prezent, acest ecuson nu este activ, deci nu poate fi acordat utilizatorilor. Dacă doriți să acordați aceast ecuson, vă rugăm să setați statusul activ.';
$string['editsettings'] = 'Editează setări';
$string['enablebadges'] = 'Activează ecusoane';
$string['error:backpackdatainvalid'] = 'Datale returnate din backpack au fost invalide';
$string['error:backpackemailnotfound'] = 'Email-ul \'{$a}\' nu este asociat cu un backpack. Trebuie să <a href="http://backpack.openbadges.org">creați un  backpack</a> pentru acest cont sau să vă logați cu o altă adresă de email.';
$string['error:backpackloginfailed'] = 'Nu ați putut fi conectat cu un backpack extern din următorul motiv: {$a}';
$string['error:backpacknotavailable'] = 'Site-ul dumneavoastră nu este accesibil de pe Internet, astfel încât niciun ecuson emis de pe acest site nu poate fi verificat de către serviciile backpack extern.';
$string['error:backpackproblem'] = 'A apărut o problemă la conectarea cu furnizorul de servicii backpack. Vă rugăm să încercați din nou mai târziu.';
$string['error:badjson'] = 'Încercarea de conectare a returnat date invalide.';
$string['error:cannotact'] = 'Nu se poate activa eticheta';
$string['error:cannotawardbadge'] = 'Nu se poate acorda un ecuson utilizatorului.';
$string['error:clone'] = 'Nu se poate clona ecusonul';
$string['error:connectionunknownreason'] = 'Conexiunea nu a avut succes, dar nu a apărut niciun motiv.';
$string['error:duplicatename'] = 'Un ecuson cu un astfel de nume există deja în sistem.';
$string['error:externalbadgedoesntexist'] = 'Ecusonul nu a fost găsit';
$string['error:guestuseraccess'] = 'Sunteți logat ca vizitator. Pentru a vedea ecusoanele, trebuie să vă conectați cu contul dumneavoastră de utilizator.';
$string['error:invalidbadgeurl'] = 'Format URL invalid al emitentului de ecuson.';
$string['error:invalidcriteriatype'] = 'Tip de criteriu invalid.';
$string['error:invalidexpiredate'] = 'Data de expirare trebuie să fie în viitor';
$string['error:invalidexpireperiod'] = 'Perioada de expirare nu poate fi negativă sau egală cu zero.';
$string['error:noactivities'] = 'Nu există activități cu criterii de completare activate în acest curs.';
$string['error:noassertion'] = 'Nici o afirmație a fost returnată de Persona. Este posibil să fi încheiat dialogul înainte de finalizarea procesului de autentificare.';
$string['error:nocourses'] = 'Finalizarea cursului nu este activată pentru niciunul dintre cursurile din acest site, astfel încât nu poate fi afișată. Finalizarea cursului poate fi activată în setările cursului.';
$string['error:nogroups'] = '<p>Nu există colecții publice de ecusoane în backpack-ul dumneavoastră. </p>
<p>Doar colecțiile publice sunt afișate <a
href="http://backpack.openbadges.org">vedeți backpack-ul dumneavoastră</a>pentru a crea colecții publice.</p>';
$string['error:nopermissiontoview'] = 'Nu aveți permisiunea de a vedea recipienții ecusonului';
$string['error:nosuchbadge'] = 'Ecosnul cu ID {$a} nu există.';
$string['error:nosuchcourse'] = 'Avertizare: Acest curs nu mai este disponibil.';
$string['error:nosuchfield'] = 'Avertizare: Acest câmp de profil de utilizator nu  mai este disponibil.';
$string['error:nosuchmod'] = 'Avertizare: Această activitate nu mai este disponibilă.';
$string['error:nosuchrole'] = 'Avertizare: Acest rol nu mai este disponibil.';
$string['error:nosuchuser'] = 'Utilizator cu această adresă de e-mail nu are un cont cu furnizorul curent de backpack .';
$string['error:notifycoursedate'] = 'Atenție: Ecusoanele asociate cu cursul și completarea activității nu vor fi emise până la data de începere a cursului.';
$string['error:parameter'] = 'Avertizare: cel puțin un parametru ar trebui să fie selectat pentru a se asigura fluxul corect de emitere a ecusoanelor.';
$string['error:personaneedsjs'] = 'În prezent, Javascript este necesar pentru conectarea la backpack. Dacă este posibil, activați JavaScript și reîncărcați pagina.';
$string['error:requesterror'] = 'Cererea de conectare a eșuat  (codul erorii {$a}).';
$string['error:requesttimeout'] = 'Cererea de conectare a expirat înainte de a se putea finaliza.';
$string['error:save'] = 'Nu se poate salva ecusonul.';
$string['error:userdeleted'] = '{$a->user} (Acest utilizator nu mai există în  {$a->site})';
$string['evidence'] = 'Evidență';
$string['existingrecipients'] = 'Recipienți ai ecusonului existenți';
$string['expired'] = 'Expirat';
$string['expiredate'] = 'Acest ecuson expiră  la {$a}.';
$string['expireddate'] = 'Acest ecuson a expirat la {$a}.';
$string['expireperiod'] = 'Acest ecuson expiră în {$a} zi(zile) după ce a fost emis.';
$string['expireperiodh'] = 'Acest ecuson expiră în {$a} oră(ore) după ce a fost emis.';
$string['expireperiodm'] = 'Acest ecuson expiră la {$a} minut(e)după ce a fost emis.';
$string['expireperiods'] = 'Acest ecuson expiră la {$a} secundă(e)după ce a fost emis.';
$string['expirydate'] = 'Dată de expirare';
$string['expirydate_help'] = 'Opțional, ecusoanele pot expira la o anumită dată, sau data poate fi calculată în funcție de data când insigna a fost emisă pentru un utilizator.';
$string['externalbadges'] = 'Ecusoanele mele de pe alte site-uri';
$string['externalbadges_help'] = 'Această zonă afișează ecusoane din backpack-ul extern.';
$string['externalbadgesp'] = 'Ecusoane de pe alte site-uri web';
$string['externalconnectto'] = 'Pentru a afișa ecusoanele externe aveți nevoie de <a href="{$a}"> conectare  la un backpack </a>.';
$string['fixed'] = 'Dată fixă';
$string['hidden'] = 'Ascuns';
$string['hiddenbadge'] = 'Din păcate, proprietarul ecusonului nu a setat aceste informații ca fiind disponibile.';
$string['issuancedetails'] = 'Expirare ecuson';
$string['issuedbadge'] = 'Informații depre emiterea ecusonului';
$string['issuerdetails'] = 'Detalii emitent';
$string['issuername'] = 'Nume emitent';
$string['issuername_help'] = 'Numele agentului emitent sau al autorității.';
$string['issuerurl'] = 'URL emitent';
$string['localbadges'] = 'Ecusoanele mele de pe {$} site web';
$string['localbadgesh'] = 'Ecusoanele mele pe acest site web';
$string['localbadgesh_help'] = 'Toate ecusoanele câștigate pe acest site prin completarea cursurilor, activități la curs și alte cerințe.

Aveți posibilitatea să gestionați ecusoanele aici, făcându-le publice sau private pe pagina dumneavoastră de profil.

Aveți posibilitatea să descărcați toate ecusoanele separat și să le salvați pe computer. Ecusoane descărcate pot fi adăugate în sericiul de backpack extern.';
$string['localbadgesp'] = 'Ecusoane de la {$a}:';
$string['localconnectto'] = 'Pentru a partaja aceste ecusoane în afara site-ului trebuie să  <a href="{$a}">conectați la un backpack</a>.';
$string['makeprivate'] = 'Setează ca fiind privat';
$string['makepublic'] = 'Setează ca fiind public';
$string['managebadges'] = 'Administrare ecusoane';
$string['message'] = 'Conținut mesaj';
$string['messagesubject'] = 'Felicitări! Tocmai ați câștigat un ecuson!';
$string['method'] = 'Criteriul este complet când...';
$string['mingrade'] = 'Nota minimă necesară';
$string['month'] = 'Lună(luni)';
$string['mybackpack'] = 'Setările mele pentru backpack';
$string['mybadges'] = 'Ecusoanele mele';
$string['never'] = 'Niciodată';
$string['newbadge'] = 'Adaugă un nou ecuson';
$string['newimage'] = 'Imagine nouă';
$string['noawards'] = 'Acest ecuson nu a fost câștigat încă';
$string['nobackpack'] = 'NU există serviciu backpack conectat cu acest cont.<br/>';
$string['nobackpackbadges'] = 'Nu există ecusoane în colecția pe care ați selectat-o. <a
href="mybackpack.php">Adăugați mai multe colecții</a>.';
$string['nobackpackcollections'] = 'Nu au fost selectate colecții de ecusoane. <a
href="mybackpack.php">Adaugă colecții</a>.';
$string['nobadges'] = 'Nu există ecusoane disponibile';
$string['nocriteria'] = 'Criteriul pentru acest ecuson nu a fost stabilit încă.';
$string['noexpiry'] = 'Acest ecuson nu are dată de expirare.';
$string['noparamstoadd'] = 'Nu există paramatri adiționali disponibili pentru a fi adăugați la această cerință a ecusonului.';
$string['notacceptedrole'] = 'Rolul dumneavoastră actual nu este printre rolurile care poate emite manual acest ecuson.<br/>
În cazul în care doriți să vedeți utilizatorii care au câștigat deja acest ecuson, puteți vizita pagina {$a}.';
$string['notconnected'] = 'Neconectat';
$string['nothingtoadd'] = 'Nu există criterii disponibile pnetru a fi adăugate';
$string['notification'] = 'Notifică emitentul ecusonului';
$string['notification_help'] = 'Această setare gestionează notificările trimise unui creator de ecusoane pentru a-i informa că ecusonul a fost emis.

Următoarele opțiuni sunt disponibile:

* **NICIODATĂ** – Nu trimite notificări.

* **DE FIECARE DATĂ** – Trimite o notificare de fiecare dată când se acordă acest ecuson.

* **ZILNIC** – Trimite notificări o dată pe zi.

* **SĂPTĂMÂNAL** –Trimite notificări o dată pe săptămână.

* **LUNAR** – Trimite notificări o dată pe lună.';
$string['notifydaily'] = 'Zilnic';
$string['notifyevery'] = 'De fiecare dată';
$string['notifymonthly'] = 'Lunar';
$string['notifyweekly'] = 'Săptămânal';
$string['numawards'] = 'Acest ecuson a fost emis către <a href="{$a->link}">{$a->count}</a> utilizator (utilizatori)';
$string['numawardstat'] = 'Acest ecuson a fost emis  {$a} utilizatorului (utilizatorilor)';
$string['overallcrit'] = 'din criteriile selectate sunt complete.';
$string['personaconnection'] = 'Autentificați-vă cu email-ul dumneavoastră';
$string['potentialrecipients'] = 'Potențiali recipienți ai ecusonului';
$string['recipientdetails'] = 'Detalii recipient';
$string['recipientidentificationproblem'] = 'Nu se poate găsi un destinatar al acestui ecuson dintre utilizatorii existenți';
$string['recipients'] = 'Destinatari ecuson';
$string['recipientvalidationproblem'] = 'Utilizatorul curent nu poate fi verificat ca beneficiar al acestui ecuson.';
$string['relative'] = 'Dată relativă';
$string['reviewbadge'] = 'Schimbări la accesarea ecusonului';
$string['save'] = 'Salvează';
$string['searchname'] = 'Caută după nume';
$string['selectaward'] = 'Vă rugăm să selectați rolul pe care doriți să îl utilizați pentru a acorda acest ecuson:';
$string['selectgroup_end'] = 'Doar colecțiile publice sunt afișate, <a
href="http://backpack.openbadges.org">vedeți backpack-ul dumneavoastră </a> pentru a crea mai multe colecții publice.';
$string['selectgroup_start'] = 'Selectați colecțiile din backpack-ul dumneavoastră pentru a fi afișate pe acest site:';
$string['selecting'] = 'Vezi ecusoanele selectate...';
$string['setup'] = 'Setează conexiunea';
$string['signinwithyouremail'] = 'Înregistrați-vă cu email-ul dumneavoastră';
$string['sitebadges'] = 'Ecusoane site';
$string['status'] = 'Status ecuson';
$string['statusmessage_0'] = 'Acest ecuson nu este în prezent disponibil pentru utilizatori. Permiteți accesul, dacă doriți ca utilizatorii să câștige acest ecuson.';
$string['statusmessage_1'] = 'Acest ecuson este disponibil în prezent pentru utilizatori. Dezactivați accesul pentru a face orice fel de modificări.';
$string['statusmessage_2'] = 'Acest ecuson nu este disponibil în prezent pentru utilizatori, iar criteriile sale sunt blocate. Permiteți accesul dacă doriți ca utilizatorii să câștige acest ecuson.';
$string['statusmessage_3'] = 'Acest ecuson este disponibilă în prezent pentru utilizatori, iar criteriile sale sunt blocate.';
$string['statusmessage_4'] = 'Acest ecuson este în prezent arhivat.';
$string['subject'] = 'Subiectul mesajului';
$string['variablesubstitution'] = 'Substituție variabilă în mesaje.';
$string['viewbadge'] = 'Vezi ecusonul emis';
$string['visible'] = 'Vizibil';
$string['warnexpired'] = '(Acest ecuson a expirat!)';
$string['year'] = 'An (Ani)';
