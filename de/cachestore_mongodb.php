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
 * Strings for component 'cachestore_mongodb', language 'de', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Datenbank';
$string['database_help'] = 'Name der Datenbank, die verwandt wird';
$string['extendedmode'] = 'Erweiterte Schlüssel verwenden';
$string['password'] = 'Kennwort';
$string['password_help'] = 'Nutzerpasswort für diese Verbindung.';
$string['pluginname'] = 'MongoDB';
$string['replicaset'] = 'Replica Set';
$string['server'] = 'Server';
$string['server_help'] = 'Dies ist der Verbindungsstring zum Server, den Sie verwenden wollen. Mehrere Server können durch Eintrag einer Komma-separierten Liste eingetragen werden.';
$string['testserver'] = 'Testserver';
$string['testserver_desc'] = 'Dies ist der Verbindungsstring zu einem Testserver, den Sie verwenden wollen. Testserver sind gänzlich optional. Durch Festlegung eines Testservers könen Sie PHPunit Tests für diesen Speicher und Performance-Tests durchführen.';
$string['username'] = 'Nutzername';
$string['username_help'] = 'Der Anmeldename wird benutzt, wenn eine Verbindung hergestellt wird.';
$string['usesafe'] = 'Sichere Verbindung benutzen';
$string['usesafe_help'] = 'Nach der Aktivierung wird die usesafe-Option für insert, get und remove Operationen verwandt. Wenn Sie eine Replica Set definiert haben, wird dies in jedem Fall erzwungen.';
$string['usesafevalue'] = 'Sicheren Wert benutzen';
$string['usesafevalue_help'] = 'Sie können für die sichere Verwendung einen spezifischen Wert festsetzen.  Dieser bestimmt die Zahl der Server, deren Operationen abgeschlossen sein müssen, bevor ein Abschluss angenommen wird.';
