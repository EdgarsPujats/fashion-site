<?php

namespace Magebit\Attribute\Block;

use Exception;
use Magento\Cms\Block\Page;

class Attribute extends Page
{
    /**
     * Prepare HTML content
     *
     * @return string
     * @throws Exception
     */
    protected function _toHtml()
    {
        return $this->getPage()->getData('attribute');
    }
}