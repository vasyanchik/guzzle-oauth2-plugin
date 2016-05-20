<?php

namespace Sainsburys\Guzzle\Oauth2\Tests\GrantType;

use Sainsburys\Guzzle\Oauth2\GrantType\AuthorizationCode;
use Sainsburys\Guzzle\Oauth2\Tests\TestBase;

class AuthorizationCodeTest extends TestBase
{
    public function testMissingConfigException()
    {
        $this->setExpectedException('\\InvalidArgumentException', 'Config is missing the following keys: client_id, code');
        new AuthorizationCode($this->getClient());
    }
}
