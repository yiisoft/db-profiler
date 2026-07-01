<?php

declare(strict_types=1);

namespace Yiisoft\DbProfiler\Tests;

use PHPUnit\Framework\TestCase;
use Yiisoft\DbProfiler\DbProfiler;

final class DbProfilerTest extends TestCase
{
    public function testName(): void
    {
        $profiler = new DbProfiler();

        self::assertSame('yiisoft/db-profiler', $profiler->name());
    }
}
