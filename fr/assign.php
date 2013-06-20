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
 * Strings for component 'assign', language 'fr', branch 'MOODLE_25_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Vous avez des devoirs qui requièrent votre attention';
$string['addattempt'] = 'Autoriser une autre tentative';
$string['addnewattempt'] = 'Ajouter une tentative';
$string['addnewattemptfromprevious'] = 'Ajouter une tentative basée sur le travail remis précédent';
$string['addnewattemptfromprevious_help'] = 'Ceci copiera le contenu de le travail remis précédent pour vous permettre d\'y travailler.';
$string['addnewattempt_help'] = 'Ceci créera un travail remis vide pour vous permettre d\'y travailler.';
$string['addsubmission'] = 'Remettre un devoir';
$string['allowsubmissions'] = 'Permettre à l\'utilisateur de continuer de remettre des documents pour ce devoir.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails du devoir et le formulaire de remise de document seront disponible dès le <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Autoriser la remise dans';
$string['allowsubmissionsfromdate_help'] = 'Si ce réglage est activé, les participants ne pourront pas remettre de document avant cette date. Dans le cas contraire, ils pourront immédiatement remettre des documents.';
$string['allowsubmissionsfromdatesummary'] = 'Ce devoir acceptera la remise de documents dès le <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permettre la modification des documents remis';
$string['alwaysshowdescription'] = 'Toujours afficher la description';
$string['alwaysshowdescription_help'] = 'Si ce réglage est désactivé, la description du devoir ci-dessus ne sera visible qu\'à partir de la date d\'ouverture du formulaire de remise.';
$string['applytoteam'] = 'Appliquer les notes et le feedback à tout le groupe';
$string['assign:addinstance'] = 'Ajouter un devoir';
$string['assign:exportownsubmission'] = 'Exporter ses propres devoirs remis';
$string['assignfeedback'] = 'Plugin feedback';
$string['assignfeedbackpluginname'] = 'Plugin feedback';
$string['assign:grade'] = 'Évaluer un devoir';
$string['assign:grantextension'] = 'Octroyer des prolongations';
$string['assignmentisdue'] = 'Devoir à effectuer';
$string['assignmentmail'] = '{$a->grader} a donné un feedback pour le travail remis pour « {$a->assignment} ».

Vous pouvez le consulter en annexe à votre travail : {$a->url}';
$string['assignmentmailhtml'] = '{$a->grader} a donné un feedback pour le travail remis pour « <i>{$a->assignment}</i> ».<br /><br />Vous pouvez le consulter en annexe à <a href="{$a->url}">votre travail</a>.';
$string['assignmentmailsmall'] = '{$a->grader} a donné un feedback pour le travail remis pour « {$a->assignment} ». Vous pouvez le consulter en annexe à votre travail';
$string['assignmentname'] = 'Nom du devoir';
$string['assignmentplugins'] = 'Plugins de devoir';
$string['assignmentsperpage'] = 'Devoirs par page';
$string['assign:revealidentities'] = 'Révéler l’identité des étudiants';
$string['assignsubmission'] = 'Plugin de remise';
$string['assignsubmissionpluginname'] = 'Plugin de remise';
$string['assign:submit'] = 'Remettre un devoir';
$string['assign:view'] = 'Afficher un devoir';
$string['attemptheading'] = 'Tentative {$a->attemptnumber} : {$a->submissionsummary}';
$string['attempthistory'] = 'Tentatives précédentes';
$string['attemptnumber'] = 'Numéro de tentative';
$string['attemptreopenmethod'] = 'Réouverture des travaux remis';
$string['attemptreopenmethod_help'] = 'Détermine comment les travaux remis des étudiants sont réouverts. Les options disponibles sont :
<ul>
<li>Jamais - Le travail de l\'étudiant ne peut pas être réouvert.</li>
<li>Manuellement - Le travail de l\'étudiant peut être réouvert par un enseignant.</li>
<li>Automatiquement jusqu\'à réussite - Le travail de l\'étudiant est réouvert automatiquement jusqu\'à ce qu\'il atteigne la note nécessaire pour réussir le devoir, indiquée dans le carnet de note (section Catégories et éléments).</li>
</ul>';
$string['attemptreopenmethod_manual'] = 'Manuellement';
$string['attemptreopenmethod_none'] = 'Jamais';
$string['attemptreopenmethod_untilpass'] = 'Automatiquement jusqu\'à réussite';
$string['attemptsettings'] = 'Réglages de tentative';
$string['availability'] = 'Disponibilité';
$string['backtoassignment'] = 'Retour au devoir';
$string['batchoperationconfirmaddattempt'] = 'Autoriser une autre tentative pour les travaux remis sélectionnés';
$string['batchoperationconfirmgrantextension'] = 'Octroyer une prolongation pour tous les travaux sélectionnés ?';
$string['batchoperationconfirmlock'] = 'Verrouiller tous les travaux sélectionnés ?';
$string['batchoperationconfirmreverttodraft'] = 'Remettre tous les travaux sélectionnés dans l\'état brouillon ?';
$string['batchoperationconfirmunlock'] = 'Déverrouiller tous les travaux sélectionnés ?';
$string['batchoperationlock'] = 'verrouiller les travaux remis';
$string['batchoperationreverttodraft'] = 'remettre à l\'état de brouillon les travaux remis';
$string['batchoperationsdescription'] = 'Avec la sélection...';
$string['batchoperationunlock'] = 'déverrouiller les travaux remis';
$string['blindmarking'] = 'Évaluation à l\'aveugle';
$string['blindmarking_help'] = 'L\'évaluation à l\'aveugle cache aux évaluateurs l\'identité des étudiants. Les réglages de l\'évaluation à l\'aveugle seront verrouillés dès qu\'un travail aura été remis ou une note donnée pour ce devoir.';
$string['changegradewarning'] = 'Ce devoir comporte des travaux évalués. La modification de la note ne déclenchera pas automatiquement le calcul des notes existantes. Pour modifier la note, vous devez ré-évaluer tous les travaux remis.';
$string['choosegradingaction'] = 'Action d\'évaluation';
$string['chooseoperation'] = 'Choisir une opération';
$string['comment'] = 'Commentaire';
$string['completionsubmit'] = 'Le participant doit remettre quelque chose pour terminer cette activité';
$string['configshowrecentsubmissions'] = 'Tout le monde peut voir les notifications de remise dans les rapports d\'activité récente.';
$string['confirmbatchgradingoperation'] = 'Voulez-vous vraiment {$a->operation} pour {$a->count} étudiants ?';
$string['confirmsubmission'] = 'Voulez-vous vraiment remettre votre travail pour évaluation ? Vous ne pourrez plus effectuer de changement.';
$string['conversionexception'] = 'Impossible de convertir le devoir. Exception retournée : {$a}.';
$string['couldnotconvertgrade'] = 'Impossible de convertir la note du devoir de l\'utilisateur {$a}';
$string['couldnotconvertsubmission'] = 'Impossible de convertir le travail remis de l\'utilisateur {$a}';
$string['couldnotcreatecoursemodule'] = 'Impossible de créer le module de cours.';
$string['couldnotcreatenewassignmentinstance'] = 'Impossible de créer l\'instance du nouveau devoir.';
$string['couldnotfindassignmenttoupgrade'] = 'Impossible de trouver l\'instance de l\'ancien devoir à mettre à jour.';
$string['currentattempt'] = 'Ceci est la tentative {$a}.';
$string['currentattemptof'] = 'Ceci est la tentative {$a->attemptnumber} ({$a->maxattempts} tentatives autorisées).';
$string['currentgrade'] = 'Note actuelle dans le carnet de notes';
$string['cutoffdate'] = 'Durée limite';
$string['cutoffdatefromdatevalidation'] = 'La date limite doit être ultérieure à la date après laquelle la remise des devoirs est permise.';
$string['cutoffdate_help'] = 'Si cette date est indiquée, le devoir n\'autorisera aucune remise de travail après ce délai, sauf octroi d\'une prolongation.';
$string['cutoffdatevalidation'] = 'La date limite ne peut pas être antérieure au délai de remise.';
$string['defaultplugins'] = 'Réglages par défaut des devoirs';
$string['defaultplugins_help'] = 'Ces réglages définissent les réglages par défaut de tous les nouveaux devoirs.';
$string['defaultteam'] = 'Groupe par défaut';
$string['deleteallsubmissions'] = 'Supprimer tous les travaux remis';
$string['deletepluginareyousure'] = 'Voulez-vous vraiment supprimer le plugin de devoir {$a} ?';
$string['deletepluginareyousuremessage'] = 'Vous êtes sur le point de supprimer totalement le plugin de devoir {$a}. Cette opération supprimera définitivement de la base de données tout ce qui associé à ce plugin de devoir. Voulez-vous vraiment continuer ?';
$string['deletingplugin'] = 'Suppression du plugin {$a}';
$string['description'] = 'Description';
$string['downloadall'] = 'Télécharger tous les travaux remis';
$string['duedate'] = 'À rendre dans';
$string['duedate_help'] = 'Cette date est celle du délai de remise du devoir. La remise des devoirs sera autorisée après cette date, mais les devoirs remis après cette date seront marqués en retard. Pour empêcher la remise de travaux après une certaine date, veuillez indiquer une date limite de remise.';
$string['duedateno'] = 'Pas de date de retour';
$string['duedatereached'] = 'Le délai de remise de ce devoir est passé';
$string['duedatevalidation'] = 'Le délai de remise doit être postérieur à la date à partir de laquelle les remises sont autorisées.';
$string['editaction'] = 'Actions...';
$string['editattemptfeedback'] = 'Modifier la note et le feedback pour la tentative numéro {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Vous modifiez le feedback d\'une tentative précédente. Ceci est la tentative {$a->attemptnumber} sur {$a->totalattempts}.';
$string['editingstatus'] = 'Statut d\'édition';
$string['editsubmission'] = 'Modifier le devoir';
$string['editsubmission_help'] = 'Modifier votre travail remis';
$string['enabled'] = 'Activé';
$string['errornosubmissions'] = 'Il n\'y a pas de devoir remis à télécharger';
$string['errorquickgradingvsadvancedgrading'] = 'Les notes n\'ont pas été enregistrées, car ce devoir utilise actuellement l\'évaluation avancée';
$string['errorrecordmodified'] = 'Les notes n\'ont pas été enregistrées, car quelqu\'un a modifié une ou plusieurs notes depuis que vous avez chargé cette page.';
$string['extensionduedate'] = 'Date de prolongation';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être ultérieure au délai de remise';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être ultérieure à la date après laquelle la remise des devoirs est permise.';
$string['feedback'] = 'Feedback';
$string['feedbackavailablehtml'] = '{$a->username} a donné un feedback pour le travail remis pour « <i>{$a->assignment}</i> ».<br /><br />Vous pouvez le consulter en annexe à <a href="{$a->url}">votre travail</a>.';
$string['feedbackavailablesmall'] = '{$a->username} a donné un feedback pour le devoir {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} a donné un feedback pour le travail remis pour « {$a->assignment} ».

Vous pouvez le consulter en annexe à votre travail : {$a->url}';
$string['feedbackplugin'] = 'Plugin feedback';
$string['feedbackpluginforgradebook'] = 'Le plugin feedback qui transmettra des commentaires au carnet de notes';
$string['feedbackpluginforgradebook_help'] = 'La transmission des commentaires au carnet de notes ne peut pas être effectuée par plusieurs plugins de feedback.';
$string['feedbackplugins'] = 'Plugins de feedback';
$string['feedbacksettings'] = 'Réglages de feedback';
$string['feedbacktypes'] = 'Types de feedback';
$string['filesubmissions'] = 'Remise de fichiers';
$string['filter'] = 'Filtre';
$string['filternone'] = 'Aucun filtre';
$string['filterrequiregrading'] = 'Nécessite évaluation';
$string['filtersubmitted'] = 'Devoir rendu';
$string['gradeabovemaximum'] = 'La note doit être inférieure ou égale à {$a}.';
$string['gradebelowzero'] = 'La note doit être supérieure ou égale à zéro.';
$string['graded'] = 'Noté';
$string['gradedby'] = 'Évalué par';
$string['gradedon'] = 'Évalué le';
$string['gradeoutof'] = 'Note sur {$a}';
$string['gradeoutofhelp'] = 'Note';
$string['gradeoutofhelp_help'] = 'Saisir ici la note pour le travail de l\'étudiant. On peut indiquer des décimales.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} a modifié son travail remis pour le devoir « <em>{$a->assignment}</em> » le {$a->timeupdated}.<br /><br />Le travail remis est <a href="{$a->url}">disponible sur le site web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} a modifié son travail remis pour le devoir {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} a modifié son travail remis pour le devoir « {$a->assignment} » le {$a->timeupdated}.

Ce travail est disponible ici :

{$a->url}';
$string['gradestudent'] = 'Évaluer l\'étudiant : (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Note {$a}';
$string['grading'] = 'Évaluation';
$string['gradingchangessaved'] = 'Les modifications de note ont été enregistrées';
$string['gradingmethodpreview'] = 'Critères d\'évaluation';
$string['gradingoptions'] = 'Options';
$string['gradingstatus'] = 'Statut de l\'évaluation';
$string['gradingstudent'] = 'Évaluation d\'étudiant';
$string['gradingsummary'] = 'Résumé de l\'évaluation';
$string['grantextension'] = 'Octroyer une prolongation';
$string['grantextensionforusers'] = 'Octroyer une prolongation à {$a} étudiants';
$string['groupsubmissionsettings'] = 'Réglages de remises en groupe';
$string['hiddenuser'] = 'Participant';
$string['hideshow'] = 'Cacher/afficher';
$string['instructionfiles'] = 'Fichiers d\'instructions';
$string['invalidfloatforgrade'] = 'La note fournie n\'a pas pu être interprétée : {$a}';
$string['invalidgradeforscale'] = 'La note fournie n\'est pas valide dans le barème actuel';
$string['lastmodifiedgrade'] = 'Dernière modification (note)';
$string['lastmodifiedsubmission'] = 'Dernière modification (travail remis)';
$string['latesubmissions'] = 'Devoirs en retard';
$string['latesubmissionsaccepted'] = 'Seuls les étudiants ayant obtenu une prolongation peuvent encore remettre un travail';
$string['locksubmissionforstudent'] = 'Empêcher la remise d\'autres travaux par l\'étudiant : (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Verrouiller la remise des travaux';
$string['manageassignfeedbackplugins'] = 'Gérer les plugins de feedback des devoirs';
$string['manageassignsubmissionplugins'] = 'Gérer les plugins de remise de travaux des devoirs';
$string['maxattempts'] = 'Nombre maximal de tentatives';
$string['maxattempts_help'] = 'Le nombre maximal de tentatives de remise pouvant être effectuées par un étudiant. Une fois ce nombre atteint, le travail remis ne pourra plus être réouvert.';
$string['maxgrade'] = 'Note maximale';
$string['messageprovider:assign_notification'] = 'Notifications de devoirs';
$string['modulename'] = 'Devoir';
$string['modulename_help'] = 'Le module d\'activité devoir permet à un enseignant de communiquer aux participants des tâches, de récolter des travaux et de leur fournir feedbacks et notes.

Les étudiants peuvent remettre des travaux sous forme numérique (fichiers), par exemple des documents traitement de texte, feuilles de calcul, images, sons ou séquences vidéo. En complément ou en plus, le devoir peut demander aux étudiants de saisir directement un texte. Un devoir peut aussi être utilisé pour indiquer aux étudiants des tâches à effectuer dans le monde réel et ne nécessitant pas la remise de fichiers numériques. Les étudiants peuvent remettre un devoir individuellement ou comme membres d\'un groupe.

Lors de l\'évaluation des devoirs, les enseignants peuvent donner aux étudiants des feedbacks, leur envoyer des fichiers : travaux annotés, documents avec commentaires ou feedbacks audio. Les devoirs peuvent être évalués au moyen d\'une note numérique, d\'un barème spécifique ou d\'une méthode avancée comme une grille d\'évaluation. Les notes définitives sont enregistrées dans le carnet de notes.';
$string['modulenameplural'] = 'Devoirs';
$string['mysubmission'] = 'Mon travail :';
$string['newsubmissions'] = 'Devoirs rendus';
$string['noattempt'] = 'Aucune tentative';
$string['nofiles'] = 'Aucun fichier.';
$string['nograde'] = 'Aucune note.';
$string['nolatesubmissions'] = 'Aucun devoir en retard accepté';
$string['nomoresubmissionsaccepted'] = 'Aucun devoir n\'est plus accepté';
$string['noonlinesubmissions'] = 'Ce devoir ne requiert pas de fichier à remettre de votre part';
$string['nosavebutnext'] = 'Suivant';
$string['nosubmission'] = 'Rien n\'a été déposé pour ce devoir';
$string['nosubmissionsacceptedafter'] = 'Aucun devoir accepté après';
$string['notgraded'] = 'Pas évalué';
$string['notgradedyet'] = 'Pas encore évalué';
$string['notifications'] = 'Notifications';
$string['notsubmittedyet'] = 'Pas encore rendu';
$string['nousersselected'] = 'Aucun utilisateur sélectionné';
$string['numberofdraftsubmissions'] = 'Brouillons';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissionsneedgrading'] = 'Nécessitant évaluation';
$string['numberofsubmittedassignments'] = 'Remis';
$string['numberofteams'] = 'Groupes';
$string['offline'] = 'Aucun travail à remettre requis';
$string['open'] = 'Ouvert';
$string['outlinegrade'] = 'Note : {$a}';
$string['outof'] = '{$a->current} sur {$a->total}';
$string['overdue'] = '<font color="red">Le devoir est en retard de {$a}</font>';
$string['page-mod-assign-view'] = 'Page principale du module devoir';
$string['page-mod-assign-x'] = 'Toute page du module devoir';
$string['participant'] = 'Participant';
$string['pluginadministration'] = 'Administration du devoir';
$string['pluginname'] = 'Devoir';
$string['preventsubmissions'] = 'Empêcher l\'utilisateur de déposer d\'autres travaux pour ce devoir.';
$string['preventsubmissionsshort'] = 'Empêcher la modification des travaux remis';
$string['previous'] = 'Précédent';
$string['quickgrading'] = 'Évaluation rapide';
$string['quickgradingchangessaved'] = 'Les modifications de notes ont été enregistrées';
$string['quickgrading_help'] = 'L\'évaluation rapide vous permet d\'attribuer des notes (et compétences) directement dans le tableau des travaux remis. L\'évaluation rapide n\'est pas compatible avec l\'évaluation avancée et n\'est pas recommandée si plusieurs utilisateurs effectuent l\'évaluation.';
$string['quickgradingresult'] = 'Évaluation rapide';
$string['recordid'] = 'Identifiant';
$string['requireallteammemberssubmit'] = 'Exiger la remise par tous les membres du groupe';
$string['requireallteammemberssubmit_help'] = 'Si ce réglage est activé, tous les membres du groupe doivent cliquer sur le bouton de remise du devoir pour que le travail du groupe soit considéré comme remis. Dans le cas contraire, le travail du groupe sera considéré comme remis dès que l\'un de ses membres clique sur le bouton de remise.';
$string['requiresubmissionstatement'] = 'Demander aux étudiants d\'accepter l\'énoncé de remise pour tous les devoirs';
$string['requiresubmissionstatementassignment'] = 'Demander aux étudiants d\'accepter l\'énoncé de remise pour tous les devoirs';
$string['requiresubmissionstatementassignment_help'] = 'Requiert que les étudiants accepte l\'énoncé pour chaque travail à remettre pour ce devoir.';
$string['requiresubmissionstatement_help'] = 'Lorsque ce réglage est activé, les étudiants doivent accepter l\'énoncé de remise pour tous les devoirs de ce Moodle. Si ce réglage n\'est pas activé, il est possible d\'activer ou non ce réglage dans chaque devoir.';
$string['revealidentities'] = 'Révéler les identités des étudiants';
$string['revealidentitiesconfirm'] = 'Voulez-vous vraiment révéler les identités des étudiants pour ce devoir ? Cette opération ne peut pas être annulée. Une fois les identités révélées, les notes seront transmises au carnet de notes.';
$string['reverttodraft'] = 'Remettre les travaux remis en état de brouillon.';
$string['reverttodraftforstudent'] = 'Remettre à l\'état de brouillon le travail de l\'étudiant : (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Remettre le travail à l\'état de brouillon';
$string['reviewed'] = 'Relu';
$string['saveallquickgradingchanges'] = 'Enregistrer toutes les évaluations rapides';
$string['savechanges'] = 'Enregistrer';
$string['savegradingresult'] = 'Note';
$string['savenext'] = 'Enregistrer et afficher la suite';
$string['scale'] = 'Barème';
$string['selectlink'] = 'Sélectionner...';
$string['selectuser'] = 'Sélectionner {$a}';
$string['sendlatenotifications'] = 'Informer les évaluateurs des travaux en retard';
$string['sendlatenotifications_help'] = 'Si ce réglage est activé, les évaluateurs (normalement les enseignants) recevront un message lorsque les étudiants remettent un travail en retard. La façon dont le message est délivré est configurable.';
$string['sendnotifications'] = 'Informer les évaluateurs des travaux remis';
$string['sendnotifications_help'] = 'Si ce réglage est activé, les évaluateurs (en principe les enseignants) recevront un message chaque fois qu\'un étudiant remet un travail pour ce devoir, qu\'il soit en avance, à temps ou en retard. La méthode d\'envoi des messages est configurable.';
$string['sendsubmissionreceipts'] = 'Envoyer aux étudiants un accusé de réception';
$string['sendsubmissionreceipts_help'] = 'Ce réglage permet d\'activer les accusés de réception pour les étudiants. Les étudiants recevront une notification chaque fois qu\'ils remettent un travail pour un devoir.';
$string['settings'] = 'Réglages du devoir';
$string['showrecentsubmissions'] = 'Afficher les remises récentes';
$string['submission'] = 'Devoir rendu';
$string['submissioncopiedhtml'] = 'Vous avez copié votre travail remis précédent pour <i>{$a->assignment}</i>.<br /><br />
Vous pouvez consulter l\'état de votre <a href="{$a->url}">travail remis</a>.';
$string['submissioncopiedsmall'] = 'Vous avez copié votre travail remis précédent pour <i>{$a->assignment}</i>.';
$string['submissioncopiedtext'] = 'Vous avez copié votre travail remis précédent pour <i>{$a->assignment}</i>.

Vous pouvez consulter l\'état de votre travail remis :

 {$a->url}';
$string['submissiondrafts'] = 'Exiger que les étudiants cliquent sur le bouton Envoyer';
$string['submissiondrafts_help'] = 'Si ce réglage est activé, les étudiants devront explicitement cliquer sur le bouton Envoyer pour confirmer que leur travail est terminé. Cela permet aux étudiants de conserver dans le système une version brouillon de leur travail. Si le réglage est activé après que des étudiants ont déjà remis leur travaux, ceux-ci seront considérés comme définitifs.';
$string['submissioneditable'] = 'L\'étudiant peut modifier ce travail remis';
$string['submissionempty'] = 'Rien n\'a été remis';
$string['submissionnotcopiedinvalidstatus'] = 'Le travail remis n\'a pas été copié, car il a été modifié depuis sa réouverture.';
$string['submissionnoteditable'] = 'L\'étudiant ne peut pas modifier ce travail remis';
$string['submissionnotready'] = 'Ce travail n\'est pas prêt à être remis :';
$string['submissionplugins'] = 'Plugins de remise';
$string['submissionreceipthtml'] = 'Vous avez remis un travail pour le devoir « <i>{$a->assignment}</i> »<br /><br />Vous pouvez consulter l\'état de votre <a href="{$a->url}">travail</a>.';
$string['submissionreceipts'] = 'Envoyer les accusés de réception';
$string['submissionreceiptsmall'] = 'Vous avez remis votre travail pour le devoir {$a->assignment}';
$string['submissionreceipttext'] = 'Vous avez remis un travail pour le devoir « {$a->assignment} ».

Vous pouvez consulter l\'état de votre travail : {$a->url}';
$string['submissions'] = 'Devoirs rendus';
$string['submissionsclosed'] = 'La remise des travaux est terminée';
$string['submissionsettings'] = 'Réglages de la remise des travaux';
$string['submissionslocked'] = 'Le devoir n\'accepte pas la remise des travaux';
$string['submissionslockedshort'] = 'Modifications des travaux remis non autorisées';
$string['submissionsnotgraded'] = 'Travaux non évalués {$a}';
$string['submissionstatement'] = 'Énoncé de remise';
$string['submissionstatementacceptedlog'] = 'Énoncé de remise accepté par l\'utilisateur {$a}';
$string['submissionstatementdefault'] = 'Ce document est le fruit de mon propre travail, excepté les extraits dûment cités de travaux d\'autres personnes.';
$string['submissionstatement_help'] = 'Énoncé de confirmation de remise';
$string['submissionstatus'] = 'Statut des travaux remis';
$string['submissionstatus_'] = 'Pas de travail remis';
$string['submissionstatus_draft'] = 'Brouillon (non remis)';
$string['submissionstatusheading'] = 'État du travail remis';
$string['submissionstatus_marked'] = 'Noté';
$string['submissionstatus_new'] = 'Nouveau travail remis';
$string['submissionstatus_reopened'] = 'Réouvert';
$string['submissionstatus_submitted'] = 'Remis pour évaluation';
$string['submissionsummary'] = '{$a->status}. Dernière modification le {$a->timemodified}';
$string['submissionteam'] = 'Groupe';
$string['submissiontypes'] = 'Types de remise';
$string['submitaction'] = 'Envoyer';
$string['submitassignment'] = 'Remettre un devoir';
$string['submitassignment_help'] = 'Une fois ce travail envoyé, vous ne pourrez plus effectuer de modification.';
$string['submitted'] = 'Devoir rendu';
$string['submittedearly'] = 'Le travail a été remis en avance de {$a}';
$string['submittedlate'] = 'Le travail a été remis en retard de {$a}';
$string['submittedlateshort'] = 'En retard de {$a}';
$string['teamsubmission'] = 'Les étudiants remettent leur travail en groupe';
$string['teamsubmissiongroupingid'] = 'Groupement pour les groupes d\'étudiants';
$string['teamsubmissiongroupingid_help'] = 'Les groupes de ce groupement seront utilisés pour former les groupes d\'étudiants de ce devoir. Si non renseigné, le jeu de groupes par défaut sera utilisé.';
$string['teamsubmission_help'] = 'Si ce réglage est activé, les étudiants seront répartis en groupes, sur la base du jeu de groupes par défaut ou d\'un groupement choisi. Un travail remis en groupe sera partagé par tous les membres du groupe et tous les membres du groupe verront les modifications du devoir effectuées par les autres membres.';
$string['teamsubmissionstatus'] = 'État de la remise en groupe';
$string['textinstructions'] = 'Instructions pour le devoir';
$string['timemodified'] = 'Dernière modification';
$string['timeremaining'] = 'Temps restant';
$string['unlimitedattempts'] = 'Illimité';
$string['unlimitedattemptsallowed'] = 'Nombre illimité de tentatives autorisées.';
$string['unlocksubmissionforstudent'] = 'Permettre la remise de travaux pour l\'étudiant : (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Déverrouiller les remises';
$string['updategrade'] = 'Modifier la note';
$string['updatetable'] = 'Enregistrer et modifier le tableau';
$string['upgradenotimplemented'] = 'La mise à jour n\'est pas implémentée dans le plugin ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Prolongation accordée jusqu\'au : {$a}';
$string['usergrade'] = 'Note utilisateur';
$string['userswhoneedtosubmit'] = 'Utilisateurs devant remettre le travail : {$a}';
$string['viewfeedback'] = 'Afficher le feedback';
$string['viewfeedbackforuser'] = 'Afficher le feedback de l\'utilisateur {$a}';
$string['viewfull'] = 'Afficher la vue complète';
$string['viewfullgradingpage'] = 'Ouvrir la page d\'évaluation complète pour donner des feedbacks';
$string['viewgradebook'] = 'Afficher le carnet de note';
$string['viewgrading'] = 'Consulter/évaluer tous les travaux remis';
$string['viewgradingformforstudent'] = 'Afficher la page d\'évaluation de l\'étudiant : (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Afficher sa propre page de remise de travaux.';
$string['viewownsubmissionstatus'] = 'Afficher sa propre page de l\'état des travaux remis.';
$string['viewrevealidentitiesconfirm'] = 'Afficher la page de confirmation pour révéler les identités des étudiants';
$string['viewsubmission'] = 'Afficher le travail remis';
$string['viewsubmissionforuser'] = 'Afficher le travail remis de l\'étudiant {$a}';
$string['viewsubmissiongradingtable'] = 'Afficher le tableau des notes du devoir';
$string['viewsummary'] = 'Afficher la vue résumée';
