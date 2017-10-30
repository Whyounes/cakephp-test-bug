<?php

namespace Tests\Controllers;

use Cake\Database\Connection;
use Cake\Datasource\ConnectionManager;
use GuzzleHttp\Client;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Connection
     */
    protected $sqliteConnection;

    /** @var Client */
    protected $http;

    protected function setUp()
    {
        parent::setUp();

        $this->sqliteConnection = ConnectionManager::get('sqlite');
        $this->seedDB();
    }

    /**
     * Migrate and seed test data.
     */
    protected function seedDB()
    {
        $seedSqliteDBQuery = file_get_contents(__DIR__ . "/../resources/sqlite.db.sql");

        $this->sqliteConnection->execute($seedSqliteDBQuery);
    }

    protected function tearDown()
    {
        $this->http = null;
        $this->cleanDB();

        parent::tearDown();
    }

    /**
     * Remove tables and data.
     */
    protected function cleanDB()
    {
        $clearDBQuery = "drop table if exists `settings`;";

        $this->sqliteConnection->execute($clearDBQuery);
    }
}
