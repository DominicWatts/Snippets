<?php
/**
 * Copyright © 2023 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PixieMedia\Snippets\Block;

use PixieMedia\Snippets\Helper\Config;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class HeadAdditional extends Template
{
    /**
     * @var \PixieMedia\Snippets\Helper\Config
     */
    protected $helper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \PixieMedia\Snippets\Helper\Config $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->helper->getHeaderContent();
    }
}
