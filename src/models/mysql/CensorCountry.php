<?php

namespace CensorService\models\mysql;

use Yii;

/**
 * This is the model class for table "censor_country".
 *
 * @property int $id
 * @property string $country_code
 */
class CensorCountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'censor_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_code'], 'required'],
            [['country_code'], 'string', 'max' => 2],
            [['country_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_code' => 'Country Code',
        ];
    }
}
