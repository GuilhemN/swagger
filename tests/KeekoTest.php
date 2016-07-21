<?php

namespace gossi\swagger\tests;

use gossi\swagger\Swagger;
use phootwork\file\exception\FileNotFoundException;
use phootwork\file\File;
use phootwork\json\Json;

class KeekoTest extends \PHPUnit_Framework_TestCase
{
    private function fileToArray($filename)
    {
        return json_decode(file_get_contents($filename), true);
    }

    public function testUser()
    {
        $filename = __DIR__.'/fixtures/keeko-user.json';
        $swagger = Swagger::fromFile($filename);

        $this->assertEquals($this->fileToArray($filename), $swagger->toArray());
    }
}
