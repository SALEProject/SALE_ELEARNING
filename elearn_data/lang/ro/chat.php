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
 * Strings for component 'chat', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoscroll'] = 'Scroll automat';
$string['beep'] = 'beep';
$string['cantlogin'] = 'Nu puteți intra în chat room!!';
$string['chat:addinstance'] = 'Adaugă un nou chat';
$string['chat:chat'] = 'Accesaţi o cameră de discuţii';
$string['chat:deletelog'] = 'Şterge înregistrările discuţiilor';
$string['chat:exportparticipatedsession'] = 'Exportă sesiunile de chat la care ați participat';
$string['chat:exportsession'] = 'Exportă orice sesiune de chat';
$string['chatintro'] = 'Text introductiv';
$string['chatname'] = 'Numele acestei camere de discuţii';
$string['chat:readlog'] = 'Vezi înregistrările discuţiilor';
$string['chatreport'] = 'Sesiuni de discuţii';
$string['chat:talk'] = 'Participă la discuţii';
$string['chattime'] = 'Ora de începere a următoarei sesiuni';
$string['composemessage'] = 'Compuneți un mesaj';
$string['configmethod'] = 'Metoda folosită în mod normal la discuţii este aceea prin care clienţii contactează serverul la intervale regulate solicitând actualizări. Această metodă nu necesită configurare şi funcţionează peste tot însă poate crea o mare presiune asupra serverului atunci când există un număr mare de persoane care participă la discuţie. Utilizarea unui daemon pentru server necesită shell access to Unix dar oferă posibilitatea de a adapta cu uşurinţă mediul de discuţii la numărul de utilizatori.';
$string['confignormalupdatemode'] = 'Actualizările camerelor de discuţii sunt de obicei realizate eficient prin intermediul funcţionalităţii <em>Keep-Alive</em> a HTTP 1.1, însă acest lucru înseamnă o încărcare destul de mare a serverului. O metodă mai avansată ar fi folosirea strategiei <em>Stream</em> pentru trimiterea actualizărilor la utilizatori. Folosirea <em>Stream</em> permite eficientizarea încărcării serverului (similar cu metoda chatd) dar este posibil ca această metodă să nu fie compatibilă cu serverul dumneavoastră.';
$string['configoldping'] = 'Care este intervalul de timp maxim după care se detectează deconectarea unui utilizator? (secunde) Aceasta este valoarea maximă, de obicei deconectarea se detectează foarte rapid. Dacă introduceţi aici o valoare mică acest lucru ar putea încărca serverul. Dacă folosiţi metoda normală, nu setaţi <strong>niciodadă</strong> această valoare mai mică decât 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Cât de des se va actualiza camera de discuţii? (secunde). Dacă introduceţi aici o valoare mică, respectiva cameră de discuţii va părea mai rapidă însă acest lucru va însemna o încărcătură mai mare pentru server atunci când sunt mulţi utilizatori. Dacă folosiţi pentru actualizare metoda <em>Stream</em> puteţi selecta frecvenţe mai mari de actualizare - încercaţi cu 2.';
$string['configrefreshuserlist'] = 'Cât de des se va actualiza lista de utilizatori? (secunde)';
$string['configserverhost'] = 'Hostname-ul calculatorului unde se află daemonul serverului';
$string['configserverip'] = 'Adresa IP numerică ce corespunde hostname-ului completat în câmpul de mai sus';
$string['configservermax'] = 'Număr maxim de clienţi admişi';
$string['configserverport'] = 'Portul de pe server ce va fi utilizat de daemon';
$string['currentchats'] = 'Sesiuni de discuţii active';
$string['currentusers'] = 'Utilizatori logaţi';
$string['deletesession'] = 'Şterge această sesiune';
$string['deletesessionsure'] = 'Sunteţi sigur că doriţi ştergerea acestei sesiuni?';
$string['donotusechattime'] = 'Nu afişa ora la care au loc conversaţiile';
$string['enterchat'] = 'Clic pentru a intra în conversaţie';
$string['entermessage'] = 'Inserați mesajul dumneavoastră';
$string['errornousers'] = 'Nu s-a găsit niciun utilizator!';
$string['explaingeneralconfig'] = 'Aceste setări sunt folosite <strong>întotdeauna</strong>';
$string['explainmethoddaemon'] = 'Aceste setări sunt importante <strong>doar dacă</strong> aţi ales "Chat server daemon" la parametrul chat_method';
$string['explainmethodnormal'] = 'Aceste setări sunt importante <strong>doar dacă</strong> aţi ales "Metoda normală" la parametrul chat_method';
$string['generalconfig'] = 'Configurări generale';
$string['idle'] = 'Inactiv';
$string['invalidid'] = 'Nu a fost găsit chat-ul';
$string['list_all_sessions'] = 'Listează toate sesiunile';
$string['list_complete_sessions'] = 'Listează doar sesiunile complete.';
$string['listing_all_sessions'] = 'Se listează toate sesiunile';
$string['messagebeepseveryone'] = '{$a} trimite o atenţionare la toţi utilizatorii!';
$string['messagebeepsyou'] = '{$a} v-a trimis o atenţionare!';
$string['messageenter'] = '{$a} a intrat în această cameră de discuţii';
$string['messageexit'] = '{$a} a ieşit din această cameră de discuţii';
$string['messages'] = 'Mesaje';
$string['method'] = 'Metodă chat';
$string['methodajax'] = 'Metodă Ajax';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'Metoda normală';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Modulul chat permite participanţilor să aibă o discuţie sincronă (în timp real) prin intermediul platformei. Aceasta este o modalitate utilă de a schimba păreri și de a discuta orice subiect. Modul de utilizare  a camerelor de chat este destul de diferită față de forum-uri unde comunicarea se face de obicei asincronic. ';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nu şterge niciodată mesajele';
$string['nextsession'] = 'Următoarea sesiune programată';
$string['nochat'] = 'Nu au fost găsite chat-uri';
$string['no_complete_sessions_found'] = 'Nu s-au găsit sesiuni complete.';
$string['noguests'] = 'Această discuţie nu este deschisă vizitatorilor';
$string['nomessages'] = 'Nu a fost trimis încă niciun mesaj';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nu este programată nicio sesiune';
$string['notallowenter'] = 'Nu aveţi permisiunea să accesaţi camera de discuţii.';
$string['notlogged'] = 'Nu sunteți autentificat!';
$string['oldping'] = 'Timp deconectare';
$string['pastchats'] = 'Sesiuni de discuţii anterioare';
$string['pluginadministration'] = 'Administrare chat';
$string['pluginname'] = 'Chat';
$string['refreshroom'] = 'Actualizare cameră discuţii';
$string['refreshuserlist'] = 'Actualizează listă utilizatori';
$string['removemessages'] = 'Şterge toate mesajele';
$string['repeatdaily'] = 'La aceeaşi oră în fiecare zi';
$string['repeatnone'] = 'Fără repetiţii - se publică doar timpul specificat';
$string['repeattimes'] = 'Repetare sesiuni';
$string['repeatweekly'] = 'La aceeaşi oră în fiecare săptămână';
$string['savemessages'] = 'Salvează sesiuni anterioare';
$string['seesession'] = 'Vezi sesiunea aceasta';
$string['send'] = 'Trimis';
$string['sending'] = 'Se trimite';
$string['serverhost'] = 'Nume server';
$string['serverip'] = 'IP server';
$string['servermax'] = 'Număr maxim de utilizatori';
$string['serverport'] = 'Port server';
$string['sessions'] = 'Sesiuni discuţii';
$string['sessionstart'] = 'Următoarea sesiune de chat va începe în {$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Toţi utilizatorii pot vizualiza sesiunile anterioare';
$string['studentseereports_help'] = 'Daca alegeți Nu, doar utilizatorii care au activată setarea mod/chat:readlog vor putea să consulte jurnalele de conversație';
$string['updatemethod'] = 'Metodă actualizare';
$string['userlist'] = 'Lista utilizatorilor';
$string['usingchat_help'] = 'Modulul de chat conţine anumite caracteristici pentru a face chatul un pic mai plăcut.

Modulul de chat conţine anumite caracteristici pentru a face chatul un pic mai plăcut.
 *Smileys - Orice feţe zâmbitoare (emoticons), pe care le tastaţi în altă parte în Moodle pot fi, de asemenea, tastate și aici, de exemplu :-)
* Link-uri- adresele diferitelor site-uri vor fi transformate automat în linkuri
* Emoting- Puteti tasta "/me" sau ":" pentru a exprima o stare sau emoție, de exemplu, dacă numele dumneavoastră este Raul şi tastaţi":laughs!" sau "/me laughs!" atunci toată lumea va vedea "Raul râde!"
* Beep - Aveţi posibilitatea să trimiteţi un sunet la alţi participanţi, făcând click pe link-ul "bip" de lângă numele lor (în Yahoo Messenger aceași acțiune se numește Buzz). Puteți să dați beep la toți participanții la chat deodată dacă tastați "beep all".
* HTML - Dacă sunteți familiar cu limbajul HTML, îl puteţi folosi în textul dvs. pentru a: insera imagini, sunete sau pentru a scrie cu text de diferite culori.';
$string['viewreport'] = 'Vizualizează sesiuni de discuţii anterioare';
