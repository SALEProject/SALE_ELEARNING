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
 * Strings for component 'message_email', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowusermailcharset'] = 'Permite utilizatorilor să selecteze setul de caractere';
$string['configallowusermailcharset'] = 'Dacă această setare este activată, fiecare utilizator din cadrul sitului va putea să-şi specifice singur setul de caractere pentru email.';
$string['configmailnewline'] = 'Newline characters used in mail messages. CRLF is required according to RFC 822bis, some mail servers do automatic conversion from LF to CRLF, other mail servers do incorrect conversion from CRLF to CRCRLF, yet others reject mails with bare LF (qmail for example). Try changing this setting if you are having problems with undelivered emails or double newlines.';
$string['confignoreplyaddress'] = 'Uneori se trimit în exterior mesaje email în numele unui utilizator (ex. intervenţiile pe forum). Adresa de email pe care o specificaţi aici va fi completată în câmpul "De la" în toate cazurile când destinatarii mesajelor nu trebuie să poată răspunde direct utilizatorului trimiţător (ex. atunci când un utilizator nu doreşte afişarea adresei sale de email).';
$string['configsitemailcharset'] = 'Toate mesajele email generate de situl dumneavoastră vor folosi charset specificat aici. Această setare va putea fi modificată de fiecare utilizator în parte dacă se activează şi următorul parametru.';
$string['configsmtphosts'] = 'Completaţi aici numele complet al unuia sau mai multor servere SMTP locale pe care Moodle le poate folosi pentru a trimite mesaje de email. (ex. \'mail.a.com\' sau \'mail.a.com;mail.b.com\'). Dacă doriţi să specificaţi un alt port față de portul implicit (25) puteţi folosi sintaxa [server]:[port] (ex. \'mail.a.com:587\'). Pentru conexiuni securizate, portul 465 este utilizat de obicei cu SSL, portul 587 este utilizat de obicei cu TLS, specifica-ți protocolul de securitate mai jos, dacă este necesar. Dacă nu completaţi nimic în acest câmp Moodle va folosi metoda PHP implicită pentru trimiterea de mesaje email.';
$string['configsmtpmaxbulk'] = 'Numărul maxim de mesaje care pot fi trimise în cadrul unei singure sesiuni SMTP. Gruparea mesajelor măreşte viteza de transmitere a mesajelor email. Dacă introduceţi valori mai mici de 2, pentru fiecare mesaj email trimis se va crea o nouă sesiune SMTP.';
$string['configsmtpsecure'] = 'Dacă serverul smtp necesită conexiune securizată, specificați tipul corect de protocol.';
$string['configsmtpuser'] = 'În cazul în care aţi specificat un server SMTP în câmpurile de mai sus, şi dacă serverul respectiv solicită autentificare completaţi aici numele de utilizator şi parola.';
$string['email'] = 'Trimite notificări prin e-mail la';
$string['ifemailleftempty'] = 'Lăsați gol pentru a trimite notificări la {$a}';
$string['mailnewline'] = 'Caractere linie nouă în email';
$string['none'] = 'Nici unul';
$string['noreplyaddress'] = 'Adresă no-reply';
$string['pluginname'] = 'Email';
$string['sitemailcharset'] = 'Character set';
$string['smtphosts'] = 'Gazde SMTP';
$string['smtpmaxbulk'] = 'Limită sesiune SMTP';
$string['smtppass'] = 'Parolă SMTP';
$string['smtpsecure'] = 'Securitate SMTP';
$string['smtpuser'] = 'Nume utilizator SMTP';
