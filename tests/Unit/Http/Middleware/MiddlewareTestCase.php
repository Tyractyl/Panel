<?php

namespace Tyractyl\Tests\Unit\Http\Middleware;

use Tyractyl\Tests\TestCase;
use Tyractyl\Tests\Traits\Http\RequestMockHelpers;
use Tyractyl\Tests\Traits\Http\MocksMiddlewareClosure;
use Tyractyl\Tests\Assertions\MiddlewareAttributeAssertionsTrait;

abstract class MiddlewareTestCase extends TestCase
{
    use MiddlewareAttributeAssertionsTrait;
    use MocksMiddlewareClosure;
    use RequestMockHelpers;

    /**
     * Setup tests with a mocked request object and normal attributes.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->buildRequestMock();
    }
}
