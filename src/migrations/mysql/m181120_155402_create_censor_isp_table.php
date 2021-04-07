<?php

use yii\db\Migration;

/**
 * Handles the creation of table `censor_isp`.
 */
class m181120_155402_create_censor_isp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('censor_isp', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'crc32_hash' => $this->string(255)->unique()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('censor_isp');
    }
}
