<?php
/**
*
* @package Board3 Portal v2.3 - Birthday List
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
* French translation by Galixte (https://www.galixte.com)
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
	$lang = [];
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

$lang = array_merge($lang, [
	'BIRTHDAYS_AHEAD'              => 'Durant les %s prochains jours',
	'NO_BIRTHDAYS_AHEAD'        => 'Aucun membre ne fête son anniversaire pendant cette période.',

	// ACP
	'ACP_PORTAL_BIRTHDAYS_SETTINGS'			=> 'Paramètres des anniversaires',
	'ACP_PORTAL_BIRTHDAYS_SETTINGS_EXP'	=> 'Ici vous personnalisez le bloc des anniversaires.',
	'PORTAL_BIRTHDAYS'						=> 'Bloc des anniversaires',
	'PORTAL_BIRTHDAYS_AHEAD'				=> 'Anniversaires à venir',
	'PORTAL_BIRTHDAYS_AHEAD_EXP'		=> 'Nombre de jours à afficher pour les anniversaires à venir.<br />"0" désactive la liste des anniversaires à venir.',
]);
