<?php


namespace CensorService\filters;


class AuthFilter extends CensorFilter
{
    /**
     * @param \yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        $this->getHandler()->handle(\Yii::$app->getRequest());
        return true;
    }
}