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
 * Strings for component 'blog', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Adaugă postare nouă';
$string['addnewexternalblog'] = 'Înregistrează un blog extern';
$string['assocdescription'] = 'Dacă scrieți despre un curs și/sau module de activitate, selectați-le aici.';
$string['associated'] = 'Asociat {$a}';
$string['associatewithcourse'] = 'Blog despre cursul {$a->coursename}';
$string['associatewithmodule'] = 'Blog despre {$a->modtype}: {$a->modname}';
$string['association'] = 'Asociere';
$string['associations'] = 'Asocieri';
$string['associationunviewable'] = 'Această postare nu poate fi vizualizată de către alte persoane, până când un curs nu este asociat cu ea sau câmpul "Publică la" este schimbat';
$string['autotags'] = 'Adaugă aceste etichete';
$string['autotags_help'] = 'Introduceţi unul sau mai multe tag-uri locale (separate prin virgule), care doriţi să fie adăugate în mod automat la fiecare intrare de blog, copiată de pe blog-ul extern în blog-ul dvs. local.';
$string['backupblogshelp'] = 'Dacă este activat, blogurile vor fi incluse în copiile de siguranță automate ale SITE-ului';
$string['blockexternalstitle'] = 'Blog-uri externe';
$string['blocktitle'] = 'Titlu bloc etichete blog';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog despre aceasta {$a->type}';
$string['blogaboutthiscourse'] = 'Adaugă o postare despre acest curs';
$string['blogaboutthismodule'] = 'Adaugă un post despre aceasta {$a}';
$string['blogadministration'] = 'Administrare blog';
$string['blogdeleteconfirm'] = 'Şterg acest blog?';
$string['blogdisable'] = 'Blogging-ul este dezactivat!';
$string['blogentries'] = 'Postări blog';
$string['blogentriesabout'] = 'Postări pe blog despre';
$string['blogentriesbygroupaboutcourse'] = 'Postări pe blog despre {$a->course} de către {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Postări pe blog despre {$a->mod} de către {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Postări pe blog despre  {$a->course} de către {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Postări pe blog despre aceasta {$a->mod} de către {$a->user}';
$string['blogentrybyuser'] = 'Postare pe blog de către {$a}';
$string['blogpreferences'] = 'Preferinţe blog';
$string['blogs'] = 'Bloguri';
$string['blogscourse'] = 'Blog-uri curs';
$string['blogssite'] = 'Blog-uri site';
$string['blogtags'] = 'Etichete blog';
$string['cannotviewcourseblog'] = 'Nu aveți permisiunea necesară pentru a vedea bloguri în acest curs';
$string['cannotviewcourseorgroupblog'] = 'Nu aveți permisiunea necesară pentru a vedea bloguri în acest curs/grup';
$string['cannotviewsiteblog'] = 'Nu aveți permisiunea necesară pentru a vedea toate blogurile site-ului';
$string['cannotviewuserblog'] = 'Nu aveți permisiunea necesară pentru a citi blogurile utilizatorului';
$string['configexternalblogcrontime'] = 'Cât de des verifică Moodle blogurile externe pentru a vedea dacă sunt postări noi';
$string['configmaxexternalblogsperuser'] = 'Numărul maxim de blog-uri externe pentru care fiecare utilizator are permisiunea să creeze link către de blog-ul lor Moodle.';
$string['configuseblogassociations'] = 'Activează asocierea postărilor pe blog cu cursurile si modulele de curs.';
$string['configuseexternalblogs'] = 'Permite utilizatorilor să specifice feed-urile blogurilor externe. Moodle verifică în mod regulat aceste feed-uri ale blogului și copiază noile postări în blogul local al acelui utilizator.';
$string['courseblog'] = 'Blog curs: {$a}';
$string['courseblogdisable'] = 'Blogurile cursului nu sunt active';
$string['courseblogs'] = 'Utilizatorii pot vedea doar blog-urile persoanelor cu care sunt colegi de curs';
$string['deleteblogassociations'] = 'Șterge asocierile blogului';
$string['deleteblogassociations_help'] = 'Dacă bifați, intrările de pe blog nu vor mai fi asociate cu acest curs sau oricare alte din activităţi de curs sau resurse. Intrările de blog nu vor fi şterse.';
$string['deleteexternalblog'] = 'Retrage acest blog extern';
$string['deleteotagswarn'] = 'Sigur doriţi să ştergeţi această etichetă/aceste etichete din toate postările de pe blog-uri şi să o/le ştergeţi din sistem?';
$string['description'] = 'Descriere';
$string['description_help'] = 'Introduceţi o propoziţie sau două care rezumă conţinutul blog-ului dumneavoastră extern. (Dacă nu furnizați nici o descriere, atunci se va folosi descrierea înregistrată în blog-ul dvs. extern )';
$string['donothaveblog'] = 'Nu aveți propriul blog, ne pare rău';
$string['editentry'] = 'Editează o postare pe blog';
$string['editexternalblog'] = 'Editează acest blog extern';
$string['emptybody'] = 'O postare pe blog trebuie să conţină text sau imagini';
$string['emptyrssfeed'] = 'Adresa URL pe care ați introdus-o nu indică un RSS feed valid';
$string['emptytitle'] = 'Titlul postului pe blog nu poate fi gol';
$string['emptyurl'] = 'Trebuie să specificați o adresă URL către un RSS feed valid';
$string['entrybody'] = 'Conţinut postare blog';
$string['entrybodyonlydesc'] = 'Descriere post';
$string['entryerrornotyours'] = 'Acest post nu vă aparţine';
$string['entrysaved'] = 'Articolul tău a fost salvat';
$string['entrytitle'] = 'Titlu articol';
$string['entryupdated'] = 'Postare blog actualizată';
$string['externalblogcrontime'] = 'Orar extern blog cron';
$string['externalblogdeleteconfirm'] = 'Eliminați acest blog extern?';
$string['externalblogdeleted'] = 'Blog extern neînregistrat';
$string['externalblogs'] = 'Blog-uri externe';
$string['feedisinvalid'] = 'Acest flux este invalid';
$string['feedisvalid'] = 'Acest flux este valid';
$string['filterblogsby'] = 'Filtrează postările utilizatorului';
$string['filtertags'] = 'Etichete de filtrare';
$string['filtertags_help'] = 'Puteţi utiliza această caracteristică pentru a selecta intrările de blog pe care doriţi să le utilizaţi. Dacă specificaţi tag-uri aici (separate prin virgule), numai intrările cu aceste tag-uri vor fi copiate de pe blog-ul extern.';
$string['groupblog'] = 'Blog de grup: {$a}';
$string['groupblogdisable'] = 'Blogul grupului nu este activ';
$string['groupblogentries'] = 'Postări pe blog asociate cu  {$a->coursename} de către {$a->groupname}';
$string['groupblogs'] = 'Utilizatorii pot vedea doar blog-urile persoanelor din acelaşi grup';
$string['incorrectblogfilter'] = 'Tip filtru pe blog incorect specificat';
$string['intro'] = 'Fluxul RSS a fost generat automat din unul sau mai multe bloguri';
$string['invalidgroupid'] = 'ID grup invalid';
$string['invalidurl'] = 'Acest URL este inaccesibil';
$string['linktooriginalentry'] = 'Link către postarea originală pe blog';
$string['maxexternalblogsperuser'] = 'Numărul maxim de bloguri pentru utilizator';
$string['name'] = 'Nume';
$string['name_help'] = 'Introduceţi un nume descriptiv pentru blog-ul dumneavoastră  extern. (Dacă nu este furnizat nici un nume, va fi utilizat titlul de blog extern).';
$string['noentriesyet'] = 'Nu există postări vizibile';
$string['noguestpost'] = 'Vizitatorii nu pot să posteze pe bloguri!';
$string['nopermissionstodeleteentry'] = 'Nu aveți permisiunea necesară pentru a șterge această postare de pe blog';
$string['norighttodeletetag'] = 'Nu aveţi permisiunea să ştergeţi această etichetă - {$a}';
$string['nosuchentry'] = 'Nu există această postare pe blog';
$string['notallowedtoedit'] = 'Nu aveţi permisiunea să modificaţi acest post';
$string['numberofentries'] = 'Posturi: {$a}';
$string['numberoftags'] = 'Numărul de etichete care vor fi afişate';
$string['page-blog-edit'] = 'Pagini de editare blog';
$string['page-blog-index'] = 'Pagini de listare blog';
$string['page-blog-x'] = 'Toate paginile blog';
$string['pagesize'] = 'Număr de postări din blog care vor fi afişate pe o pagină';
$string['permalink'] = 'Permalink';
$string['personalblogs'] = 'Utilizatorii pot vizualiza doar propriul blog';
$string['preferences'] = 'Preferințe';
$string['publishto'] = 'Difuzează la';
$string['publishtocourse'] = 'Utilizatori care împart un curs cu time';
$string['publishtocourseassoc'] = 'Membri cursului asociat';
$string['publishtocourseassocparam'] = 'Membrii {$a}';
$string['publishtogroup'] = 'Utilizatori care împart un grup cu tine';
$string['publishtogroupassoc'] = 'Membrii grupului tău în cursul asociat';
$string['publishtogroupassocparam'] = 'Membrii grupului tău în {$a}';
$string['publishto_help'] = 'Există 3 opţiuni:

* Dumneavoastră (ciornă) - Numai dumneavoastră si administratorii pot vedea această intrare
* Oricine de pe acest site - Oricine este înregistrat pe acest site poate citi această intrare
* Oricine din lume - Oricine, inclusiv vizitatorii, ar putea citi această intrare';
$string['publishtonoone'] = 'Autor (ciornă)';
$string['publishtosite'] = 'Oricine are acces la acest sit';
$string['publishtoworld'] = 'Oricine';
$string['readfirst'] = 'Citiți aici prima dată';
$string['relatedblogentries'] = 'Postări blog asociate';
$string['retrievedfrom'] = 'Adus de la';
$string['rssfeed'] = 'Flux RSS blog';
$string['searchterm'] = 'Căutare: {$a}';
$string['settingsupdatederror'] = 'S-a produs o eroare, setarea preferinţelor pentru acest blog nu a putut fi realizată';
$string['siteblog'] = 'Blog sit: {$a}';
$string['siteblogdisable'] = 'Site-ul blogului nu este activat';
$string['siteblogs'] = 'Toţi utilizatorii pot vedea toate postările de pe blog';
$string['tagdatelastused'] = 'Data ultimei utilizări a etichetei';
$string['tagparam'] = 'Etichetă : {$a}';
$string['tags'] = 'Etichete';
$string['tagsort'] = 'Sortează etichetele afişate după';
$string['tagtext'] = 'Text etichetă';
$string['timefetched'] = 'Data ultimei sincronizări';
$string['timewithin'] = 'Afişează etichete utilizate în ... zile';
$string['updateentrywithid'] = 'Actualizez articolul';
$string['url'] = 'RSS feed URL';
$string['url_help'] = 'Introduceţi URL-ul cu feed-uri RSS pentru blog-ul dumneavoastră extern.';
$string['useblogassociations'] = 'Activează asocierile blogului';
$string['useexternalblogs'] = 'Activare bloguri externe';
$string['userblog'] = 'Blog utilizator: {$a}';
$string['userblogentries'] = 'Postări pe blog de către {$a}';
$string['valid'] = 'Valid';
$string['viewallblogentries'] = 'Toate postările despre aceasta {$a}';
$string['viewallmodentries'] = 'Vezi toate postările despre aceasta {$a->type}';
$string['viewallmyentries'] = 'Vizualizarea tuturor postărilor mele';
$string['viewblogentries'] = 'Postări despre aceasta {$a->type}';
$string['viewblogsfor'] = 'Vizualizează toate postările pentru...';
$string['viewcourseblogs'] = 'Vezi toate postările pentru acest curs';
$string['viewentriesbyuseraboutcourse'] = 'Vezi postările despre acest curs de către {$a}';
$string['viewgroupblogs'] = 'Vezi postările pentru grup...';
$string['viewgroupentries'] = 'Postări pe grup';
$string['viewmodblogs'] = 'Vizualizează postările pentru module...';
$string['viewmodentries'] = 'Postări module';
$string['viewmyentries'] = 'Vezi articolele mele';
$string['viewmyentriesaboutcourse'] = 'Vizualizează postările despre acest curs';
$string['viewmyentriesaboutmodule'] = 'Vizualizează postările mele despre aceasta {$a}';
$string['viewsiteentries'] = 'Vezi articolele site-ului';
$string['viewuserentries'] = 'Vizualizează toate postările de către {$a}';
$string['worldblogs'] = 'Utilizatorii din afara sitului pot citi doar postările care au fost setate să fie disponibile pentru utilizatorii din afara sitului';
$string['wrongpostid'] = 'ID postare blog incorect';
