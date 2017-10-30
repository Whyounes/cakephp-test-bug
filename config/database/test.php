<?php

use Cake\Cache\Cache;
use Cake\Database\Connection;
use Cake\Database\Driver\Sqlite as SqliteDriver;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use n1066\Model\Table\EbayNotificationLogTable;
use n1066\Model\Table\PaypalIpnLogTable;
use n1066\Model\Table\SettingsTable;

ConnectionManager::setConfig('sqlite', [
    'className' => Connection::class,
    'driver' => SqliteDriver::class,
    'url' => 'sqlite:///' . __DIR__ . '/../../tests/resources/sqlite.db'
]);

Cache::disable();

TableRegistry::config('settings', ['className' => SettingsTable::class]);
