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
	'ADBLOCKER_TITLE'	=> 'Bloqueur de publicités détecté',
	'ADBLOCKER_MESSAGE'	=> 'Notre site Web est conçu pour afficher des publicités en ligne aux visiteurs. Merci de considérer l’importance de l’affichage des publicités sur notre site Web en désactivant votre logiciel antipublicitaire sur notre forum.',

	'ADVERTISEMENT'		=> 'Publicité',
	'HIDE_AD'			=> 'Masquer la publicité',

	'VISUAL_DEMO'			=> 'La démonstration visuelle des emplacements publicitaires est active',
	'DISABLE_VISUAL_DEMO'	=> 'Cliquer pour désactiver la démonstration visuelle.',
	'DISABLE_VISUAL_DEMO_ERROR'	=> 'Un problème a été rencontré pour effectuer cette tâche. Merci d’essayer à nouveau de désactiver de la démonstration visuelle.',

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
	'AD_AFTER_HEADER_NAVBAR'		=> 'En dessous de la barre de navigation de l’entête',
	'AD_AFTER_HEADER_NAVBAR_DESC'	=> 'Permet d’afficher la publicité sur chaque page en dessous de la barre de navigation de l’entête du forum.',
	'AD_AFTER_FOOTER_NAVBAR'		=> 'En dessous de la barre de navigation du pied de page',
	'AD_AFTER_FOOTER_NAVBAR_DESC'	=> 'Permet d’afficher la publicité sur chaque page en dessous de la barre de navigation du pied de page du forum.',
	'AD_POP_UP'						=> 'Pop-up',
	'AD_POP_UP_DESC'				=> 'Permet d’afficher la publicité un fois par jour en superposition du forum. L’utilisateur devra fermer la fenêtre pour continuer sa visite du forum. Merci de considérer que ce type d’affichage est intrusif pour l’utilisateur !',
	'AD_SLIDE_UP'					=> 'Défilement vers le haut',
	'AD_SLIDE_UP_DESC'				=> 'Permet d’afficher la publicité sur chaque page lorsque l’utilisateur fait défiler la page vers le bas. La publicité défile vers le haut en partant du bas de la page, au centre.',
));
