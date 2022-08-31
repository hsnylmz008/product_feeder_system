<?php

namespace Providers;

require dirname(__DIR__).'/Interfaces/dataFeederInterface.php';
require dirname(__DIR__).'/helpers/createFileHelper.php';

use Interfaces\dataFeederInterface;
use Helpers\createFileHelper;

class Facebook implements dataFeederInterface
{
    private $jsonData;

    public function readData(string $path)
    {
        $this->jsonData = file_get_contents($path);
        return self::createFile();
    }

    public function createFile()
    {
        // Facebook wants XML and JSON file in our scenario...

        createFileHelper::createJsonFile(
            $this->jsonData,
            get_called_class()
        );

        createFileHelper::createXMLFile(
            $this->jsonData,
            get_called_class()
        );
    }
}
