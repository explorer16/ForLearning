<?php

namespace Class;

class Logger implements Explorer\Logger\Interface\LoggerInterface
{
    public function write(array $context)
    {
        extract($context);

        $date = date('d.m.Y H:i:s');
        $log = "Дата : $date | Уровень : $level | Сообщение : $message | Контекст : $context ";

        $file=fopen("logs.txt", 'w');

        $file.="\r\n".$log;
    }
}