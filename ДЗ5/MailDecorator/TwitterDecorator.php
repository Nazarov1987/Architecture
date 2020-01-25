<?php


class TwitterDecorator implements IMessage
{
    protected $objMessage;

    /**
     * TwitterDecorator constructor.
     * @param $objMessage
     */
    public function __construct(IMessage $objMessage)
    {
        $this->objMessage = $objMessage;
    }


    public function send()
    {
        echo 'Twitter ';
        $this->objMessage->send();
    }
}