<?php


namespace CensorService\interfaces;


use yii\db\ActiveRecord;
use yii\web\Request;

interface ActiveCensorHandlerInterface
{
    public function handle(Request $request,ActiveRecord $model): void;
}