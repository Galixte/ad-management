<?php
/**
 *
 * Advertisement Management. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// Manage ads
	'AD_SETTINGS'				=> 'Paramètres',
	'ACTIVE_ADS'				=> 'Publicité activée',
	'EXPIRED_ADS'				=> 'Publicité désactivée',
	'STATUS'					=> 'Statut',
	'AD_NAME'					=> 'Nom',
	'AD_NAME_EXPLAIN'			=> 'Permet de saisir un nom pour identifier cette publicité.',
	'AD_ENABLED'				=> 'Activation',
	'AD_ENABLED_EXPLAIN'		=> 'Permet d’activer / désactiver l’affichage de cette publicité.',
	'AD_NOTE'					=> 'Notes',
	'AD_NOTE_EXPLAIN'			=> 'Permet de saisir des annotations à propos de cette publicité. Ces notes sont optionnelles et ne seront pas affichées à l’exception de la gestion des publicités dans l’administration du forum.',
	'AD_CODE'					=> 'Code',
	'AD_CODE_EXPLAIN'			=> 'Permet de saisir le code de cette publicité. Le code doit utiliser des balises HTML, les BBCodes ne sont pas pris en charge.',
	'ANALYSE_AD_CODE'			=> 'Analyser le code de la publicité',
	'EVERYTHING_OK'				=> 'Le code apparait comme conforme.',
	'AD_BANNER'					=> 'Bannière de la publicité',
	'BANNER'					=> 'Transférer une bannière',
	'BANNER_EXPLAIN'			=> 'Permet d’envoyer un fichier image au format JPG, GIF ou PNG. L’image sera sauvegardée dans le répertoire <samp>images</samp> de phpBB et une balise HTML IMG pour l’image sera automatiquement insérée dans le champ du code publicitaire.',
	'BANNER_UPLOAD'				=> 'Transférer une bannière',
	'AD_PLACEMENT'				=> 'Emplacement de la publicité',
	'AD_LOCATIONS'				=> 'Emplacements',
	'AD_LOCATIONS_EXPLAIN'		=> 'Permet de sélectionner les emplacements où cette publicité sera affichée. Au survol de la souris sur un emplacement une courte description s’affichera. Si plusieurs publicités utilisent le même emplacement, une seule d’entre elles sera sélectionnée aléatoirement pour être affichée à cet emplacement lors du chargement de la page.<br />Il est nécessaire d’utiliser la combinaison de la touche CTRL et du clic gauche (touche CMD + clic sur Mac) pour sélectionner/désélectionner plusieurs emplacements.',
	'AD_LOCATIONS_VISUAL_DEMO'	=> 'Démarrer la démonstration visuelle des emplacements publicitaires',
	'AD_PRIORITY'				=> 'Niveau de priorité',
	'AD_PRIORITY_EXPLAIN'		=> 'Permet de saisir une valeur comprise entre 1 & 10 correspondant au niveau de priorité. Les publicités ayant un niveau de priorité plus élevé s’afficheront plus souvent.',
	'AD_CONTENT_ONLY'			=> 'Afficher uniquement sur les pages de contenu',
	'AD_CONTENT_ONLY_EXPLAIN'	=> 'Permet d’afficher cette publicité uniquement sur les pages ayant du contenu. Elle ne sera pas affichée sur des pages telles que le PCU (Panneau de l’utilisateur), la connexion, l’enregistrement, la rédaction d’un nouveau message & sujet, etc. Certains services de publicités (tel que Google AdSense) requièrent ce dispositif.',
	'AD_OPTIONS'				=> 'Options de la publicité',
	'AD_OWNER'					=> 'Propriétaire',
	'AD_OWNER_EXPLAIN'			=> 'Permet de définir le membre ayant la permission de voir les statistiques sur le nombre de vues et de clics de la publicité depuis la « Panneau de l’utilisateur ».',
	'AD_VIEWS'					=> 'Vues',
	'AD_VIEWS_LIMIT'			=> 'Nombre maximum de vues',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> 'Permet de saisir le nombre de fois que la publicité sera affichée, après lequel celle-ci ne sera plus affichée. Saisir la valeur 0 pour l’afficher indéfiniment.',
	'AD_CLICKS'					=> 'Clics',
	'AD_CLICKS_LIMIT'			=> 'Nombre maximum de clics',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> 'Permet de saisir le nombre maximum de clics autorisés sur la publicité, après lequel celle-ci ne sera plus affichée. Saisir la valeur 0 pour l’afficher indéfiniment.',
	'AD_START_DATE'				=> 'Date de démarrage de l’affichage',
	'AD_START_DATE_EXPLAIN'		=> 'Permet de définir la date de démarrage de l’affichage de la publicité. Laisser de champ vide pour ne pas activer automatiquement l’affichage de la publicité. Merci d’utiliser le format suivant : <samp>AAAA-MM-JJ</samp>.',
	'AD_END_DATE'				=> 'Date d’expiration',
	'AD_END_DATE_EXPLAIN'		=> 'Permet de saisir la date d’expiration après laquelle l’affichage de cette publicité sera désactivé. Laisser ce champ vide pour afficher indéfiniment cette publicité. Il est nécessaire d’utiliser le format suivant : <samp>AAAA-MM-JJ</samp>.',
	'AD_CENTERING'				=> 'Centrer cette publicité automatiquement',
	'AD_CENTERING_EXPLAIN'		=> 'Permet de centrer automatiquement la publicité. Si des problèmes d’affichage sont constatés merci de définir la publicité centrée directement depuis la CSS.',

	'AD_PREVIEW'				=> 'Aperçu de cette publicité',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Cliquer pour activer',
		1 => 'Cliquer pour désactiver',
	),
	'AD_EXPIRED_EXPLAIN'		=> 'Cette publicité a expiré ou a été désactivée.',
	'ACP_ADS_EMPTY'				=> 'Il n’a aucune publicité configurée. Pour en ajouter une cliquer sur le bouton ci-dessous.',
	'ACP_ADS_ADD'				=> 'Ajouter une nouvelle publicité',
	'ACP_ADS_EDIT'				=> 'Modifier une publicité',

	'AD_NAME_REQUIRED'			=> 'Un nom est requis.',
	'AD_NAME_TOO_LONG'			=> 'La longueur du nom est limité à %d caractères.',
	'AD_CODE_ILLEGAL_CHARS'		=> 'Le code de la publicité contient des caractères qui ne sont pas supportés : %s',
	'AD_START_DATE_INVALID'		=> 'La date de démarrage de l’affichage de la publicité a expiré ou est incorrecte.',
	'AD_END_DATE_INVALID'		=> 'La date limite d’expiration est incorrecte ou déjà expiré.',
	'AD_PRIORITY_INVALID'		=> 'Ce niveau de priorité est incorrect. Merci de saisir un nombre compris entre 1 & 10.',
	'AD_VIEWS_LIMIT_INVALID'	=> 'Le nombre limite de vues est incorrect. Merci de saisir une valeur positive.',
	'AD_CLICKS_LIMIT_INVALID'	=> 'Le nombre limite de clics est incorrect. Merci de saisir une valeur positive.',
	'AD_OWNER_INVALID'			=> 'Le propriétaire de la publicité est incorrect. Merci de sélectionner un membre en utilisant le lien « Rechercher un membre ».',
	'NO_FILE_SELECTED'			=> 'Aucun fichier n’a été sélectionné.',
	'CANNOT_CREATE_DIRECTORY'	=> 'Le répertoire <samp>phpbb_ads</samp> ne peut être créé. Merci de contrôler les permissions en écriture sur le répertoire <samp>/images</samp>.',
	'FILE_MOVE_UNSUCCESSFUL'	=> 'Il est impossible de déplacer le fichier dans le répertoire <samp>images/phpbb_ads</samp>.',
	'END_DATE_TOO_SOON'			=> 'La date d’expiration de l’affichage de la publicité est définie avant la date de son démarrage.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'Cette publicité n’existe pas.',
	'ACP_AD_ADD_SUCCESS'		=> 'Publicité ajoutée avec succès.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Publicité modifiée avec succès.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Publicité supprimée avec succès.',
	'ACP_AD_DELETE_ERRORED'		=> 'Il y a une erreur durant la suppression de cette publicité.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Publicité activée avec succès.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Il y a eu une erreur durant l’activation de cette publicité.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Publicité désactivée avec succès.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Il y a eu une erreur durant la désactivation de cette publicité.',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>Contenu mixte</strong><br />Le forum fonctionne depuis une connexion HTTPS sécurisée, cependant le code de la publicité tente de charger du contenu depuis une connexion HTTP non sécurisée. La conséquence de cette situation pour les navigateurs Web est l’affichage d’avertissements à propos de « Contenus mixtes » aux utilisateurs du forum les informant de la présence de contenus non sécurisés sur le forum.',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>Code Javascript asynchrone</strong><br />Le code de cette publicité charge du code JavaScript de manière asynchrone. Cela signifie qu’il bloquera tout autre code Javascript jusqu’à son chargement complet, ayant pour conséquence de dégrader les performances. L’utilisation de l’attribut <samp>async</samp> permet d’améliorer la chargement de la page.',
	'ALERT_USAGE'			=> '<strong>Utilisation de <samp>alert()</samp></strong><br />Le code utilise la fonction <samp>alert()</samp> ce qui n’est pas une pratique conforme et peut distraire les utilisateurs. Certains navigateurs Web peuvent bloquer le chargement de la page et afficher des avertissements aux utilisateurs.',
	'LOCATION_CHANGE'		=> '<strong>Redirection</strong><br />Le code semble rediriger l’utilisateur vers une autre page ou site Web. Les redirections envoient les utilisateurs vers des destinations parfois hasardeuses, voire souvent malveillantes. Merci de s’assurer de l’intégrité de la destination de la redirection dans le code de la publicité.',

	// Template location categories
	'CAT_TOP_OF_PAGE'		=> 'En haut de la page',
	'CAT_BOTTOM_OF_PAGE'	=> 'En bas de la page',
	'CAT_IN_POSTS'			=> 'Dans les messages',
	'CAT_OTHER'				=> 'Autre',
	'CAT_INTERACTIVE'		=> 'Interactive',
	'CAT_SPECIAL'			=> 'Spéciale',

	// Settings
	'ADBLOCKER_LEGEND'				=> 'Bloqueurs de publicités',
	'ADBLOCKER_MESSAGE'				=> 'Message d’avertissement lors de la détection d’un bloqueur de publicités',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Permet d’afficher un message de politesse adressé aux visiteurs utilisant un logiciel antipublicitaire, les avertissant de l’importance de désactiver leur bloqueur de publicités sur ce forum.',
	'CLICKS_VIEWS_LEGEND'			=> 'Suivi et statistiques',
	'ENABLE_VIEWS'					=> 'Compteur de vues',
	'ENABLE_VIEWS_EXPLAIN'			=> 'Permet d’activer le compteur de vues pour chaque publicité affichée. Information : cette fonctionnalité peut augmenter la charge du serveur sur lequel le forum est hébergé, si aucun besoin n’est établi il est préférable de la désactiver.',
	'ENABLE_CLICKS'					=> 'Compteur de clics',
	'ENABLE_CLICKS_EXPLAIN'			=> 'Permet d’activer le compteur de clics pour chaque publicité ayant reçu des clics. Information : cette fonctionnalité peut augmenter la charge du serveur sur lequel le forum est hébergé, si aucun besoin n’est établi il est préférable de la désactiver.',
	'HIDE_GROUPS'					=> 'Masquer la publicité aux groupes',
	'HIDE_GROUPS_EXPLAIN'			=> 'Permet de sélectionner les groupes de membres qui ne verront pas cette publicité.<br />Il est nécessaire d’utiliser la combinaison de la touche CTRL et du clic gauche (touche CMD + clic sur Mac) pour sélectionner/désélectionner plusieurs groupes.',

	'ACP_AD_SETTINGS_SAVED'	=> 'Les paramètres de gestion des publicités ont été sauvegardés.',
));
