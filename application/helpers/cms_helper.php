<?php
/**
 * BlizzCMS
 *
 * @author	WoW-CMS
 * @copyright	Copyright (c) 2019-2020, WoW-CMS (https://wow-cms.com/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Check if user has logged
 *
 * @return boolean
 */
if (!function_exists('is_logged')) {

	function is_logged()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('wow_sess_username'))
			return true;
		else
			return false;
	}
}

/**
 * Check if user has logout
 *
 * @return boolean
 */
if (!function_exists('logout')) {

	function logout()
	{
		$CI = &get_instance();
		$CI->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
}

/**
 * Check if user or group has authorization
 *
 * @param string $permission
 * @param int $group
 * @return boolean
 */

if (!function_exists('is_authorized')) {

	function is_authorized($permission = null, $group = null)
	{
		if (empty($permission) || !is_string($permission)) {
			return false;
		}

		$CI = &get_instance();
		$CI->load->library('permissions');
		return in_array($permission, $CI->permissions->user_permissions($group));
	}

}
