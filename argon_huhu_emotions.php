<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Argon tafei Emotions
 * Text Domain: argon-tafei-emotions
 * Domain Path: /languages
 * Description: 向 Argon 主题注册来自 jdfcc 的 "塔菲" 评论表情包
 * Version:     1.0
 * Author:      jdfcc
 * Author URI:  https://jdfcc.pro
 * License:     GPLv3+
 */

function add_more_emotions($emotionList)
{
	$assets_dir = plugins_url('assets/', __FILE__);
	array_push(
		$emotionList,
		array(
			'groupname' => '塔菲',
			'list' => array(
				array('type' => 'sticker', 'code' => 'tafei-0', 'src' => $assets_dir . '0.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-1', 'src' => $assets_dir . '1.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-2', 'src' => $assets_dir . '2.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-3', 'src' => $assets_dir . '3.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-4', 'src' => $assets_dir . '4.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-5', 'src' => $assets_dir . '5.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-6', 'src' => $assets_dir . '6.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-7', 'src' => $assets_dir . '7.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-8', 'src' => $assets_dir . '8.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-9', 'src' => $assets_dir . '9.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-10', 'src' => $assets_dir . '10.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-11', 'src' => $assets_dir . '11.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-12', 'src' => $assets_dir . '12.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-13', 'src' => $assets_dir . '13.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-14', 'src' => $assets_dir . '14.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-15', 'src' => $assets_dir . '15.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-16', 'src' => $assets_dir . '16.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-17', 'src' => $assets_dir . '17.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-18', 'src' => $assets_dir . '18.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-19', 'src' => $assets_dir . '19.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-20', 'src' => $assets_dir . '20.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-21', 'src' => $assets_dir . '21.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-22', 'src' => $assets_dir . '22.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-23', 'src' => $assets_dir . '23.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-24', 'src' => $assets_dir . '24.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-25', 'src' => $assets_dir . '25.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-26', 'src' => $assets_dir . '26.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-27', 'src' => $assets_dir . '27.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-28', 'src' => $assets_dir . '28.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-29', 'src' => $assets_dir . '29.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-30', 'src' => $assets_dir . '30.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-31', 'src' => $assets_dir . '31.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-32', 'src' => $assets_dir . '32.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-33', 'src' => $assets_dir . '33.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-34', 'src' => $assets_dir . '34.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-35', 'src' => $assets_dir . '35.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-36', 'src' => $assets_dir . '36.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-37', 'src' => $assets_dir . '37.jpg'),
				array('type' => 'sticker', 'code' => 'tafei-38', 'src' => $assets_dir . '38.jpg')

			)
		)
	);
	return $emotionList;
}
add_filter('argon_emotion_list', 'add_more_emotions');
?>