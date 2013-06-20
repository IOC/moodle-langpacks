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
 * Strings for component 'badges', language 'ca', branch 'MOODLE_25_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accions';
$string['activate'] = 'Activa l\'accés';
$string['activatesuccess'] = 'S\'ha activat correctament l\'accés a les insígnies.';
$string['addbadgecriteria'] = 'Afegeix un criteri per la insígnia';
$string['addcourse'] = 'Afegeix cursos';
$string['addcourse_help'] = 'Seleccioneu';
$string['addcriteria'] = 'Afegeix criteri';
$string['addcriteriatext'] = 'Per començar a afegir criteris cal que seleccioneu una de les opcions del menú desplegable.';
$string['addtobackpack'] = 'Afegeix a la motxilla';
$string['adminonly'] = 'Aquesta pàgina està restringida als administradors del lloc.';
$string['after'] = 'després de la data de lliurament.';
$string['aggregationmethod'] = 'Mètode d\'agregació';
$string['all'] = 'Tot';
$string['allmethod'] = 'Totes les condicions seleccionades coincideixen';
$string['allmethodactivity'] = 'S\'han completat totes les activitats seleccionades';
$string['allmethodcourseset'] = 'S\'han completat tots els cursos seleccionats';
$string['allmethodmanual'] = 'Tots els rols seleccionats poden obtenir la insígnia';
$string['allmethodprofile'] = 'S\'han completat tots els camps del perfil seleccionats';
$string['allowcoursebadges'] = 'Activa les insígnies del curs';
$string['allowcoursebadges_desc'] = 'Permet crear i donar insígnies en el context del curs.';
$string['allowexternalbackpack'] = 'Activa la connexió amb motxilles externes';
$string['allowexternalbackpack_desc'] = 'Permet als usuaris configurar connexions i mostrar les insígnies de les motxilles dels seus proveïdors externs.

Nota: Es recomana no activar aquesta opció si no es pot accedir al lloc web des d\'Internet (p.ex, perquè hi ha un tallafocs activat)';
$string['any'] = 'Qualsevol';
$string['anymethod'] = 'Es compleix qualsevol de les condicions seleccionades';
$string['anymethodactivity'] = 'S\'ha completat qualsevol de les activitats seleccionades';
$string['anymethodcourseset'] = 'S\'ha completat qualsevol dels cursos seleccionats';
$string['anymethodmanual'] = 'Qualsevol dels rols seleccionats pot guanyar la insígnia.';
$string['anymethodprofile'] = 'S\'ha completat qualsevol dels camps del perfil seleccionats';
$string['attachment'] = 'Adjunta la insígnia al missatge';
$string['attachment_help'] = 'Si està marcat s\'adjuntarà la insígnia lliurada al missatge de correu perquè el destinatari la pugui descarregar.';
$string['award'] = 'Insígnia guanyada';
$string['awardedtoyou'] = 'Insígnies que m\'han donat';
$string['awardoncron'] = 'S\'ha activat correctament l\'accés a les insígnies. Però hi ha massa usuaris que poden guanyar al mateix temps aquesta insígnia. Per assegurar el bon funcionament del lloc aquesta acció trigarà una mica a completar-se.';
$string['awards'] = 'Destinataris';
$string['backpackavailability'] = 'Verificació d\'una insígnia externa';
$string['backpackavailability_help'] = 'Un servei extern de motxilles ha de poder accedir al vostre lloc i verificar les insígnies emeses perquè els guanyadors de les insígnies puguin demostrar que les hi heu donat. Sembla que ara mateix el vostre lloc no és accessible, i en conseqüència no es podran verificar les insígnies que ja heu donat o que donareu en el futur.

##Per què estic veient aquest missatge?

Pot ser degut a què el vostre tallafocs impedeix l\'accés d\'usuaris de fora de la vostra xarxa, a què el vostre lloc està protegit per una contrasenya, o a què esteu fen funcionar el lloc en un ordinador que no té accés a Internet (p.ex una màquina local de desenvolupament).

##Això representa un problema?

Si teniu planejat lliurar insígnies haureu de solucionar aquest problema si esteu en un lloc en producció, altrament els guanyadors no podran demostrar que han rebut les seves insígnies del vostre lloc. Si el lloc encara no és actiu podeu crear i lliurar insígnies de prova fins que el lloc s\'activi del tot.

##Què passa si no puc fer públicament  accessible el lloc sencer?

L\'únic URL necessari per la verificació és [URL-del-lloc]/badges/assertion.php així que si podeu modificar el tallafocs per tal de permetre l\'accés extern a aquest fitxer la verificació podrà funcionar.';
$string['backpackbadges'] = 'Es mostren {$a->totalbadges} insígnia(es) de {$a->totalcollections} col·lecció(ons). <a href="mybackpack.php">Canvia la configuració de la motxilla</a>.';
$string['backpackconnection'] = 'Connexió a la motxilla';
$string['backpackconnection_help'] = 'Aquesta pàgina us permet configurar la connexió a un proveïdor extern de motxilles. Si us hi connecteu podreu mostrar insígnies externes en aquest lloc i pujar a la motxilla les insígnies que guanyeu aquí.

Actualment només hi ha suport per la motxilla de Mozilla, la <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>. Cal que us  registreu en aquest servei de motxilles abans de provar d\'establir la connexió des d\'aquesta pàgina.';
$string['backpackdetails'] = 'Configuració de la motxilla';
$string['backpackemail'] = 'Adreça de correu';
$string['backpackemail_help'] = 'Adreça de correu associada a la vostra motxilla.

Si s\'estableix la connexió amb la motxilla s\'utilitzarà aquesta adreça de correu en lloc de l\'adreça del perfil per pujar les insígnies a la vostra motxilla';
$string['backpackimport'] = 'Configuració de la importació d\'insígnies';
$string['backpackimport_help'] = 'Un cop s\'hagi establert correctament la connexió amb la motxilla les insígnies de la vostra motxilla es podran veure a la pàgina "Les meves insígnies" i a la del perfil.

En aquesta àrea podeu seleccionar les col·leccions d\'insígnies de la vostra motxilla que voleu mostrar al perfil.';
$string['badgedetails'] = 'Detalls de la insígnia';
$string['badgeimage'] = 'Imatge';
