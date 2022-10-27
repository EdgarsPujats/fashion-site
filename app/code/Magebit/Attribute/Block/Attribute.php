<?php

declare(strict_types=1);

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
        try {
            return $this->getPage()->getData('attribute');
        } catch (Exception $e) {
            return '';
        }
    }
}