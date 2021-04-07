<?php


namespace CensorService\filters;


use CensorService\exceptions\CensorException;
use CensorService\interfaces\CensorHandlerInterface;
use yii\base\ActionFilter;

class CensorFilter extends ActionFilter
{
    /**
     * @var string
     */
    public $handlerClass;

    /**
     * @var CensorHandlerInterface
     */
    protected $handler;

    /**
     * @throws CensorException
     */
    public function init()
    {

        if (empty($this->handlerClass)) {
            throw new CensorException('Handler class must be defined');
        }
        if (!$this->getHandler() instanceof CensorHandlerInterface) {
            throw new CensorException('Handler class must be instance off ' . CensorHandlerInterface::class);
        }
    }

    /**
     * @return CensorHandlerInterface
     * @throws \yii\base\InvalidConfigException
     */
    protected function getHandler(): CensorHandlerInterface
    {
        if ($this->handler === null) {
            $this->handler = \Yii::createObject($this->handlerClass);
        }
        return $this->handler;
    }
}