<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_quickicon
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\SimpleRepeatable\Administrator\Helper;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;
use Joomla\Module\Quickicon\Administrator\Event\SimpleRepeatableEvent;
use Joomla\Registry\Registry;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Helper for mod_quickicon
 *
 * @since  1.6
 */
class SimpleRepeatableHelper
{

    /**
     * Get the quicklinks
     *
     * @param   Registry  $params  The module parameters
     *
     * @return  array
     *
     * @since   1.6
     */

    public static function getQuicklinks($params)
    {


        $content = $params->get('quicklinks');

        $quicklinks = array();

        if(!empty($content))
        {
            foreach ($content as $item)
            {
                $quicklinks[] = array(
                    'titel'   => $item->titel,
                    'link'    => $item->link,
                    'icon'    => $item->icon,
                    'target'  => $item->target,
                );
            }

            return $quicklinks;
        }
        else{
            return false;
        }
    }


}
