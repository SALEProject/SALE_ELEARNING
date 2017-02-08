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
 * Strings for component 'qtype_correctwriting', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   qtype_correctwriting
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absenthintpenaltyfactor'] = 'Factor de penalizare pentru indicii de greșeală în cazul lipsei unui element';
$string['absenthintpenaltyfactor_help'] = 'Pentru indiciile care afișează textul unui element, greșeala lipsei unui element este un caz special. În cazul altor greșeli, studentul măcar a încercat să scrie ceva oarecum relevant acestui element, oriunde în răspunsul său, pe când lipsa unui element înseamnă că el nu a scris nimic. Deci pentru această greșeală concretă indiciile vor dezvălui mai multă informație. Factorul vă permite mărirea penalizării pentru asemea indicii. Dacă penalizarea finală va fi mai mare decât 1, indiciul va fi deactivat.';
$string['absentmistakemessage'] = 'elementul {$a} lipsește';
$string['absentmistakeweight'] = 'Penalizare pentru un element lipsă';
$string['absentmistakeweight_help'] = 'Penalizare pentru fiecare element lipsă în răspunsul studentului, dacă numărul de greșeli nu depășește procentajul maxim de greșeli.';
$string['addedmistakemessage'] = 'este un "{$a}" în plus';
$string['addedmistakeweight'] = 'Penalizare pentru un element în plus';
$string['addedmistakeweight_help'] = 'Penalizare pentru fiecare element în plus în răspunsul studentului, dacă numărul de greșeli nu depășește procentajul maxim de greșeli.';
$string['and'] = 'și';
$string['answersinstruct'] = 'Introduceți unul sau mai multe răspunsuri corecte. Când veți încerca să salvați întrebarea, răspunsurile vor fi transformate în elemente utilizând regulile limbii selectate și veți avea opțiunea de a introduce descrieri pentur fiecare element. Descrierea elementelor este folosită în locul textului unui element în mesajele cu greșeli și indicii, astfel încât valoarea elementului să fie fie divulgată studentului. Dacă nu completați câmpul descrierii, valoarea elementului va fi folosită în acest caz. Dar trebuie neapărat să introduceți un număr corect de șiruri necompletate în calitate de descrieri pentru a vă asigura că nu uitați să introduceți descrieri când adăugați un răspuns nou.';
$string['caseno'] = 'Nu, formatul literei (mica sau mare) nu este important';
$string['casesensitive'] = 'Distingere MAJ/min';
$string['caseyes'] = 'Da, formatul literei (mică sau mare) este important';
$string['correctwriting'] = 'Scriere corectă';
$string['enterlexemedescriptions'] = 'Introduceți descrierea elementului';
$string['foundlexicalerrors'] = 'Răspunsul tău conține greșeli gramaticale. Te rugăm să corectezi următoarele greșeli:';
$string['foundmistake'] = 'Răspunsul tău conține o greșeală:';
$string['foundmistakes'] = 'Sunt greșeli în răspunsul tău:';
$string['hintgradeborder'] = 'Nota minimă a răspunsului pentru a afișa greșelile';
$string['hintgradeborder_help'] = 'Doar răspunsurile cu note mai mari sau egale cu această notă vor fi considerate corecte și vor afișa greșeli și indicii. Un răspuns cu note mai mici va fi folosit doar când potrivirea va fi exactă. Puteți folosi un răspuns cu o notă mai mică pentru a oferi feedback la anumite greșeli.';
$string['imageanswer'] = 'Răspunsul corect:';
$string['langid'] = 'Limba răspunsului';
$string['lexemedescriptions'] = 'Descrieri pentru elemente';
$string['lexicalerrorthreshold'] = 'Pragul greșelilor lexicale';
$string['lexicalerrorweight'] = 'Penalizare pentru greșeli lexicale';
$string['maxmistakepercentage'] = 'Procentajul maxim de greșeli';
$string['movedmistakemessage'] = '{$a} plasat greșit';
$string['movedmistakeweight'] = 'Penalizare pentru elementele plasate greșit';
$string['objectname'] = 'întrebare';
$string['pleaseenterananswer'] = 'Introduceți un răspuns.';
$string['pluginname'] = 'Scriere corectă';
$string['tokens'] = 'Elemente';
$string['whatishint'] = 'elementul {$a->tokendescr} este "{$a->tokenvalue}"';
$string['wherepichint'] = 'unde {$a} ar trebui să fie (picture)';
$string['wheretxtafter'] = 'elementul {$a->token} poate fi plasat după {$a->after}';
$string['wheretxtbefore'] = 'elementul {$a->token} poate fi plasat înainte de {$a->before}';
$string['wheretxtbetween'] = 'elementul {$a->token} poate fi plasat între {$a->after} și {$a->before}';
$string['wheretxthint'] = 'unde {$a} trebuie să fie';
