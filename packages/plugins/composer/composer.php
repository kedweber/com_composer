<?php
/**
 * PlgComposer
 *
 * @author      Dave Li <info@kubica.nl>
 * @category    Joomla
 * @package     Components
 * @subpackage  Composer
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Class plgSystemComposer
 */
class plgSystemComposer extends JPlugin
{
	/**
	 * @param object $subject
	 * @param array $config
	 */
	public function __construct($subject, $config = array())
	{
		require JPATH_ROOT.'/vendor/autoload.php';

		parent::__construct($subject, $config);
	}
}