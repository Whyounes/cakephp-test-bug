<?php

namespace Tests\Controllers;

use n1066\Model\Table\SettingsTable;

class DummyTest extends TestCase
{
    public function test_Dummy()
    {
        $settingsTable = new SettingsTable();
        $setting = $settingsTable->query()->where("key='authmode'")->first();

        self::assertNotNull($setting);
        self::assertEquals($setting->get('value'), 'open');
    }

    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }
}
