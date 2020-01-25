<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$decorator = new FacebookDecorator( new TwitterDecorator(new MailDecorator(new MessageEmpty())));


echo 'Сообщение отправлено через ';

$decorator->send();