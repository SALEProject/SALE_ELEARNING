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
 * Strings for component 'feedback', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['after_submit'] = 'După ce a fost trimis';
$string['analysis'] = 'Analiză';
$string['anonymous'] = 'Anonim';
$string['anonymous_edit'] = 'Reține numele utilizatorilor';
$string['anonymous_user'] = 'Utilizator anonim';
$string['autonumbering_help'] = 'Activează sau dezactivează numere generate automat pentru fiecare întrebare';
$string['average'] = 'Medie';
$string['bold'] = 'Îngroșat';
$string['cannotsavetempl'] = 'Nu este permisă salvarea șabloanelor';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha nu a fost trimisă';
$string['check'] = 'Alegere multiplă - răspunsuri multiple';
$string['choosefile'] = 'Alegeți un fișier';
$string['completed'] = 'completat';
$string['completed_feedbacks'] = 'Răspunsuri trimise';
$string['complete_the_form'] = 'Răspunde la întrebare';
$string['delete_entry'] = 'Șterge postarea';
$string['delete_item'] = 'Șterge întrebarea';
$string['delete_old_items'] = 'Șterge itemii vechi';
$string['delete_template'] = 'Șterge șablonul';
$string['delete_templates'] = 'Șterge șablonul...';
$string['depending_help'] = 'Elementele dependente permit structurarea altor elemente în funcție de valorile acestora <br />

<strong> Un exemplu pe care îl puteți folosi </strong> <br />
<ul>
<li> Prima oară creați un element de care să depindă valoarea celorlalte elemente. </li>
<li> Urmează să adăugați un spațiu în pagină folosind tag-ul <code> <br /> </code> </li>
<li> Urmează să adăugați elementele care depind de elementul anterior </li> <br />
Alegeți "elementul dependent" în formularul de creare a elementului nou și introduceți valoarea dorită în căsuța "valoare dependentă" </li>
</ ul>
<strong> Structura ar trebui să arate astfel: </ strong> <ol>
<li>Item Î: Ai mașină? R: da / nu </li>
<li> Pagebreak </li>
<li>Item Î: Ce culoare are maşina ta?<br /> (Acest element depinde de Î1 cu valoarea = da) </li>
<li>Item Î: De ce nu aveți mașină?<br />
(Acest element depinde de elementul 1 cu valoarea = nu) </li>
<li> ... alte elemente </li>
</ol>
Asta este tot. Distracție plăcută!';
$string['dropdown_values'] = 'Răspunsuri';
$string['edit_item'] = 'Editează întrebarea';
$string['edit_items'] = 'Editează întrebările';
$string['email_notification_help'] = 'Această setare determină dacă administratorii vor primi sau nu o notificare prin e-mail la transmiterile de feedback.';
$string['export_questions'] = 'Exportă întrebările';
$string['export_to_excel'] = 'Exportă în Excel';
$string['feedback:addinstance'] = 'Adaugă un nou feedback';
$string['feedback:createpublictemplate'] = 'Creează un șablon public';
$string['feedback:deletetemplate'] = 'Șterge șablonul';
$string['feedback:edititems'] = 'Editează itemii';
$string['feedback_is_not_for_anonymous'] = 'Feedback-ul nu este anonim';
$string['feedback_is_not_open'] = 'Feedback-ul nu este disponibil';
$string['feedback:viewreports'] = 'Vezi rapoartele';
$string['file'] = 'Fișier';
$string['horizontal'] = 'orizontal';
$string['importfromthisfile'] = 'Importă din acest fișier';
$string['import_questions'] = 'Importă întrebări';
$string['import_successfully'] = 'Import reușit';
$string['info'] = 'Informații';
$string['insufficient_responses'] = 'Răspunsuri insuficiente';
$string['insufficient_responses_help'] = 'Există răspunsuri insuficiente pentru acest grup.

Pentru a păstra feedback-ul anonim, trebuie să se introducă un minim de 2 răspunsuri.';
$string['item_label'] = 'Etichetă';
$string['item_name'] = 'Întrebare';
$string['label'] = 'Etichetă';
$string['line_values'] = 'Rating';
$string['mapcourse_help'] = 'În mod implicit, formularele de feedback create pe pagina dvs. de pornire sunt disponibile pe  tot site-ul și vor apărea în toate cursurile care folosesc blocul de feedback. Puteţi insista ca formularul de feedback să apară, făcându-l un bloc permanent sau puteți limita numărul de cursuri în care un formular de feedback va apărea, prin atribuirea acestuia la cursuri specifice.';
$string['mapcourses_help'] = 'După ce aţi selectat cursul/cursurile relevant(e) din căutarea dvs puteţi să le asociaţi cu acest formular de feedback folosind atribuirea cursului. Multiple cursuri pot fi selectate în timp ce țineți apăsate tastele Ctrl sau Apple făcând clic pe numele cursului. Un curs poate fi separat de un formular de feedback în orice moment. ';
$string['mappedcourses'] = 'Cursuri mapate';
$string['mode'] = 'Mod';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'Modulele de feedback permit crearea de sondaje personalizate.';
$string['modulenameplural'] = 'Feedback';
$string['move_here'] = 'Mută aici';
$string['move_item'] = 'Mută această întrebare';
$string['multichoice'] = 'Opțiune multiplă';
$string['multiplesubmit_help'] = 'Dacă se dorește anonimizarea răspunsurilor la sondaje, utilizatorii vor putea trimite feedback de câte ori doresc. ';
$string['name'] = 'Nume';
$string['name_required'] = 'Numele cerut';
$string['next_page'] = 'Următoarea pagină';
$string['no_itemlabel'] = 'Fără etichetă';
$string['not_completed_yet'] = 'Nu este completat încă';
$string['no_templates_available_yet'] = 'Necompletat încă';
$string['not_selected'] = 'Nu este selectat';
$string['not_started'] = 'neînceput';
$string['numeric'] = 'Răspuns numeric';
$string['of'] = 'din';
$string['page'] = 'Pagină';
$string['page_after_submit'] = 'Pagina după trimitere';
$string['pagebreak'] = 'Sfârșit de pagină';
$string['picture'] = 'Imagine';
$string['picture_file_list'] = 'Lista imaginilor';
$string['pluginadministration'] = 'Administrare feedback';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Poziție';
$string['preview'] = 'Previzualizare';
$string['preview_help'] = 'În pre-vizualizare puteţi schimba ordinea întrebărilor. ';
$string['previous_page'] = 'Pagina precedentă';
$string['public'] = 'Public';
$string['question'] = 'Întrebare';
$string['questions'] = 'Întrebări';
$string['radio_values'] = 'Răspunsuri';
$string['required'] = 'Necesar';
$string['response_nr'] = 'Numărul răspunsuluii';
$string['responses'] = 'Răspunsuri';
$string['save_as_new_item'] = 'Salvează sub forma unei întrebări noi';
$string['save_as_new_template'] = 'Salvează sub formă de șablon nou';
$string['save_item'] = 'Salvează întrebarea';
$string['search_course'] = 'Caută curs';
$string['searchcourses'] = 'Caută cursuri';
$string['searchcourses_help'] = 'Căutaţi codul sau numele de curs(-uri) pe care doriţi să îl asociați cu acest feedback.';
$string['send'] = 'trimis';
$string['send_message'] = 'trimite mesaj';
$string['show_all'] = 'Afișează tot';
$string['show_entries'] = 'Afișează răspunsuri';
$string['show_entry'] = 'Afișează răspuns';
$string['start'] = 'Start';
$string['started'] = 'început';
$string['stop'] = 'terminat';
$string['subject'] = 'Subiect';
$string['template'] = 'Șablon';
$string['templates'] = 'Șabloane';
$string['template_saved'] = 'Șabloane salvate';
$string['textarea_height'] = 'Numărul de linii';
$string['textarea_width'] = 'Lăţime';
$string['textfield_maxlength'] = 'Numărul maxim de caractere acceptate';
$string['url_for_continue'] = 'Link către următoarea activitate';
$string['url_for_continue_help'] = 'În mod implicit după ce feedback-ul a fost trimis apăsarea butonului continuă va afişa pagina cursului. Puteţi defini aici un alt URL ţintă pentru acest buton.';
$string['use_this_template'] = 'Utilizează acest șablon';
$string['using_templates'] = 'Utilizează un șablon';
$string['vertical'] = 'vertical';
$string['viewcompleted'] = 'Feedback-uri completate';
$string['viewcompleted_help'] = 'Puteţi vizualiza formularele de feedback completate, care pot fi căutate după numele cursului şi/sau după  întrebare. Răspunsurile pot fi exportate în Excel.';
