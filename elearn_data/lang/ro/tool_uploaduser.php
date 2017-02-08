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
 * Strings for component 'tool_uploaduser', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permite ștergeri';
$string['allowrenames'] = 'Permite redenumiri';
$string['csvdelimiter'] = 'Delimitator CSV';
$string['defaultvalues'] = 'Valori implicite';
$string['deleteerrors'] = 'Șterge erori';
$string['encoding'] = 'Codare';
$string['errors'] = 'Erori';
$string['nochanges'] = 'Nicio schimbare';
$string['renameerrors'] = 'Redenumire erori';
$string['rowpreviewnum'] = 'Afişează rânduri';
$string['uploadpicture_baduserfield'] = 'Atributul utilizator specificat nu este corect. Vă rugăm specificaţi din nou un atribut.';
$string['uploadpicture_cannotmovezip'] = 'Fişierul arhivă nu poate fi transferat în directorul temporar.';
$string['uploadpicture_cannotprocessdir'] = 'Nu se pot procesa fişierele aflate în interiorul unei arhive.';
$string['uploadpicture_cannotsave'] = 'Imaginea utilizatorului {$a} nu a putut fi salvată. Verificaţi fişierul original care conţinea imaginea.';
$string['uploadpicture_cannotunzip'] = 'Arhiva cu imagini nu a putut fi deschisă.';
$string['uploadpicture_invalidfilename'] = 'Numele fişierului imagine {$a} conţine caractere incorecte, nu va fi utilizat.';
$string['uploadpicture_overwrite'] = 'Suprascrie imagini utilizator existente?';
$string['uploadpictures'] = 'Încarcă avatare utilizator';
$string['uploadpictures_help'] = 'Imaginile utilizatorilor pot fi încărcate și ca fișiere împachetate (zip). Fișierele de imagine ar trebui numite utilizator-atribut.extensie, de ex. utilizator1234.jpg pentru un utilizator cu numele utilizator1234.';
$string['uploadpicture_userfield'] = 'Atribut utilizator ce va fi folosit la atribuirea imaginilor:';
$string['uploadpicture_usernotfound'] = 'Nu există un utilizator cu o valoare \'{$a->userfield}\' a \'{$a->uservalue}\'. Se omite.';
$string['uploadpicture_userskipped'] = 'Imaginea pentru utilizatorul {$a} nu a fost actualizată (imagine existentă)';
$string['uploadpicture_userupdated'] = 'Imagine actualizată pentru utilizatorul {$a}.';
$string['uploadusers'] = 'Incarcă utilizatori';
$string['uploadusers_help'] = 'Utilizatorii pot fi încărcați (şi, opţional, înscrişi la cursuri), prin intermediul unui fişier text (CSV). Formatul fişierului ar trebui să fie după cum urmează:

* Fiecare linie a fişierului conţine o înregistrare
* Fiecare înregistrare este o serie de date separate prin virgule (sau alți delimitatori)
* Prima înregistrare va conţine o serie de denumiri care definesc formatul din restul fișierului
* Spațiile obligatorii sunt numele de utilizator, parola, prenumele, numele, e-mail';
$string['uploaduserspreview'] = 'Încarcă previzualizare utilizatori';
$string['uploadusersresult'] = 'Încarcă rezultate utilizatori';
$string['useraccountupdated'] = 'Cont utilizator actualizat';
$string['userdeleted'] = 'Cont utilizator șters';
$string['userrenamed'] = 'Utilizator redenumit';
$string['userscreated'] = 'Conturi utilizator create';
$string['usersdeleted'] = 'Conturi utilizator șterse';
$string['usersrenamed'] = 'Conturi utilizatori redenumite';
$string['usersskipped'] = 'Conturi utilizator omise';
$string['usersupdated'] = 'Conturi utilizator actualizate';
$string['usersweakpassword'] = 'Utilizatori cu parole slabe';
$string['uubulk'] = 'Selectare pentru operaţiuni în serie';
$string['uubulkall'] = 'Toţi utilizatorii';
$string['uubulknew'] = 'Utilizatori noi';
$string['uubulkupdated'] = 'Utilizatori actualizaţi';
$string['uucsvline'] = 'Linie CSV';
$string['uulegacy1role'] = '(Student iniţial) typeN=1';
$string['uulegacy2role'] = '(Profesor iniţial) typeN=2';
$string['uulegacy3role'] = '(Profesor inţial fără drepturi de editare) typeN=3';
$string['uunoemailduplicates'] = 'Previne duplicarea adreselor de email';
$string['uuoptype'] = 'Tip încărcare';
$string['uuoptype_addinc'] = 'Adaugă pe toţi, ataşează contor la numele de utilizator în caz că este nevoie';
$string['uuoptype_addnew'] = 'Adaugă numai utilizatori noi, ignoră utilizatorii existenţi';
$string['uuoptype_addupdate'] = 'Adaugă utilizator nou şi actualizează înregistrări utilizatori existenţi';
$string['uuoptype_update'] = 'Actualizează doar utilizatori existenţi';
$string['uupasswordnew'] = 'Noua parolă utilizator';
$string['uupasswordold'] = 'Parolă utilizator curentă';
$string['uuupdateall'] = 'Anulează cu fişier şi parametri impliciţi';
$string['uuupdatefromfile'] = 'Anulează cu fişier';
$string['uuupdatemissing'] = 'Completează valorile lipsă cu valori din fişier şi parametri impliciţi';
$string['uuupdatetype'] = 'Detalii despre utilizator existente';
