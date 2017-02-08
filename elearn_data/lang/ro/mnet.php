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
 * Strings for component 'mnet', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Despre serverul dumneavoastră';
$string['accesslevel'] = 'Nivel de acces';
$string['addhost'] = 'Adaugă server';
$string['addnewhost'] = 'Adaugă un nou server';
$string['addtoacl'] = 'Adaugă la Access Control';
$string['allhosts'] = 'Toate gazdele';
$string['allhosts_no_options'] = 'La vizualizarea multiple hosts nu sunt opţiuni disponibile';
$string['allow'] = 'Permite';
$string['applicationtype'] = 'Tip de aplicație';
$string['authfail_nosessionexists'] = 'Authorisation failed: the mnet session does not exist.';
$string['authfail_sessiontimedout'] = 'Authorisation failed: the mnet session has timed out.';
$string['authfail_usermismatch'] = 'Authorisation failed: the user does not match.';
$string['authmnetdisabled'] = 'Moodle Networking <em>Authentication plugin</em>este <strong>dezactivat</strong>.';
$string['badcert'] = 'Acesta nu este un certificat valid';
$string['certdetails'] = 'Detalii sigure';
$string['configmnet'] = 'MNet permite comunicarea acestui server cu alte servere sau servicii.';
$string['couldnotgetcert'] = 'No certificate found at <br />{$a}. <br />The host may be down or incorrectly configured.';
$string['couldnotmatchcert'] = 'Aceasta nu se potrivește cu certificatul publicat în prezent de către serverul web.';
$string['courses'] = 'Cursuri';
$string['courseson'] = 'cursuri despre';
$string['currentkey'] = 'Cheie publică curentă';
$string['current_transport'] = 'Current transport';
$string['databaseerror'] = 'Nu s-au putut scrie detaliile în baza de date.';
$string['deleteaserver'] = 'Eliminare server';
$string['deletedhostinfo'] = 'Această gazdă a fost ștearsă. Dacă doriți să anulați ștergerea, schimbați statusul șters înapoi la "nu".';
$string['deletedhosts'] = 'Gazde șterse: {$a}';
$string['deletehost'] = 'Şterge server';
$string['deletekeycheck'] = 'Sunteţi sigur că doriţi să ştergeţi această cheie?';
$string['deleteoutoftime'] = 'Fereastra de 60 de secunde pentru a șterge această cheie a expirat. Vă rugăm să începeți din nou.';
$string['deleteuserrecord'] = 'SSO ACL: delete record for user \'{$a}[0]\' from {$a}[1].';
$string['deletewrongkeyvalue'] = 'A apărut o eroare. Dacă nu ați încercat să ștergeți cheia SSL a serverului dumneavoastră, este posibil să fi fost fost obiectul unui atac malware. Nu a fost întreprinsă nicio acțiune.';
$string['deny'] = 'Interzice';
$string['description'] = 'Descriere';
$string['duplicate_usernames'] = 'Nu am reușit să creăm un index pe coloanele "mnethostid" și "utilizator" în tabelul dumneavoastră cu utilizatori. <br /> Aceasta se poate întâmpla atunci când aveți <a href="{$a}" target="_blank"> nume de utilizatori duplicate în </a> tabelul dumneavoastră cu utilizatori. <br /> Upgrade-ul dumneavoastră trebuie să fie completat cu succes. Faceți click pe link-ul de mai sus iar instrucțiunile cu privire la rezolvarea aceastei probleme vor apărea într-o fereastră nouă. Le puteți folosi la sfârșitul upgrade-ului. <br />';
$string['enabled_for_all'] = '(This service has been enabled for all hosts).';
$string['enterausername'] = 'Completaţi aici un nume de utilizator sau o listă cu nume de utilizatori, folosiţi virgula ca separator';
$string['error7020'] = 'Această eroare apare în mod normal în cazul în care site-ul de la distanță a creat o înregistrare pentru tine cu wwwroot greșit, de exemplu, http://yoursite.com  în loc de http://www.yoursite.com. Ar trebui să contactați administratorul site-ului de la distanță cu wwwroot-ul dumneavoastră (așa cum se specifică în config.php) cerându-i să actualizeze înregistrarea ei pentru gazda dumneavoastră.';
$string['error7022'] = 'Mesajul trimis la site-ul de la distanță a fost criptat în mod corespunzător, dar nu este semnat. Acest lucru este neașteptat; probabil ar trebui să trimiteți un bug în cazul în care acest lucru se întâmplă (cu cât mai multe informații posibile despre versiunile de aplicare în cauză, etc.).';
$string['error7023'] = 'Site-ul remote a încercat să decripteze mesajul cu toate cheile pe care le are înregistrate pentru site-ul tau. Toate au eșuat. S-ar putea să rezolvați această problemă printr-o cheie manuală cu site-ul remote. Acest lucru este puțin probabil să apară, decât dacă nu ați comunicat cu site-ul remote pentru câteva luni.';
$string['error7024'] = 'Aţi trimis un mesaj necriptat către situl remote însă acel sit nu acceptă comunicaţii necriptate de la situl dumneavoastră. Acest lucru este foarte neobişnuit, în cazul în care acest lucru se întâmplă ar trebui să-l raportaţi ca defect (furnizând cât mai multe informaţii posibile despre versiunea Moodle în care a apărut defectul, etc.)';
$string['error709'] = 'Situl remote nu a reuşit să obţină o cheie SSL de la dumneavoastră.';
$string['expired'] = 'Această cheie expiră la';
$string['expires'] = 'Valabil până la';
$string['expireyourkey'] = 'Elimină această cheie';
$string['expireyourkeyexplain'] = 'Moodle rotește automat cheile la fiecare 28 de zile (în mod implicit), dar aveti optiunea de a <em> manual </ em> seta ca fiind expirată această cheie în orice moment. Acest lucru va fi util numai dacă credeți că această cheie a fost compromisă. Un înlocuitor va fi imediat generat automat. <br /> Ștergerea aceastei chei va face imposibilă comunicarea altor aplicații cu dumneavoastră, până când contactați manual fiecare administrator și să le oferiți noua cheie.';
$string['exportfields'] = 'Câmpuri de export';
$string['failedaclwrite'] = 'Nu a reușit să scrie pe lista de control al accesului MNet pentru utilizator "{$a}".';
$string['findlogin'] = 'Find Login';
$string['forbidden-function'] = 'Acea funcţie nu a fost activată pentru RPC.';
$string['forbidden-transport'] = 'Metoda de transport pe care încercaţi să o folosiţi nu este permisă.';
$string['forcesavechanges'] = 'Salvare modificări obligatorie';
$string['helpnetworksettings'] = 'Configure inter-Moodle communication';
$string['hidelocal'] = 'Ascunde utilizatori locali';
$string['hideremote'] = 'Ascunde utilizatori remote';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Host or course not found';
$string['hostdeleted'] = 'Ok - host deleted';
$string['hostexists'] = 'O înregistrare există deja pentru o gazdă cu acest nume de  gazdă (poate fi șters). <a href="{$a}"> click aici </a> pentru a edita această înregistrare.';
$string['hostlist'] = 'Lista gazdelor din rețea';
$string['hostname'] = 'Hostname';
$string['hostnamehelp'] = 'Numele complet al domeniului pentru remote host, ex. www.exemplu.com';
$string['hostnotconfiguredforsso'] = 'Acest server nu este configurat pentru autentificarea de la distanță.';
$string['hostsettings'] = 'Host Settings';
$string['http_self_signed_help'] = 'Permite conexiuni folosind un Certificat SSL DIY auto-semnat pe host-ul de la distanță.';
$string['https_self_signed_help'] = 'Permite conexiuni folosind un permis auto-semnat DIY SSL în PHP pe host-ul de la distanţă prin HTTP.';
$string['https_verified_help'] = 'Permite conexiuni utilizând un Certificat SSL verificat pe host-ul de la distanţă';
$string['http_verified_help'] = 'Permite conexiuni utilizând un Certificat SSL verificat în PHP pe host-ul de la distanţă, dar prin protocolul http (nu https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Această valoare este atribuită automat şi nu poate fi modificată';
$string['importfields'] = 'Câmpuri de importat';
$string['inspect'] = 'Inspectează';
$string['installnosuchfunction'] = 'Eroare de codare! Se încearcă instalarea unei funcții MNET xmlrpc ({$a-> method}) dintr-un fișier ({$a-> file}) și nu se poate găsi!';
$string['installnosuchmethod'] = 'Eroare de codare! Se încearcă instalarea unei metode MNET xmlrpc ({$a-> method}) pe o clasă ({$a-> class}) și nu se poate găsi!';
$string['installreflectionclasserror'] = 'Eroare de codificare! Introspecția MNet nu a reușit pentru metoda \'{$a->metoda}\' în clasa \'{$a->clasa}\'. Mesajul de eroare inițial, în cazul în care vă ajută, este: \'{$a->eroare}\'';
$string['installreflectionfunctionerror'] = 'Eroare de codificare! Introspecția MNet nu a reușit pentru funcția \'{$a->metoda}\' în fișierul \'{$a->fișier}\'. Mesajul de eroare inițial, în cazul în care vă ajută, este: \'{$a->eroare}\'';
$string['invalidaccessparam'] = 'Parametru de acces incorect.';
$string['invalidactionparam'] = 'Parametru de acţiune incorect.';
$string['invalidhost'] = 'Trebuie să furnizezați un identificator valid al gazdei';
$string['invalidpubkey'] = 'Aceasta nu este o cheie SSL validă.';
$string['invalidurl'] = 'Parametru URL incorect.';
$string['ipaddress'] = 'Adresă IP';
$string['is_in_range'] = 'Adresa IP <code> {$a} </ code> reprezintă o gazdă de încredere validă.';
$string['ispublished'] = 'Moodle {$a} a activat acest serviciu pentru dumneavoastră.';
$string['issubscribed'] = '{$} este abonarea la acest serviciu de pe gazda dumneavoastră.';
$string['keydeleted'] = 'Cheia a fost ștearsă și înlocuită cu succes.';
$string['keymismatch'] = 'Cheia publică pe care o dețineți pentru această gazdă este diferită de cheia publică din prezent. Cheia publicată în prezent este:';
$string['last_connect_time'] = 'Ultima conectare a avut loc la';
$string['last_connect_time_help'] = 'Ora la care v-ați conectat  ultima oară la acest host.';
$string['last_transport_help'] = 'Conexiunea pe care aţi folosit-o ultima oară când ați accesat acest host.';
$string['leavedefault'] = 'Utilizează în schimb setările implicite';
$string['listservices'] = 'Listă de servicii';
$string['loginlinkmnetuser'] = '<br /> Dacă sunteți utilizator de la distanță MNet și puteți <a href="{$a}"> confirma adresa de email aici </a>, puteți fi redirecționat către pagina de autentificare. <br />';
$string['logs'] = 'arhive';
$string['managemnetpeers'] = 'Administrare perechi';
$string['method'] = 'Metodă';
$string['methodhelp'] = 'Metodă de ajutor pentru {$a}';
$string['methodsavailableonhost'] = 'Metode disponibile pe {$a}';
$string['methodsavailableonhostinservice'] = 'Metode disponibile pentru {$a-> service} pe {$a->host}';
$string['methodsignature'] = 'Metodă semnătură pentru {$}';
$string['mnet'] = 'Moodle Networking';
$string['mnet_concatenate_strings'] = 'Concatenează (până la) 3 șiruri de caractere și returnează rezultatul';
$string['mnetdisabled'] = 'Moodle Network este <strong>dezactivat</strong>.';
$string['mnetidprovider'] = 'MNET ID Provider';
$string['mnetidproviderdesc'] = 'Puteți folosi această facilitate pentru a prelua un link la care vă puteți conecta, dacă puteți oferi adresa de e-mail corectă care corespunde numelui de utilizator cu care ați incercat anterior să vă conectați.';
$string['mnetidprovidermsg'] = 'Ar trebui să puteți să vă conectați la furnizorul dumneavostră. {$a}';
$string['mnetidprovidernotfound'] = 'Ne pare rău, dar nu s-au putut găsi alte informații';
$string['mnetlog'] = 'Înregistrări';
$string['mnetpeers'] = 'Peers';
$string['mnetservices'] = 'Servicii';
$string['mnet_session_prohibited'] = 'Utilizatorii din serverul dumneavoastră local nu au permisiunea în prezent să se mute la {$}';
$string['mnetsettings'] = 'Setări reţea Moodle';
$string['moodle_home_help'] = 'Adresa către pagina principală a aplicației MNet pe server, ex: /moodle/.';
$string['name'] = 'Nume';
$string['net'] = 'Rețelistică';
$string['networksettings'] = 'Setări rețea';
$string['never'] = 'Niciodată';
$string['noaclentries'] = 'No entries in the SSO access control list';
$string['noaddressforhost'] = 'Ne pare rău, dar acel nume de gazdă ({$a}) nu a putut fi rezolvat!';
$string['nocurl'] = 'Librăria PHP cURL nu a fost instalată';
$string['nolocaluser'] = 'No local record exists for remote user.';
$string['nomodifyacl'] = 'Nu aveți permisiunea de a modifica lista de control acces MNet.';
$string['nonmatchingcert'] = 'Subiectul certificatului: <br /><em>{$a->subject}</em <br/> nu se potrivește cu gazda de la care a provenit: <br/><em>{$a- gazdă } </em>.';
$string['nopubkey'] = 'A apărut o problemă la preluarea cheii publice. <br /> Poate gazda nu permite MNet sau cheia este invalidă.';
$string['nosite'] = 'Nu s-a putut găsi cursul la nivelul site-ului';
$string['nosuchfile'] = 'Fişierul/funcţionalitatea {$a} nu există.';
$string['nosuchfunction'] = 'Nu s-a putut localiza funcția sau funcția este interzisă pentru RPC.';
$string['nosuchmodule'] = 'Funcția a fost folosită în mod incorect și nu a putut fi localizată. Vă rugăm să utilizați
mod/modulename/lib/functionname format.';
$string['nosuchpublickey'] = 'Imposibil de a obține cheia publică pentru verificarea semnăturii.';
$string['nosuchservice'] = 'The RPC service is not running on this host.';
$string['nosuchtransport'] = 'No transport with that ID exists.';
$string['notBASE64'] = 'This string is not in Base64 Encoded format. It cannot be a valid key.';
$string['notenoughidpinfo'] = 'Providerul dumneavoastră de identitate nu ne dă suficiente informații pentru a crea sau actualiza contul dumneavoastră local. Ne pare rău!';
$string['not_in_range'] = 'Adresa IP <code>{$a}</code> nu reprezintă o gazdă de încredere validă.';
$string['notinxmlrpcserver'] = 'Se încearcă a se accesa clientul MNet la distanță, nu în timpul execuției serverului XMLRPC';
$string['notmoodleapplication'] = 'AVERTIZARE: Aceasta nu este o aplicație Moodle, așadar unele dintre metodele de inspecție pot să nu funcționeze corespunzător.';
$string['notPEM'] = 'Această cheie nu este în format PEM. Nu va funcționa.';
$string['notpermittedtojump'] = 'You do not have permission to begin a remote session from this Moodle hub.';
$string['notpermittedtojumpas'] = 'Nu puteți începe o sesiune de la distanță în timp ce sunteți logat ca un alt utilizator.';
$string['notpermittedtoland'] = 'Nu aveţi permisiunea să începeţi această sesiune remote.';
$string['off'] = 'Off';
$string['on'] = 'On';
$string['options'] = 'Opțiuni';
$string['peerprofilefielddesc'] = 'Aici puteți suprascrie setările globale pentru domeniile de profil  trimise și importate atunci când sunt creați noi utilizatori';
$string['permittedtransports'] = 'Metode de transport permise';
$string['phperror'] = 'O eroare internă PHP a împiedicat cererea dumneavoastră să fie îndeplinită.';
$string['position'] = 'Poziție';
$string['postrequired'] = 'Funcția de ștergere necesită o cerere POST.';
$string['profileexportfields'] = 'Fișiere de trimis';
$string['profilefielddesc'] = 'Aici puteți configura lista câmpurilor de profil care sunt trimise și primite prin MNet atunci când sunt create conturi de utilizator sau sunt actualizate. De asemenea, puteți suprascrie acest lucru pentru fiecare pereche MNet în mod individual. Rețineți că următoarele câmpuri sunt trimise întotdeauna și nu sunt opționale: {$a}';
$string['profilefields'] = 'Câmpuri de profil';
$string['profileimportfields'] = 'Domenii de import';
$string['promiscuous'] = 'Promiscuu';
$string['publickey'] = 'Cheie publică';
$string['publickey_help'] = 'Cheia publică de acces este în mod automat obţinută de la serverul de la distanţă.';
$string['publickeyrequired'] = 'Trebuie să furnizați o cheie publică.';
$string['publish'] = 'Publică';
$string['reallydeleteserver'] = 'Sunteţi sigur că doriţi ştergerea serverului?';
$string['receivedwarnings'] = 'S-au primit următoarele atenţionări';
$string['recordnoexists'] = 'Record does not exist.';
$string['reenableserver'] = 'Nu - selectați această opțiune pentru a reactiva acest server.';
$string['registerallhosts'] = 'Register all hosts (<em>Hub mode</em>)';
$string['registerallhostsexplain'] = 'Puteți alege să înregistrați toate gazdele care încearcă să se conecteze  în mod automat. Acest lucru înseamnă că o înregistrare va apărea în lista de gazde pentru orice site MNet care se conectează  și cere cheia publica. <br/> Aveți opțiunea de mai jos pentru a configura serviciile pentru "Toate gazdele" și prin activarea unor servicii, puteți furniza servicii către orice server remote.';
$string['registerhostsoff'] = 'Înregistrarea tuturor gazdelor este în prezent <b>off</b>';
$string['registerhostson'] = 'Înregistrarea tuturor gazdelor este în prezent <b>on</b>';
$string['remotecourses'] = 'Cursuri Remote';
$string['remotehost'] = 'Remote Hub';
$string['remotehosts'] = 'Remote hosts';
$string['requiresopenssl'] = 'Networking requires the OpenSSL extension';
$string['restore'] = 'Restabilește';
$string['returnvalue'] = 'Valoare de returnare';
$string['reviewhostdetails'] = 'Review Host Details';
$string['reviewhostservices'] = 'Review Host Services';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP unencrypted';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (self-signed)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (self-signed)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signed)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signed)';
$string['selectaccesslevel'] = 'Vă rugăm selectaţi din listă un nivel de acces.';
$string['selectahost'] = 'Please select a remote Moodle host.';
$string['service'] = 'Nume serviciu';
$string['serviceid'] = 'ID serviciu';
$string['servicesavailableonhost'] = 'Servicii disponibile pe {$a}';
$string['serviceswepublish'] = 'Servicii publicate pe {$a}.';
$string['serviceswesubscribeto'] = 'Servicii de pe {$a} la care suntem subscrişi.';
$string['settings'] = 'Setări';
$string['showlocal'] = 'Afişează utilizatori locali';
$string['showremote'] = 'Afişează utilizatori remote';
$string['ssl_acl_allow'] = 'SSO ACL: Allow user {$a}[0] from {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Deny user {$a}[0] from {$a}[1]';
$string['ssoaccesscontrol'] = 'SSO Access Control';
$string['ssoacldescr'] = 'Utilizați această pagină pentru a oferi/respinge accesul utilizatorilor la host-uri MNet. Acest lucru este posibil când oferiți servicii SSO pentru utilizatorii la distanță. Pentru a  putea controla <em>local</em> users\' abilitatea utilizatorilor de a utiliza alte Host-uri MNet, folosiți sistemul de roluri pentru a le oferi <em>mnetlogintoremote</em> accesul.';
$string['ssoaclneeds'] = 'Pentru această funcționalitate să funcționeze, trebuie să aveți Networking activat, plus plugin-ul de autentificare MNet activat.';
$string['strict'] = 'Strict';
$string['subscribe'] = 'Subscriere';
$string['system'] = 'Sistem';
$string['testclient'] = 'Test client MNet';
$string['testtrustedhosts'] = 'Testează o adresă';
$string['testtrustedhostsexplain'] = 'Inserați o adresă IP pentru a vedea dacă este o gazdă de încredere.';
$string['theypublish'] = 'Pulblică';
$string['theysubscribe'] = 'Se abonează';
$string['transport_help'] = 'Aceste opţiuni sunt reciproce, astfel încât puteți obliga un host de la distanță să utilizeze un certificat semnat SSL doar dacă serverul dvs are de asemenea un certificat semnat SSL.';
$string['trustedhosts'] = 'XML-RPC hosts';
$string['turnitoff'] = 'Închide';
$string['turniton'] = 'Deschide';
$string['type'] = 'Tip';
$string['unknown'] = 'Necunoscut';
$string['unknownerror'] = 'S-a întâmpinat o eroare necunoscută în timpul negocierii.';
$string['usercannotchangepassword'] = 'Nu puteţi să modificaţi aici parola dumneavoastră pentru ca sunteţi un utilizator de tip remote';
$string['userchangepasswordlink'] = '<br /> Pentru a vă putea modifica parola accesaţi <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usernotfullysetup'] = 'Profilul dumneavoastră de utilizator este incomplet. Trebuie să mergeți înapoi la <a href="{$a}">providerul dumneavoastră</a> și să vă asigurați că profilul dumneavoastră este complet acolo. S-ar putea să fie nevoie să vă delogați și să vă logați din nou pentru ca această acțiune să aibă efect.';
$string['usersareonline'] = 'Atenţie: {$a} utilizatori de pe acel server sunt logaţi în prezent pe situl dumneavoastră.';
$string['validated_by'] = 'A fost validat de reţeaua: &nbsp;<code>{$a}</code>';
$string['verifysignature-error'] = 'Verificarea semnăturii a eșuat. A apărut o eroare.';
$string['verifysignature-invalid'] = 'Verificarea semnăturii a eșuat. Se pare că acest document nu a fost semnat de către dumneavoastră.';
$string['version'] = 'versiune';
$string['warning'] = 'Atenție';
$string['wrong-ip'] = 'Adresa dumneavoastră IP nu corespunde adresei pe care o avem înregistrată.';
$string['xmlrpc-missing'] = 'Trebuie să aveți  XML-RPC instalat în PHP configurat pentru a putea folosi această caracteristică.';
$string['yourhost'] = 'Gazda dumneavoastră';
$string['yourpeers'] = 'Perechile dumneavoastră';
