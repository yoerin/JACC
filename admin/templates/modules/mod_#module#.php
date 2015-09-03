<?php
/**
 * @version SVN: $Id: mod_#module#.php 147 2013-10-06 08:58:34Z michel $
 * @package    ##Module##
 * @subpackage Base
 * @author     ##author##
 * @license    ##license##
 */

defined('_JEXEC') or die('Restricted access'); // no direct access

require_once __DIR__ . '/helper.php';

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', '##Module##.content');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('##Module##', $params->get('layout', 'default'));

?>