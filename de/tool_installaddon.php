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
 * Strings for component 'tool_installaddon', language 'de', branch 'MOODLE_25_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Bestätigung';
$string['acknowledgementmust'] = 'Sie müssen dies bestätigen.';
$string['acknowledgementtext'] = 'Ich habe verstanden, dass es alleine meine Verantwortung ist vollständigeSicherungen der gesamten Site zu erstellen, bevor Add-Ons installiert  werden. Ich akzeptiere  und verstehe, dass Add-Ons (besonders - aber nicht nur - wenn Sie aus inoffiziellen Quellen stammen) Sicherheitsprobleme enthalten können, die Site unbrauchbar machen, Datensicherheitsprobleme schaffen oder zu Datenverlust führen können.';
$string['featuredisabled'] = 'Der Add-on-Installer ist deaktiviert.';
$string['installaddon'] = 'Add-on installieren';
$string['installaddons'] = 'Add-ons installieren';
$string['installexception'] = 'Oops ... bei der Installation des Add-ons ist ein Fehler aufgetreten. Aktivieren Sie das Debugging, um weitere Details zu diesem Problem zu erfahren.';
$string['installfromrepo'] = 'Add-on aus der Plugin-Datenbank installieren';
$string['installfromrepo_help'] = 'Sie werden mit der Plugin-Datenbank von Moodle verbunden, um ein Add-on zu suchen und zu installieren. Beachten Sie, dass der vollständige Name der Website, die URL und die Version Ihrer Moodle-Instanz übertragen wird.';
$string['installfromzip'] = 'Add-on aus einer ZIP-Datei installieren';
$string['installfromzipfile'] = 'ZIP-Datei';
$string['installfromzipfile_help'] = 'Das Plugin-Zip-Paket muß genau ein Verzeichnis enthalten, das zum Namen des Plugins passt.Das Zip-Paket wird an einem dem Plugintyp entsprechenden Ort entpackt werden. Wenn das Paket vom Moodle Plugin-Verzeichnis heruntergeladen wurde, hat es genau diese Struktur.';
$string['installfromzip_help'] = 'Alternativ zum Download direkt aus der Moodle-Plugin-Datenbank kann es als Zip-Paket auf den Server geladen werden. Das Paket sollte auch dann die gleiche Struktur aufweisen wie ein Downloadpaket aus Moodle Plugin-Datenbank.';
$string['installfromziprootdir'] = 'Root-Verzeichnis umbenennen';
$string['installfromziprootdir_help'] = 'Einige Zip-Pakete, z.B. wenn sie aus Github erzeugt wurden können falsche Root-Verzeichnisnamen enthalten. Wenn das der Fall ist, geben Sie hier den richtigen ein.';
$string['installfromzipsubmit'] = 'Add-on aus einer ZIP-Datei installieren';
$string['installfromziptype'] = 'Plugin-Typ';
$string['installfromziptype_help'] = 'Wählen Sie den richtigen Plugintyp aus, den Sie gerade installieren. Warnung: Der Installationsprozess kann scheitern wenn ein falscher Typ ausgewählt wird.';
$string['permcheck'] = 'Stellen Sie sicher, dass für das Verzeichnis des Plugin-Typs auf dem Webserver Schreibrechte bestehen.';
$string['permcheckerror'] = 'Fehler beim Prüfen der Schreibberechtigung';
$string['permcheckprogress'] = 'Schreibberechtigung wird geprüft ...';
$string['permcheckresultno'] = 'In Plugin-Verzeichnis <em>{$a->path}</em> kann nicht geschrieben werden';
$string['permcheckresultyes'] = 'In Plugin-Verzeichnis <em>{$a->path}</em> kann geschrieben werden';
$string['pluginname'] = 'Add-on Installer';
$string['remoterequestalreadyinstalled'] = 'Es wird versucht {$a->name} ({$a->component}) Version {$a->version} aus dem Moodle Plugins-Verzeichnis auf dieser Site zu installieren. Dieses Plugin ist auf dieser Site <strong>bereits installiert</strong>.';
$string['remoterequestconfirm'] = 'Es wird versucht {$a->name} ({$a->component}) Version {$a->version} aus dem Moodle Plugins-Verzeichnis auf dieser Site zu installieren. Wenn Sie fortsetzen wird das Zip-Paket des Add-Ons zur Prüfung heruntergeladen. Dabei erfolgt noch keine Installation.';
$string['remoterequestinvalid'] = 'Es wird versucht ein Add-On aus dem Moodle Plugins-Verzeichnis auf dieser Site zu installieren. Die Anfrage ist jedoch nicht gültig. Eine Installation ist daher nicht möglich.';
$string['remoterequestpermcheck'] = 'Es wird versucht {$a->name} ({$a->component}) Version {$a->version} aus dem Moodle Plugins-Verzeichnis auf dieser Site zu installieren. Das Verzeichnis zur Installation dieses Plugin-Typs <strong>{$a->tpepath}</strong> ist jedoch auf dem Server <strong>nicht beschreibbar</strong>. Sie müssen für dises Verzeichnis auf dem Server zunächst Schreibrechte vergeben und dann den Fortsetzen-Button klicken, um die Prüfung fortzusetzen.';
$string['remoterequestpluginfoexception'] = 'Oops... Beim Versuch Informationen zum Add-On {$a->name} ({$a->component}) Version {$a->version} abzurufen, ist ein Fehler aufgetreten. Das Add-On kann nicht installiert werden. Aktivieren Sie den Debug-Modus, um weitere Details in Erfahrung zu bringen.';
$string['validation'] = 'Paketprüfung des Add-on';
$string['validationmsg_componentmatch'] = 'Vollständiger Name des Add-on';
$string['validationmsg_componentmismatchname'] = 'Add-on Name ist nicht übereinstimmend';
$string['validationmsg_componentmismatchname_help'] = 'Einige Zip-Pakete, besonders solche, die in Github erzeugt wurden, können falsche Root-Verzeichnisnamen enthalten. Sie müssen zunächst den Namen dieses Verzeichnis so anpassen, dass er dem Namen des Add-On entspricht.';
$string['validationmsg_componentmismatchname_info'] = 'Das Add-On definiert seinen Namen mit \'{$a}. Dies passt jedoch nicht zum Titel des Root-Verzeichnisses.';
$string['validationmsg_componentmismatchtype'] = 'Add-on Name ist nicht übereinstimmend';
$string['validationmsg_componentmismatchtype_info'] = 'Sie haben den Typ {$a->expected}\' gewählt. Das Add-On definiert seinen Typ jedoch als \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Entgepackte Datei nicht gefunden';
$string['validationmsg_filesnumber'] = 'Zu wenige Dateien im Paket gefunden';
$string['validationmsg_filestatus'] = 'Mehrere Dateien konnten nicht entgepackt werden';
$string['validationmsg_filestatus_info'] = 'Der Versuch dieDatei {$a->file} zu entpacken führte zu folgendem Fehler \'{$a->status}\'.';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Fehler';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Warnung';
$string['validationmsg_maturity'] = 'Angegebener Reifegard';
$string['validationmsg_maturity_help'] = 'Das Add-On kann seinen Reifegrad angeben. Wenn der Entwickler als Reifegrad des Add-Ons \'stabil\' definiert ist der Reifegrad MATURITY_STABLE. Alle anderen Reifegrade (wie alpha oder beta) werden als unstable bestätigt und ein Warnhinweis wird angezeigt.';
$string['validationmsg_missingexpectedlangenfile'] = 'Name der englischen Sprachdatei ist nicht passend';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Der angegebene Add-On-Typ erwartet eine englische Sprachdatei {$a}. Diese fehlt.';
$string['validationmsg_missinglangenfile'] = 'Keine englische Sprachdatei gefunden';
$string['validationmsg_missinglangenfolder'] = 'Englischer Sprachdateiordner fehlt';
$string['validationmsg_missingversion'] = 'Das Add-on enthält keine Versionsinformation';
$string['validationmsg_missingversionphp'] = 'Die Datei version.php wurde nicht gefunden';
$string['validationmsg_multiplelangenfiles'] = 'Es wurden mehrere englische Sprachdateien gefunden';
$string['validationmsg_onedir'] = 'Ungültige Struktur im zip-Paket';
$string['validationmsg_onedir_help'] = 'Das ZIP-Paket darf nur das Root-Verzeichnis mit dem Add-on-Code enthalten. Der Name des Root-Verzeichnisses muss dem Namen des Plugins entsprechen.';
$string['validationmsg_pathwritable'] = 'Prüfung des Schreibzugriffs';
$string['validationmsg_pluginversion'] = 'Add-on Version';
$string['validationmsg_release'] = 'Add-on Release';
$string['validationmsg_requiresmoodle'] = 'Erforderliche Moodle-Version';
$string['validationmsg_rootdir'] = 'Name des Add-ons, das installiert werden soll';
$string['validationmsg_rootdir_help'] = 'Die Bezeichnung des Root-Verzeichnisses im Zip-Paket bildet den Namen des Add-Ons bei der Installation. Wenn der Name falsch ist, müssen Sie den Namen des Root-Verzeichnisses vor der Installation (!) im Zip-Paket ändern.';
$string['validationmsg_rootdirinvalid'] = 'Falscher Name des Add-ons';
$string['validationmsg_rootdirinvalid_help'] = 'Der Name des Root-Verzeichnisses im Zip-Paket verletzt die formale Syntax-Festlegung. Einige Zip-Pakete besonders wenn sie aus github erzeugt wurden, können fehlerhafte Root-Verzeichnisnamen enthalten. Sie müssen dann den Verzeichnisnamen des Root-Verzeichnisses erst an den Namen des Add-Ons anpassen.';
$string['validationmsg_targetexists'] = 'Der Zielort existiert bereits';
$string['validationmsg_targetexists_help'] = 'Das Verzeichnis, in dem das Zusatzpaket installiert werden soll, darf noch nicht existieren.';
$string['validationmsg_unknowntype'] = 'Unbekannter Plugin-Typ';
$string['validationresult0'] = 'Prüfung fehlgeschlagen!';
$string['validationresult0_help'] = 'Bei der Installation des Add-ons sind Probleme aufgetreten. Das Validierungsprotokoll enthält die Details.';
$string['validationresult1'] = 'Prüfung erfolgt!';
$string['validationresult1_help'] = 'Das Add-on wurde geprüft und es wurden keine Probleme gefunden.';
$string['validationresultinfo'] = 'Info';
$string['validationresultmsg'] = 'Mitteilung';
$string['validationresultstatus'] = 'Status';
