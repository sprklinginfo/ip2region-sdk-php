<?php

/*
 * This file is part of the Ip2Region package.
 *
 * Copyright 2022 The Ip2Region Authors. All rights reserved.
 * Use of this source code is governed by a Apache2.0-style
 * license that can be found in the LICENSE file.
 *
 * @link   https://github.com/lionsoul2014/ip2region
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ip2region\Tests;

use ip2region\XdbSearcher;

class LoadTest extends TestCase
{
    public function testLoadHeader()
    {
        $header = XdbSearcher::loadHeaderFromFile(getenv('XDB_PATH'));
        printf("header loaded, ");
        print_r($header);
        $this->assertNotNull($header);
    }

    public function testLoadVectorIndex()
    {
        $vIndex = XdbSearcher::loadVectorIndexFromFile(getenv('XDB_PATH'));
        printf("vector index loaded, length=%d\n", strlen($vIndex));
        $this->assertNotNull($vIndex);
    }

    public function testLoadContent()
    {
        $cBuff = XdbSearcher::loadContentFromFile(getenv('XDB_PATH'));
        printf("content loaded, length=%d\n", strlen($cBuff));
        $this->assertNotNull($cBuff);
    }
}
