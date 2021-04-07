<?php

use yii\db\Migration;

/**
 * Handles the creation of table `censor_country`.
 */
class m181120_154410_create_censor_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('censor_country', [
            'id' => $this->primaryKey(),
            'country_code' => $this->string(2)->notNull()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('censor_country');
    }
}
