<?php

namespace KrystalGuzzle\Tests\Exception;

use KrystalGuzzle\Exception\BadResponseException;
use KrystalGuzzle\Psr7\Request;
use KrystalGuzzle\Psr7\Response;
use PHPUnit\Framework\TestCase;

class BadResponseExceptionTest extends TestCase
{
    public function testHasNoResponse()
    {
        $req = new Request('GET', '/');
        $prev = new \Exception();
        $response = new Response();
        $e = new BadResponseException('foo', $req, $response, $prev);
        self::assertSame($req, $e->getRequest());
        self::assertSame($response, $e->getResponse());
        self::assertTrue($e->hasResponse());
        self::assertSame('foo', $e->getMessage());
        self::assertSame($prev, $e->getPrevious());
    }
}
