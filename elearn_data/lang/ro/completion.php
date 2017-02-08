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
 * Strings for component 'completion', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Se notează';
$string['activities'] = 'Activități';
$string['activitiescompleted'] = 'Finalizare activitate';
$string['activitiescompletednote'] = 'Notă: finalizarea activității trebuie să fie setată să apară pentru o activitate în lista de mai sus.';
$string['activityaggregation'] = 'Condiții necesare';
$string['activityaggregation_all'] = 'TOATE activitățile selectate trebuie să fie finalizate';
$string['activityaggregation_any'] = 'ORICE activitate selectată trebuie să fie finalizată';
$string['activitycompletion'] = 'Finalizare activitate';
$string['aggregationmethod'] = 'Metoda de agregare';
$string['all'] = 'Toate';
$string['any'] = 'Oricare';
$string['approval'] = 'Aprobare';
$string['badautocompletion'] = 'Când selectați finalizare automată, trebuie, de asemenea, să activați cel puțin o cerință (de mai jos).';
$string['completed'] = 'Finalizare';
$string['completedunlocked'] = 'Opțiuni finalizare deblocate';
$string['completedunlockedtext'] = 'Când salvați modificările, gradul de finalizare pentru toți studenții va fi șters. Dacă vă răzgândiți cu privire la acest lucru, nu salvați formularul.';
$string['completedwarning'] = 'Opțiuni finalizare blocate';
$string['completion'] = 'Monitorizare finalizare';
$string['completion-alt-auto-enabled'] = 'Sistemul marchează acest item ca fiind complet potrivit condițiilor : {$a}';
$string['completion-alt-auto-fail'] = 'Finalizat: {$a} (nu a obținut notă de trecere)';
$string['completion-alt-auto-n'] = 'Nu s-a finalizat: {$a}';
$string['completion-alt-auto-pass'] = 'Finalizat: {$a} (s-a obținut notă de trecere)';
$string['completion-alt-auto-y'] = 'Finalizat: {$a}';
$string['completion-alt-manual-enabled'] = 'Studenții pot să marcheze manual acest item ca fiind completat: {$a}';
$string['completion-alt-manual-n'] = 'Necompletat: {$a}. Selectați pentru a-l seta ca fiind completat.';
$string['completion-alt-manual-y'] = 'Completat: {$a}. Selectați pentru a-l seta ca fiind necompletat.';
$string['completion_automatic'] = 'Afișează activitatea ca fiind completă atunci când sunt îndeplinite condițiile';
$string['completiondisabled'] = 'Dezactivat, nu este afișat în setările activității';
$string['completionduration'] = 'Înscriere';
$string['completionenabled'] = 'Dacă este activat, se controlează completarea și setările de activitate';
$string['completionexpected'] = 'Finalizare estimată pe';
$string['completionexpected_help'] = 'Această setare specifică data la care se așteaptă să se finalizeze activitatea. Data nu va fi vizibilă pentru elevi şi va fi afişată numai în raportul de progres.';
$string['completion-fail'] = 'Finalizat (nu s-a primit notă de trecere)';
$string['completion_help'] = 'Dacă opțiunea este activată, finalizarea activităților va fi urmărită, fie manual, fie automat, bazat pe anumite condiţii. Puteți seta condiții multiple după plac. Astfel, activitatea va fi considerată completă doar atunci când TOATE condițiile vor fi îndeplinite.

O bifare langă numele activității pe pagina cursului va indica faptul că activitatea este finalizată.';
$string['completionicons'] = 'Căsuțe de bifare a completării';
$string['completionicons_help'] = 'O bifare în dreptul numelui unei activități poate fi utilizată pentru a indica atunci când activitatea este completă.

Dacă o bifare punctată este afişată, puteţi să faceţi click pe ea pentru a bifa caseta atunci când credeți că aţi terminat activitatea. (Un al doilea click va anula bifarea în cazul în care vă răzgândiți.) Bifarea este opţională şi este pur şi simplu o modalitate de urmărire a progresulului în curs.

Dacă este afișată o casetă goală, o bifare va apărea automat când aţi terminat activitatea în conformitate cu condiţiile stabilite de către profesor.';
$string['completion_manual'] = 'Studenții pot să seteze in mod manual activitatea lor ca fiind încheiată';
$string['completionmenuitem'] = 'Finalizare';
$string['completion-n'] = 'Nu este finalizat';
$string['completion_none'] = 'Nu se indică completarea activității';
$string['completionnotenabled'] = 'Finalizarea nu este activată';
$string['completionnotenabledforcourse'] = 'Finalizarea nu este activată pentru acest curs';
$string['completionnotenabledforsite'] = 'Finalizarea nu este activată pentru acest site';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Utilizatorul trebuie să rămână înregistrat până la';
$string['completion-pass'] = 'Finalizat (s-a obținut notă de trecere)';
$string['completionsettingslocked'] = 'Setări finalizare blocate';
$string['completion-title-manual-n'] = 'Marcate ca finalizate: {$a}';
$string['completion-title-manual-y'] = 'Marcate ca nefiind finalizate: {$a}';
$string['completionusegrade'] = 'Notă necesară';
$string['completionusegrade_desc'] = 'Studenții trebuie să primească o notă pentru a finaliza această activitate.';
$string['completionusegrade_help'] = 'Dacă opțiunea este activată, activitatea este considerată completă atunci când un student primeşte o notă. Pictograme ce denotă promovarea sau respingerea pot fi afișate dacă s-a setat o notă de trecere pentru activitate.';
$string['completionview'] = 'Necesită vizualizare';
$string['completionview_desc'] = 'Studentul trebuie să vizualizeze activitatea pentru a o finaliza';
$string['completion-y'] = 'Finalizat';
$string['configenablecompletion'] = 'Când este activat, vă permite să activați caracteristicile urmăririi completării (progresul) la nivel de curs.';
$string['confirmselfcompletion'] = 'Confirmă auto-completarea';
$string['courseaggregation'] = 'Condiții necesare';
$string['courseaggregation_all'] = 'TOATE cursurile selectate trebuie să fie completate';
$string['courseaggregation_any'] = 'ORICARE DIN cursurile selectate trebuie să fie completate';
$string['coursealreadycompleted'] = 'Ai finalizat deja acest curs';
$string['coursecomplete'] = 'Curs finalizat';
$string['coursecompleted'] = 'Curs finalizat';
$string['coursecompletion'] = 'Completare curs';
$string['coursecompletioncondition'] = 'Condiție: {$a}';
$string['coursegrade'] = 'Notă curs';
$string['coursesavailable'] = 'Cursuri disponibile';
$string['coursesavailableexplaination'] = 'Notă: Condițiile de finalizare a cursului trebuie să fie setate pentru ca un curs să apară în lista de mai sus.';
$string['criteria'] = 'Criterii';
$string['criteriagroup'] = 'Grup criterii';
$string['criteriarequiredall'] = 'Toate criteriile de mai jos sunt necesare';
$string['criteriarequiredany'] = 'Oricare dintre criteriile de mai jos sunt necesare';
$string['csvdownload'] = 'Downloadează în format spreadsheet  (UTF-8 .csv)';
$string['datepassed'] = 'Dată absolvire';
$string['days'] = 'Zile';
$string['daysoftotal'] = '{$a->zile} din {$a->total}';
$string['deletecompletiondata'] = 'Ștergere data completare';
$string['dependencies'] = 'Dependințe';
$string['dependenciescompleted'] = 'Finalizarea altor cursuri';
$string['editcoursecompletionsettings'] = 'Editare setări finalizare curs';
$string['enablecompletion'] = 'Activare monitorizare finalizare';
$string['enrolmentduration'] = 'Zile rămase';
$string['enrolmentdurationlength'] = 'Utilizatorul trebuie să rămână înregistrat pentru';
$string['err_noactivities'] = 'Informațiile despre completare nu sunt activate pentru nicio activitate, astfel încât nu pot fi afișate. Puteți activa informațiile despre completare prin editarea setărilor pentru activitate.';
$string['err_nocourses'] = 'Finalizarea cursului nu este activată pentru oricare alte cursuri, astfel încât nu poate fi afișată. Puteți activa finalizarea cursului în setările cursului.';
$string['err_nograde'] = 'Nu a fost stabilită o notă de trecere pentru acest curs. Pentru a activa acest  tip de criteriu trebuie să stabiliți o notă de trecere pentru acest curs.';
$string['err_noroles'] = 'Nu există roluri cu capabilitatea moodle/curs: markcomplete în acest curs.';
$string['err_nousers'] = 'Nu există studenți la acest curs sau grup pentru care sunt să fie afișate informațile privind completarea. (În mod implicit, informațiile în legătură cu completarea sunt afișate numai pentru studenți, astfel, dacă nu există studenți, veți vedea această eroare. Administratorii pot modifica această opțiune prin ecranele admin.';
$string['err_settingslocked'] = 'Unul sau mai mulți studenți au îndeplinit deja o cerință, astfel că setările au fost blocate. Deblocarea setărilor criteriilor de completare va șterge toate datele de utilizator existente și poate crea confuzie.';
$string['err_system'] = 'O eroare internă a apărut în sistemul de completare. (Administratorii de sistem pot permite debug-ul informațiilor pentru a vedea mai multe detalii.)';
$string['excelcsvdownload'] = 'Downloadează în format Excel comptabil (.csv)';
$string['fraction'] = 'Fracție';
$string['graderequired'] = 'Notă necesară';
$string['gradexrequired'] = '{$a} necesare';
$string['inprogress'] = 'În curs';
$string['manualcompletionby'] = 'Finalizare manuală de către';
$string['manualcompletionbynote'] = 'Notă: Capabilitatea moodle/curs: markcomplete trebuie să fie permisă unui rol ca să apară în listă.';
$string['manualselfcompletion'] = 'Auto-finalizare manuală';
$string['manualselfcompletionnote'] = 'Notă: Block-ul de autocompletare ar trebui adăugat la curs, dacă este activată autocompletarea.';
$string['markcomplete'] = 'Marcare ca finalizat';
$string['markedcompleteby'] = 'Marcat ca finalizat de către {$a}';
$string['markingyourselfcomplete'] = 'Bifați completarea';
$string['moredetails'] = 'Mai multe detalii';
$string['nocriteriaset'] = 'Nu sunt setate criterii de completare pentru acest curs';
$string['notcompleted'] = 'Nu a fost finalizat';
$string['notenroled'] = 'Nu sunteți înregistrat în  acest curs';
$string['notyetstarted'] = 'Nu a fost încă început';
$string['overallaggregation'] = 'Cerințe pentru finalizare';
$string['overallaggregation_all'] = 'Cursul este complet când TOATE condițiile au fost îndeplinite';
$string['overallaggregation_any'] = 'Cursul este complet când ORICE condiție este îndeplinită';
$string['pending'] = 'În așteptare';
$string['periodpostenrolment'] = 'Perioadă post-înrolare';
$string['progress'] = 'Progres student';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progres: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Recunoașterea activității anterioare';
$string['remainingenroledfortime'] = 'Ramâi înregistrat pentru o perioadă specifică de timp';
$string['remainingenroleduntildate'] = 'Rămâne înscris până la o dată specificată';
$string['reportpage'] = 'Arată utilizatorii {$a->from} până la {$a->to} din {$a->total}.';
$string['requiredcriteria'] = 'Criteriu necesar';
$string['restoringcompletiondata'] = 'Se scriu datele completării';
$string['roleaggregation'] = 'Condiții necesare';
$string['roleaggregation_all'] = 'TOATE rolurile selectate să fie bifate când se îndeplinește condiția';
$string['roleaggregation_any'] = 'ORICARE roluri selectate  să fie bifate când se îndeplinește condiția';
$string['saved'] = 'Salvat';
$string['seedetails'] = 'Vezi detalii';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto completare';
$string['showinguser'] = 'Arată utilizator';
$string['unenrolingfromcourse'] = 'Renunțare la curs';
$string['unenrolment'] = 'Renunțare';
$string['unit'] = 'Unitate';
$string['unlockcompletion'] = 'Deblochează opțiunile completării';
$string['unlockcompletiondelete'] = 'Deblochează opțiunile de completare și șterge datele completării de către utilizator';
$string['usealternateselector'] = 'Utilizează selectorul alternativ de curs';
$string['usernotenroled'] = 'Utilizatorul nu este înscris la acest curs';
$string['viewcoursereport'] = 'Vezi raportul cursului';
$string['viewingactivity'] = 'Vizualizare {$a}';
$string['writingcompletiondata'] = 'Se scriu datele pentru  completare';
$string['xdays'] = '{$a} zile';
$string['yourprogress'] = 'Progresul dumneavoastră';
