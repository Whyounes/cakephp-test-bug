<?php

namespace n1066\Model\Table;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\Table;

class SettingsTable extends Table
{
    public static function defaultConnectionName()
    {
        return 'sqlite';
    }

    public function initialize(array $config)
    {
        $this->setPrimaryKey('key');
    }

    public function getConnection()
    {
        return ConnectionManager::get('sqlite');
    }
}
