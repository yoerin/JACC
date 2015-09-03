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

   /**
     * Constructor
     *
     * @param       object  $subject The object to observe
     * @param       array   $config  An array that holds the plugin configuration
     *
     * @since       2.5
     */
    public function __construct(& $subject, $config) {
        parent::__construct($subject, $config);

        $app = JFactory::getApplication();

        // only in Admin and only if the component is enabled
        if ($app->isSite()) {
            return;
        }

        $this->loadLanguage();
    }

    /**
     * This method is called when the Quick Icons module is constructing its set
     * of icons. You can return an array which defines a single icon and it will
     * be rendered right after the stock Quick Icons.
     *
     * @param  $context  The calling context
     *
     * @return array A list of icon definition associative arrays, consisting of the
     * 				 keys link, image, text and access.
     *
     * @since       2.5
     */
    public function onGetIcons($context) {
    	if ($context != $this->params->get('context', 'mod_quickicon')) {
            return;
        }
    }

}