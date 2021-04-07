<?php


namespace CensorService\filters;

use CensorService\models\mysql\CensorCountry;

/**
 * Class AbstractCensorIspFilter
 * @package CensorService\filters
 */
abstract class AbstractActiveCensorCountryFilter extends ActiveCensorFilter
{
    /**
     * @var string|null
     */
    protected $countryCode = null;
    
    /**
     * @param \yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        $countryModel = CensorCountry::findOne(['country_code' => $this->getCountryCode()]);
        if(!empty($countryModel)){
            $this->getHandler()->handle(\Yii::$app->getRequest(),$countryModel);
        }
        return true;
    }

    /**
     * @return null|string
     */
    abstract public function getCountryCode(): ?string;


}