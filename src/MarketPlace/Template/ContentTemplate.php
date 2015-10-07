<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 07/10/15
 * Time: 20:15
 */

namespace MarketPlace\Template;

use Mouf\Html\Renderer\Renderable;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\Utils\WebLibraryManager\WebLibraryManager;

/**
 * Template class for MarketPlace.
 */
class ContentTemplate implements TemplateInterface
{
    use Renderable;

    /**
     * @var string
     */
    protected $title;

    /**
     * The header of the template.
     *
     * @var HtmlElementInterface
     */
    protected $header;

    /**
     * @var WebLibraryManager
     */
    protected $webLibraryManager;

    /**
     * The footer of the template.
     *
     * @var HtmlElementInterface
     */
    protected $footer;

    /**
     * @return HtmlElementInterface
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param HtmlElementInterface $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return WebLibraryManager
     */
    public function getWebLibraryManager()
    {
        return $this->webLibraryManager;
    }

    /**
     * @param WebLibraryManager $webLibraryManager
     */
    public function setWebLibraryManager($webLibraryManager)
    {
        $this->webLibraryManager = $webLibraryManager;
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

    /**
     * @return HtmlElementInterface
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param HtmlElementInterface $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }

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


}
