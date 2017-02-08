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
 * Strings for component 'auth', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugin-uri de autentificare disponibile';
$string['alternatelogin'] = 'Dacă introduceţi aici un URL, el va fi folosit ca pagină de autentificare pentru acest site. Pagina ar trebui să conţină un formular care are proprietatea action setată pe <strong>\'{$a}\'</strong> şi să returneze câmpurile <strong>username</strong> şi <strong>password</strong>.<br />Aveţi grijă să nu introduceţi un URL incorect deoarece vă puteţi bloca accesul la site. <br />Lăsaţi acest câmp gol pentru a folosi pagina implicită de autentificare.';
$string['alternateloginurl'] = 'URL alternativ de autentificare';
$string['auth_changepasswordhelp'] = 'Instrucţiuni pentru schimbarea parolei';
$string['auth_changepasswordhelp_expl'] = 'Afişează instrucţiunile de recuperare a parolei utilizatorilor care şi-au uitat parola {$a}. Acestea vor fi afişate fie împreună cu, fie în locul <strong>URL schimbare parolă</strong> sau a paginii interne Moodle de schimbare a parolei.';
$string['auth_changepasswordurl'] = 'URL schimbare parolă';
$string['auth_changepasswordurl_expl'] = 'Specificaţi URL-ul către care vor fi direcţionaţi utilizatorii care şi-au uitat parola {$a}. Setaţi <strong>Utilizează pagina standard de schimbare a parolei</strong> pe <strong>Nu</strong>.';
$string['auth_changingemailaddress'] = 'Aţi solicitat schimbarea adresei de email, din {$a->oldemail} în {$a->newemail}. Din motive de securitate, vă trimitem un email la noua adresă pentru a ne asigura că sunteţi titularul acesteia. Noua adresă de email va fi actualizată imediat după ce veţi deschide URL-ul pe care vi-l trimitem în email.';
$string['auth_common_settings'] = 'Setări comune';
$string['auth_data_mapping'] = 'Mapare date';
$string['authenticationoptions'] = 'Opţiuni autentificare';
$string['auth_fieldlock'] = 'Blochează valoare';
$string['auth_fieldlock_expl'] = '<p><b>Blochează valoare:</b> Dacă această setare este activată, utilizatorii şi administratorii Moodle nu vor mai putea edita direct acest câmp. Folosiţi această opţiune dacă realizaţi operaţiunile de mentenanţă a acestor date din sistemul extern de autentificare. </p>';
$string['auth_fieldlocks'] = 'Blochează câmpuri utilizator';
$string['auth_fieldlocks_help'] = '<p>Puteţi bloca câmpurile de date ale utilizator. care conţin informaţii despre utilizator. Acest lucru este folositor pentru siturile unde datele utilizatorilor sunt gestionate manual de către administratori sau sunt încărcate cu ajutorul funcţionalităţii "Încarcă utilizatori". Dacă blocaţi câmpuri obligatorii în Moodle, asiguraţi-vă că furnizaţi acele date atunci când creaţi conturi de utilizator, altfel acele conturi vor fi inutilizabile.</p><p>Puteţi seta modul de blocare pe \'Deblocat dacă e gol\' pentru a evita această problemă.</p>';
$string['authinstructions'] = 'Puteţi oferi aici instrucţiuni pentru utilizatori în legătură cu numele de utilizatori şi parolele pe care ar trebui să le folosească. Textul pe care îl introduceţi aici va apărea pe pagina de autentificare. Dacă lăsaţi acest câmp gol, nu se vor afişa instrucţiuni.';
$string['auth_invalidnewemailkey'] = 'Eroare: dacă încercaţi să confirmaţi o schimbare de adresă de email, este posibil să fi apărut o eroare la copierea URL-ului pe care vi l-am trimis prin email. Vă rugăm copiaţi adresa şi încercaţi din nou.';
$string['auth_multiplehosts'] = 'Se pot specifica mai multe host-uri SAU adrese (ex. host1.com;host2.com;host3.com) sau (ex. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_outofnewemailupdateattempts'] = 'Aţi depăşit numărul permis de încercări de actualizare a adresei de email. Cererea Dvs. de actualizare a fost anulată.';
$string['auth_passwordisexpired'] = 'Parola dumneavoastră a expirat. Doriţi să o schimbaţi acum?';
$string['auth_passwordwillexpire'] = 'Parola dumneavoastră expiră în {$a} zile. Doriţi să o schimbaţi acum?';
$string['auth_remove_delete'] = 'Şterge toţi utilizatorii interni';
$string['auth_remove_keep'] = 'Păstrează utilizatorii interni';
$string['auth_remove_suspend'] = 'Suspendă utilizatorii interni';
$string['auth_remove_user'] = 'Specificaţi ce se întâmplă cu un cont de utilizator intern în timpul operaţiunii de sincronizare globală atunci când utilizatorul a fost şters din sursa externă. Doar utilizatorii suspendaţi sunt reactivaţi în mod automat dacă reapar în sursa externă.';
$string['auth_remove_user_key'] = 'Utilizator extern şters';
$string['auth_sync_script'] = 'Script de sincronizare cron';
$string['auth_updatelocal'] = 'Actualizează local';
$string['auth_updatelocal_expl'] = '<p><b>Actualizează local:</b> Dacă această setare este activată, câmpul va fi actualizat (din sursa de autentificare externă) de fiecare dată când utilizatorul se autentifică sau se realizează o sincronizare a utilizatorilor. Câmpurile setate să se actualizeze local ar trebui să fie blocate.</p>';
$string['auth_updateremote'] = 'Actualizează extern';
$string['auth_updateremote_expl'] = '<p><b>Actualizează extern:</b> Dacă această setare este activată, autentificarea externă se va actualiza atunci când contul de utilizator este actualizat. Câmpurile ar trebui deblocate pentru a permite editarea.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Actualizarea datelor LDAP externe necesită setarea parametrilor binddn şi bindpw pe un utilizator cu drepturi de editare pe toate conturile de utilizator. În acest moment, atributele multi-valoare nu sunt memorate, iar valorile suplimentare vor fi şterse la actualizare. </p>';
$string['auth_user_create'] = 'Permite crearea de utilizatori';
$string['auth_user_creation'] = 'Utilizatorii noi (anonimi) pot crea conturi de utilizator pe sursa de autentificare externă, iar acestea pot fi confirmate prin email. Dacă această setare este activată, nu uitaţi să configuraţi opţiunile specifice fiecărui modul legate de crearea de utilizatori.';
$string['auth_usernameexists'] = 'Numele de utilizator ales există deja în sistem. Vă rugăm alegeţi alt nume de utilizator.';
$string['auto_add_remote_users'] = 'Adaugă automat de utilizatori remote';
$string['changepassword'] = 'URL schimbare parolă';
$string['changepasswordhelp'] = 'Puteţi specifica aici adresa unde utilizatorii îşi pot recupera sau schima numele de utilizator/parola uitate. Accesul la această pagină se va face prin intermediul unui buton afişat pe pagina de autentificare şi pe pagina utilizatorului. Dacă lăsaţi acest câmp gol, butonul nu va fi afişat.';
$string['chooseauthmethod'] = 'Alegeţi o metodă de autentificare';
$string['chooseauthmethod_help'] = 'Această setare determină metoda folosită la autentificarea utilizatorilor. Ar trebui alese doar plugin-uri de autentificare active, altfel utilizatorii nu se vor mai putea autentifica. Pentru a bloca autentificarea utilizatorilor, selectaţi “Fără autentificare”.';
$string['createpasswordifneeded'] = 'Creaţi o parolă dacă este cazul';
$string['emailchangecancel'] = 'Anuleaza modificarea email-ului';
$string['emailchangepending'] = 'Se așteaptă modificarea. Deschideți link-ul trimis la {$a- preference_newemail>}.';
$string['emailnowexists'] = 'Adresa de e-mail pe care ați încercat să o atribuiți profilului dumnevoastră a fost atribuită altcuiva de când ați trimis cererea inițială. Cererea dumneavoastră de schimbare a adresei de e-mail este, așadar, anulată, dar puteți încerca din nou cu o altă adresă.';
$string['emailupdate'] = 'Actualizare adresă de email';
$string['emailupdatemessage'] = 'Dragă {$a->fullname},

Ați solicitat o schimbare a adresei de email pentru contul dumneavoastră de utilizator la {$a->site}. Vă rugăm să deschideți următorul URL în browser-ul dumneavoastră pentru a confirma această schimbare.

{$a-> url}';
$string['emailupdatesuccess'] = 'Adresa de e-mail a utilizatorului <em>{$a->fullname}</em> a fost schimbată cu succes în <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmarea actualizării email-ului pe {$a->site}';
$string['enterthenumbersyouhear'] = 'Introduceţi numerele pe care le auziţi';
$string['enterthewordsabove'] = 'Introduceţi cuvintele de mai sus';
$string['errormaxconsecutiveidentchars'] = 'Parola trebuie să aibă cel mult {$a} caractere identice consecutive.';
$string['errorminpassworddigits'] = 'Parola trebuie să conţină cel puţin {$a} cifre.';
$string['errorminpasswordlength'] = 'Parola trebuie să aibă o lungime de cel puţin {$a} caractere.';
$string['errorminpasswordlower'] = 'Parola trebuie să conţină cel puţin {$a} litere mici.';
$string['errorminpasswordnonalphanum'] = 'Parola trebuie să conţină cel puţin {$a} caractere non-alfanumerice.';
$string['errorminpasswordupper'] = 'Parola trebuie să conţină cel puţin {$a} majuscule.';
$string['errorpasswordupdate'] = 'Eroare la actualizarea parolei, parola nu a fost schimbată.';
$string['forcechangepassword'] = 'Obligă schimbarea parolei';
$string['forcechangepasswordfirst_help'] = 'Obligă utilizatorii să-şi schimbe parola la prima autentificare în Moodle.';
$string['forcechangepassword_help'] = 'Obligă utilizatorii să-şi schimbe parola la următoarea autentificare în Moodle.';
$string['forgottenpassword'] = 'Dacă introduceţi un URL în acest câmp, el va fi folosit ca pagină de recuperare a parolei pentru acest site. Această funcţionalitate se foloseşte pentru site-urile în care parolele sunt gestionate în întregime în afara Moodle. Lăsaţi acest câmp gol pentru a folosi recuperarea implicită de parolă.';
$string['forgottenpasswordurl'] = 'URL pagina parolă uitată';
$string['getanaudiocaptcha'] = 'Obţineţi un fişier audio CAPTCHA';
$string['getanimagecaptcha'] = 'Obţineţi o imagine CAPTCHA';
$string['getanothercaptcha'] = 'Obţineţi un alt CAPTCHA';
$string['guestloginbutton'] = 'Buton autentificare vizitator';
$string['incorrectpleasetryagain'] = 'Incorect. Vă rugăm încercaţi din nou.';
$string['infilefield'] = 'Câmp obligatoriu în fişier';
$string['informminpassworddigits'] = 'cel puţin {$a} cifre';
$string['informminpasswordlength'] = 'cel puţin {$a} caractere';
$string['informminpasswordlower'] = 'cel puţin {$a} litere mici';
$string['informminpasswordnonalphanum'] = 'cel puţin {$a} caractere non-alfanumerice';
$string['informminpasswordupper'] = 'cel puţin {$a} majuscule';
$string['informpasswordpolicy'] = 'Parola trebuie să conţină {$a}';
$string['instructions'] = 'Instrucţiuni';
$string['internal'] = 'Intern';
$string['locked'] = 'Blocat';
$string['md5'] = 'Hash MD5';
$string['nopasswordchange'] = 'Parola nu poate fi schimbată.';
$string['nopasswordchangeforced'] = 'Nu puteţi trece mai departe fără să vă schimbaţi parola, însă nu există nicio pagină în care să realizaţi această operaţiune. Vă rugăm contactaţi un administrator Moodle.';
$string['noprofileedit'] = 'Profilul nu poate fi editat';
$string['ntlmsso_attempting'] = 'Se încearcă Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'Autentificarea automată a eşuat, încercaţi pagina de autentificare normală...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO este dezactivat';
$string['passwordhandling'] = 'Gestionarea câmpului Parolă';
$string['plaintext'] = 'Text neformatat';
$string['pluginnotenabled'] = 'Plugin-ul de autentificare \'{$a}\' nu este activat';
$string['pluginnotinstalled'] = 'Plugin-ul de autentificare \'{$a}\' nu este instalat';
$string['potentialidps'] = 'Autentificare folosind contul dvs. de pe:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA este folosit pentru a preveni atacurile programelor automate. Introduceţi cuvintele afişate, în ordine şi separate de spaţii.

Dacă nu reuşiţi să identificaţi cuvintele, puteţi alege generarea unui alt CAPTCHA sau un CAPTCHA audio.';
$string['selfregistration'] = 'Auto-înregistrare';
$string['selfregistration_help'] = 'Dacă se selectează un plugin de autentificare, cum ar fi auto-înregistrarea bazată pe email, potenţialii utilizatori se pot înregistra singuri şi îşi pot crea conturi. Astfel, este posibil ca spammerii să îşi creeze conturi pentru a trimite spam pe postări de forum, articole de blog etc. Pentru a evita acest risc, auto-înregistrare ar trebui dezactivată sau limitată de setarea <em>Domenii email permise</em>.';
$string['sha1'] = 'Hash SHA-1';
$string['showguestlogin'] = 'Puteţi ascunde sau afişa butonul de autentificare vizitator pe pagina de autentificare.';
$string['stdchangepassword'] = 'Foloseşte pagina standard pentru schimbarea parolei';
$string['stdchangepassword_expl'] = 'În cazul în care sistemul extern de autentificare permite schimbarea parolei prin Moodle, comutaţi pe "Da". Această setare va avea prioritate faţă de setarea "URL schimbare parolă"';
$string['stdchangepassword_explldap'] = 'NOTĂ: în cazul în care serverul LDAP este remote, se recomandă utilizarea LDAP printr-un tunel SSL criptat (ldaps://).';
$string['suspended'] = 'Cont suspendat';
$string['suspended_help'] = 'Conturile de utilizator suspendate nu se pot conecta și nu pot folosi servicii web, orice alte mesaje trimise sunt șterse.';
$string['unlocked'] = 'Deblocat';
$string['unlockedifempty'] = 'Deblocat dacă gol';
$string['update_never'] = 'Niciodată';
$string['update_oncreate'] = 'La creare';
$string['update_onlogin'] = 'La fiecare autentificare';
$string['update_onupdate'] = 'La actualizare';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nu suportă tipul de utilizator selectat: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() nu suportă tipul de utilizator selectat (..încă)';
