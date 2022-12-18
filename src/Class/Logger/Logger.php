<?php
namespace Class\Logger;

use Interface\LoggerInterface\LoggerInterface;

class Logger implements LoggerInterface
{
    public function write(array $context):void
    {
        extract($context);

        $date = date('d.m.Y H:i:s');
        $log = "Дата : $date | Уровень : $level | Сообщение : $message | Контекст : $context ";

        $file=fopen("./public/logs.txt", 'w');

        $file.="\r\n".$log;
    }
    public function format(array $context): string
    {
        return '';
    }
    public function log(array $context): void
    {
        // TODO: Implement log() method.
    }
    public function show(): void
    {
        echo "работает";
    }
}