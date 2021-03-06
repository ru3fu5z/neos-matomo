<?php
declare(strict_types=1);

namespace Flowpack\Neos\Matomo\Exception;

/*
 * This script belongs to the Neos CMS package "Flowpack.Neos.Matomo".
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Flowpack\Neos\Matomo\Exception;

/**
 * Analytics are not available (e.g. node is not yet published)
 */
class StatisticsNotAvailableException extends Exception
{

    /**
     * @var integer
     */
    protected $statusCode = 404;

}
