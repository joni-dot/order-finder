<?php

namespace App\View\Components\Anchors\Buttons;

use Illuminate\View\Component;

class Create extends Component
{
    /**
     * The href of anchor.
     *
     * @var string
     */
    public $href;

    /**
     * The anchor text.
     *
     * @var string
     */
    public $text;

    /**
     * Create a new component instance.
     *
     * @param  string  $href
     * @param  string  $text
     * @return void
     */
    public function __construct($href, $text)
    {
        $this->href = $href;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.anchors.buttons.create');
    }
}
