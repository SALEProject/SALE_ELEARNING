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
 * Strings for component 'assignment', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeleting'] = 'Permite ştergerea';
$string['allowdeleting_help'] = 'Dacă opțiunea este activată, studenţii pot şterge fişierele încărcate în orice moment înainte de depunerea lor pentru a fi corectate.';
$string['allowmaxfiles'] = 'Număr maxim de fişiere încărcate';
$string['allowmaxfiles_help'] = 'Numărul maxim de fişiere care pot fi încărcate. Deoarece această cifră nu este afişată nicăieri, se sugerează să fie menţionată în descrierea temei';
$string['allownotes'] = 'Permite ataşarea observaţiilor';
$string['allownotes_help'] = 'Dacă opțiunea este activată, cursanții vor putea scrie observații/note într-o zonă de text, ca într-o temă ce presupune depunerea unui text online.';
$string['allowresubmit'] = 'Permite retrimiterea';
$string['allowresubmit_help'] = '<P ALIGN=CENTER><B>Permite retrimiterea temei</B></P>

<P>În mod prestabilit, studenţii nu pot retrimite tema de casă dacă profesorul a acordat deja o notă pentru acea temă.</P>

<P>Dacă activezi această opţiune, studenţii vor putea să retrimită tema de casă chiar dacă profesorul a acordat deja o notă.
 (necesitând reevaluarea din partea profesorului).  Această posibilitate se poate dovedi folositoare dacă
   profesorul doreşte să încurajeze studenţii să-şi îmbunătăţească lucrarea într-un proces iterativ.</P>

<P>Evident, această opţiune nu este relevantă pentru activitatea offline.</P>';
$string['alreadygraded'] = 'Tema dumneavoastră a fost deja notată, nu o mai puteţi retrimite.';
$string['assignment:addinstance'] = 'Adaugă o nouă lucrare';
$string['assignmentdetails'] = 'Detalii temă';
$string['assignment:exportownsubmission'] = 'Exportare temă trimisă';
$string['assignment:exportsubmission'] = 'Exportare temă trimisă';
$string['assignment:grade'] = 'Notare temă';
$string['assignmentmail'] = 'Profesorul {$a->teacher} a ataşat un feedback la
tema pe care aţi trimis-o la \'{$a->assignment}\'

Pentru a vizualiza comentariile pe care profesorul le-a ataşat temei dumneavoastră accesaţi:

    {$a->url}';
$string['assignmentmailhtml'] = 'Profesorul {$a->teacher} a ataşat un feedback la
tema pe care aţi trimis-o la \'<i>{$a->assignment}</i>\'<br /><br />
Pentru a vizualiza comentariile profesorului ataşate la tema trimisă de dumneavoastră accesaţi <a href="{$a->url}">assignment submission</a>.';
$string['assignmentname'] = 'Nume temă';
$string['assignment:submit'] = 'Trimitere temă';
$string['assignmenttype'] = 'Tip temă';
$string['assignment:view'] = 'Vizualizare temă';
$string['availabledate'] = 'Disponibil din';
$string['cannotdeletefiles'] = 'S-a produs o eroare şi fişierul nu a putut fi şters';
$string['cannotviewassignment'] = 'Nu aveţi permisiunea de a vizualiza această temă';
$string['comment'] = 'Comentarii';
$string['commentinline'] = 'Comentează live';
$string['commentinline_help'] = 'Dacă opțiunea este activată, textul trimis va fi copiat în câmpul de feedback folosit la corectare, ceea ce va facilita adăugarea de comentarii (veți dori să folosiți o culoare diferită), sau editarea textului original';
$string['configitemstocount'] = 'Natura elementelor care vor fi incluse în numărătoarea temelor trimise de cursanţi la temele online.';
$string['configmaxbytes'] = 'Dimensiunea maximă admisă implicit pentru temele încărcate pe acest site (în funcţie de limitele stabilite pentru acest curs şi alţi parametri locali)';
$string['configshowrecentsubmissions'] = 'Notificările despre cursurile trimise sunt disponibile public în cadrul raportului despre activităţile recente.';
$string['confirmdeletefile'] = 'Sunteţi sigur că doriţi ştergerea acestui fişier?<br /><strong>{$a}</strong>';
$string['coursemisconf'] = 'Cursul a fost configurat greşit';
$string['deleteallsubmissions'] = 'Şterge toate temele trimise';
$string['deletefilefailed'] = 'Nu s-a reuşit ştergerea fişierului.';
$string['description'] = 'Descriere';
$string['draft'] = 'Versiune preliminară';
$string['duedate'] = 'Termen predare';
$string['duedateno'] = 'Fără termen de predare';
$string['early'] = '{$a} mai devreme de data limită';
$string['editmysubmission'] = 'Editare temă trimisă';
$string['emailstudents'] = 'Trimitere e-mail atenţionare la cursanţi';
$string['emailteachermail'] = '{$a->username} a modificat tema trimisă la
\'{$a->assignment}\'

Tema modificată este disponibilă aici:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} a modificat tema trimisă la
<i>\'{$a->assignment}\'</i><br /><br />
Tema modificată <a href="{$a->url}">este disponibilă pe site</a>.';
$string['emailteachers'] = 'Trimitere e-mail atenţionare la profesori';
$string['emailteachers_help'] = 'Dacă opțiunea este activată, profesorii vor primi o notificare prin e-mail ori de câte ori cursanții adăugă sau actualizează o depunere de temă.

Numai profesorii care au permisiunea de a corecta temele vor fi notificați. Astfel, de exemplu, în cazul în care cursul are în componență grupuri diferite de cursanți, profesorii care sunt restricționați la anumite grupuri nu vor primi notificări cu privire la cursanții din alte grupuri.';
$string['emptysubmission'] = 'Nu aţi trimis încă nicio temă';
$string['enablenotification'] = 'Trimitere e-mail-uri de atenţionare';
$string['enablenotification_help'] = 'Dacă opțiunea este activată, cursanții vor primi o notificare prin email când temele lor au fost corectate.';
$string['existingfiledeleted'] = 'Fişierul existent a fost şters: {$a}';
$string['failedupdatefeedback'] = 'Nu s-a reuşit actualizarea feedback-ului la tema trimisă de cursantul {$a}';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Feedback de la {$a}';
$string['feedbackupdated'] = 'Feedback-ul la temele trimise de {$a} cursanţi a fost actualizat';
$string['finalize'] = 'Nu mai există teme trimise';
$string['finalizeerror'] = 'S-a produs o eroare şi trimiterea temei nu s-a putut finaliza';
$string['graded'] = 'Notat';
$string['guestnosubmit'] = 'Ne pare rău, vizitatorii nu au dreptul să trimită teme. Pentru a putea trimite răspunsul dumneavoastră va trebui să intraţi în cont (dacă aveţi un cont) sau să vă faceţi un cont';
$string['guestnoupload'] = 'Ne pare rău, vizitatorii nu pot încărca materiale pe site';
$string['helpoffline'] = '<p>Această funcţionalitate este folositoare atunci când tema se realizează altfel decât prin site-ul Moodle.  Acest "altfel"
   poate să fie alt site web sau interacţiunea faţă-în-faţă.</p><p>Cursanţii văd o descriere a temei,
   dar nu pot încărca fişiere sau alte materiale.  Notarea se realizează identic, şi cursanţii vor primi notificări în legătură
   cu notele obţinute.</p>';
$string['helponline'] = '<p>Această temă cere cursanţilor să editeze un text cu ajutorul
   instrumentelor de editare.  Profesorii pot să le acorde note online, şi pot chiar să adauge comentarii sau modificări în timp ce cursanţii realizează tema.</p>
   <p>(Dacă aţi lucrat cu versiuni anterioare ale Moodle, acest tip de temă
   este similar cu modulul Journal.)</p>';
$string['helpupload'] = '<p>Acest tip de temă permite fiecărui participant să încarce unul sau mai multe fişiere în orice format.
   Fişierele încărcate pot fi documente editate cu orice tip de procesor de text, imagini, site-uri Web arhivate, sau orice alt fel de format solicitat de profesor.</p>
   <p>Se pot de asemenea încărca mai multe fişiere de răspuns. Fişierele de răspuns pot fi încărcate înainte de trimiterea temei
   şi pot fi folosite astfel încât fiecare participant să lucreze pe un fişier individual.</p>
   <p>Participanţii pot de asemenea ataşa comentarii în legătură cu fişierele trimise, în care să prezinte detalii despre cu stadiul în care se află sau orice fel de informaţii în format text.</p>
   <p>Trimiterea unei astfel de teme trebuie realizată manual de participant. În orice moment se poate vizualiza
   stadiul curent, temele care nu au fost finalizate sunt marcate ca Versiuni preliminare. Orice temă pe care s-a lucrat poate fi marcată din nou ca Versiune preliminară.</p>';
$string['helpuploadsingle'] = '<p>Acest tip de temă permite fiecărui participant să încarce
   un singur fişier, de orice tip.</p> <p>Fişierul încărcat poate fi un document editat cu orice tip de procesor de text,
   o imagine, un site Web arhivat, sau orice alt fel de format solicitat de profesor.</p>';
$string['hideintro'] = 'Ascunde descriere înainte de data de publicare';
$string['hideintro_help'] = 'Dacă opțiunea este activată, descrierea temei nu va fi afișată înainte de data setată prin funcția "disponibilă de la". Numai numele temei va fi afişat.';
$string['invalidassignment'] = 'temă greşită';
$string['invalidid'] = 'ID-ul temei a fost greşit';
$string['invalidtype'] = 'tipul temei este greşit';
$string['invaliduserid'] = 'ID utilizator greşit';
$string['itemstocount'] = 'Număr elemente';
$string['late'] = '{$a} întârziere';
$string['maximumgrade'] = 'Notă maximă';
$string['maximumsize'] = 'Dimensiune maximă';
$string['maxpublishstate'] = 'Vizibilitate maximă pentru postare pe blog înainte de termenul de predare';
$string['modulename'] = 'Temă (2.2)';
$string['modulename_help'] = 'Temele permit profesorului să specifice o sarcină, fie online sau offline care poate fi apoi corectată și notată.';
$string['modulenameplural'] = 'Teme';
$string['newsubmissions'] = 'Teme trimise';
$string['noassignments'] = 'Nu sunt teme de făcut';
$string['noattempts'] = 'Niciun cursant nu a încercat să facă această temă';
$string['noblogs'] = 'Nu aţi postat nimic pe blog, deci nu aveţi ce să trimiteţi!';
$string['nofiles'] = 'Nu a fost trimis niciun fişier';
$string['nofilesyet'] = 'Nu a fost trimis niciun fişier încă';
$string['nomoresubmissions'] = 'Nu se mai permite trimiterea niciunei teme.';
$string['notavailableyet'] = 'Ne pare rău, această temă nu este încă disponibilă.<br />Instrucţiunile privitoare la realizarea acestei teme vor fi disponibile aici la data afişată mai jos.';
$string['notes'] = 'Observaţii';
$string['notesempty'] = 'Nu există observaţii';
$string['notesupdateerror'] = 'S-a produs o eroare la actualizarea observaţiilor';
$string['notgradedyet'] = 'Încă nu s-au acordat note';
$string['notsubmittedyet'] = 'N-au fost trimise încă';
$string['onceassignmentsent'] = 'După trimiterea temei spre notare nu veţi mai putea şterge sau ataşa fişiere. Doriţi să continuaţi?';
$string['overwritewarning'] = 'Atenţie!: dacă încărcaţi din nou, tema trimisă va fi ÎNLOCUITĂ cu cea pe care o încărcaţi';
$string['pagesize'] = 'Număr de teme trimise de afişat într-o pagină';
$string['pluginadministration'] = 'Administrare temă';
$string['pluginname'] = 'Temă (2.2)';
$string['preventlate'] = 'Nu se admit teme trimise după data limită';
$string['quickgrade'] = 'Permite notare rapidă';
$string['quickgrade_help'] = 'Dacă opțiunea este activată, multiple teme vor putea fi corectate de pe o singură pagină. Adaugați notele şi comentariile Dvs și apoi faceţi click pe butonul "Salvaţi feedback-ul meu" pentru a salva toate modificările care le-ați efectuat pe pagina respectivă.';
$string['responsefiles'] = 'Fişiere răspuns';
$string['reviewed'] = 'Verificat';
$string['saveallfeedback'] = 'Salvează toate feedback-urile mele';
$string['selectblog'] = 'Selectaţi postarea pe blog pe care doriţi să o trimiteţi';
$string['sendformarking'] = 'Trimite spre notare';
$string['showrecentsubmissions'] = 'Afişează teme trimise recent';
$string['submission'] = 'Temă trimisă';
$string['submissiondraft'] = 'Versiune preliminară a unei teme';
$string['submissionfeedback'] = 'Feedback la tema trimisă';
$string['submissions'] = 'Teme trimise';
$string['submissionsaved'] = 'Modificările realizate au fost salvate';
$string['submissionsnotgraded'] = '{$a} teme trimise nu au fost notate';
$string['submitassignment'] = 'Trimiteţi tema folosind acest formular';
$string['submitedformarking'] = 'Tema a fost deja trimisă spre notare şi nu mai poate fi actualizată';
$string['submitformarking'] = 'Temă trimisă spre notarea finală';
$string['submitted'] = 'Trimisă';
$string['submittedfiles'] = 'Fişiere trimise';
$string['subplugintype_assignment'] = 'Tip temă';
$string['trackdrafts'] = 'Activează Trimite spre notare';
$string['trackdrafts_help'] = 'Butonul "Trimite pentru corectare" permite studenților să anunțe profesorul că au terminat de lucrat la o temă. Profesorul poate alege să readucă proiectul la statut de ciornă (draft) (în cazul în care decide că este nevoie de muncă suplimentară, de exemplu)';
$string['typeblog'] = 'Blog post';
$string['typeoffline'] = 'Activitate offline';
$string['typeonline'] = 'Text online';
$string['typeupload'] = 'Funcţionalitate complexă de încărcare fişiere';
$string['typeuploadsingle'] = 'Încarcă un singur fişier';
$string['unfinalize'] = 'Revenire la versiune preliminară';
$string['unfinalizeerror'] = 'S-a produs o eroare şi tema nu a putut fi marcată ca versiune preliminară';
$string['unfinalize_help'] = 'Permite cursanților să revină la stadiul de ciornă cu lucrarea lor pentru a putea face actualizări suplimentare. ';
$string['uploadbadname'] = 'Numele acestui fişier conţine caractere necunoscute, din această cauză fişierul nu a putut fi încărcat';
$string['uploadedfiles'] = 'fişiere încărcate';
$string['uploaderror'] = 'S-a produs o eroare şi fişierul nu a putut fi salvat pe server';
$string['uploadfailnoupdate'] = 'Fişierul s-a încărcat cu succes dar tema nu a putut fi actualizată!';
$string['uploadfiletoobig'] = 'Ne pare rău, fişierul este prea mare (dimensiunea maximă admisă este de {$a} bytes)';
$string['uploadnofilefound'] = 'Nu a fost găsit niciun fişier - sigur aţi selectat un fişier de încărcat?';
$string['uploadnotregistered'] = '\'{$a}\' a fost încărcat cu succes dar trimiterea nu a fost înregistrată!';
$string['uploadsuccess'] = 'Încărcarea \'{$a}\' a fost finalizată cu succes';
$string['usermisconf'] = 'Utilizatorul este configurat greşit';
$string['viewfeedback'] = 'Afişează notele şi feedback-ul primit la temele trimise';
$string['viewmysubmission'] = 'Afişează tema trimisă';
$string['viewsubmissions'] = 'Afişează {$a} teme trimise';
$string['yoursubmission'] = 'Tema trimisă de dumneavoastră';
