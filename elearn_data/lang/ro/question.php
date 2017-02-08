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
 * Strings for component 'question', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acțiune';
$string['addanotherhint'] = 'Adăugați un alt indiciu';
$string['addcategory'] = 'Adaugă categorie';
$string['addmorechoiceblanks'] = 'Spații libere pentru {no} alte opțiuni';
$string['adminreport'] = 'Raport despre eventualele probleme apărute în baza de date cu întrebări.';
$string['answer'] = 'Răspuns';
$string['answers'] = 'Răspunsuri';
$string['answersaved'] = 'Răspuns salvat';
$string['attemptfinished'] = 'Încercare finalizată';
$string['attemptoptions'] = 'Opțiuni test';
$string['availableq'] = 'Disponibil?';
$string['badbase'] = 'Bad base înainte **: {$a}**';
$string['behaviour'] = 'Comportament';
$string['behaviourbeingused'] = 'Comportament utilizat: {$a}';
$string['broken'] = 'Aceasta reprezintă un "broken link" adică o legătură la un fişier inexistent';
$string['byandon'] = 'de la <em>{$a->user}</em> la ora <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Nu se poate copia fișierul de back-up';
$string['cannotcreatepath'] = 'Nu se poate crea calea : {$a}';
$string['cannotdeletecate'] = 'Nu puteți șterge categoria daca este categoria implicită pentru acest context .';
$string['cannotdeletemissingqtype'] = 'Nu puteţi şterge tipul de întrebare absentă. Este solicitat de sistem.';
$string['cannotdeleteqtypeinuse'] = 'Nu puteţi şterge tipul de întrebare \'{$a}\'. Există întrebări de acest tip în baza de date cu întrebări.';
$string['cannotdeleteqtypeneeded'] = 'Nu puteţi şterge tipul de întrebare \'{$a}\'. Există alte tipuri de întrebări instalate care derivă din el.';
$string['cannotenable'] = 'Tipul de întrebare {$a} nu poate fi creat direct.';
$string['cannotfindcate'] = 'Nu s-a putut găsi categoria de înregistrare';
$string['cannotfindquestionfile'] = 'Nu s-a putut găsi fișierul cu datele întrebării în zip';
$string['cannotgetdsforquestion'] = 'Nu se poate obține setul de date specificat pentru o întrebare calculată! (întrebare: {$a})';
$string['cannothidequestion'] = 'Nu s-a putut ascunde întrebarea';
$string['cannotimportformat'] = 'Ne pare rău, importarea acestui format nu este încă implementată!';
$string['cannotinsertquestion'] = 'Nu s-a putut adăuga întrebarea nouă!';
$string['cannotinsertquestioncatecontext'] = 'Nu se poate insera noua categorie a întrebării  {$a->cat} illegal contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Nu s-a putut încărca întrebarea';
$string['cannotmovequestion'] = 'Nu puteți utiliza acest script pentru a muta întrebările care au fișiere asociate din diferite zone.';
$string['cannotopenforwriting'] = 'Nu se poate deschide pentru scriere: {$a}';
$string['cannotpreview'] = 'Nu puteți previzualiza aceste întrebări!';
$string['cannotread'] = 'Nu se poate citi fişierul de import (sau fişierul este gol)';
$string['cannotunhidequestion'] = 'Nu s-a putut renunța la ascunderea întrebării';
$string['cannotunzip'] = 'Nu se poate dezarhiva fișierul.';
$string['cannotwriteto'] = 'Nu se pot scrie întrebările exportate la {$a}';
$string['category'] = 'Categorie';
$string['categorycurrent'] = 'Categoria curentă';
$string['categorycurrentuse'] = 'Folosiți această categorie';
$string['categorydoesnotexist'] = 'Această categorie nu există';
$string['categoryinfo'] = 'Informații categorie';
$string['categorymove'] = 'Categoria \'{$a->name}\' conţine {$a->count} întrebari. Alege altă categorie în care să le muţi.';
$string['categorymoveto'] = 'Salvați în această categorie';
$string['categorynamecantbeblank'] = 'Numele categoriei nu poate fi necompletat.';
$string['changeoptions'] = 'Modificați opțiunile';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Categoria "{$a->name}"</a> din cursul "{$a->coursename}" îşi va modifica opţiunea de partajare din <strong>{$a->changefrom} în {$a->changeto}</strong>.';
$string['check'] = 'Verifică';
$string['chooseqtypetoadd'] = 'Alege un tip de întrebare pentru a fi adăugat';
$string['clearwrongparts'] = 'Șterge răspunsurile incorecte';
$string['clickflag'] = 'Întrebare cu flag';
$string['clicktoflag'] = 'Puneți un flag acestei întrebări pentru referințe viitoare';
$string['clicktounflag'] = 'Ștergeți flag';
$string['clickunflag'] = 'Ștergeți flag';
$string['closepreview'] = 'Închide previzualizare';
$string['combinedfeedback'] = 'Feedback combinat';
$string['comment'] = 'Comentariu';
$string['commented'] = 'Commentat: {$a}';
$string['comments'] = 'Comentarii';
$string['commentx'] = 'Comentariu:';
$string['complete'] = 'Complet';
$string['contexterror'] = 'Nu ar fi trebuit să ajungeți aici dacă nu mutați o categorie la un alt context.';
$string['copy'] = 'Copiați de la {$a} și schimbă legătura';
$string['correct'] = 'Corect';
$string['correctfeedback'] = 'Pentru oricare răspuns corect';
$string['correctfeedbackdefault'] = 'Răspunsul dumneavoastră este corect.';
$string['created'] = 'Creat';
$string['createdby'] = 'Creat de';
$string['createdmodifiedheader'] = 'Creat/Ultima salvare';
$string['createnewquestion'] = 'Creează o nouă întrebare...';
$string['cwrqpfs'] = 'Selectare aleatorie de întrebări din sub-categorii';
$string['cwrqpfsnoprob'] = 'Nicio categorie de întrebare din site-ul dumneavoastră nu este afectată de problema "întrebări aleatorii, se selectează întrebări din sub-categorii" .';
$string['decimalplacesingrades'] = 'Note cu zecimale';
$string['defaultfor'] = 'Implicit pentru {$a}';
$string['defaultinfofor'] = 'Categoria implicită pentru întrebările partajate în contextul \'{$a}\'.';
$string['defaultmark'] = 'Nota implicită';
$string['defaultmarkmustbepositive'] = 'Nota implicită trebuie să fie pozitivă.';
$string['deletecoursecategorywithquestions'] = 'În banca de întrebări există întrebări asociate cu această categorie de cursuri. Continuarea acestei acţiuni va determina ştergerea acelor întrebări. Dacă doriţi puteţi să mutaţi acele întrebări în altă categorie utilizând interfaţa băncii de întrebări.';
$string['deletequestioncheck'] = 'Sunteți absolut sigur că doriți să ștergeți \'{$a}\'?';
$string['deletingqtype'] = 'Se șterge tipul de întrebare \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Nu a corespuns niciun răspuns]';
$string['disabled'] = 'Dezactivat';
$string['displayoptions'] = 'Opțiuni pentru afișare';
$string['disterror'] = 'Distribuția {$a} a cauzat probleme';
$string['donothing'] = 'Nu copia fişiere, nu muta fişiere, nu modifica linkuri.';
$string['editcategories'] = 'Editează categorii';
$string['editcategory'] = 'Editează categoria';
$string['editingcategory'] = 'Se modifică o categorie';
$string['editingquestion'] = 'Se modifică o întrebare';
$string['editquestion'] = 'Modifică întrebarea';
$string['editquestions'] = 'Modifică întrebările';
$string['editthiscategory'] = 'Editează această categorie';
$string['emptyxml'] = 'Eroare necunoscută -  imsmanifest.xml necompletat';
$string['enabled'] = 'Activat';
$string['erroraccessingcontext'] = 'Contextul nu poate fi accesat';
$string['errordeletingquestionsfromcategory'] = 'Eroare la ștergerea unor întrebări din categoria {$a}.';
$string['errorduringpost'] = 'A apărut o eroare în timpul post-procesării!';
$string['errorduringpre'] = 'A apărut o eroare în timpul pre-procesării!';
$string['errorduringproc'] = 'A apărut o eroare în timpul procesării!';
$string['errorduringregrade'] = 'Nu se poate acorda altă notă la întrebarea {$a->qid}, mergi la stare {$a->stateidid}.';
$string['errorfilecannotbecopied'] = 'Eroare: nu se poate copia fișierul {$a}.';
$string['errorfilecannotbemoved'] = 'Eroare: nu se poate muta fișierul {$a}.';
$string['errormanualgradeoutofrange'] = 'Nota {$a->grade} nu se încadrează în intervalul 0 - {$a->maxgrade} pentru întrebarea {$a->name}. Nici punctajul nici comentariile nu vor fi salvate.';
$string['errormovingquestions'] = 'S-a produs o eroare la realizarea operaţiunii de mutare a întrebărilor {$a}.';
$string['errorpostprocess'] = 'A apărut o eroare în timpul post-procesării!';
$string['errorpreprocess'] = 'A apărut o eroare în timpul pre-procesării!';
$string['errorprocess'] = 'A apărut o eroare în timpul procesării!';
$string['errorprocessingresponses'] = 'S-a produs o eroare în timpul procesării răspunsurilor dumneavoastră.';
$string['errorsavingcomment'] = 'Eroare întâmpinată la salvarea comentarilor pentru întrebarea {$a->name} în baza de date.';
$string['errorsavingflags'] = 'Eroare la salvarea statusului flag-ului';
$string['errorupdatingattempt'] = 'Eroare la actualizarea propunerii {$a->id} în baza de date';
$string['exportcategory'] = 'Exportă categoria';
$string['exporterror'] = 'Au apărut erori în timpul exportului';
$string['exportfilename'] = 'întrebări';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Exportă întrebări în fișier';
$string['exportquestions_help'] = 'Această funcție permite exportul unei categorii complete (și orice alte subcategorii) de întrebări în fișier. Vă rugăm să rețineți că, în funcție de formatul de fișier selectat, unele date ale tipurilor întrebării și anumite tipuri de întrebări se poate să nu fie exportate.';
$string['feedback'] = 'Feedback';
$string['filecantmovefrom'] = 'Fișierele cu întrebări nu pot fi mutate, deoarece nu aveți permisiunea de a muta fișiere din locul de unde încercați să mutați  întrebări.';
$string['filecantmoveto'] = 'Fișierele întrebării nu pot fi mutate sau copiate, deoarece nu aveți permisiunea de a adăuga fișiere în locul unde încercați să mutați întrebările.';
$string['fileformat'] = 'Formatul fișierului';
$string['filesareacourse'] = 'Fișiere curs';
$string['filesareasite'] = 'Fișiere site';
$string['filestomove'] = 'Mutați / copiați fișiere la {$a}?';
$string['fillincorrect'] = 'Completează răspunsurile corecte';
$string['flagged'] = 'Flagged';
$string['flagthisquestion'] = 'Puneți flag la această întrebare';
$string['formquestionnotinids'] = 'Formular care conține întrebări care nu sunt în questionids';
$string['fractionsnomax'] = 'Una din întrebări trebuie să aibă un punctaj de 100% astfel încât să fie posibilă obţinerea unei note maxime la această întrebare.';
$string['generalfeedback'] = 'Feedback general';
$string['generalfeedback_help'] = 'Feedback-ul general este prezentat studentului după ce a completat întrebarea. Spre deosebire de feedback-ul specific, care depinde de tipul de întrebare și de răspunsul dat de student, același text cu feedback-ul general este prezentat tuturor studenților.

Aveți posibilitatea să utilizați feedback-ul general, pentru a oferi studenților un răspuns complet și poate un link către mai multe informații pe care le pot folosi în cazul în care nu au înțeles întrebările.';
$string['getcategoryfromfile'] = 'Obţine categorie din fişier';
$string['getcontextfromfile'] = 'Obţine context din fişier';
$string['hidden'] = 'Ascuns';
$string['hintn'] = 'Sugestie {no}';
$string['hintnoptions'] = 'Opțiuni sugestie {no}';
$string['hinttext'] = 'Textul sugestiei';
$string['ignorebroken'] = 'Ignorați legăturile întrerupte';
$string['importcategory'] = 'Categorie import';
$string['importcategory_help'] = 'Această setare determină categoria în care vor merge întrebările importate.

Anumite formate de import, cum ar fi GIFTși Moodle XML, pot include categorii și contexte de date în fișierul de import. Pentru a face uz de aceste date, mai degrabă decât de categoria selectată, căsuțele corespunzătoare trebuie bifate. În cazul în care categoriile specificate în fișierul de import nu există, ele vor fi create.';
$string['importerror'] = 'A apărut o eroare în timpul procesării importului';
$string['importerrorquestion'] = 'Eroare la importul întrebărilor';
$string['importfromcoursefiles'] = '... sau alegeți un fișier curs pentru import.';
$string['importfromupload'] = 'Selectează un fișier pentru upload...';
$string['importingquestions'] = 'Se importă  {$a} întrebări din fișier';
$string['importquestions'] = 'Importă întrebări din fișier';
$string['importquestions_help'] = 'Această funcție permite activarea întrebărilor într-o varietate de formate pentru a fi importate prin fișier text. Rețineți că fișierul trebuie să utilizeze codificarea UTF-8.';
$string['importwrongfiletype'] = 'Tipul de fișier selectat ({$a->actualtype}) nu corespunde tipului de fișier așteptat de acest format de import ({$a->expectedtype}).';
$string['includesubcategories'] = 'Afișează și  întrebările din subcategorii';
$string['incorrect'] = 'Incorect';
$string['incorrectfeedback'] = 'Pentru orice răspuns incorect';
$string['incorrectfeedbackdefault'] = 'Răspunsul dumneavoastră este incorect.';
$string['information'] = 'Informații';
$string['invalidanswer'] = 'Răspuns incomplet';
$string['invalidarg'] = 'Nu există argumente valide furnizate sau configurarea serverului este incorectă';
$string['invalidconfirm'] = 'String-ul de confirmare a fost incorect';
$string['invalidwizardpage'] = 'Wizard page nespecificată sau incorectă!';
$string['lastmodifiedby'] = 'Ultima modificare efectuată de';
$string['linkedfiledoesntexist'] = 'Fişierul referit {$a} nu există';
$string['makechildof'] = 'Trasformă în subordonat al \'{$a}\'';
$string['makecopy'] = 'Crează o copie';
$string['maketoplevelitem'] = 'Trasferă pe primul nivel';
$string['manuallygraded'] = 'Notată manual {$a->mark} cu comentariul: {$a->comment}';
$string['mark'] = 'Notă';
$string['marks'] = 'Note';
$string['missingimportantcode'] = 'Acest tip de întrebare nu are un cod important şi anume {$a}.';
$string['modified'] = 'Ultima salvare';
$string['move'] = 'Mută din {$a} şi schimbă linkuri.';
$string['movecategory'] = 'Mută Categorie';
$string['movedquestionsandcategories'] = 'Întrebările şi categoriile de întrebări au fost transferate din {$a->oldplace} în {$a->newplace}.';
$string['movelinksonly'] = 'Schimbaţi locaţia de destinaţie a link-ului, nu transferaţi sau copiaţi fişiere';
$string['moveq'] = 'Mută Întrebare(Întrebări)';
$string['moveqtoanothercontext'] = 'Mută întrebare în alt context.';
$string['moveto'] = 'Mută la >>';
$string['movingcategory'] = 'Se transferă categoria';
$string['movingcategoryandfiles'] = 'Sunteţi sigur că doriţi să transferaţi categoria {$a->name} şi toate sub-categoriile corespunzătoare în contextul "{$a->contextto}"?<br /> În {$a->fromareaname} au fost identificate {$a->urlcount} fişiere referite din întrebări, doriţi să le copiaţi sau să le transferaţi în {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Sunteţi sigur că doriţi să transferaţi categoria "{$a->name}" împreună cu toate categoriile subordonate în contextul "{$a->contextto}"?';
$string['movingquestions'] = 'Transfer Întrebări şi Fişiere Asociate';
$string['movingquestionsandfiles'] = 'Sunteți sigur(ă) că doriți să mutați întrebarea(întrebările) {$a->questions} în context pentru <strong>"{$a->tocontext}"</strong>?<br /> Am găsit <strong>{$a->urlcount} files</strong> cu link-uri de la această(aceste) întrebare(întrebări), doriți să le copiați  sau să le mutați în {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Sunteți sigur(ă) că doriți să mutați întrebarea(întrebările) în context pentru <strong>"{$a->tocontext}"</strong>?<br /> Nu există <strong>fișiere</strong> cu link de la aceste întrebări în {$a->fromareaname}.';
$string['needtochoosecat'] = 'Alegeţi categoria în care doriţi să transferaţi această întrebare sau apăsaţi butonul Anulare.';
$string['nocate'] = 'Nu există o asemenea categorie {$a}!';
$string['nopermissionadd'] = 'Nu aveţi permisiunea să adăugaţi întrebări în această secţiune.';
$string['nopermissionmove'] = 'Nu aveţi permisiunea să transferaţi întrebări din cadrul acestei secţiuni. Va trebui să salvaţi întrebarea în această categorie sau să o salvaţi cu un alt nume.';
$string['noprobs'] = 'Nu s-au identificat probleme în baza de date cu întrebări creată de dumneavoastră.';
$string['noquestions'] = 'Nu s-au găsit întrebări care ar putea fi exportate. Asigurați-vă că ați selectat o categorie pentru export  care conține întrebări.';
$string['noquestionsinfile'] = 'Nu există întrebări în fişierul de import';
$string['noresponse'] = '[Fără răspuns]';
$string['notanswered'] = 'Nu a primit răspuns';
$string['notchanged'] = 'Nu există schimbări de la ultima încercare';
$string['notenoughanswers'] = 'Acest tip de întrebare necesită cel puțin {$a} răspunsuri';
$string['notenoughdatatoeditaquestion'] = 'N-au fost specificate: id-ul întrebării, id-ul categoriei şi tipul întrebării.';
$string['notenoughdatatomovequestions'] = 'Va trebui să furnizaţi un id pentru fiecare întrebare pe care doriţi să o transferaţi.';
$string['notflagged'] = 'Fără flag';
$string['notgraded'] = 'Fără notă';
$string['notshown'] = 'Neafișat';
$string['notyetanswered'] = 'Nu a primit răspuns încă';
$string['notyourpreview'] = 'Această previzualizare nu vă aparține';
$string['novirtualquestiontype'] = 'Nu există tip de întrebare virtuală pentru tipul de întrebare {$a}';
$string['numqas'] = 'Numărul de încercări pentru întrebare';
$string['numquestions'] = 'Număr de întrebări';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} hidden)';
$string['options'] = 'Opțiuni';
$string['orphanedquestionscategory'] = 'Întrebări salvate din categoriile șterse';
$string['orphanedquestionscategoryinfo'] = 'Ocazional, din cauza bug-urilor din software-ul vechi, întrebările pot rămâne în baza de date, deși categoria corespunzătoare a fost ștearsă. Desigur, acest lucru nu ar trebui să se întâmple, dar s-a întâmplat în trecut pe acest site. Această categorie a fost creată în mod automat, iar întrebările rămase orfane au fost mutate aici, astfel încât să le puteți gestiona. Rețineți că orice imagini sau fișiere media utilizate de către aceste întrebări au fost, probabil, pierdute.';
$string['page-question-category'] = 'Pagina categoriei întrebării';
$string['page-question-edit'] = 'Pagina de editare a întrebării';
$string['page-question-export'] = 'Pagina de export a întrebării';
$string['page-question-import'] = 'Pagina de import a întrebării';
$string['page-question-x'] = 'Orice pagină a întrebării';
$string['parent'] = 'Parent';
$string['parentcategory'] = 'Categorie';
$string['partiallycorrect'] = 'Parțial corect';
$string['partiallycorrectfeedback'] = 'Pentru orice răspuns parțial corect';
$string['partiallycorrectfeedbackdefault'] = 'Răspunsul dumneavoastră este parțial corect.';
$string['penaltyfactor'] = 'Factor penalizare';
$string['penaltyfactor_help'] = 'Această setare determină ce fracțiune din punctajul obținut se scade pentru fiecare răspuns greșit. Este aplicabil numai în cazul în care testul se execută în modul adaptiv.

Factorul de penalizare ar trebui să fie un număr între 0 și 1. Un factor de penalizare 1 înseamnă că studentul trebuie să dea din prima încrecare răspunsulcorect în primul său răspuns pentru a obține punctajul. Un factor de penalizare de 0 înseamnă că elevul poate încerca de câte ori vrea și primește în continuare punctajul complet.';
$string['penaltyforeachincorrecttry'] = 'Penalizare pentru fiecare încercare incorectă';
$string['permissionedit'] = 'Editează această întrebare';
$string['permissionmove'] = 'Mută această întrebare';
$string['permissionsaveasnew'] = 'Salvează ca întrebare nouă';
$string['permissionto'] = 'Aveţi permisiunea să';
$string['previewquestion'] = 'Previzualizare întrebare: {$a}';
$string['published'] = 'partajate';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Întrebarea "{$a->name}" ({$a->qtype})</a> este în această categorie dar este, de asemenea, folosită în <a href="
{$a->qurl}">quiz "{$a->quizname}"</a> în alt curs
"{$a->coursename}".';
$string['questionbank'] = 'Banca de întrebări';
$string['questionbehaviouradminsetting'] = 'Setări funcționalitate intrebare';
$string['questionbehavioursdisabled'] = 'Funcționalități întrebare pentru a fi dezactivate';
$string['questioncategory'] = 'Categorie întrebare';
$string['questioncatsfor'] = 'Categorii întrebări pentru {$a}.';
$string['questiondoesnotexist'] = 'Această întrebare nu există.';
$string['questionname'] = 'Numele întrebării';
$string['questionno'] = 'Întrebare {$a}';
$string['questions'] = 'Întrebări';
$string['questionsaveerror'] = 'Apar erori în timpul salvării întrebării - ({$a})';
$string['questionsmovedto'] = 'Întrebări care sunt încă în uz au fost transferate în "{$a}" în categoria cursului principal.';
$string['questionsrescuedfrom'] = 'Întrebări salvate din contextul {$a}.';
$string['questionsrescuedfrominfo'] = 'Aceste întrebări (dintre care unele ar putea fi invizibile) au fost salvate atunci când contextul {$a} a fost şters deoarece sunt încă utilizate în cadrul unor chestionare şi a altor activităţi.';
$string['questiontext'] = 'Textul întrebării';
$string['questiontype'] = 'Tipul întrebării';
$string['questionuse'] = 'Foloseşte întrebare în această activitate';
$string['questionx'] = '{$a} întrebare';
$string['requiresgrading'] = 'Trebuie să fie notată';
$string['responsehistory'] = 'Istoricul răspunsurilor';
$string['restart'] = 'Începeți din nou';
$string['restartwiththeseoptions'] = 'Începeți din nou cu aceste opțiuni';
$string['reviewresponse'] = 'Previzualizare răspuns';
$string['rightanswer'] = 'Răspunsul corect';
$string['rightanswer_help'] = 'un rezumat generat automat al răspunsului corect. Acest lucru poate fi limitat, astfel încât s-ar putea să doriți să luați în considerare explicarea soluției corecte în feedback-ul general pentru întrebare, și sa dezactivați această opțiune.';
$string['save'] = 'Salvează';
$string['saved'] = 'Salvat: {$a}';
$string['saveflags'] = 'Salvează status-ul flag-urilor';
$string['selectacategory'] = 'Selectează o categorie:';
$string['selectaqtypefordescription'] = 'Selectați un tip de întrebare pentru a-i vedea descrierea.';
$string['selectcategoryabove'] = 'Selectează o categorie anterioară';
$string['settingsformultipletries'] = 'Încercări multiple';
$string['shareincontext'] = 'Partajează în context pentru {$a}';
$string['showhidden'] = 'De asemenea, arată întrebări vechi';
$string['shown'] = 'Afișat';
$string['shownumpartscorrect'] = 'Afișează numărul răspunsurilor corecte';
$string['shownumpartscorrectwhenfinished'] = 'Arată numărul de răspunsuri corecte odată ce întrebarea este închisă';
$string['specificfeedback'] = 'Feedback specific';
$string['specificfeedback_help'] = 'Feedback care depinde răspunsul dat de cursant';
$string['started'] = 'Început';
$string['state'] = 'Stare';
$string['step'] = 'Pas';
$string['submit'] = 'Trimite';
$string['submitandfinish'] = 'Trimite și finisează';
$string['submitted'] = 'Trimite: {$a}';
$string['technicalinfo'] = 'Informație tehnică';
$string['technicalinfo_help'] = 'Această informație tehnică este probabil utilă numai pentru dezvoltatorii care lucrează la noi tipuri de întrebări. Poate fi, de asemenea, de ajutor atunci când încercați să diagnosticați întrebările cu probleme.';
$string['technicalinfominfraction'] = 'Fracție minimă: {$a}';
$string['technicalinfoquestionsummary'] = 'Rezumatul întrebării';
$string['technicalinforightsummary'] = 'Rezumatul răspunsului corect: {$a}';
$string['technicalinfostate'] = 'Status-ul întrebării: {$a}';
$string['tofilecategory'] = 'Scrie categorie în fişier';
$string['tofilecontext'] = 'Scrie context în fişier';
$string['uninstallbehaviour'] = 'Dezinstalează această funcționalitate a întrebării';
$string['uninstallqtype'] = 'Dezinstalează acest tip de întrebare';
$string['unknown'] = 'Necunoscut';
$string['unknownbehaviour'] = 'Funcționalitate necunoscută: {$a}.';
$string['unknownquestion'] = 'Întrebare necunoscută: {$a}.';
$string['unknownquestioncatregory'] = 'Categorie a întrebării necunoscută: {$a}.';
$string['unknownquestiontype'] = '{$a} este un tip de întrebare necunoscut.';
$string['unpublished'] = 'nu este partajat';
$string['updatedisplayoptions'] = 'Actualizează opțiunile de afișare';
$string['upgradeproblemcategoryloop'] = 'A fost identificată o problemă la actualizarea categoriilor de întrebări. Există o buclă în structura arborescentă a categoriilor de întrebări. ID-urile de categorii afectate de această problemă sunt {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Nu a putut fi actualizată categoria de întrebări {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'S-a identificat o problemă la actualizarea categoriilor de întrebări. Categoria {$a->id} se referă la categoria principală {$a->parent} care nu mai există. Categoria subordonată a fost transferată în altă categorie principală.';
$string['withselected'] = 'ce ați selectat';
$string['xoutofmax'] = '{$a->mark} din {$a->max}';
$string['yougotnright'] = 'Ați selectat în mod corect {$a->num}.';
$string['youmustselectaqtype'] = 'Trebuie să selectați un tip de întrebare.';
$string['yourfileshoulddownload'] = 'Fişierul dumneavoastră de export ar trebui să înceapă să se descarce în curând. Dacă acest lucru nu se întâmplă executaţi clic <a href="{$a}">aici</a>. Categoria principală a fost schimbată pentru remedierea problemei.';
