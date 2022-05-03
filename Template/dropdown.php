<?php define('DISABLE_LOGOUT', true); ?>
<li>
    <i class="fa fa-th fa-fw"></i>
    <?= $this->url->icon('sign-out', t('Logout'), 'OAuthController', 'logout', ['plugin' => 'OAuth2', ]) ?>
</li>