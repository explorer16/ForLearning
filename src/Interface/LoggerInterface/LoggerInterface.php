<?php

namespace Interface\LoggerInterface;

interface LoggerInterface
{
    public function write(array $context): void;
    public function format(array $context): string;
    public function log(array $context): void;
}