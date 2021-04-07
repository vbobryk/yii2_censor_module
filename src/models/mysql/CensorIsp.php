<?php

namespace CensorService\models\mysql;

use Yii;

/**
 * This is the model class for table "censor_isp".
 *
 * @property int $id
 * @property string $name
 * @property string $crc32_hash
 */
class CensorIsp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'censor_isp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'crc32_hash'], 'required'],
            [['name', 'crc32_hash'], 'string', 'max' => 255],
            [['crc32_hash'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'crc32_hash' => 'Crc32 Hash',
        ];
    }
}
