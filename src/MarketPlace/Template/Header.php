<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 07/10/15
 * Time: 20:14
 */

namespace MarketPlace\Template;

use Mouf\Html\Renderer\Renderable;
use Mouf\Html\HtmlElement\HtmlElementInterface;

/**
 * Template class for MarketPlace.
 */
class Header implements HtmlElementInterface
{
    use Renderable;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

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
}
