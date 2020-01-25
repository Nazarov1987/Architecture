<?php


class MailDecorator implements IMessage
{
    protected $objMessage;

    /**
     * MailDecorator constructor.
     * @param $objMessage
     */
    public function __construct(IMessage $objMessage)
    {
        $this->objMessage = $objMessage;
    }

    public function send()
    {
        echo 'Email ';
        $this->objMessage->send();
    }
}