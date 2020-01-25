<?php


class FacebookDecorator implements IMessage
{
    protected $objMessage;

    /**
     * FacebookDecorator constructor.
     * @param $objMessage
     */
    public function __construct(IMessage $objMessage)
    {
        $this->objMessage = $objMessage;
    }


    public function send()
    {
        echo 'Facebook ';
        $this->objMessage->send();
    }
}