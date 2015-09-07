<?php
/**
 * @version		$Id: #plugin#.php 147 2013-10-06 08:58:34Z michel $
 * @copyright	Copyright (C) ##year##, ##author##. All rights reserved.
 * @license ###license##
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plg##Plugtype####Plugin## extends JPlugin
{

	//Just examples

	/**

	public function onAfterInitialise()
	{
		//Do something
	}
	public function onAfterRoute()
	{
		//Do something
	}

	public function onAfterDispatch()
	{
		//Do something
	}

	public functon onBeforeRender()
	{
		//Do something
	}

	public function onAfterRender()
	{
		//Do something
	}

	public function onBeforeCompileHead()
	{
		// Do something
	}

	public function onSearch( $options = array( $searchword='', $searchphrase='', $ordering='', $areas='' ) )
	{
		// return $params;
	}

	public function onSearchAreas()
	{
		// return  array( 'categories' => 'Categories' );
	}

	public function onGetWebServices()
	{
		// Do nothing
	}

	public function onUserLoginFailure($response) {
		print $response['error_message'];
		print $response['status'];
		print $response['username'];
		print $response['type'];
	}

	public function onUserLogout($user, $options = array())
	{
	  //Do something
		return true;
	}
	**/

	public function __construct(&$subject, $config = array())
	{
		parent::__construct($subject, $config);
		$this->app  = JFactory::getApplication();
		$this->lang = JFactory::getLanguage();
		$this->lang->load('##plugin##', JPATH_ADMINISTRATOR);

		if (defined('JDEBUG') && JDEBUG)
		{
			JLog::addLogger(array('text_file' => '##plugin##.log.php'), JLog::ALL, array('##plugin##'));
		}
	}

}