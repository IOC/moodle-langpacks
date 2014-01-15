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
 * Strings for component 'repository_boxnet', language 'de', branch 'MOODLE_25_STABLE'
 *
 * @package   repository_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API-Key';
$string['apiv1migration_message_small'] = 'Dieses Pluigin wurde deaktiviert. Eine neue Konfiguration ist erforderlich. Sie ist beschrieben in der Box.net APIv1 migration-Doku.';
$string['apiv1migration_message_subject'] = 'Wichtige Informationen zum box.net Portfolio-Plugin.';
$string['boxnet:view'] = 'Box.net Dateiverwaltung anzeigen';
$string['callbackurl'] = 'Weiterleitungs-URL';
$string['callbackurltext'] = '1. Besuchen Sie die <a href="http://www.box.net/developers/services">Box.net Entwicklerseite</a> erneut.
2. Tragen Sie die Redirect-URL for den box.net Service ein {$a}';
$string['callbackwarning'] = '1. Fordern Sie die <a href="http://www.box.net/developers/services">box.net API</a> from box.net für dieses Moodle-System an.
2. Tragen Sie den box.net Api-Schlüssel hier ein und klicken Sie auf speichern. Kommen Sie dann auf diese Seite zurück. Moodle hat dann die Redirect URl angelegt.
3. Bearbeiten Sie die box.net Details auf der box.net Webseite erneut und tragen Sie die Redirect URL dort ein.';
$string['cannotcreatereference'] = 'Es konte keine Referenz erzeugt werden. Die Berechtigungen  zum Austausch von Dateien mit box.net sind nicht ausreichend.';
$string['clientid'] = 'Client-ID';
$string['clientsecret'] = 'Client Schlüssel';
$string['configplugin'] = 'Einstellungen für Box.net';
$string['filesourceinfo'] = 'Box.net ({$a->fullname}): {$a->filename}';
$string['information'] = 'Die erhalten Ihren API-Schlüssel von: <a href="http://www.box.net/developers/services">box.net Developers</a>';
$string['invalidpassword'] = 'Ungültiges Passwort';
$string['migrationadvised'] = 'Es scheint Sie nutzen box.net mit der API Version 1. Sie müssen  nun das <a href="{$a}">Migrationstool</a> starten, um alte Referenzen zu konvertieren.';
$string['migrationinfo'] = '<p>Als Teil der Migration zur neuen API von Box.net werden Ihre Dateireferenzen migriertt. Das bestehende Referenzsystem ist nicht kompatibel mit der API v2. Daher werden diese nun heruntergeladen und in reale Dateien konvertiert.</p>
<p>Die Migration kann <strong>lange Zeit beanspruchen</strong>. Dies hängt von der Zahl der Referenzen und den Dateigrößen ab.</p>
<p>Mit dem Button unten starten Sie die Migration. Sie können statt dessen auch das  CLI script: repository/boxnet/cli/migrationv1.php verwenden.</p>
<p>Weitere Informationen finden Sie <a href="{$a->docsurl}">hier</a>.</p>';
$string['migrationtool'] = 'Box.net APIv1 Migrationstool';
$string['nullfilelist'] = 'Keine Dateien in diesem Dateiverwaltungstyp';
$string['password'] = 'Passwort';
$string['pluginname'] = 'Box.net';
$string['pluginname_help'] = 'Repository bei Box.net';
$string['runthemigrationnow'] = 'Migrationstool jetzt starten';
$string['saved'] = 'Daten für Box.net gespeichert';
$string['shareurl'] = 'Gemeinsame URL';
$string['username'] = 'Anmeldename bei Box.net';
$string['warninghttps'] = 'box.net kann nur auf Sites mit HTTPS-Verschlüsselung genutzt werden.';
