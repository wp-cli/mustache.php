<?php

/*
 * This file is part of Mustache.php.
 *
 * (c) 2010-2017 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @group unit
 */
class Mustache_Test_Source_FilesystemSourceTest extends Yoast\PHPUnitPolyfills\TestCases\TestCase
{
    public function testMissingTemplateThrowsException()
    {
        $this->expectException(Mustache_Exception_RuntimeException::class);
        $source = new Mustache_Source_FilesystemSource(dirname(__FILE__) . '/not_a_file.mustache', array('mtime'));
        $source->getKey();
    }
}
