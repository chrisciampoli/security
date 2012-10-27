<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Util;

use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * A secure random number generator implementation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface SecureRandomInterface
{
    /**
     * Generates the specified number of secure random bytes.
     *
     * @param integer $nbBytes
     *
     * @return string
     */
    public function nextBytes($nbBytes);
}
