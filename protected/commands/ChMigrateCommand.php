<?php

Yii::import('system.cli.commands.MigrateCommand');
 
class ChMigrateCommand extends MigrateCommand
{
    public function run($args)
    {
        parent::run($args);
 
        $this->flushCache();
    }
 
    public function flushCache()
    {
        $db = $this->getDbConnection();
 
        if ($db->schemaCachingDuration > 0) {
            Yii::app()->getComponent($db->schemaCacheID)->flush();
        }
    }
}
