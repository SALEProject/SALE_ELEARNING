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
 * Strings for component 'forum', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Adaugă o nouă intervenţie';
$string['addanewquestion'] = 'Adaugă o întrebare';
$string['addanewtopic'] = 'Adaugă temă';
$string['advancedsearch'] = 'Căutare complexă';
$string['allforums'] = 'Toate forumurile';
$string['allowdiscussions'] = 'Poate un {$a} să publice la acest subiect';
$string['allowsallsubscribe'] = 'Acest forum permite tuturor să decidă dacă se înscriu sau nu';
$string['allowsdiscussions'] = 'Acest forum permite fiecărui student să publice un singur subiect de discuţie.';
$string['allsubscribe'] = 'Înscriere la toate forumurile';
$string['allunsubscribe'] = 'Anulare subscriere la toate forumurile';
$string['anyfile'] = 'Orice fişier';
$string['areaattachment'] = 'Atașamente';
$string['areapost'] = 'Mesaje';
$string['attachment'] = 'Fişier ataşat';
$string['attachment_help'] = 'Aveţi posibilitatea să ataşaţi opţional, unul sau mai multe fişiere la post pe forum. Dacă ataşaţi o imagine, aceasta va fi afişată după mesaj.';
$string['attachments'] = 'Atașamente';
$string['blockafter'] = 'Stabiliţi limită pentru blocare';
$string['blockafter_help'] = 'Această setare specifică numărul maxim de postări pe care le poate face un student în perioada de timp dată. Utilizatorii cu permisiunea mod/forum:postwithoutthrottling sunt scutiți de aceste limitări.';
$string['blockperiod'] = 'Interval de timp pentru blocare';
$string['blockperioddisabled'] = 'Nu bloca';
$string['blockperiod_help'] = 'Cursanții pot fi blocați de la postare, pentru a nu întrece un număr de postări limită, într-o perioadă de timp anume. Utilizatorii cu permisiunea mod/forum:postwithoutthrottling sunt scutiți de aceste limitări.';
$string['bynameondate'] = 'de către {$a->name}- {$a->date}';
$string['cannotadd'] = 'Nu se poate adăuga discuția în acest forum';
$string['cannotadddiscussion'] = 'Pentru a putea discuta pe acest forum trebuie să fiţi membru al unui grup.';
$string['cannotadddiscussionall'] = 'Nu aveţi permisiunea de a adăuga o temă de discuţii pentru toţi participanţii.';
$string['cannotcreatediscussion'] = 'Nu se poate crea discuție nouă';
$string['cannotmovenotvisible'] = 'Forumul nu este vizibil';
$string['cannotreply'] = 'Nu puteți să răspundeți la această postare';
$string['cannotviewpostyet'] = 'Nu puteţi să vizualizaţi încă întrebările puse de alţi cursanţi în cadrul acestei discuţii pentru că nu aţi participat cu nici intervenţie la această discuţie.';
$string['completionpostsgroup'] = 'Trebuie să existe postări';
$string['completionrepliesgroup'] = 'Trebuie să existe răspunsuri';
$string['configcleanreadtime'] = 'Ora la care se şterg intervenţiile vechi aflate în tabela "citite"';
$string['configdigestmailtime'] = 'Utilizatorii care doresc să primească email-uri în formă prescurtată vor primi aceste mesaje zilnic. Acest parametru stabileşte la ce oră din zi se trimit aceste mesaje (mesajele vor fi trimise de primul script cron care porneşte după ora setată de dumneavoastră).';
$string['configdisplaymode'] = 'Modul implicit de afişare al discuţiilor dacă nu se selectează explicit un mod de afişare';
$string['configenablerssfeeds'] = 'Acest parametru permite activarea posibilităţii ca fluxul RSS să fie afişat în cadrul tuturor forumurilor. Însă pentru ca fluxul RSS să fie afişat în cadrul fluxurilor va trebui să activaţi manual această opţiune pentru fiecare forum.';
$string['configenabletimedposts'] = 'Selectaţi "Da" în cazul în care doriţi să permiteţi setarea perioadelor de afişare la crearea unei noi discuţii pe forum (experimental, încă nu a fost testat în totalitate)';
$string['configlongpost'] = 'Orice intervenţie cu dimensiuni superioare valorii introduse aici (în caractere, exclusiv HTML) este considerată "de mari dimensiuni". Intervenţiile afişate pe prima pagină a sitului, pe paginile cursurilor cu format social sau în pagina profil utilizator vor fi fragmentate la o lungime cu o valoare cuprinsă între forum_shortpost şi forum_longpost.';
$string['configmanydiscussions'] = 'Numărul maxim de intervenţii afişate pe o pagină a forumului';
$string['configmaxattachments'] = 'Numărul maxim de atașamente permise per postare.';
$string['configmaxbytes'] = 'Dimensiunea maximă implicită pentru ataşamentele încărcate pe forumurile din cadrul acestui sit. (poate să difere în funcţie de limitele impuse în cadrul fiecărui curs şi alte setări locale)';
$string['configoldpostdays'] = 'Numărul de zile după care o postare este automat considerată ca fiind citită.';
$string['configreplytouser'] = 'Atunci când o postare pe forum este trimisă participanţilor la forum, se include şi adresa de email a autorului postării (pentru a putea primi răspuns individual de la fiecare participant)? Chiar dacă selectaţi "Da" utilizatorii pot alege din cadrul propriului profil să-şi păstreze secretă adresa de email.';
$string['configshortpost'] = 'Orice postare cu dimensiuni mai mici (care conţine mai puţine caractere, exclusiv HTML) ca valoarea completată aici este considerată "postare de dimensiuni reduse" (vezi mai jos)';
$string['configtrackreadposts'] = 'Selectaţi "Da" pentru acest parametru dacă doriţi să urmăriţi status-ul citit/necitit pentru fiecare utilizator.';
$string['configusermarksread'] = 'Dacă selectaţi "Da" utilizatorul va trebui să marcheze ca "citită" fiecare postare. Dacă alegeţi "Nu", postarea va fi automat marcată ca "citită" la vizualizare.';
$string['confirmsubscribe'] = 'Sunteți sigur(ă) că doriți să vă abonați la forumul \'{$a}\'?';
$string['confirmunsubscribe'] = 'Sunteți sigur(ă) că doriți să vă dez-abonați la forumul \'{$a}\'?';
$string['couldnotadd'] = 'Intervenţia ta nu a fost publicată datorită unei erori necunoscute';
$string['couldnotdeletereplies'] = 'Îmi pare rău, ştergerea nu este posibilă deoarece la această intervenţie s-au publicat răspunsuri';
$string['couldnotupdate'] = 'Intervenţia ta nu a putut fi actualizată datorită unei erori necunoscute';
$string['delete'] = 'Şterge';
$string['deleteddiscussion'] = 'Subiectul de discuţie a fost şters';
$string['deletedpost'] = 'Intervenţia a fost ştearsă';
$string['deletedposts'] = 'Acele intervenţii au fost şterse';
$string['deletesure'] = 'Eşti sigur că vrei să ştergi această intervenţie?';
$string['deletesureplural'] = 'Sunteţi sigur că doriţi să ştergeţi această intervenţie şi toate răspunsurile la aceasta? (în total {$a} intervenţii)';
$string['digestmailheader'] = 'Acesta este rezumatul zilnic al celor mai noi postări pe forumurile din cadrul sitului {$a->sitename}. Dacă doriţi să modificaţi setările referitoare la frecvenţa cu care primiţi aceste rezumate pe email accesaţi {$a->userprefs}.';
$string['digestmailprefs'] = 'profilul dumneavoastră de utilizator';
$string['digestmailsubject'] = '{$a}: rezumat postări forum';
$string['digestmailtime'] = 'Ora la care se trimit email-uri cu rezumate';
$string['digestsentusers'] = 'Rezumat postări forum trimis cu succes la {$a} utilizatori.';
$string['disallowsubscribe'] = 'Nu se permit înscrieri';
$string['disallowsubscribeteacher'] = 'Nu se permit înscrieri (cu excepţia profesorilor)';
$string['discussion'] = 'Discuție';
$string['discussionmoved'] = 'Această discuţie a fost mutată în {$a}\'.';
$string['discussionmovedpost'] = 'Această discuţie a fost mutată aici <a href="{$a->discusshref}"></a> în cadrul forumului <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Nume discuţie';
$string['discussions'] = 'Discuţii';
$string['discussionsstartedby'] = 'Discuţie lansată de {$a}';
$string['discussionsstartedbyrecent'] = 'Discuţii lansate recent de {$a}';
$string['discussthistopic'] = 'Discută acest subiect';
$string['displayend'] = 'Afişează sfârşit';
$string['displayend_help'] = 'Această setare specifică dacă un post pe forum ar trebui să fie ascuns după o dată anume. Reţineţi că administratorii pot vizualiza întotdeauna mesajele postate. ';
$string['displaymode'] = 'Afişează mod';
$string['displayperiod'] = 'Afişează perioadă';
$string['displaystart'] = 'Afişează început';
$string['displaystart_help'] = 'Această setare specifică dacă un post pe forum ar trebui să fie afişat de la o anumită dată. Reţineţi că administratorii pot vizualiza întotdeauna mesajele postate. ';
$string['eachuserforum'] = 'Fiecare student publică o singură intervenţie';
$string['edit'] = 'Modifică';
$string['editedby'] = 'Modificat de {$a->name} - trimis iniţial de {$a->date}';
$string['editedpostupdated'] = 'Postarea lui {$a} a fost actualizată';
$string['editing'] = 'Modificare';
$string['emptymessage'] = 'Ceva este greşit cu intervenţia ta. Poate ai lăsat un câmp gol sau ai ataşat un fişier prea mare. Modificările nu au fost salvate.';
$string['everyonecanchoose'] = 'Fiecare poate alege să fie înscris';
$string['everyonecannowchoose'] = 'Toţi utilizatorii se pot înscrie';
$string['everyoneisnowsubscribed'] = 'Toţi utilizatorii sunt înscrişi acum la acest forum';
$string['everyoneissubscribed'] = 'Toţi utilizatorii sunt înscrişi la acest forum';
$string['existingsubscribers'] = 'Utilizatori înscrişi';
$string['forcessubscribe'] = 'Pentru a putea participa la acest forum participanţii sunt obligaţi să se înscrie';
$string['forum'] = 'Forum';
$string['forum:addinstance'] = 'Adaugă un nou forum';
$string['forum:addnews'] = 'Adaugă ştire';
$string['forum:addquestion'] = 'Adaugă întrebare';
$string['forumauthorhidden'] = 'Autor (ascuns)';
$string['forumblockingalmosttoomanyposts'] = 'Vă apropiaţi de numărul maxim de intervenţii admise. În ultimele {$a->blockperiod} aţi trimis {$a->numposts} intervenţii şi numărul maxim de intervenţii admise este de {$a->blockafter}.';
$string['forumbodyhidden'] = 'Nu puteţi vizualiza această intervenţie, probabil din cauză că dumneavoastră nu aţi avut nicio intervenţie în cadrul acestei discuţii.';
$string['forum:createattachment'] = 'Creează ataşamente';
$string['forum:deleteanypost'] = 'Şterge orice intervenţii (realizate oricând)';
$string['forum:deleteownpost'] = 'Şterge propriile intervenţii (până la data limită)';
$string['forum:editanypost'] = 'Modifică orice intervenţie';
$string['forumintro'] = 'Introducere forum';
$string['forum:managesubscriptions'] = 'Administrare înscrieri';
$string['forum:movediscussions'] = 'Mută discuţii';
$string['forumname'] = 'Nume forum';
$string['forumposts'] = 'Intervenţii forum';
$string['forum:rate'] = 'Notează discuţii';
$string['forum:replynews'] = 'Răspunde la ştiri';
$string['forum:replypost'] = 'Răspunde la intervenţii';
$string['forums'] = 'Forumuri';
$string['forum:splitdiscussions'] = 'Separă discuţii';
$string['forum:startdiscussion'] = 'Începe discuţii noi';
$string['forumsubjecthidden'] = 'Subiect (ascuns)';
$string['forumtracked'] = 'Se urmăresc intervenţiile necitite';
$string['forumtrackednot'] = 'Nu se urmăresc intervenţiile necitite';
$string['forumtype'] = 'Tip forum';
$string['forumtype_help'] = '<P ALIGN=CENTER><B>Tip forum</B></P>

<P>Există trei tipuri de forum dintre care poţi alege:

<P><B>Fiecare student publică o singură intervenţie</B> - e doar un singur subiect, totul pe o singură pagină.
Folositor pentru dicuţii scurte, concentrate.

<P><B>Forum standard pentru uz general</B> - este un forum deschis în care oricine poate propune oricând
 un subiect.

<P><B>Un singur subiect de discuţie</B> - Fiecare persoană poate publica un singur subiect de discuţie şi oricâte intervenţii.';
$string['forum:viewanyrating'] = 'Vizualizează orice notă';
$string['forum:viewdiscussion'] = 'Vizualizează discuţii';
$string['forum:viewhiddentimedposts'] = 'Vizualizează intervenţiile ascunse cu etichetă orară';
$string['forum:viewqandawithoutposting'] = 'Vizualizează întotdeauna intervenţiile de tip Întrebare şi Răspuns';
$string['forum:viewrating'] = 'Vizualizează note';
$string['forum:viewsubscribers'] = 'Vizualizează utilizatori înscrişi';
$string['generalforum'] = 'Forum standar pentru uz general';
$string['generalforums'] = 'Forumuri generale';
$string['inforum'] = 'în {$a}';
$string['intronews'] = 'Anunţuri şi ştiri cu caracter general';
$string['introsocial'] = 'Un forum deschis pentru orice subiect de discuţie';
$string['introteacher'] = 'Un forum doar pentru profesori';
$string['lastpost'] = 'Ultima intervenţie';
$string['learningforums'] = 'Forum pentru învăţare';
$string['longpost'] = 'Intervenţie lungă';
$string['mailnow'] = 'Trimite mail acum';
$string['manydiscussions'] = 'Discuţii pe pagină';
$string['markalldread'] = 'Marchează ca "citite" toate intervenţiile din această discuţie.';
$string['markallread'] = 'Marchează ca "citite" toate intervenţiile din cadrul acestui forum.';
$string['markread'] = 'Marchează ca "citit"';
$string['markreadbutton'] = 'Marchează<br />citit';
$string['markunread'] = 'Marchează ca "necitit"';
$string['markunreadbutton'] = 'Marchează<br />necitit';
$string['maxattachments_help'] = 'Această setare specifică numărul maxim de fişiere care pot fi ataşate la un post pe forum.';
$string['maxattachmentsize'] = 'Dimensiune maximă ataşament';
$string['maxattachmentsize_help'] = 'Această setare specifică dimensiunea maximă a fişierului care poate fi ataşat la un post pe forum.';
$string['maxtimehaspassed'] = 'Îmi pare rău, dar intervalul de timp alocat modificării intervenţiei ({$a}) a expirat!';
$string['message'] = 'Mesaj';
$string['missingsearchterms'] = 'Următoarele criterii de căutare apar doar în markup-ul HTML al acestui mesaj:';
$string['modeflatnewestfirst'] = 'Arată replicile liniar, mai întâi cele recente';
$string['modeflatoldestfirst'] = 'Arată replicile liniar, mai întâi cele vechi';
$string['modenested'] = 'Arată replicile într-o formă de cuib';
$string['modethreaded'] = 'Arată replicile într-o formă întreţesută';
$string['modulename'] = 'Forum';
$string['modulename_help'] = 'Modulul Forum permite participanților să poarte discuţii asincrone.';
$string['modulenameplural'] = 'Forumuri';
$string['more'] = 'mai mult';
$string['movedmarker'] = '(Mutat)';
$string['movethisdiscussionto'] = 'Mută această discuţie în...';
$string['namenews'] = 'Forum ştiri';
$string['namenews_help'] = 'Forum-ul știri este un forum special pentru anunţuri, care se creează automat atunci când un curs este creat. Un curs poate avea un singur un forum de ştiri. Numai profesorii şi administratorii pot posta pe forumul de ştiri. Bloc-ul "Ultimele știri" va afişa cele mai recente discuţii de pe forumul de ştiri.';
$string['namesocial'] = 'Forum social';
$string['nameteacher'] = 'Forum profesori';
$string['newforumposts'] = 'Intervenţii noi';
$string['nodiscussions'] = 'Nici o intervenţie nu a fost publicată la acest subiect';
$string['nodiscussionsstartedby'] = 'Acest utilizator nu a iniţiat nicio discuţie';
$string['noguestpost'] = 'Îmi pare rău, doar studenţii înregistraţi pot publica intervenţii';
$string['noguesttracking'] = 'Ne pare rău, utilizatorii vizitatori nu au permisiunea de a seta opţiuni de urmărire.';
$string['nomorepostscontaining'] = 'Nu s-au mai găsit alte intervenţii care să conţină {$a}.';
$string['nonews'] = 'Nicio ştire n-a fost postată încă';
$string['nopostforum'] = 'Ne pare rău, nu aveţi permisiunea să interveniţi în cadrul acestui forum';
$string['noposts'] = 'Nici o intervenţie';
$string['noquestions'] = 'Nu există încă întrebări în cadrul acestui forum';
$string['nosubscribers'] = 'Nu există încă studenţi înregistraţi pentru acest subiect de discuţie';
$string['notexists'] = 'Discuția nu mai există';
$string['nothingnew'] = 'Nimic nou pentru {$a}';
$string['notingroup'] = 'Ne pare rău, pentru a putea vizualiza acest forum trebuie să fiţi membru al unui grup.';
$string['notrackforum'] = 'Nu se urmăresc intervenţiile necitite';
$string['noviewdiscussionspermission'] = 'Nu aveţi permisiunea de a vizualiza discuţiile din cadrul acestui forum.';
$string['nowallsubscribed'] = 'Toate forumurile din {$a} sunt înscrise.';
$string['nowallunsubscribed'] = 'Niciunul din forumurile din {$a} nu sunt înscrise.';
$string['nownotsubscribed'] = '{$a->name} nu va primi duplicate ale subiectului \'{$a->forum}\' prin email.';
$string['nownottracking'] = '{$a->name} nu mai urmăreşte forumul \'{$a->forum}\'';
$string['nowsubscribed'] = '{$a->name} va primi duplicate ale subiectului \'{$a->forum}\' prin email.';
$string['nowtracking'] = '{$a->name} urmăreşte în prezent forumul \'{$a->forum}\'.';
$string['numposts'] = '{$a} intervenţii';
$string['olderdiscussions'] = 'Intervenţii mai vechi';
$string['oldertopics'] = 'Teme mai vechi';
$string['oldpostdays'] = 'Marchează ca "citit" după număr de zile';
$string['openmode0'] = 'Nici o intervenţie, nici o replică';
$string['openmode1'] = 'Nici o intervenţie, dar replicile sunt permise';
$string['openmode2'] = 'Intervenţiile şi replicile sunt permise';
$string['overviewnumpostssince'] = 'intervenții de la ultima autentificare';
$string['overviewnumunread'] = 'total necitite';
$string['parent'] = 'Arată părinte';
$string['parentofthispost'] = 'Părintele acestei intervenţii';
$string['pluginadministration'] = 'Administrare forum';
$string['pluginname'] = 'Forum';
$string['postadded'] = 'Intervenţia ta a fost publicată.<br />Ai la dispoziţie {$a} pentru o eventuală modificare a intervenţiei.';
$string['postaddedsuccess'] = 'Intervenţia dumneavoastră a fost adăugată.';
$string['postaddedtimeleft'] = 'Dacă mai doriţi să mai faceţi modificări, aveţi la dispoziţie .';
$string['postincontext'] = 'Citeşte această intervenţie în context';
$string['postmailinfo'] = 'Aceasta este o copie a mesajului publicat pe website-ul {$a}. Pentru a publica replica ta în website apasă link-ul de mai jos:';
$string['postmailnow'] = '<p>Această intervenţie va fi trimisă automat la toţi utilizatorii care s-au înscris la acest forum.</p>';
$string['postrating1'] = 'Arată semnificaţiile separat';
$string['postrating2'] = 'Atât separate cât şi legate';
$string['postrating3'] = 'Arată semnificaţiile legat';
$string['posts'] = 'Intervenţii';
$string['posttoforum'] = 'Trimite intervenţie pe forum';
$string['postupdated'] = 'Intervenţia dumneavoastră fost actualizată';
$string['potentialsubscribers'] = 'Utilizatori care ar putea să se înscrie';
$string['processingdigest'] = 'Se procesează rezumatul ce va fi trimis prin email către utilizatorul {$a}';
$string['processingpost'] = 'Procesare intervenţie {$a}';
$string['prune'] = 'Separare';
$string['prunedpost'] = 'S-a creat o nouă discuţie din acea intervenţie';
$string['pruneheading'] = 'Separă discuţia iniţială şi transferă această întervenţie într-o discuţie nouă';
$string['qandaforum'] = 'Forum Întrebare şi Răspuns';
$string['qandanotify'] = 'Acesta este un forum de tip Întrebare şi Răspuns. Pentru a putea vedea răspunsurile date de alţi participanţi la această întrebare trebuie să răspundeţi mai întâi la întrebare.';
$string['re'] = 'Re:';
$string['readtherest'] = 'Citeşte continuarea acestui subiect';
$string['replies'] = 'Răspunsuri';
$string['repliesmany'] = '{$a} replici în total';
$string['repliesone'] = '{$a} replică în total';
$string['reply'] = 'Răspunde';
$string['replyforum'] = 'Răspunde la forum';
$string['replytouser'] = 'Foloseşte adresa de email în răspuns';
$string['resetforums'] = 'Şterge intervenţii din';
$string['resetforumsall'] = 'Şterge toate intervenţiile';
$string['resetsubscriptions'] = 'Şterge toate intervenţiile din forum';
$string['resettrackprefs'] = 'Şterge toate preferinţele de urmărire a forumului';
$string['rssarticles_help'] = 'Această setare specifică numărul de articole (fie discuţii sau postări) incluse în flux-ul RSS. Sunt acceptabile, în general, între 5 şi 20. ';
$string['rsssubscriberssdiscussions'] = 'Afişează fluxul RSS în \'{$a}\' discuţii';
$string['rsssubscriberssposts'] = 'Afişează fluxul RSS în \'{$a}\' intervenţii';
$string['rsstype_help'] = 'Pentru a activa fluxul RSS pentru această activitate, selectaţi fie discuţii sau postări care urmează să fie incluse în flux.';
$string['search'] = 'Caută în Forum';
$string['searchdatefrom'] = 'Intervenţiile trebuie să fie mai recente de';
$string['searchdateto'] = 'Intervenţiile trebuie să fie ulterioare datei';
$string['searchforumintro'] = 'Vă rugăm completaţi criterii de căutare în unul sau mai multe din următoarele câmpuri';
$string['searchforums'] = 'Caută';
$string['searchfullwords'] = 'Aceste cuvinte trebuie să se regăsească întregi în cadrul intervenţiilor';
$string['searchnotwords'] = 'Aceste cuvinte NU trebuie incluse';
$string['searcholderposts'] = 'Caută în intervenţii mai vechi...';
$string['searchphrase'] = 'Caută doar această frază în intervenţii';
$string['searchresults'] = 'Rezultatele căutării';
$string['searchsubject'] = 'Aceste cuvinte trebuie să se regăsească la Subiect';
$string['searchuser'] = 'Acest nume trebuie să corespundă cu numele autorului';
$string['searchuserid'] = 'ID Moodle al autorului';
$string['searchwhichforums'] = 'Selectaţi forumurile în care se va realiza căutarea';
$string['searchwords'] = 'Aceste cuvinte pot să apară oriunde în corpul mesajului';
$string['seeallposts'] = 'Vizualizează toate intervenţiile realizate de acest utilizator';
$string['shortpost'] = 'Intervenţie scurtă';
$string['showsubscribers'] = 'Arată studenţii înscrişi';
$string['singleforum'] = 'O singură intervenţie simplă';
$string['smallmessage'] = '{$a->user} postat în {$a->forumname}';
$string['startedby'] = 'Iniţiat de';
$string['subject'] = 'Subiect';
$string['subscribe'] = 'Înscrie-te la acest forum';
$string['subscribeall'] = 'Înscrie toţi utilizatorii la acest forum';
$string['subscribed'] = 'Înscris';
$string['subscribenone'] = 'Anulează înscrierea tuturor utilizatorilor la acest forum';
$string['subscribers'] = 'Studenţi înscrişi';
$string['subscribersto'] = 'Înscrie-te la \'{$a}\'';
$string['subscribestart'] = 'Doresc să primesc prin email cópii ale intervenţiilor realizate pe acest forum';
$string['subscribestop'] = 'Nu doresc să primesc prin email cópii ale intervenţiilor realizate pe acest forum';
$string['subscription'] = 'Înscriere';
$string['subscription_help'] = '<P ALIGN=CENTER><B>Inscrierea în forum</B></P>

<P>Când o persoană este înscrisă într-un forum, primeşte prin e-mail
copii ale fiecărei intervenţii publicate în forumul respectiv
(intervenţiile sunt trimise după <?PHP echo $CFG->maxeditingtime/60 ?> de minute de la momentul publicării intervenţiei
prima dată).

<P>Studenţii pot alege să se înscrie sau nu în forum.

<P>Totuşi, dacă profesorul forţează înscrierea pentru un anumit forum,
atunci această opţiune este inactivată, toţi studenţii urmând să primească obligatoriu
copii ale intervenţiilor prin e-mail.

<P>Această opţiune se dovedeşte foarte utilă în formurile de ştiri şi în forumurile ataşate
primelor lecţii din cadrul unui curs.';
$string['subscriptionmode_help'] = 'Un participant abonat la un forum va primi copii prin e-mail ale postărilor de pe forum.

Există 4 opţiuni de abonare:

* Abonament opţional - Participanţii pot alege dacă să fie subscriși sau nu
* Abonament obligatoriu - Toată lumea este subscrisă şi nimeni nu se poate dezabona
* Abonament automat - Toată lumea este subscrisă iniţial, dar poate alege să se dezaboneze ulterior în orice moment
* Abonamente dezactivate - subscrierile nu sunt permise';
$string['subscriptions'] = 'Înscrieri';
$string['thisforumisthrottled'] = 'Acest forum limitează numărul de intervenţii pe care le puteţi realiza într-un interval de timp - în prezent această limitare este de {$a->blockafter} intervenţii în interval de {$a->blockperiod}';
$string['timedposts'] = 'Intervenţii cu etichetă orară';
$string['timestartenderror'] = 'Data de sfârşit nu poate fi anterioară datei de început';
$string['trackforum'] = 'Urmăreşte intervenţii necitite';
$string['tracking'] = 'Urmărire';
$string['trackingoff'] = 'Dezactivat';
$string['trackingon'] = 'Activat';
$string['trackingoptional'] = 'Opţional';
$string['trackingtype'] = 'Se urmăreşte citirea intervenţiilor pe acest forum?';
$string['trackingtype_help'] = 'Dacă opțiunea este activată, participanţii pot urmări atât mesajele citite cât și cele necitite din forum şi din discuţii.

Există trei opţiuni:
* Opţional - Participanţii pot să aleagă daca să se aboneze la urmărirea mesajelor sau nu
* Pornit - subscrierea este activată
* Oprit - subscrierea este dezactivată';
$string['unread'] = 'Necitit';
$string['unreadposts'] = 'Intervenţii necitite';
$string['unreadpostsnumber'] = '{$a} intervenţii necitite';
$string['unreadpostsone'] = 'O intervenţie necitită';
$string['unsubscribe'] = 'Retrage-te din acest forum';
$string['unsubscribeall'] = 'Anulează înscrierile la toate forumurile';
$string['unsubscribeallconfirm'] = 'În prezent sunteţi înscris la {$a} forumuri. Sunteţi sigur că doriţi anularea înscrierii la toate forumurile şi anularea setării "înscriere automată la forum"?';
$string['unsubscribealldone'] = 'Înscrierile dumneavoastră la toate forumurile au fost anulate, este posibil să mai primiţi notificări de la forumurile cu înscriere obligatorie. Dacă nu mai doriţi să primiţi niciun fel de mesaje de la acest server vă rugăm accesaţi profilul dumneavoastră de utilizator şi blocaţi această adresă.';
$string['unsubscribeallempty'] = 'Ne pare rău, nu sunteţi înscris la niciun forum. Dacă nu mai doriţi să primiţi niciun fel de mesaje de la acest server vă rugăm accesaţi profilul dumneavoastră de utilizator şi blocaţi această adresă.';
$string['unsubscribed'] = 'Înscriere anulată';
$string['unsubscribeshort'] = 'Anulează înscriere';
$string['usermarksread'] = 'Marcarea manuală a mesajelor ca "citit"';
$string['viewalldiscussions'] = 'Vezi toate discuțiile';
$string['warnafter'] = 'Număr maxim de mesaje înainte de atenţionare';
$string['warnafter_help'] = 'Cursanții pot fi avertizați că aceștia se apropie de numărul maxim de postări permise pentru o anumită perioadă de timp. Această setare specifică după câte postări să se trimită un avertisment către cursanți. Utilizatorii cu permisiunea mod/forum:postwithoutthrottling sunt scutiți de aceste limitări.';
$string['yournewquestion'] = 'Noua întrebare';
$string['yournewtopic'] = 'Noua temă de discuţie propusă de dumneavoastră';
$string['yourreply'] = 'Răspunsul dumneavoastră';
