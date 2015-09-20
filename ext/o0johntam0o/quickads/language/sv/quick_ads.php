<?php
/**
*
* Quick Ads extension for the phpBB Forum Software package [Swedish]
*
* @copyright (c) 2014 o0johntam0o
* @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	'QUICK_ADS_TITLE'					=> 'Kvickannons-till�gg',
	'QUICK_ADS_TITLE_SETTINGS1'			=> 'Generella inst�llningar',
	'QUICK_ADS_TITLE_SETTINGS2'			=> 'Detaljerade inst�llningar',

	'QUICK_ADS_ALLOW_BOT'				=> 'Till�t botar',
	'QUICK_ADS_ALLOW_BOT_EXPLAIN'		=> 'Aktivera kvickannonser f�r botar',
	'QUICK_ADS_DENY_ADSBLOCKER'			=> 'Deny Ads Blockers',
	'QUICK_ADS_DENY_ADSBLOCKER_EXPLAIN'	=> 'Prevent user from reading post with Ads Blockers',
	'QUICK_ADS_DENY_ADSBLOCKER_MSG1'	=> 'Please turn your Ads Blocker off to see post content',
	'QUICK_ADS_DENY_ADSBLOCKER_MSG2'	=> 'Please enable the JavaScript to see post content',
	'QUICK_ADS_ZINDEX'					=> 'Z-Index (integer)',
	'QUICK_ADS_ZINDEX_EXPLAIN'			=> 'Placera kvickannonser "bakom" eller "�ver" andra element',
	'QUICK_ADS_CLOSEBT'					=> 'Visa st�ng-knapp',
	'QUICK_ADS_CLOSEBT_EXPLAIN'			=> 'F�r att st�nga kvickannons',
	'QUICK_ADS_CLOSEBT_FRAME'			=> 'On each frame',
	'QUICK_ADS_CLOSEBT_ADS'				=> 'On each Ads',
	'QUICK_ADS_COOKIE'					=> 'Aktivera cookie',
	'QUICK_ADS_COOKIE_EXPLAIN'			=> 'F�r att spara visningsstatusen f�r annons',
	'QUICK_ADS_COOKIE_TIME'				=> 'Cookie-tid (integer)',
	'QUICK_ADS_COOKIE_TIME_EXPLAIN'		=> 'Hur l�nge ska annonsen d�ljas (i minuter)',

	'QUICK_ADS_LEGEND'					=> '%s [%d]',
	'QUICK_ADS_ITEM_TOGGLE'				=> 'Klicka f�r att d�lja',
	'QUICK_ADS_MORE_PROP'				=> '<em style="color:#0000ff">Avancerat</em> (klicka f�r att d�lja)',
	'QUICK_ADS_NAME'					=> 'Annonsben�mning',
	'QUICK_ADS_NAME_EXPLAIN'			=> 'Omben�mn denna annons',
	'QUICK_ADS_POS'						=> 'Position',
	'QUICK_ADS_POS_EXPLAIN'				=> 'V�lj position f�r denna annons<br/>V�lj f�rsta v�rdet f�r att d�lja denna annons',
	'QUICK_ADS_TOP'						=> 'Topp',
	'QUICK_ADS_LEFT'					=> 'V�nster',
	'QUICK_ADS_BOTTOM'					=> 'Botten',
	'QUICK_ADS_RIGHT'					=> 'H�ger',
	'QUICK_ADS_TOP_STATIC'				=> 'Topp (Static)',
	'QUICK_ADS_BOTTOM_STATIC'			=> 'Botten (Static)',

	'QUICK_ADS_ONPAGE'					=> 'P� sidor',
	'QUICK_ADS_ONPAGE_EXPLAIN'			=> 'Vilken sida ska visa denna annons',
	'QUICK_ADS_ONPAGE_ITEM_FAQ'			=> 'Ofta st�llda fr�gor (FAQ)',
	'QUICK_ADS_ONPAGE_ITEM_INDEX'		=> 'Index',
	'QUICK_ADS_ONPAGE_ITEM_MCP'			=> 'Moderatorkontrollpanelen (MCP)',
	'QUICK_ADS_ONPAGE_ITEM_MEMBERLIST'	=> 'Medlemslistan',
	'QUICK_ADS_ONPAGE_ITEM_POSTING'		=> 'Nytt inl�gg/svar',
	'QUICK_ADS_ONPAGE_ITEM_REPORT'		=> 'Rapport',
	'QUICK_ADS_ONPAGE_ITEM_SEARCH'		=> 'S�k',
	'QUICK_ADS_ONPAGE_ITEM_UCP'			=> 'Anv�ndarkontrollpanel (UCP)',
	'QUICK_ADS_ONPAGE_ITEM_VIEWFORUM'	=> 'Forum',
	'QUICK_ADS_ONPAGE_ITEM_VIEWONLINE'	=> 'Vem �r online',
	'QUICK_ADS_ONPAGE_ITEM_VIEWTOPIC'	=> '�mnen',
	// Custom pages
	// 'QUICK_ADS_ONPAGE_ITEM_YOUR_STUFF'	=> 'Your stuff',
	// Custom pages

	'QUICK_ADS_GROUP'					=> 'Gruppbeh�righet',
	'QUICK_ADS_GROUP_EXPLAIN'			=> 'Vilken grupp kan se denna annons',
	'QUICK_ADS_HREF'					=> 'L�nk',
	'QUICK_ADS_HREF_EXPLAIN'			=> 'Vilken l�nk ska �ppnas n�r annonsen klickas',

	'QUICK_ADS_BG_IMG'					=> 'Bakgrundsbild',
	'QUICK_ADS_BG_IMG_EXPLAIN'			=> 'L�nk till bild (www)',
	'QUICK_ADS_BG_COLOR'				=> 'Bakgrundsf�rg',
	'QUICK_ADS_BG_COLOR_EXPLAIN'		=> 'Exempel: #ffffff, #000000, white, black,...',

	'QUICK_ADS_TEXT'					=> 'Annonstext',
	'QUICK_ADS_TEXT_EXPLAIN'			=> 'Meddelande (JS/HTML till�tet).
											<br/>Du kan �ven anv�nda variablerna nedan:
											<br/><em>{S_USERNAME}</em> = <em>%s</em>
											<br/><em>{S_USER_ID}</em> = <em>%s</em>
											<br/><em>{S_CURRENT_TIME}</em> = <em>%s</em>
											<br/><em>{SITE_URL}</em> = <em>%s</em>
											<br/><em>{FORUM_URL}</em> = <em>%s</em>
											<br/><em>{SITENAME}</em> = <em>%s</em>
											<br/><em>{SITE_DESCRIPTION}</em> = <em>%s</em>',
	'QUICK_ADS_SIZE'					=> 'Storlek (integer)',
	'QUICK_ADS_SIZE_EXPLAIN'			=> 'Annonsens storlek (bredd x h�jd) i pixel. Noll (0) betyder "auto"',
	'QUICK_ADS_MSIZE'					=> 'Minimal storlek (integer)',
	'QUICK_ADS_MSIZE_EXPLAIN'			=> 'Minimal sk�rmstorlek f�r webbl�sare som ska visa annonsen (bredd x h�jd) i pixel',
	'QUICK_ADS_OVERF'					=> 'Overflow',
	'QUICK_ADS_OVERF_EXPLAIN'			=> 'Vad ska h�nda om elementets inneh�ll �r st�rre �n dess tillordnade omr�de?',
	'QUICK_ADS_OVERF_HIDDEN'			=> 'D�lj',
	'QUICK_ADS_OVERF_VISIBLE'			=> 'Visa',
	'QUICK_ADS_OVERF_SCROLL'			=> 'Skrolla',
	'QUICK_ADS_OVERF_AUTO'				=> 'Auto',
	'QUICK_ADS_BORDER'					=> 'Border style',
	'QUICK_ADS_BORDER_EXPLAIN'			=> 'Border around this Ads',
	'QUICK_ADS_BORDER0'					=> 'None',
	'QUICK_ADS_BORDER1'					=> 'Solid',
	'QUICK_ADS_BORDER2'					=> 'Dotted',
	'QUICK_ADS_BORDER3'					=> 'Dashed',
	'QUICK_ADS_PRIORITY'				=> 'Prioritet (integer)',
	'QUICK_ADS_PRIORITY_EXPLAIN'		=> 'Ju <strong>l�gre</strong> v�rde, desto <strong>h�gre</strong> prioritet',

	'QUICK_ADS_NEW_ADS'					=> 'Ny annons',
	'QUICK_ADS_NEW_ADS_NAME'			=> 'Annonsben�mning',
	'QUICK_ADS_DEL_ADS'					=> '<strong>Delete this Ads</strong>',
	'QUICK_ADS_DEL_ADS_CONFIRM'			=> 'Do you really want to delete this Ads?<br/><strong style="color:#ff0000">Note: this action can not be undo</strong>',
	'QUICK_ADS_DEL_ADS_DELETED'			=> 'Deleted!',

	'QUICK_ADS_SAVED'					=> 'Kvickannons-inst�llningarna �ndrades',
	'QUICK_ADS_LOG_MSG'					=> '<strong>Kvickannons-inst�llningarna �ndrades</strong>',
));
