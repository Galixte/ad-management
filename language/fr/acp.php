<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Manage ads
	'AD_NAME'				=> 'Nom',
	'AD_NAME_EXPLAIN'		=> 'Permet de saisir un nom pour identifier cette publicité.',
	'AD_ENABLED'			=> 'Activation',
	'AD_ENABLED_EXPLAIN'	=> 'Permet d’activer / désactiver l’affichage de cette publicité.',
	'AD_END_DATE'			=> 'Date d’expiration',
	'AD_END_DATE_EXPLAIN'	=> 'Permet de saisir la date d’expiration après laquelle l’affichage de cette publicité sera désactivé. Laisser ce champ vide pour afficher indéfiniment cette publicité. Il est nécessaire d’utiliser le format suivant :<samp>AAAA-MM-JJ</samp>.',
	'AD_PRIORITY'			=> 'Niveau de priorité',
	'AD_PRIORITY_EXPLAIN'	=> 'Permet de saisir une valeur comprise entre 1 & 10 correspondant au niveau de priorité. Les publicités ayant un niveau de priorité plus élevé s’afficheront plus souvent.',
	'AD_NOTE'				=> 'Notes',
	'AD_NOTE_EXPLAIN'		=> 'Permet de saisir des annotations à propos de cette publicité. Ces notes ne seront pas affichées à l’exception de l’administration du forum dans la gestion des publicités.',
	'AD_CODE'				=> 'Code',
	'AD_CODE_EXPLAIN'		=> 'Permet de saisir le code de cette publicité. Le code doit utiliser des balises HTML, les BBCodes ne sont pas pris en charge.',
	'AD_LOCATIONS'			=> 'Emplacements',
	'AD_LOCATIONS_EXPLAIN'	=> 'Permet de sélectionner les emplacements où cette publicité sera affichée. Au survol de la souris sur un emplacement une courte description s’affichera. Si plusieurs publicités utilisent le même emplacement, une seule d’entre elles sera sélectionnée aléatoirement pour être affichée à cet emplacement lors du chargement de la page.<br />Il est nécessaire d’utiliser la combinaison de la touche CTRL et du clic gauche (touche CMD + clic sur Mac) pour sélectionner/désélectionner plusieurs emplacements.',
	'AD_ENABLE_TITLE'		=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Cliquer pour activer',
		1 => 'Cliquer pour désactiver',
	),
	'AD_EXPIRED_EXPLAIN'	=> 'Cette publicité a expiré ou a été désactivée.',
	'ACP_ADS_EMPTY'			=> 'Il n’a aucune publicité configurée. Pour en ajouter une cliquer sur le bouton ci-dessous.',
	'ACP_ADS_ADD'			=> 'Ajouter une nouvelle publicité',
	'ACP_ADS_EDIT'			=> 'Modifier une publicité',
	'AD_PREVIEW'			=> 'Aperçu de cette publicité',
	'CONFIGURE_AD'			=> 'Configurer cette publicité',

	'AD_NAME_REQUIRED'			=> 'Un nom est requis.',
	'AD_NAME_TOO_LONG'			=> 'La longueur du nom est limité à %d caractères.',
	'AD_END_DATE_INVALID'		=> 'La date limite d’expiration est incorrecte ou déjà expiré.',
	'AD_PRIORITY_INVALID'		=> 'Ce niveau de priorité est incorrect. Merci de saisir un nombre compris entre 1 & 10.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'Cette publicité n’existe pas.',
	'ACP_AD_ADD_SUCCESS'		=> 'Publicité ajoutée avec succès.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Publicité modifiée avec succès.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Publicité supprimée avec succès.',
	'ACP_AD_DELETE_ERRORED'		=> 'Il y a une erreur durant la suppression de cette publicité.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Publicité activée avec succès.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Il y a eu une erreur durant l’activation de cette publicité.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Publicité désactivée avec succès.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Il y a eu une erreur durant la désactivation de cette publicité.',

	// Template locations
	'AD_ABOVE_HEADER'				=> 'Au-dessus de l’entête',
	'AD_ABOVE_HEADER_DESC'			=> 'Permet d’afficher la publicité sur chaque page au-dessus de l’entête du forum.',
	'AD_BELOW_HEADER'				=> 'En dessous de l’entête',
	'AD_BELOW_HEADER_DESC'			=> 'Permet d’afficher la publicité sur chaque page en dessous de l’entête du forum (et au-dessus de la barre de navigation).',
	'AD_BEFORE_POSTS'				=> 'Au-dessus des messages',
	'AD_BEFORE_POSTS_DESC'			=> 'Permet d’afficher la publicité sur la page de la vue du sujet au-dessus du premier message.',
	'AD_AFTER_POSTS'				=> 'En dessous des messages',
	'AD_AFTER_POSTS_DESC'			=> 'Permet d’afficher la publicité sur la page de la vue du sujet en dessous du dernier message.',
	'AD_BELOW_FOOTER'				=> 'En dessous du pied de page',
	'AD_BELOW_FOOTER_DESC'			=> 'Permet d’afficher la publicité sur chaque page en dessous du pied de page du forum.',
	'AD_ABOVE_FOOTER'				=> 'Au-dessus du pied de page',
	'AD_ABOVE_FOOTER_DESC'			=> 'Permet d’afficher la publicité sur chaque page au-dessus du pied de page du forum.',
	'AD_AFTER_FIRST_POST'			=> 'En dessous du premier message',
	'AD_AFTER_FIRST_POST_DESC'		=> 'Permet d’afficher la publicité sur la page de la vue du sujet en dessous du premier message.',
	'AD_AFTER_NOT_FIRST_POST'		=> 'En dessous de chaque message excepté le premier',
	'AD_AFTER_NOT_FIRST_POST_DESC'	=> 'Permet d’afficher la publicité sur la page de la vue du sujet en dessous de chaque message excepté le premier.',
	'AD_BEFORE_PROFILE'				=> 'Au-dessus du profil',
	'AD_BEFORE_PROFILE_DESC'		=> 'Permet d’afficher la publicité sur la page du profil du membre au-dessus du contenu.',
	'AD_AFTER_PROFILE'				=> 'En dessous du profil',
	'AD_AFTER_PROFILE_DESC'			=> 'Permet d’afficher la publicité sur la page du profil du membre en dessous du contenu.',

	// Settings
	'ADBLOCKER_MESSAGE'				=> 'Message d’avertissement lors de la détection d’un bloqueur de publicités',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Permet de saisir un message de politesse adressé aux visiteurs utilisant un logiciel antipublicitaire, les avertissant de l’importance de désactiver leur bloqueur de publicités sur ce forum.',
	'HIDE_GROUPS'					=> 'Masquer les publicités aux groupes',
	'HIDE_GROUPS_EXPLAIN'			=> 'Permet de sélectionner les groupes de membres qui ne verront pas les publicités.<br />Il est nécessaire d’utiliser la combinaison de la touche CTRL et du clic gauche (touche CMD + clic sur Mac) pour sélectionner/désélectionner plusieurs groupes.',

	'ACP_AD_SETTINGS_SAVED'	=> 'Les paramètres de gestion des publicités ont été sauvegardés.',
));
