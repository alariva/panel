<?php

namespace App\CAP\QuoteCalculator;

use Illuminate\Support\Facades\Storage;

class Parameters
{
    /**
     * @var int
     */
    private $userId;

    /**
     * @var \stdClass
     */
    private $parameters;

    public function __construct($userId)
    {
        $this->userId = $userId;

        $this->load('general');

//        $this->load('user');
    }

    public function get($key)
    {
        return array_get($this->parameters, $key);
    }

    protected function load($profile)
    {
        $file = $this->getFile($profile);

        if (!Storage::exists($file)) {
            $this->parameters = null;

            return $this;
        }

        $parameters = Storage::get($file);

        $this->parameters = (array) json_decode($parameters);

        return $this;
    }

    protected function getFile($profile)
    {
        switch ($profile) {
            case 'user':
                $base = 'clients'.DIRECTORY_SEPARATOR.$this->userId.DIRECTORY_SEPARATOR;
                break;
            case 'general':
            default:
                $base = '';
                break;
        }

        return $base.'quotecalculator.json';
    }
}
