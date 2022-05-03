<?php

namespace Kanboard\Plugin\OAuth2\Controller;

use Kanboard\Controller\OAuthController as BaseOAuthController;

/**
 * OAuth Controller
 *
 * @package  Kanboard\Controller
 * @author   Frederic Guillot
 */
class OAuthController extends BaseOAuthController
{
    /**
     * Handle authentication
     *
     * @access public
     */
    public function handler()
    {
        $this->step1('OAuth2');
    }

    /**
     * Handle logout
     *
     * @access public
     */
    public function logout()
    {
        $this->sessionManager->close();
        $this->response->redirect($this->authenticationManager->getProvider('OAuth2')->getLogoutUrl());
    }
}
