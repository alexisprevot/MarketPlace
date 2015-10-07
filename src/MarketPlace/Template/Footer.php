<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 07/10/15
 * Time: 20:16
 */

namespace MarketPlace\Template;

use Mouf\Html\Renderer\Renderable;
use Mouf\Html\HtmlElement\HtmlElementInterface;

/**
 * Template class for MarketPlace.
 */
class Footer implements HtmlElementInterface
{
    use Renderable;

    /**
     * @var string
     */
    protected $copyright;

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param string $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }
}
