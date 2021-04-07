<?php


namespace CensorService\interfaces;


use yii\web\Request;

interface CensorHandlerInterface
{
    public function handle(Request $request): void;

}