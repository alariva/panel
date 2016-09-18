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

    public function __construct($userId)
    {
        $this->userId = $userId;

        $this->load();
    }

    public function load()
    {
        $file = 'clients'.DIRECTORY_SEPARATOR.$this->userId.DIRECTORY_SEPARATOR.'widgets.json';

        if (!Storage::exists($file)) {
            return;
        }

        $config = Storage::get($file);

        $this->config = json_decode($config);

        return false;
    }

    public function widgets()
    {
        $widgets = [];

        if ($this->config === null) {
            return $widgets;
        }

        foreach ($this->config->widgets as $widgetData) {
            $widgets[] = Smallbox::named($widgetData->title)
                        ->primary()
                        ->body($widgetData->body)
                        ->linkTo($widgetData->linkTo)
                        ->linkName($widgetData->linkName)
                        ->withIcon($widgetData->icon);
        }

        return $widgets;
    }
}
