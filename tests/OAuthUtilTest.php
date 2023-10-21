<?php

use PHPUnit\Framework\TestCase;
use Ternaryop\TinyOAuth\OAuthUtil;

class OAuthUtilTest extends TestCase {
    public function testUrlEncode(): void
    {
        $arr = ['/ht', '?a=1&b=2'];

        $result = OAuthUtil::urlencode_rfc3986($arr);

        $this->assertSame(['%2Fht', '%3Fa%3D1%26b%3D2'], $result);
    }
}
