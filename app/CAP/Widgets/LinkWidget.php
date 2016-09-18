<?php

namespace App\CAP\Widgets;

use Alariva\Adminlter\Facades\Smallbox;
use Illuminate\Support\Facades\Storage;

/**
 * LinkWidget
 */
class LinkWidget
{
    /**
     * @var int
     */
    private $userId;

    /**
     * @var \stdClass
     */
    private $config = null;

    /**
     * @var array
     */
    private $widgets = [];

    public function __construct($userId)
    {
        $this->userId = $userId;

        $this->load('user')->generate();

        $this->load('general')->generate();
    }

    protected function load($profile)
    {
        $file = $this->getFile($profile);

        if (!Storage::exists($file)) {
            $this->config = null;

            return $this;
        }

        $config = Storage::get($file);

        $this->config = json_decode($config);

        return $this;
    }

    public function generate()
    {
        if ($this->config === null) {
            return [];
        }

        foreach ($this->config->widgets as $widgetData) {
            $this->widgets[] = Smallbox::named($widgetData->title)
                                        ->primary()
                                        ->body($widgetData->body)
                                        ->linkTo($widgetData->linkTo)
                                        ->linkName($widgetData->linkName)
                                        ->withIcon($widgetData->icon);
        }

        return $this->widgets;
    }

    public function widgets()
    {
        return $this->widgets;
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

        return $base.'widgets.json';
    }
}
