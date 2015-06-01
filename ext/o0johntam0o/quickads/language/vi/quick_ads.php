<?php
/**
*
* Quick Ads extension for the phpBB Forum Software package [Vietnamese]
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
	'QUICK_ADS_TITLE_SETTINGS1'			=> 'Cài đặt tổng quát',
	'QUICK_ADS_TITLE_SETTINGS2'			=> 'Cài đặt chi tiết',
	
	'QUICK_ADS_ALLOW_BOT'				=> 'Cho phép máy tìm kiếm',
	'QUICK_ADS_ALLOW_BOT_EXPLAIN'		=> 'Kích hoạt Quick Ads cho các máy tìm kiếm',
	'QUICK_ADS_CUSTOM_ID'				=> 'Tùy biến ID',
	'QUICK_ADS_CUSTOM_ID_EXPLAIN'		=> 'Chỉ được sử dụng <em style="color:#ff0000">a-z</em>, <em style="color:#ff0000">0-9</em> và <em style="color:#ff0000">dấu gạch chân</em> (Bỏ trống để sử dụng giá trị mặc định). Ví dụ: my_custom_id_123',
	'QUICK_ADS_ZINDEX'					=> 'Z-Index (Dạng số nguyên)',
	'QUICK_ADS_ZINDEX_EXPLAIN'			=> 'Dùng để đặt Quick Ads "bên trên" hoặc "bên dưới" các thành phần khác',
	'QUICK_ADS_CLOSEBT'					=> 'Hiển thị nút đóng',
	'QUICK_ADS_CLOSEBT_EXPLAIN'			=> 'Dùng để đóng các Ads',
	'QUICK_ADS_CLOSEBT_FRAME'			=> 'Trên mỗi khung',
	'QUICK_ADS_CLOSEBT_ADS'				=> 'Trên mỗi Ads',
	'QUICK_ADS_COOKIE'					=> 'Kích hoạt cookie',
	'QUICK_ADS_COOKIE_EXPLAIN'			=> 'Dùng để lưu giữ trạng thái hiển thị của các Ads',
	'QUICK_ADS_COOKIE_TIME'				=> 'Thời gian cookie (Dạng số nguyên)',
	'QUICK_ADS_COOKIE_TIME_EXPLAIN'		=> 'Các Ads sẽ ẩn đi bao trong lâu sau (Tính bằng phút)',

	'QUICK_ADS_LEGEND'					=> '%s [%d]',
	'QUICK_ADS_ITEM_TOGGLE'				=> 'Nhấn vào để chuyển',
	'QUICK_ADS_MORE_PROP'				=> '<em style="color:#0000ff">Thiết lặp nâng cao</em> (Nhấn vào để chuyển)',
	'QUICK_ADS_NAME'					=> 'Tên Ads',
	'QUICK_ADS_NAME_EXPLAIN'			=> 'Đặt lại tên cho Ads này',
	'QUICK_ADS_POS'						=> 'Vị trí',
	'QUICK_ADS_POS_EXPLAIN'				=> 'Đặt vị trí cho Ads này<br/>Chọn giá trị đầu tiên để ẩn Ads này',
	'QUICK_ADS_TOP'						=> 'Trên',
	'QUICK_ADS_LEFT'					=> 'Trái',
	'QUICK_ADS_BOTTOM'					=> 'Dưới',
	'QUICK_ADS_RIGHT'					=> 'Phải',
	'QUICK_ADS_TOP_STATIC'				=> 'Trên (Tĩnh)',
	'QUICK_ADS_BOTTOM_STATIC'			=> 'Dưới (Tĩnh)',
	
	'QUICK_ADS_ONPAGE'					=> 'Chọn trang',
	'QUICK_ADS_ONPAGE_EXPLAIN'			=> 'Những trang nào sẽ hiển thị Ads này',
	'QUICK_ADS_ONPAGE_ITEM_FAQ'			=> 'Câu hỏi thường gặp (FAQ)',
	'QUICK_ADS_ONPAGE_ITEM_INDEX'		=> 'Trang chủ',
	'QUICK_ADS_ONPAGE_ITEM_MCP'			=> 'Bảng điều khiển của điều hành viên (MCP)',
	'QUICK_ADS_ONPAGE_ITEM_MEMBERLIST'	=> 'Danh sách thành viên',
	'QUICK_ADS_ONPAGE_ITEM_POSTING'		=> 'Gửi bài viết',
	'QUICK_ADS_ONPAGE_ITEM_REPORT'		=> 'Báo cáo',
	'QUICK_ADS_ONPAGE_ITEM_SEARCH'		=> 'Tìm kiếm',
	'QUICK_ADS_ONPAGE_ITEM_UCP'			=> 'Bảng điều khiển của thành viên (UCP)',
	'QUICK_ADS_ONPAGE_ITEM_VIEWFORUM'	=> 'Xem chuyên mục',
	'QUICK_ADS_ONPAGE_ITEM_VIEWONLINE'	=> 'Xem thành viên trực tuyến',
	'QUICK_ADS_ONPAGE_ITEM_VIEWTOPIC'	=> 'Xem chủ đề',
	// Custom pages
	// 'QUICK_ADS_ONPAGE_ITEM_YOUR_STUFF'	=> 'Phần của bạn',
	// Custom pages
	
	'QUICK_ADS_GROUP'					=> 'Cấp phép nhóm',
	'QUICK_ADS_GROUP_EXPLAIN'			=> 'Nhóm nào có thể thấy Ads này',
	'QUICK_ADS_HREF'					=> 'Liên kết',
	'QUICK_ADS_HREF_EXPLAIN'			=> 'Liên kết nào sẽ được mở khi nhấn vào Ads này',
	
	'QUICK_ADS_BG_IMG'					=> 'Hình nền',
	'QUICK_ADS_BG_IMG_EXPLAIN'			=> 'Liên kết đến ảnh (www)',
	'QUICK_ADS_BG_COLOR'				=> 'Màu nền',
	'QUICK_ADS_BG_COLOR_EXPLAIN'		=> 'Ví dụ: #ffffff, #000000, white, black,...',
	
	'QUICK_ADS_TEXT'					=> 'Nội dung Ads',
	'QUICK_ADS_TEXT_EXPLAIN'			=> 'Nội dung sẽ hiển thị (cho phép JS/HTML).
											<br/>Bạn cũng có thể sử dụng các biến được liệt kê dưới đây:
											<br/><em>{S_USERNAME}</em> = <em>%s</em>
											<br/><em>{S_USER_ID}</em> = <em>%s</em>
											<br/><em>{S_CURRENT_TIME}</em> = <em>%s</em>
											<br/><em>{SITE_URL}</em> = <em>%s</em>
											<br/><em>{FORUM_URL}</em> = <em>%s</em>
											<br/><em>{SITENAME}</em> = <em>%s</em>
											<br/><em>{SITE_DESCRIPTION}</em> = <em>%s</em>',
	'QUICK_ADS_SIZE'					=> 'Kích thước (Dạng số nguyên)',
	'QUICK_ADS_SIZE_EXPLAIN'			=> 'Kích thước của Ads này (Rộng x Cao) pixel. Số không (0) có nghĩa là tự động',
	'QUICK_ADS_MSIZE'					=> 'Kích thước tối thiểu (Dạng số nguyên)',
	'QUICK_ADS_MSIZE_EXPLAIN'			=> 'Đặt giá trị kích thước tối thiểu của trình duyệt để hiển thị Ads này (Rộng x Cao) pixel',
	'QUICK_ADS_OVERF'					=> 'Chế độ tràng',
	'QUICK_ADS_OVERF_EXPLAIN'			=> 'Chọn điều gì sẽ xảy ra nếu phần nội dung tràng ra ngoài khung chứa',
	'QUICK_ADS_OVERF_HIDDEN'			=> 'Không hiện',
	'QUICK_ADS_OVERF_VISIBLE'			=> 'Hiển thị',
	'QUICK_ADS_OVERF_SCROLL'			=> 'Cuộn lại',
	'QUICK_ADS_OVERF_AUTO'				=> 'Tự động',
	'QUICK_ADS_BORDER'					=> 'Kiểu đường biên',
	'QUICK_ADS_BORDER_EXPLAIN'			=> 'Đường biên quanh Ads này',
	'QUICK_ADS_BORDER0'					=> 'Không có',
	'QUICK_ADS_BORDER1'					=> 'Đường thẳng',
	'QUICK_ADS_BORDER2'					=> 'Dấu chấm',
	'QUICK_ADS_BORDER3'					=> 'Đường đứt khúc',
	'QUICK_ADS_PRIORITY'				=> 'Độ ưu tiên (Dạng số nguyên)',
	'QUICK_ADS_PRIORITY_EXPLAIN'		=> 'Số <strong>càng thấp</strong>, độ ưu tiên <strong>càng cao</strong>',

	'QUICK_ADS_NEW_ADS'					=> 'Thêm Ads',
	'QUICK_ADS_NEW_ADS_NAME'			=> 'Tên Ads',
	'QUICK_ADS_DEL_ADS'					=> '<strong>Xóa Ads này</strong>',
	'QUICK_ADS_DEL_ADS_CONFIRM'			=> 'Bạn có chắc là muốn xóa Ads này?<br/><strong style="color:#ff0000">Lưu ý: hoạt động này không thể phục hồi lại được</strong>',
	'QUICK_ADS_DEL_ADS_DELETED'			=> 'Đã xóa!',
	
	'QUICK_ADS_SAVED'					=> 'Đã cập nhật các tùy chỉnh cho Quick Ads',
	'QUICK_ADS_LOG_MSG'					=> '<strong>Thay đổi cài đặt Quick Ads</strong>',
));
