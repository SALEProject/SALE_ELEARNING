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
 * Strings for component 'grades', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Activități';
$string['addcategory'] = 'Adăugați categori';
$string['addcategoryerror'] = 'Nu s-a putut adăuga categoria.';
$string['addexceptionerror'] = 'Eroare întâmpinată la adăugarea excepției pentru userid:gradeitem';
$string['addfeedback'] = 'Adăugați feedback';
$string['addgradeletter'] = 'Adaugă o literă notare';
$string['addidnumbers'] = 'Adaugă numere id';
$string['additem'] = 'Adaugă element notă';
$string['addoutcome'] = 'Adaugă un rezultat';
$string['addoutcomeitem'] = 'Adaugă element rezultat';
$string['addscale'] = 'Adaugă scară';
$string['aggregateextracreditmean'] = 'Media notelor (cu extra credite)';
$string['aggregatemax'] = 'Cea mai mare notă';
$string['aggregatemean'] = 'Media notelor';
$string['aggregatemedian'] = 'Media notelor';
$string['aggregatemin'] = 'Cea mai mică notă';
$string['aggregatemode'] = 'Mod note';
$string['aggregateonlygraded'] = '';
$string['aggregateonlygraded_help'] = 'O notă liberă este o notă care nu apare în catalog. Aceasta poate fi din cauza unei teme necorectate sau a unui test care n-a fost terminat de cursant etc.

Această setare determină dacă notele libere vor fi incluse în cumulare sau vor fi luate în considerare ca note minime, de exemplu, 0 pentru o temă cu note între 0 şi 10.';
$string['aggregateoutcomes'] = 'Includeți rezultatele în agregare';
$string['aggregateoutcomes_help'] = 'Dacă opțiunea este activată, rezultatele vor fi incluse în cumulare. Această setare ar putea duce însă la un număr total pentru categorie incorect. ';
$string['aggregatesubcats_help'] = 'Această setare determină dacă notele din subcategorii vor fi incluse în cumulare.';
$string['aggregatesum'] = 'Suma notelor';
$string['aggregateweightedmean'] = 'Media ponderată a notelor';
$string['aggregateweightedmean2'] = 'Media simplă ponderată a notelor';
$string['aggregation'] = 'Agregare';
$string['aggregationcoef'] = 'Coeficient agregare';
$string['aggregationcoefextra'] = 'Credit suplimentar';
$string['aggregationcoefextra_help'] = 'În cazul în care alegeți să cumulați notele prin suma notelor sau media aritmetică și bifați și caseta credit suplimentar,nota maximă a elementului respectiv nu va fi adăugată la nota maximă a categoriei, care va duce la posibilitatea de a obţine nota maximă (sau note peste maximă dacă administratorul site-ului o permite) din categorie fără a avea nota maximă pentru elementul notat.

În cazul în care cumularea se stabilește prin Media Notelor (cu credite extra) şi creditul suplimentar este setat la o valoare mai mare decât zero, acest credit suplimentar va constitui factorul cu care se înmulţeşte nota înainte de a fi adăugată la totalul obținut din calculul mediei.';
$string['aggregationcoefextrasum'] = 'Credit suplimentar';
$string['aggregationcoefextrasum_help'] = 'În cazul în care caseta credit suplimentar este bifată, nota maximă a elementului nu se adaugă la nota maximă a categoriei, care va duce la posibilitatea de a obţine nota maximă (sau note peste maximă dacă administratorul site-ului o permite) din categorie fără a avea nota maximă pentru elementul notat.';
$string['aggregationcoefextraweight'] = 'Pondere extra credit';
$string['aggregationcoefextraweight_help'] = 'Dacă ponderea creditului suplimentar este stabilită la o valoare mai mare decât zero atunci nota va avea o însemnătate mai mare la cumulare. Numărul va constitui factorul cu care se înmulţeşte nota înainte de a fi adăugată la totalul obținut din calculul mediei.';
$string['aggregationcoefweight'] = 'Pondere element';
$string['aggregationcoefweight_help'] = 'Ponderea elementului se utilizează pentru a influenţa importanţa elementului, comparativ cu alte elemente din aceeaşi categorie atunci când se cumulează notele din categoria respectivă. ';
$string['aggregation_help'] = 'Cumularea determină cum vor fi calculate notele dintr-o categorie:

* Media aritmetică - Suma tuturor notelor împărţită la numărul total de note
* Mediană - nota din mijloc, atunci când notele sunt aranjate în ordinea mărimii
* Cea mai mică notă
* Cea mai mare notă
* Modul notelor - nota care apare de cele mai multe ori în șirul de note
* Suma notelor - suma tuturor notelor, excluzând notele scalare';
$string['aggregationposition'] = 'Poziţie agregare';
$string['aggregationposition_help'] = 'Această setare determină dacă afișarea coloanelor sumative pentru categorii și cursuri vor fi afișate la începutul sau la sfârșitul rapoartelor catalogului.';
$string['aggregationsvisible'] = 'Tipuri de agregare disponibile';
$string['aggregationsvisiblehelp'] = 'Selectaţi toate tipurile de agregare care vor fi disponibile. Pentru selecţie multiplă apăsaţi tasta CTRL şi selectaţi elementele dorite.';
$string['allgrades'] = 'Toate notele sortate după categorie';
$string['allstudents'] = 'Toți studenții';
$string['allusers'] = 'Toți utilizatorii';
$string['autosort'] = 'Sortare automată';
$string['availableidnumbers'] = 'Numere id disponibile';
$string['average'] = 'Media';
$string['averagesdecimalpoints'] = 'Zecimale in medii pe coloane';
$string['averagesdecimalpoints_help'] = 'Această opţiune determină dacă să se afișeze un număr diferit de zecimale pentru fiecare medie în defavoarea numărului pre-setat pentru categoria sau elementul de notat (transpunere). ';
$string['averagesdisplaytype'] = 'Tip de afișare a mediilor coloanelor';
$string['averagesdisplaytype_help'] = 'Această setare determină dacă media se va afișa ca notă reală, procent sau literă, sau dacă se va folosi tipul de afişare pre-setat pentru categoria sau elementul notat (transpunere)';
$string['backupwithoutgradebook'] = 'Copia de siguranţă nu include configurarea Catalogului';
$string['badgrade'] = 'Nota furnizată nu este corectă';
$string['badlyformattedscale'] = 'Completaţi o listă cu valori separate cu virgulă (cel puţin două valori)';
$string['baduser'] = 'Utilizatorul furnizat nu este corect';
$string['bonuspoints'] = 'Puncte bonus';
$string['bulkcheckboxes'] = 'Bulk checkboxes';
$string['calculatedgrade'] = 'Nota calculată';
$string['calculation'] = 'Calculare';
$string['calculationadd'] = 'Adaugă calculare';
$string['calculationedit'] = 'Editare calculare';
$string['calculation_help'] = 'Un calcul pentru note este o formulă utilizată pentru a determina notele. Formula trebuie să înceapă cu un semn egal (=) şi se pot utiliza operațiile matematice cunoscute, cum ar fi Max, Min şi Sum (la fel ca in M. Excel). Dacă se doreşte, și alte elemente ale notei pot fi incluse în calcul, prin tastarea numerelor de identificare în paranteze pătrate duble.';
$string['calculationsaved'] = 'Calculare salvată';
$string['calculationview'] = 'Afişează calculare';
$string['cannotaccessgroup'] = 'Ne pare rău dar notele grupului selectat nu pot fi accesate.';
$string['categories'] = 'Categorii';
$string['categoriesanditems'] = 'Categorii şi elemente';
$string['categoriesedit'] = 'Editare categorii şi elemente';
$string['category'] = 'Categorie';
$string['categoryedit'] = 'Modificați categoria';
$string['categoryname'] = 'Nume categorie';
$string['categorytotal'] = 'Total categorie';
$string['categorytotalfull'] = 'Total categoria {$a->category}';
$string['categorytotalname'] = 'Numele complet al categoriei';
$string['changedefaults'] = 'Schimbare setări implicite';
$string['changereportdefaults'] = 'Schimbare setări implicite de raportare';
$string['chooseaction'] = 'Selectaţi o acţiune...';
$string['choosecategory'] = 'Selectare categorie';
$string['combo'] = 'Meniu Tabs și Dropdown';
$string['compact'] = 'Compact';
$string['componentcontrolsvisibility'] = 'Deși nota este ascunsă, este controlată prin setările activității';
$string['contract'] = 'Categorie contract';
$string['controls'] = 'Controale';
$string['courseavg'] = 'Media cursului';
$string['coursegradecategory'] = 'Categoria notă la curs';
$string['coursegradedisplaytype'] = 'Tip de afișare a notei de la curs';
$string['coursegradedisplayupdated'] = 'Tipul de afișare a notei de la curs a fost actualizat';
$string['coursegradesettings'] = 'Setările notelor cursului';
$string['coursename'] = 'Nume curs';
$string['coursescales'] = 'Scalele cursului';
$string['coursesettings'] = 'Setări curs';
$string['coursesettingsexplanation'] = 'Setările curs stabilesc modul în care catalogul va fi afişat participanţilor la curs.';
$string['coursetotal'] = 'Total curs';
$string['createcategory'] = 'Creează categorie';
$string['createcategoryerror'] = 'Nu s-a putut crea o nouă categorie';
$string['creatinggradebooksettings'] = 'Se creează setările catalogului';
$string['csv'] = 'CSV';
$string['curveto'] = 'curbă la';
$string['decimalpoints'] = 'Puncte zecimale generale';
$string['decimalpoints_help'] = 'Această opţiune determină numărul de zecimale afișate pentru note. Nu are nici un efect asupra calculelor notelor, care sunt făcute cu o precizie de 5 zecimale.';
$string['default'] = 'Implicit';
$string['defaultprev'] = 'Implicit ({$a})';
$string['deletecategory'] = 'Şterge categorie';
$string['disablegradehistory'] = 'Dezactivează istoric note';
$string['disablegradehistory_help'] = 'Dezactivați înregistrarea modificărilor in tabele asociate cu note. Acest lucru poate ajuta serverul să ofere viteze mai bune şi poate duce la economisirea de spaţiu în baza de date.';
$string['displaylettergrade'] = 'Afişează note sub formă de litere';
$string['displaypercent'] = 'Afişează procentaj';
$string['displaypoints'] = 'Afişează puncte';
$string['displayweighted'] = 'Afișează notele ponderate';
$string['dropdown'] = 'Meniu vertical';
$string['droplow'] = 'Scade cea mai mică valoare';
$string['droplow_help'] = 'Această setare vă permite să specificați un număr pentru cele mai mici note care să nu fie incluse în agregare.';
$string['dropped'] = 'Scăzut';
$string['duplicatescale'] = 'Duplicare scală';
$string['edit'] = 'Editare';
$string['editcalculation'] = 'Editează calculare';
$string['editcalculationverbose'] = 'Editează calculare pentru {$a->category}$a->itemmodule {$a->itemname}';
$string['editfeedback'] = 'Editează feedback';
$string['editgrade'] = 'Editează notă';
$string['editoutcome'] = 'Editați rezultatul';
$string['editoutcomes'] = 'Editați rezultatele';
$string['editscale'] = 'Editare scală';
$string['edittree'] = 'Categorii şi elemente';
$string['editverbose'] = 'Editare {$a->category}$a->itemmodule {$a->itemname}';
$string['enableajax'] = 'Activează AJAX';
$string['enableajax_help'] = 'Adaugă funcţionalitate AJAX la raportul notelor, simplificând și accelerând calculele obișnuite.  Javascript trebuie să fie activat în browser-ul utilizatorului.';
$string['enableoutcomes'] = 'Activați rezultatele';
$string['enableoutcomes_help'] = 'Suport pentru Rezultate (alte denumiri pot fi: competenţe, obiective, standarde sau criterii), înseamnă că putem da diferite note utilizând una sau mai multe scale care sunt influențate de declaraţiile rezultatelor. Activarea rezultatelor face posibilă notarea specială pe tot site-ul.';
$string['encoding'] = 'Codare';
$string['errorcalculationbroken'] = 'Probabil referință circulară sau formulă de calcul greșită';
$string['errorcalculationnoequal'] = 'Formula trebuie să înceapă cu semnul "egal" (=1+2)';
$string['errorcalculationunknown'] = 'Formulă incorectă';
$string['errornocalculationallowed'] = 'Nu se permit calcule pentru acest element';
$string['errornocourse'] = 'Nu s-au putut obţine informaţii despre curs';
$string['errorsavegrade'] = 'Ne pare rău, nota nu a putut fi salvată.';
$string['errorsettinggrade'] = 'Eroare la salvarea "{$a->itemname}" notei pentru userid {$a-> userid}';
$string['excluded'] = 'Excluse';
$string['excluded_help'] = 'Dacă se bifează, nota nu va fi inclusă în nici o cumulare.';
$string['expand'] = 'Extinde categorie';
$string['export'] = 'Export';
$string['exportalloutcomes'] = 'Exportă toate rezultatele';
$string['exportfeedback'] = 'Include feedback în export';
$string['exportonlyactive'] = 'Exclude utilizatorii suspendați';
$string['exportonlyactive_help'] = 'Include în export doar studenții a căror înscriere este activă și nu a fost suspendată';
$string['exportplugins'] = 'Exportă plugin-uri';
$string['exportsettings'] = 'Exportă setări';
$string['exportto'] = 'Exportă în';
$string['extracreditvalue'] = 'Valoare extra credit pentru {$a}';
$string['feedback'] = 'Feedback';
$string['feedbackadd'] = 'Adaugă feedback';
$string['feedbackedit'] = 'Editează feedback';
$string['feedbackforgradeitems'] = 'Feedback pentru {$a}';
$string['feedback_help'] = 'Această casetă permite să se adauge comentarii cu privire la nota ce trebuie adăugată.';
$string['feedbacks'] = 'Feedback-uri';
$string['feedbacksaved'] = 'Feedback salvat';
$string['feedbackview'] = 'Vizualizează feedback';
$string['finalgrade'] = 'Notă finală';
$string['finalgrade_help'] = 'În cazul în care se bifează caseta de selectare suprascrisă, nota finală va putea fi adăugată sau modificată.';
$string['fixedstudents_help'] = 'Permite coloana notelor să fie explorabilă orizontal în timp ce coloana cu studenți devine statică. ';
$string['forelementtypes'] = 'pentru {$a} selectate';
$string['forstudents'] = 'Pentru studenţi';
$string['full'] = 'Complet';
$string['generalsettings'] = 'Setări generale';
$string['grade'] = 'Notă';
$string['gradeadministration'] = 'Administrare notă';
$string['gradeanalysis'] = 'Analiza notelor';
$string['gradebook'] = 'Catalog';
$string['gradebookhiddenerror'] = 'Setările catalogului nu permit afişarea niciunei informaţii către cursanţi.';
$string['gradebookhistories'] = 'Istoric note';
$string['gradeboundary_help'] = 'Această setare determină numărul minim peste care notelor li se vor atribui o literă (ex. A,B,C - sistem de notare American).';
$string['gradecategories'] = 'Categorii note';
$string['gradecategory'] = 'Categorie notă';
$string['gradecategoryonmodform'] = 'Categorie notă';
$string['gradecategoryonmodform_help'] = 'Această setare controlează categoria în care notele de la această  activitate clasele sunt trecute în catalog.';
$string['gradecategorysettings'] = 'Setări categorie notă';
$string['gradedisplay'] = 'Afişare notă';
$string['gradedisplaytype'] = 'Tip afişare notă';
$string['gradedisplaytype_help'] = 'Această setare determină modul în care vor fi afişate notele în rapoartele profesorilor și a utilizatorilor.

*  Real - Notele propriu-zise
*  Procentaj
*  Litere - Sunt folosite litere (A,B,C) sau cuvinte (Admis, Respins) pentru a reprezenta o serie de note.';
$string['gradedon'] = 'Notat: {$a}';
$string['gradeexport'] = 'Export notă';
$string['gradeexportdecimalpoints_desc'] = 'Numărul de zecimale afișate pentru export. Poate fi suprascris în timpul exportului.';
$string['gradeexportdisplaytype'] = 'Tip de afișare a notelor din export';
$string['gradeexportuserprofilefields_desc'] = 'Includeți aceste câmpuri de profil de utilizator în exportul notelor, separate prin virgulă.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}$a->feedback';
$string['gradehelp'] = 'Ajutor la notare';
$string['gradehistorylifetime_help'] = 'Aici se precizează durata de timp în care doriţi să păstraţi istoricul cu modificări din tabelele cu note. Este recomandat să-l păstraţi cât mai mult timp. Dacă vă confruntaţi cu probleme de performanţă sau nu aveți destul spațiu pentru baza de date, încercaţi să setaţi o valoare mai mică.';
$string['gradeimport'] = 'Import notă';
$string['gradeitem'] = 'Element notă';
$string['gradeitemaddusers'] = 'Exclude din notare';
$string['gradeitemadvanced_help'] = 'Selectaţi toate elementele care ar trebui să fie afişate ca fiind avansate atunci când editați elemente de notat. ';
$string['gradeitemislocked'] = 'Această activitate este blocată în catalog. Modificările care sunt aduse notelor în această activitate nu vor fi copiate în catalog până când acesta este deblocat.';
$string['gradeitemlocked'] = 'Notare blocată';
$string['gradeitemmembersselected'] = 'Exclus din notare';
$string['gradeitemnonmembers'] = 'Inclus în notare';
$string['gradeitemremovemembers'] = 'Include în notare';
$string['gradeitems'] = 'Elemente notare';
$string['gradeitemsettings'] = 'Setări elemente notare';
$string['gradeitemsinc'] = 'Elemente notare care să fie incluse';
$string['gradeletter_help'] = 'Notele pot fi de asemenea litere: A, B, C, ..., sau cuvinte, de exemplu: Admis, Respins .... Acestea pot fi utilizate pentru a reprezenta o serie de note.';
$string['gradelocked'] = 'Nota este blocată';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Notă maximă';
$string['grademax_help'] = 'Această setare determină nota maximă atunci când se utilizează sistemul de notare valoric (un număr cu o valoare maximă și una minimă). Nota maximă pentru o activitate este determinată pe pagina Setări Activitate.';
$string['grademin'] = 'Notă minimă';
$string['grademin_help'] = 'Această setare determină nota minimă atunci când se utilizează sistemul de notare valoric.';
$string['gradeoutcomes'] = 'Rezultate';
$string['gradeoutcomescourses'] = 'Rezultate curs';
$string['gradepass'] = 'Notă de trecere';
$string['gradepass_help'] = 'Această setare determină nota minimă obligatorie pentru trecere. Nota va determina completarea activității și a finalizării cursului, şi va apărea de asemenea în catalog unde notele de trecere sunt evidențiate cu verde, iar cele de respingere sunt evidențiate de culoarea roșie.';
$string['gradepreferences'] = 'Preferinţe note';
$string['gradepublishing'] = 'Activează afișarea';
$string['gradepublishing_help'] = 'Activarea publicării în export-uri şi import-uri. Notele exportate pot fi accesate prin accesarea unui URL, fără nevoia de autentificare pe un site Moodle. Notele pot fi importate prin accesarea unui astfel de URL (ceea ce înseamnă că un site Moodle poate importa la rândul său note publicate de către un alt site). În mod implicit, numai administratorii pot utiliza această funcționalitate. Vă rugăm să informați utilizatorii înainte de a oferi aceste capacităţi și altor clase de utilizatori (pericole: transmitere semne de carte - bookmarks, acceleratoare de download, restricții IP, etc.)';
$string['grades'] = 'Note';
$string['gradesforuser'] = 'Notele pentru {$a->user}';
$string['gradesonly'] = 'Doar note';
$string['gradessettings'] = 'Setări note';
$string['gradetype'] = 'Tip note';
$string['gradetype_help'] = 'Există 4 tipuri de note:
* Nici unul - Nici o valoare de notare disponibilă
* Valoric - O valoare numerică cu un maxim şi un minim
* Scalar - O valoare dintr-o listă (Bine, Foarte Bine etc)
* Text - numai Feedback scris;

Numai tipurile de note valorice și scalare pot fi cumulate. Tipul notelor pentru o activitate poate fi setat pe pagina setări activitate.';
$string['gradeview'] = 'Vezi nota';
$string['groupavg'] = 'Medie grup';
$string['hidden'] = 'Ascuns';
$string['hiddenasdate'] = 'Afişează data la care au fost asignate notele ascunse';
$string['hiddenasdate_help'] = 'În cazul în care utilizatorul nu poate vedea notele ascunse, se arată data predării în loc de "-".';
$string['hidden_help'] = 'Dacă se bifează, notele nu vor fi afișate cursanților. Notele pot fi ascunse până la o dată anume dacă se doreşte, pentru a afișa notele doar după ce se termină corectarea.';
$string['hiddenuntil'] = 'Ascuns până la';
$string['hiddenuntildate'] = 'Ascuns până la: {$a}';
$string['hideadvanced'] = 'Ascunde funcţionalităţi complexe';
$string['hideaverages'] = 'Ascunde mediile';
$string['hidecalculations'] = 'Ascunde calcule';
$string['hidecategory'] = 'Ascuns';
$string['hidefeedback'] = 'Ascunde feedback';
$string['hideforcedsettings_help'] = 'Nu afișați setările impuse în interfața de corectat. ';
$string['hidegroups'] = 'Ascunde grupuri';
$string['hidenooutcomes'] = 'Afișează rezultatele';
$string['hidequickfeedback'] = 'Ascunde Quick Feedback';
$string['hideranges'] = 'Ascundeți intervalele';
$string['hidetotalifhiddenitems'] = 'Nu mai afișa totalurile dacă acestea conțin elemente ascunse';
$string['hidetotalifhiddenitems_help'] = 'Această setare specifică dacă totalurile care conţin elemente ascunse de notare sunt afișate cursanților sau înlocuite cu o cratimă (-). În cazul în care sunt afișate, totalul poate fi calculat fie prin excluderea, fie prin includerea elementelor ascunse.

În cazul în care elementele ascunse sunt excluse, totalul va fi diferit de cel văzut de către profesor în raportul notelor, deoarece profesorul vede întotdeauna totalurile calculate din toate elementele indiferent dacă acestea sunt ascunse sau vizibile pentru cursanți. În cazul în care elementele ascunse sunt incluse, studenţii ar putea fi în măsură să calculeze elementele ascunse.';
$string['hidetotalshowexhiddenitems'] = 'Afișați totalurile excluzând elementele ascunse';
$string['hidetotalshowinchiddenitems'] = 'Afișați totalurile, inclusiv elementele ascunse';
$string['hideverbose'] = 'Ascunde {$a->category}$a->itemmodule {$a->itemname}';
$string['highgradeascending'] = 'Sortează după note în ordine crescătoare';
$string['highgradedescending'] = 'Sortează după note în ordine descrescătoare';
$string['highgradeletter'] = 'Ridicat';
$string['identifier'] = 'Identifică utilizator după';
$string['idnumbers'] = 'Numere ID';
$string['ignore'] = 'Ignoră';
$string['import'] = 'Import';
$string['importcsv'] = 'Import CSV';
$string['importcustom'] = 'Import sub formă de rezultate personalizate (numai acest curs)';
$string['importerror'] = 'A apărut o eroare, acest script nu are parametrii corecți.';
$string['importfailed'] = 'Operaţiunea de import a eşuat';
$string['importfeedback'] = 'Importă feedback';
$string['importfile'] = 'Importă fişier';
$string['importfilemissing'] = 'Niciun fișier nu a fost primit,mergeți înapoi la formular și asigurați-vă că încărcați un fișier valid.';
$string['importfrom'] = 'Importă din';
$string['importoutcomenofile'] = 'Fișierul încărcat este gol sau deteriorat. Vă rugăm să verificați dacă este un fișier valid. Problema a fost detectată la linia {$a}; acest lucru este declanșat de liniile de date care nu au la fel de multe coloane ca prima linie (linia de antet) sau în cazul în care fișierul importat nu are antetele prevăzute. Verificați fișierul exportat pentru un exemplu de fișier cu antet valid.';
$string['importoutcomes'] = 'Importă rezultatele';
$string['importoutcomes_help'] = 'Rezultatele pot fi importate și exportate prin intermediul fișierelor format csv (en. Comma Separated Values - Valori Separate prin Virgulă)';
$string['importoutcomesuccess'] = 'Rezultat importat "{$a->name}" cu ID #{$a->id}';
$string['importplugins'] = 'Importă plugin-uri';
$string['importpreview'] = 'Previzualizare import';
$string['importsettings'] = 'Setări import';
$string['importskippednomanagescale'] = 'Nu aveți permisiunea de a adăuga o nouă scală, astfel încât rezultatul "{$a}" a fost omis deoarece necesită crearea unei noi scale';
$string['importstandard'] = 'Importă ca rezultate standard';
$string['importsuccess'] = 'Importul notelor a reușit';
$string['importxml'] = 'Import XML';
$string['includescalesinaggregation'] = 'Include scalele în agregare';
$string['includescalesinaggregation_help'] = 'Puteţi alege dacă notele scalare să fie sau nu incluse ca numere în cumularea notelor pentru toate cataloagele de note din toate cursurile. ATENŢIE: Modificarea acestei setări va forța recalcularea tuturor cumulărilor de note.';
$string['incorrectcourseid'] = 'ID-ul cursului nu a fost corect';
$string['incorrectcustomscale'] = '(Scală particularizată incorectă, vă rugăm să modificați)';
$string['incorrectminmax'] = 'Valoarea minimă trebuie să fie mai mică decât valoarea maximă';
$string['inherit'] = 'Moștenit';
$string['intersectioninfo'] = 'Informații student/notă';
$string['item'] = 'Element';
$string['iteminfo'] = 'Info element';
$string['iteminfo_help'] = 'Această setare oferă spaţiu pentru a introduce informaţii despre element. Informaţia nu este afişată în altă parte.';
$string['itemname'] = 'Nume element';
$string['items'] = 'Elemente';
$string['itemsedit'] = 'Editare element notă';
$string['keephigh'] = 'Păstrează pe cele mai mari';
$string['keephigh_help'] = 'Dacă se selectează, această opţiune va păstra X cele mai mari note, X fiind valoarea selectată pentru această opţiune.';
$string['lessthanmin'] = 'Nota inserată pentru {$a->itemname} pentru {$a->username} este mai mică decât minimul permis';
$string['letter'] = 'Literă';
$string['letters'] = 'Litere';
$string['linkedactivity'] = 'Activitate corelată';
$string['linkedactivity_help'] = 'Această setare specifică o  activitate de care este legată (linked) acest element-rezultat. Puteți utiliza această funcționalitate pentru măsurarea performanţelor cursanților pe criterii ce nu au fost evaluate pentru nota acordată pe activitate.';
$string['linktoactivity'] = 'Link la activitatea {$a->name}';
$string['lock'] = 'Blocare';
$string['locked'] = 'Blocat';
$string['locked_help'] = 'Dacă se bifează, notele nu mai pot fi actualizate automat de activitățile asociate.';
$string['locktime'] = 'Blocare după';
$string['locktimedate'] = 'Blocat după: {$a}';
$string['lockverbose'] = 'Blochează: {$a->category}$a->itemmodule {$a->itemname}';
$string['lowest'] = 'Cel mai mic';
$string['lowgradeletter'] = 'Mic';
$string['manualitem'] = 'Element manual';
$string['mapfrom'] = 'Mapează din';
$string['mapto'] = 'Mapează la';
$string['max'] = 'Cel mai mare';
$string['maxgrade'] = 'Notă maximă';
$string['meanall'] = 'Toate notele';
$string['meanselection_help'] = 'Această setare determină dacă celulele fără note se vor include în calculul mediei pentru fiecare categorie sau element de notă.';
$string['median'] = 'Median';
$string['min'] = 'Cel mai mic';
$string['missingscale'] = 'Trebuie să selectaţi o scală';
$string['mode'] = 'Mod';
$string['morethanmax'] = 'Nota pe care aţi completat-o pentru {$a->itemname} pentru {$a->username} este mai mare decât nota maximă admisă.';
$string['moveselectedto'] = 'Transferă elemente selectate la';
$string['movingelement'] = 'Se transferă {$a}';
$string['multfactor'] = 'Multiplicator';
$string['multfactor_help'] = 'Multiplicatorul este factorul la care vor fi înmulțite toate notele pentru acest element de notat, rezultând o valoare maximă echivalentă cu nota maximă disponibilă. De exemplu, dacă multiplicatorul este 2, iar nota maximă este 10,  toate notele mai mici de 5 vor fi înmulţite cu 2, şi toate notele mai mari de 5 sunt modificate la 10.';
$string['mypreferences'] = 'Preferinţele mele';
$string['myreportpreferences'] = 'Preferinţele mele pentru rapoarte';
$string['navmethod'] = 'Metodă navigare';
$string['neverdeletehistory'] = 'Istoricul nu se şterge niciodată';
$string['newcategory'] = 'Categorie nouă';
$string['newitem'] = 'Element notă nou';
$string['no'] = 'Nu';
$string['nocategoryname'] = 'Nu a fost atribuit niciun nume de categorie.';
$string['nocategoryview'] = 'Nicio categorie pentru a vizualizată prin';
$string['nocourses'] = 'Nu există cursuri';
$string['noforce'] = 'Nu obligați';
$string['nogradeletters'] = 'Nu au fost stabilite literele pentru notare';
$string['nogradesreturned'] = 'Nu au fost returnate note';
$string['noidnumber'] = 'Nu există nr. id';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Valoare non-numerică returnată pentru';
$string['nonunlockableverbose'] = 'Această notă nu poate fi deblocată până când {$a->itemname} nu este deblocat.';
$string['nonweightedpct'] = 'neponderat %';
$string['nooutcome'] = 'fără rezultat';
$string['nopublish'] = 'Nu publica';
$string['noselectedcategories'] = 'nu a fost selectată nicio categorie';
$string['noselecteditems'] = 'nu a fost selectat niciun element';
$string['notteachererror'] = 'Pentru a putea utiliza această funcţionalitate trebuie să fiţi profesor';
$string['nousersloaded'] = 'Nu sunt utilizatori';
$string['numberofgrades'] = 'Număr de note';
$string['onascaleof'] = 'pe o scară de la {$a->grademin} la {$a->grademax}';
$string['operations'] = 'Operaţiuni';
$string['options'] = 'Opţiuni';
$string['others'] = 'Alții';
$string['outcome'] = 'Rezultat';
$string['outcomecategory'] = 'Creează rezultate în categorie';
$string['outcomecategorynew'] = 'Categorie nouă';
$string['outcomeconfirmdelete'] = 'Sunteți sigur(ă) că doriți să ștergeți acest rezultat "{$a}"?';
$string['outcomecreate'] = 'Adaugă un nou rezultat';
$string['outcomedelete'] = 'Șterge rezultat';
$string['outcomefullname'] = 'Nume complet';
$string['outcome_help'] = 'Această setare determină rezultatul pe care îl va reprezenta acest element, în catalog.';
$string['outcomereport'] = 'Raport rezultate';
$string['outcomes'] = 'Rezultat';
$string['outcomescourse'] = 'Rezultate folosite în curs';
$string['outcomescustom'] = 'Rezultate particularizate';
$string['outcomeshortname'] = 'Nume prescurtat';
$string['outcomesstandard'] = 'Rezultate standard';
$string['outcomesstandardavailable'] = 'Rezultate standard disponibile';
$string['outcomestandard'] = 'Rezultate standard';
$string['outcomestandard_help'] = 'Se alege rezultatul tip standard care este disponibil pe tot site-ul, pentru toate cursurile.';
$string['overallaverage'] = 'Medie generală';
$string['overridden'] = 'Suprascris';
$string['overridden_help'] = 'Dacă se bifează, nota nu mai poate fi schimbată din cadrul activităților asociate.

Când o notă este editată în raportul notelor, căsuța suprascrisă se bifează automat. Cu toate acestea, poate fi de-bifată pentru a permite modificarea notei prin intermediul activităților asociate.';
$string['overriddennotice'] = 'Nota finală obţinută de dumneavoastră pentru această activitate a fost ajustată manual.';
$string['overridesitedefaultgradedisplaytype_help'] = 'Dacă se bifează, pot fi stabilite calificative și valori noi pentru notele din curs, dacă nu se dorește folosirea valorilor standard.';
$string['parentcategory'] = 'Categorie părinte';
$string['pctoftotalgrade'] = '% din nota totală';
$string['percent'] = 'Procent';
$string['percentage'] = 'Procentaj';
$string['percentageletter'] = 'Procentaj (literă)';
$string['percentagereal'] = 'Procentaj (real)';
$string['percentascending'] = 'Sortează procentaje crescător';
$string['percentdescending'] = 'Sortează procentaje descrescător';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Offset';
$string['plusfactor_help'] = 'Pragul este un număr care se adaugă la fiecare notă pentru acest element, după ce este aplicat multiplicatorul.';
$string['plusfactorvalue'] = 'Valoare offset a {$a}';
$string['points'] = 'puncte';
$string['pointsascending'] = 'Sortează după puncte crescător';
$string['pointsdescending'] = 'Sortează după puncte descrescător';
$string['positionfirst'] = 'Primul';
$string['positionlast'] = 'Ultimul';
$string['preferences'] = 'Preferinţe';
$string['prefgeneral'] = 'General';
$string['prefrows'] = 'Rânduri speciale';
$string['previewrows'] = 'Previzualizează rânduri';
$string['profilereport'] = 'Raport profil utilizator';
$string['profilereport_help'] = 'Raportul notelor folosit pe pagina de profil a utilizatorului.';
$string['publishing'] = 'Publicare';
$string['quickfeedback'] = 'Feedback rapid';
$string['quickgrading'] = 'Notare rapidă';
$string['quickgrading_help'] = 'Dacă se activează opțiunea, atunci când este activat modul de editare, o casetă de introducere a textului apare pentru fiecare notă, astfel mai multe note vor putea fi editate în acelaşi timp. Modificările vor fi salvate şi evidențiate cu o culoare diferită atunci când se face click pe butonul de actualizare.

Reţineţi că atunci când o notă este editată în raportul notelor, în dreptul ei va apărea un steguleț suprascris, semnalizând că nota nu mai poate fi schimbată din cadrul activității asociate.';
$string['range'] = 'Interval';
$string['rangedecimals_help'] = 'Numărul de zecimale de afișat pentru interval.';
$string['rangesdecimalpoints'] = 'Zecimale afișate în intervale';
$string['rangesdecimalpoints_help'] = 'Această opţiune determină numărul de zecimale afișate pentru fiecare interval de note sau dacă se va folosi numărul de zecimale pre-setat pentru categoria sau elementul de notat (transpunere). 

';
$string['rangesdisplaytype'] = 'Mod afişare interval';
$string['rangesdisplaytype_help'] = 'Această setare determină dacă intervalul este afişat ca note reale, procente sau litere, sau dacă se va folosi tipul de afişare pre-setat pentru categoria sau elementul notat (transpunere)';
$string['rank'] = 'Rang';
$string['real'] = 'Real';
$string['realletter'] = 'Real (literă)';
$string['realpercentage'] = 'Real (procentaj)';
$string['regradeanyway'] = 'Renotează oricum';
$string['removeallcoursegrades'] = 'Şterge toate notele';
$string['removeallcourseitems'] = 'Şterge toate elementele şi categoriile';
$string['report'] = 'Rapoarte';
$string['reportdefault'] = 'Raport implicit ({$a})';
$string['reportplugins'] = 'Plugin-uri rapoarte';
$string['reportsettings'] = 'Setări rapoarte';
$string['reprintheaders'] = 'Imprimă din nou headerele';
$string['respectingcurrentdata'] = 'configuraţia curentă rămâne neschimbată';
$string['rowpreviewnum'] = 'Previzualizare rânduri';
$string['savechanges'] = 'Salvează modificări';
$string['savepreferences'] = 'Salvează preferinţe';
$string['scaleconfirmdelete'] = 'Sunteți sigur(ă) că doriți să ștergeți scala "{$a}"?';
$string['scaledpct'] = 'Scalat %';
$string['seeallcoursegrades'] = 'Afişează toate notele la curs';
$string['select'] = 'Selectează {$a}';
$string['selectalloroneuser'] = 'Selectare toţi sau un singur utilizator';
$string['selectauser'] = 'Selectaţi un utilizator';
$string['selectdestination'] = 'Selectaţi destinaţia pentru {$a}';
$string['separator'] = 'Separator';
$string['sepcolon'] = 'Două puncte';
$string['sepcomma'] = 'Virgulă';
$string['sepsemicolon'] = 'Punct și virgulă';
$string['septab'] = 'Paragraf nou';
$string['setcategories'] = 'Stabilire categorii';
$string['setcategorieserror'] = 'Înainte de a putea stabili ponderi pentru fiecare categorie din cadrul cursului va trebui mai întâi să le definiţi.';
$string['setgradeletters'] = 'Stabilire litere notare';
$string['setpreferences'] = 'Stabilire preferinţe';
$string['setting'] = 'Setare';
$string['settings'] = 'Setări';
$string['setweights'] = 'Stabilire ponderi';
$string['showactivityicons'] = 'Afişare icon-uri activitate';
$string['showactivityicons_help'] = 'Afişează imagine activitate alături de numele activității';
$string['showallhidden'] = 'Ascunde toate';
$string['showallstudents'] = 'Afişează toţi cursanţii';
$string['showaverage'] = 'Afișează media';
$string['showaverages'] = 'Afișează mediile coloanei';
$string['showaverages_help'] = 'Dacă se activează, raportul notelor va conţine un rând suplimentar ce afişează media aritmetică pentru fiecare categorie şi element.';
$string['showcalculations'] = 'Afişează calcule';
$string['showcalculations_help'] = 'Dacă se activează opțiunea, atunci când este activat modul de editare, o pictogramă care afișează un calculator va apărea în dreptul fiecărui element şi categorie, cu sfaturi în dreptul elementului calculat şi un indicator vizual care denotă o coloană calculată.';
$string['showeyecons_help'] = 'Dacă se activează opțiunea, atunci când este activat modul de editare, o pictogramă arată/ascunde este afișată în dreptul fiecărei note. Astfel puteți controla vizibilitatea notei pentru cursant. ';
$string['showfeedback'] = 'Afişează feedback';
$string['showfeedback_help'] = 'Afișează coloana cu feedback?';
$string['showgrade'] = 'Afișează note';
$string['showgrade_help'] = 'Afișați coloana cu note?';
$string['showgroups'] = 'Afişează grupuri';
$string['showhiddenitems'] = 'Afişează elemente ascunse';
$string['showhiddenitems_help'] = 'Această setare determină dacă numele elementelor ascunse sunt vizibile de către cursanți.

* Arată ascunse - Numele elementelor ascunse sunt prezentate însă notele rămân ascunse
* Ascunde până la un moment dat - Elementele care au o dată specificată în setarea "ascunde până la" sunt ascunse complet până la data stabilită, după care se va afișa întreg elementul
* Nu afişaţi - elementelor ascunse rămân  ascunse';
$string['showhiddenuntilonly'] = 'Ascuns doar până la';
$string['showlocks_help'] = 'Dacă se activează opțiunea, atunci când este activat modul de editare, o pictogramă blocare/deblocare va fi afișată pentru fiecare notă. Astfel se poate controla dacă nota se poate actualiza automat de către activitatea respectivă.  ';
$string['shownohidden'] = 'Nu afișa';
$string['shownooutcomes'] = 'Ascunde rezultate';
$string['shownumberofgrades'] = 'Afișează numărul de clase în medii';
$string['shownumberofgrades_help'] = 'Dacă se activează opțiunea, numărul de note folosite la calcularea mediei aritmetice va fi afişat în paranteze după fiecare medie.';
$string['showonlyactiveenrol'] = 'Afișează doar înrolările active';
$string['showonlyactiveenrol_help'] = 'Această setare determină dacă doar utilizatorii activi inscriși vor fi vizibili în raportul din catalog. Dacă este dezactivată, utilizatorii suspendați nu vor fi afișați în catalog.';
$string['showpercentage'] = 'Afişează procentaj';
$string['showpercentage_help'] = 'Această setare determină dacă să se afișeze valoarea procentuală a fiecărui element al notei.';
$string['showquickfeedback'] = 'Afişează Feedback Rapid';
$string['showquickfeedback_help'] = 'Dacă se activează opțiunea, atunci când este activat modul de editare, va apărea o casetă de introducere a textului feedback cu o margine punctată în dreptul fiecărei note. Astfel este permisă adăugarea de comentarii pentru multiple note în același timp. Modificările vor fi salvate şi evidențiate atunci când se face click pe butonul de actualizare.

Reţineţi că atunci când feedback-ul este editat în raportul notelor, un steguleț de suprascriere este afișat, semnalizând faptul că feedback-ul nu mai poate fi schimbat din cadrul activității asociate.';
$string['showrange'] = 'Afișează intervalele';
$string['showranges'] = 'Afişează intervale';
$string['showranges_help'] = 'Dacă se activează opțiunea, raportul notelor va conţine un rând suplimentar care va afișa gama de note pentru fiecare categorie şi element al notei.';
$string['showrank'] = 'Afișează rang';
$string['showrank_help'] = 'Această setare determină dacă poziţia cursantului în raport cu restul clasei este afișată pentru fiecare element-notă în parte.';
$string['showuserimage'] = 'Afişează imagini profil utilizatori';
$string['showuserimage_help'] = 'Afișează sau nu imaginea profilului utilizatorului lângă nume, în raportul notelor.';
$string['showverbose'] = 'Afişează {$a->category}$a->itemmodule {$a->itemname}';
$string['showweight'] = 'Afișează ponderările';
$string['simpleview'] = 'Afişare simplificată';
$string['sitewide'] = 'În tot situl';
$string['sort'] = 'sortare';
$string['sortasc'] = 'Sortare în ordine crescătoare';
$string['sortbyfirstname'] = 'Sortare după prenume';
$string['sortbylastname'] = 'Sortare după nume';
$string['sortdesc'] = 'Sortare în ordine descrescătoare';
$string['standarddeviation'] = 'Deviaţie standard';
$string['stats'] = 'Statistici';
$string['statslink'] = 'Stats';
$string['student'] = 'Cursant';
$string['studentsperpage'] = 'Cursanţi pe pagină';
$string['studentsperpage_help'] = 'Această opţiune determină numărul de studenţi afişat pe pagină, în raportul notelor.';
$string['subcategory'] = 'Categorie normală';
$string['submissions'] = 'Propuneri';
$string['submittedon'] = 'Trimis: {$a}';
$string['switchtofullview'] = 'Treci la afişare completă';
$string['switchtosimpleview'] = 'Treci la afişare simplificată';
$string['tabs'] = 'Taburi';
$string['topcategory'] = 'Super categorie';
$string['total'] = 'Total';
$string['totalweight100'] = 'Ponderea totală este egală cu';
$string['totalweightnot100'] = 'Ponderea totală nu este egală cu';
$string['turnfeedbackoff'] = 'Dezactivează feedback';
$string['turnfeedbackon'] = 'Activează feedback';
$string['typenone'] = 'Nici unul';
$string['typescale'] = 'Scară';
$string['typescale_help'] = 'Această setare determină scara utilizată atunci când se utilizează sistemul de notare scalar. Scara pentru notele activităților se stabilește pe pagina Setări Activitate.';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Valoare';
$string['uncategorised'] = 'Fără categorie';
$string['unchangedgrade'] = 'Notă neschimbată';
$string['unenrolledusersinimport'] = 'Această operaţiune de import include următoarele note pentru utilizatori care nu s-au înscris la acest curs: {$a}';
$string['unlimitedgrades'] = 'Note nelimitate';
$string['unlimitedgrades_help'] = 'Prin setare implicită, notele sunt limitate de valorile minime şi maxime ale elementului notei. Activarea acestei setări elimină această limită, şi permite notelor de peste 100% să fie introduse direct în catalog. Se recomandă ca această setare să se activeze într-un moment în afara orelor de vârf, pentru că toate notele vor fi recalculate, ceea ce poate duce la o sarcină mare pentru server.';
$string['unlock'] = 'Deblochează';
$string['unlockverbose'] = 'Deblochează {$a->category}$a->itemmodule {$a->itemname}';
$string['unused'] = 'Neutilizat';
$string['updatedgradesonly'] = 'Exportă doar note noi sau actualizate';
$string['uploadgrades'] = 'Încarcă note';
$string['useadvanced'] = 'Foloseşte funcţionalităţi avansate';
$string['usedcourses'] = 'Cursuri utilizate';
$string['usedgradeitem'] = 'Element notare utilizat';
$string['usenoscale'] = 'Nu folosi scală';
$string['usepercent'] = 'Foloseşte procentaj';
$string['user'] = 'Utilizator';
$string['userenrolmentsuspended'] = 'Înscrierea utilizatorilor este suspendată';
$string['usergrade'] = 'Utilizator {$a->fullname} ({$a->useridnumber}) pe elementul {$a->gradeidnumber}';
$string['userid'] = 'ID utilizator';
$string['usermappingerrorcurrentgroup'] = 'Utilizatorul nu este membru al grupului actual';
$string['usermappingerrorusernotfound'] = 'Eroare la mapare. Nu s-a găsit utilizatorul.';
$string['userpreferences'] = 'Preferinţe utilizator';
$string['viewbygroup'] = 'Grup';
$string['viewgrades'] = 'Afişează note';
$string['weight'] = 'pondere';
$string['weightcourse'] = 'Foloseşte note ponderate în cadrul cursului';
$string['weightedascending'] = 'Sortare în ordine crescătoare în funcţie de procentajul ponderat';
$string['weighteddescending'] = 'Sortare în ordine descrescătoare în funcţie de procentajul ponderat';
$string['weightedpct'] = 'ponderat %';
$string['weightedpctcontribution'] = '% ponderat contribuţie';
$string['weightorextracredit'] = 'Pondere sau extra credit';
$string['weights'] = 'Ponderi';
$string['weightsedit'] = 'Editare ponderi și extra credite';
$string['weightuc'] = 'Pondere';
$string['writinggradebookinfo'] = 'Setări catalog';
$string['xml'] = 'XML';
$string['yes'] = 'Da';
$string['yourgrade'] = 'Nota dumneavoastră';
