<?php


namespace CensorService\filters;


use CensorService\exceptions\CensorException;
use CensorService\interfaces\ActiveCensorHandlerInterface;
use yii\base\ActionFilter;

/**
 * Class AbstractCensorIspFilter
 * @package CensorService\filters
 */
class ActiveCensorFilter extends ActionFilter
{
    /**
     * @var string
     */
    public $handlerClass;

    /**
     * @var ActiveCensorHandlerInterface
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
        if (!$this->getHandler() instanceof ActiveCensorHandlerInterface) {
            throw new CensorException('Handler class must be instance off ' . ActiveCensorHandlerInterface::class);
        }
    }

    /**
     * @return ActiveCensorHandlerInterface
     */
    protected function getHandler(): ActiveCensorHandlerInterface
    {
        if($this->handler === null){
            $this->handler = new $this->handlerClass;
        }
        return $this->handler;
    }

}