<?php

/**
 * Part of the Antares Project package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Antares Core
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares Project
 * @link       http://antaresproject.io
 */
 namespace Antares\Contracts\Notification;

interface Message
{
    /**
     * Get data.
     *
     * @return array
     */
    public function getData();

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject();

    /**
     * Get view.
     *
     * @return string|array
     */
    public function getView();
}
