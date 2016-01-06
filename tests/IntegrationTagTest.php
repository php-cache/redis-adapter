<?php

/*
 * This file is part of php-cache\phpredis-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\PhpRedis\Tests;

use Cache\Adapter\PhpRedis\PhpRedisCachePool;
use Cache\IntegrationTests\TaggableCachePoolTest;

class IntegrationTagTest extends TaggableCachePoolTest
{
    private $client = null;

    public function createCachePool()
    {
        return new PhpRedisCachePool($this->getClient());
    }

    private function getClient()
    {
        if ($this->client === null) {
            $this->client = new \Redis();
            $this->client->connect('127.0.0.1', 6379);
        }

        return $this->client;
    }
}
