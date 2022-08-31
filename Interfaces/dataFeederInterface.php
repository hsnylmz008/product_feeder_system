<?php

namespace Interfaces;

interface dataFeederInterface
{
    public function readData(string $path);
    public function createFile();
}