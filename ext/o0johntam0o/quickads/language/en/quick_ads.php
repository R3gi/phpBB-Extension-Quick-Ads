<?php
/**
*
* Quick Ads extension for the phpBB Forum Software package [British English]
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
	'QUICK_ADS_TITLE'					=> 'Quick Ads Extension',
	'QUICK_ADS_TITLE_SETTINGS1'			=> 'General settings',
	'QUICK_ADS_TITLE_SETTINGS2'			=> 'Details settings',
	
	'QUICK_ADS_ALLOW_BOT'				=> 'Allow bots',
	'QUICK_ADS_ALLOW_BOT_EXPLAIN'		=> 'Enable Quick Ads for bots',
	'QUICK_ADS_CUSTOM_ID'				=> 'Custom ID',
	'QUICK_ADS_CUSTOM_ID_EXPLAIN'		=> 'Use <em style="color:#ff0000">a-z</em>, <em style="color:#ff0000">0-9</em> and <em style="color:#ff0000">underline</em> only (Leave blank to use the default value). Example: my_custom_id_123',
	'QUICK_ADS_ZINDEX'					=> 'Z-Index (Integer)',
	'QUICK_ADS_ZINDEX_EXPLAIN'			=> 'Place Quick Ads "behind" or "above" another element',
	'QUICK_ADS_CLOSEBT'					=> 'Show close button',
	'QUICK_ADS_CLOSEBT_EXPLAIN'			=> 'To close Ads',
	'QUICK_ADS_CLOSEBT_FRAME'			=> 'On each frame',
	'QUICK_ADS_CLOSEBT_ADS'				=> 'On each Ads',
	'QUICK_ADS_COOKIE'					=> 'Enable cookie',
	'QUICK_ADS_COOKIE_EXPLAIN'			=> 'To store the display status of Ads',
	'QUICK_ADS_COOKIE_TIME'				=> 'Cookie time (Integer)',
	'QUICK_ADS_COOKIE_TIME_EXPLAIN'		=> 'How long the Ads will be hidden (By minute)',

	'QUICK_ADS_LEGEND'					=> '%s [%d]',
	'QUICK_ADS_ITEM_TOGGLE'				=> 'Click to toggle',
	'QUICK_ADS_MORE_PROP'				=> '<em style="color:#0000ff">Advanced</em> (Click to toggle)',
	'QUICK_ADS_NAME'					=> 'Ads name',
	'QUICK_ADS_NAME_EXPLAIN'			=> 'Rename this Ads',
	'QUICK_ADS_POS'						=> 'Position',
	'QUICK_ADS_POS_EXPLAIN'				=> 'Set position for this Ads<br/>Choose first value to hide this Ads',
	'QUICK_ADS_TOP'						=> 'Top',
	'QUICK_ADS_LEFT'					=> 'Left',
	'QUICK_ADS_BOTTOM'					=> 'Bottom',
	'QUICK_ADS_RIGHT'					=> 'Right',
	
	'QUICK_ADS_ONPAGE'					=> 'On pages',
	'QUICK_ADS_ONPAGE_EXPLAIN'			=> 'Which page will show this ads',
	'QUICK_ADS_ONPAGE_ITEM_FAQ'			=> 'Frequently asked questions (FAQ)',
	'QUICK_ADS_ONPAGE_ITEM_INDEX'		=> 'Index',
	'QUICK_ADS_ONPAGE_ITEM_MCP'			=> 'Moderator control panel (MCP)',
	'QUICK_ADS_ONPAGE_ITEM_MEMBERLIST'	=> 'Member list',
	'QUICK_ADS_ONPAGE_ITEM_POSTING'		=> 'Posting',
	'QUICK_ADS_ONPAGE_ITEM_REPORT'		=> 'Report',
	'QUICK_ADS_ONPAGE_ITEM_SEARCH'		=> 'Search',
	'QUICK_ADS_ONPAGE_ITEM_UCP'			=> 'User control panel (UCP)',
	'QUICK_ADS_ONPAGE_ITEM_VIEWFORUM'	=> 'View forum',
	'QUICK_ADS_ONPAGE_ITEM_VIEWONLINE'	=> 'View online',
	'QUICK_ADS_ONPAGE_ITEM_VIEWTOPIC'	=> 'View topic',
	// Custom pages
	// 'QUICK_ADS_ONPAGE_ITEM_YOUR_STUFF'	=> 'Your stuff',
	// Custom pages
	
	'QUICK_ADS_GROUP'					=> 'Group permission',
	'QUICK_ADS_GROUP_EXPLAIN'			=> 'Which group can see this Ads',
	'QUICK_ADS_HREF'					=> 'Link',
	'QUICK_ADS_HREF_EXPLAIN'			=> 'Which link will be opened when clicking on this Ads',
	
	'QUICK_ADS_BG_IMG'					=> 'Background image',
	'QUICK_ADS_BG_IMG_EXPLAIN'			=> 'Link to an image (www)',
	'QUICK_ADS_BG_COLOR'				=> 'Background color',
	'QUICK_ADS_BG_COLOR_EXPLAIN'		=> 'Example: #ffffff, #000000, white, black,...',
	
	'QUICK_ADS_TEXT'					=> 'Ads text',
	'QUICK_ADS_TEXT_EXPLAIN'			=> 'The body of the message (JS/HTML allowed).
											<br/>You can also use variables listed below:
											<br/><em>{S_USERNAME}</em> = <em>%s</em>
											<br/><em>{S_USER_ID}</em> = <em>%s</em>
											<br/><em>{S_CURRENT_TIME}</em> = <em>%s</em>
											<br/><em>{SITE_URL}</em> = <em>%s</em>
											<br/><em>{FORUM_URL}</em> = <em>%s</em>
											<br/><em>{SITENAME}</em> = <em>%s</em>
											<br/><em>{SITE_DESCRIPTION}</em> = <em>%s</em>',
	'QUICK_ADS_SIZE'					=> 'Size (Integer)',
	'QUICK_ADS_SIZE_EXPLAIN'			=> 'Set size for this Ads (Width x Height) pixel. Zero (0) means auto',
	'QUICK_ADS_MSIZE'					=> 'Minimum size (Integer)',
	'QUICK_ADS_MSIZE_EXPLAIN'			=> 'Set minimum size of browser window to show this Ads (Width x Height) pixel',
	'QUICK_ADS_OVERF'					=> 'Overflow',
	'QUICK_ADS_OVERF_EXPLAIN'			=> 'Sets what happens if the content of an element overflow its area',
	'QUICK_ADS_OVERF_HIDDEN'			=> 'Hidden',
	'QUICK_ADS_OVERF_VISIBLE'			=> 'Visible',
	'QUICK_ADS_OVERF_SCROLL'			=> 'Scroll',
	'QUICK_ADS_OVERF_AUTO'				=> 'Auto',
	'QUICK_ADS_PRIORITY'				=> 'Priority (Integer)',
	'QUICK_ADS_PRIORITY_EXPLAIN'		=> 'The <strong>lower</strong> number, the <strong>higher</strong> priority',

	'QUICK_ADS_NEW_ADS'					=> 'New Ads',
	'QUICK_ADS_NEW_ADS_NAME'			=> 'Ads name',
	'QUICK_ADS_DEL_ADS'					=> '<strong>Delete this Ads</strong>',
	'QUICK_ADS_DEL_ADS_CONFIRM'			=> 'Do you really want to delete this Ads?<br/><strong style="color:#ff0000">Note: this action can not be undo</strong>',
	'QUICK_ADS_DEL_ADS_DELETED'			=> 'Deleted!',
	
	'QUICK_ADS_SAVED'					=> 'Quick Ads settings updated',
	'QUICK_ADS_LOG_MSG'					=> '<strong>Altered Quick Ads settings</strong>',
));
