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
 * Strings for component 'auth_ldap', language 'ro', branch 'MOODLE_25_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_attrcreators_key'] = 'Creatorii atributelor';
$string['auth_ldap_auth_user_create_key'] = 'Creați utilizatori extern';
$string['auth_ldap_bind_dn_key'] = 'Nume distinctiv';
$string['auth_ldap_bind_pw_key'] = 'Parolă';
$string['auth_ldap_bind_settings'] = 'Setări bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL schimbare parolă';
$string['auth_ldap_contexts'] = 'Lista contextelor unde se găsesc utilizatorii. Separați contextele diferite prin \';\'. De exemplu: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contexte';
$string['auth_ldap_create_context_key'] = 'Context pentru noii utilizatori';
$string['auth_ldap_create_error'] = 'Eroare la crearea utilizatorului în LDAP.';
$string['auth_ldap_creators_key'] = 'Creatori';
$string['auth_ldap_expiration_key'] = 'Expirare';
$string['auth_ldap_expiration_warning_key'] = 'Avertizare de expirare';
$string['auth_ldap_host_url_key'] = 'URL gazdă';
$string['auth_ldap_ldap_encoding_key'] = 'Codare LDAP';
$string['auth_ldap_login_settings'] = 'Setări pentru autentificare';
$string['auth_ldap_memberattribute_key'] = 'Atribut al membrului';
$string['auth_ldap_noconnect'] = 'LDAP-module nu se poate conecta la server: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-module nu se poate conecta la niciun server: {$a}';
$string['auth_ldapnotinstalled'] = 'Nu se poate folosi autentificarea LDAP. Modulul PHP LDAP nu este instalat.';
$string['auth_ldap_passtype_key'] = 'Format parolă';
$string['auth_ldap_search_sub'] = 'Căutați utilizatori în subcontexte';
$string['auth_ldap_search_sub_key'] = 'Caută subcontexte';
$string['auth_ldap_server_settings'] = 'Setări server LDAP';
$string['auth_ldap_user_attribute_key'] = 'Atribut al utilizatorului';
$string['auth_ldap_user_exists'] = 'Numele de utilizator LDAP există deja';
$string['auth_ldap_user_settings'] = 'Setări pentru căutarea utilizatorului';
$string['auth_ldap_user_type_key'] = 'Tipul de utilizator';
$string['auth_ldap_version_key'] = 'Versiune';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Activează';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'Metoda de autentificare configurată în serverul web pentru a autentifica utilizatorii (În caz de incertitudine, alegeți NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tip de autentificare';
$string['connectingldap'] = 'Conectare la serverul LDAP...';
$string['creatingtemptable'] = 'Se creează tabel temporar  {$a}';
$string['noemail'] = 'Nu s-a putut trimite email-ul!';
$string['noupdatestobedone'] = 'Nu există actualizări';
$string['nouserentriestoremove'] = 'Nu există postări ale utilizatorului pentru a fi eliminate';
$string['ntlmsso_isdisabled'] = 'NTLM SSO este dezactivat.';
$string['ntlmsso_unknowntype'] = 'Tip ntlmsso necunoscut';
$string['pagesize_key'] = 'Dimensiune pagină';
$string['pluginname'] = 'Server LDAP';
$string['pluginnotenabled'] = 'Plugin neactivat!';
$string['renamingnotallowed'] = 'Redenumirea utilizatorului nu este permisă în LDAP';
$string['start_tls_key'] = 'Utilizați TLS';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nu acceptă tipul de utilizator selectat: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() nu acceptă tipul de utilizator selectat: {$a}';
$string['userentriestoadd'] = 'Postări ale utilizatorului de adăugat: {$a}';
$string['userentriestoremove'] = 'Postări ale utilizatorului de eliminat: {$a}';
$string['userentriestoupdate'] = 'Postări ale utilizatorului de actualizat: {$a}';
$string['usernotfound'] = 'Utilizatorul nu a fost găsit în LDAP';
