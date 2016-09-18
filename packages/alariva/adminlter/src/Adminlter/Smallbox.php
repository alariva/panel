<?php

/**
 * Adminlter Smallbox class
 */

namespace Alariva\Adminlter;

/**
 * Creates AdminLTE compliant small box widget
 *
 * @author  Ariel Vallese
 */
class Smallbox extends RenderedObject
{
    /**
     * Constant for default box
     */
    const NORMAL = 'default';

    /**
     * Constant for primary box
     */
    const PRIMARY = 'primary';

    /**
     * Constant for success box
     */
    const SUCCESS = 'success';

    /**
     * Constant for info box
     */
    const INFO = 'info';

    /**
     * Constant for warning box
     */
    const WARNING = 'warning';

    /**
     * Constant for danger box
     */
    const DANGER = 'danger';

    /**
     * @var String name of the object (used when creating the links)
     */
    protected $name;

    /**
     * @var String value of the object (used when creating the links)
     */
    protected $value;

    /**
     * @var String icon of the object (used when creating the links)
     */
    protected $icon;

    /**
     * @var String linkName of the object (used when creating the links)
     */
    protected $linkName;

    /**
     * @var String linkTo of the object (used when creating the links)
     */
    protected $linkTo;

    /**
     * @var String body of the object (used when creating the links)
     */
    protected $body;

    /**
     * @var array The contents of the Smallbox
     */
    protected $contents = [];

    /**
     * Sets the type of the button
     *
     * @param $type string The new type of the button. Assumes that the btn-
     *              prefix is there
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Name the Smallbox
     *
     * @param $name The name of the Smallbox
     *
     * @return $this
     */
    public function named($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set body for the Smallbox
     *
     * @param $body The body of the Smallbox
     *
     * @return $this
     */
    public function body($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Set linkTo for the Smallbox
     *
     * @param $linkTo The linkTo of the Smallbox
     *
     * @return $this
     */
    public function linkTo($linkTo)
    {
        $this->linkTo = $linkTo;

        return $this;
    }

    /**
     * Set linkName for the Smallbox
     *
     * @param $linkName The linkName of the Smallbox
     *
     * @return $this
     */
    public function linkName($linkName)
    {
        $this->linkName = $linkName;

        return $this;
    }

    /**
     * Add the contents for the Smallbox. Should be an array of arrays
     * <strong>Expected Keys</strong>:
     * <ul>
     * <li>title</li>
     * <li>contents</li>
     * <li>attributes (optional)</li>
     * </ul>
     *
     * @param array $contents
     *
     * @return $this
     */
    public function withContents(array $contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Creates an button with class .btn-primary and the given contents
     *
     * @param string $contents The contents of the button The contents of the
     *                         button
     * @return Button
     */
    public function primary($contents = '')
    {
        return $this->setType(self::PRIMARY)
            ->withValue($contents);
    }

    /**
     * Creates an button with class .btn-success and the given contents
     *
     * @param string $contents The contents of the button The contents of the
     *                         button
     * @return Button
     */
    public function success($contents = '')
    {
        return $this->setType(self::SUCCESS)
            ->withValue($contents);
    }

    /**
     * Creates an button with class .btn-info and the given contents
     *
     * @param string $contents The contents of the button
     * @return Button
     */
    public function info($contents = '')
    {
        return $this->setType(self::INFO)
            ->withValue($contents);
    }

    /**
     * Creates an button with class .btn-warning and the given contents
     *
     * @param string $contents The contents of the button
     * @return Button
     */
    public function warning($contents = '')
    {
        return $this->setType(self::WARNING)
            ->withValue($contents);
    }

    /**
     * Creates an button with class .btn-danger and the given contents
     *
     * @param string $contents The contents of the button
     * @return Button
     */
    public function danger($contents = '')
    {
        return $this->setType(self::DANGER)
            ->withValue($contents);
    }

    /**
     * Sets the value of the button
     *
     * @param $value string The new value of the button
     * @return $this
     */
    public function withValue($value = '')
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Sets the icon of the box
     *
     * @param $icon string The new icon of the button
     * @return $this
     */
    public function withIcon($icon = '')
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Renders the small box
     *
     * @return string
     */
    public function render()
    {
        // Set up sensible defaults
        $defaults = ['class' => "box box-{$this->type}"];

        $attributes = new Attributes($this->attributes, $defaults);

        $string = '<div '.$attributes.'>';
        $string .= '<div class="box-header with-border">';
        $string .= '<h3 class="box-title">'.$this->name.'</h3>';
        $string .= '<span class="label label-'.$this->type.' pull-right"><i class="fa '.$this->icon.'"></i></span>';
        $string .= '</div>';
        $string .= '<div class="box-body">';
        $string .= '<p>'.$this->body.'</p>';
        $string .= '<a href="'.$this->linkTo.'" target="_blank" class="btn btn-'.$this->type.'"><i class="fa fa-external-link"></i> '.$this->linkName.'</a>';
        $string .= '</div>';
        $string .= '</div>';

        return $string;
    }
}
