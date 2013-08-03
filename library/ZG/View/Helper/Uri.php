<?php

/**
 * ZEND GROUP
 *
 * @name        Uri.php
 * @category    ZG
 * @package 	View
 * @subpackage  View/Helper
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 * Jul 31, 2012
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace ZG\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Uri extends AbstractHelper
{
    protected $request;

    public function __invoke()
    {
        $uri = new \StdClass();

        $uri->relative = $this->getRequest()->getRequestUri();
        $uri->absolute = $this->getRequest()->getUri();

        $uri->scheme = parse_url($uri->absolute, PHP_URL_SCHEME);
        $uri->host = parse_url($uri->absolute, PHP_URL_HOST);
        $uri->port = parse_url($uri->absolute, PHP_URL_PORT);
        $uri->user = parse_url($uri->absolute, PHP_URL_USER);
        $uri->password = parse_url($uri->absolute, PHP_URL_PASS);
        $uri->path = parse_url($uri->absolute, PHP_URL_PATH);
        $uri->query = parse_url($uri->absolute, PHP_URL_QUERY);

        return $uri;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }

}
