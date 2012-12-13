<?php

class m121213_154523_ugly_node extends CDbMigration
{
	public function safeUp()
	{
        $sql = <<<SQL
CREATE TABLE {{nodes}} (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `createdTime` DATETIME NOT NULL ,
    `modifiedTime` DATETIME NOT NULL ,
    `slug` VARCHAR( 256 ) CHARACTER SET latin1 COLLATE latin1_general_ci NULL ,
    `title` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
    `text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
    INDEX ( `slug` )
) ENGINE = MYISAM ;
SQL;
        $this->execute($sql);
	}

	public function safeDown()
	{
        $this->dropTable('{{nodes}}');
	}
}