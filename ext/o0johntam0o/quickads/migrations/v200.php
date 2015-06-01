<?php
/**
*
* Quick Ads extension for the phpBB Forum Software package
*
* @copyright (c) 2014 o0johntam0o
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace o0johntam0o\quickads\migrations;

class v200 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['quick_ads_version']) && version_compare($this->config['quick_ads_version'], '2.0.0', '>=');
	}
	
	public function update_data()
	{
		return array(
			array('config.add', array('quick_ads_version', '2.0.0')),
			
			array('config.add', array('quick_ads_allow_bot', 0)),
			array('config.add', array('quick_ads_custom_id', 'quick_ads_')),
			array('config.add', array('quick_ads_zindex', 100)),
			array('config.add', array('quick_ads_closebt', 1)),	// 0 = Disable; 1 = On each frame; 2 = On each Ads
			array('config.add', array('quick_ads_cookie', 1)),
			array('config.add', array('quick_ads_cookie_time', 5)),
			array('config.add', array('quick_ads_wmin_left', 0)),
			array('config.add', array('quick_ads_hmin_left', 0)),
			array('config.add', array('quick_ads_wmin_right', 0)),
			array('config.add', array('quick_ads_hmin_right', 0)),
			array('config.add', array('quick_ads_wmin_top', 0)),
			array('config.add', array('quick_ads_hmin_top', 0)),
			array('config.add', array('quick_ads_wmin_bottom', 0)),
			array('config.add', array('quick_ads_hmin_bottom', 0)),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'QUICK_ADS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'QUICK_ADS_TITLE',
				array(
					'module_basename'   => '\o0johntam0o\quickads\acp\main_module',
					'modes'             => array('quick_ads_config', 'quick_ads_config_details'),
				),
			)),
		);
	}
	
	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
				$this->table_prefix . 'quick_ads'	=> array(
					'COLUMNS'		=> array(
						'ads_id'			=> array('UINT', NULL, 'auto_increment'),
						'ads_name'			=> array('VCHAR', 'Undefined'),
						'ads_group'			=> array('VCHAR', '1,2,3,4,5,7'),
						'ads_pos'			=> array('INT:1', 2),	// 0 = disable, 1 = top, 2 = bottom, 3 = left, 4 = right, 5 = top (static), 6 = bottom (static)
						'ads_onpage'		=> array('VCHAR', 'faq,index,mcp,memberlist,posting,report,search,ucp,viewforum,viewonline,viewtopic'),
						'ads_text'			=> array('MTEXT_UNI', ''),
						'ads_href'			=> array('VCHAR', ''),
						'ads_bg_img'		=> array('VCHAR', ''),
						'ads_bg_color'		=> array('VCHAR', 'transparent'),
						'ads_width'			=> array('INT:4', 50),
						'ads_height'		=> array('INT:4', 50),
						'ads_border'		=> array('INT:1', 1),	// 0 = none, 1 = solid, 2 = dotted, 3 = dashed
						'ads_overf'			=> array('INT:1', 0),	// 0 = hidden, 1 = visible, 2 = scroll, 3 = auto
						'ads_priority'		=> array('INT:2', 99),
					),
					'PRIMARY_KEY'	=> 'ads_id',
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'quick_ads',
			),
		);
	}
}
