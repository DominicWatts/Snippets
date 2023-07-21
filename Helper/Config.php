<?php
/**
 * Copyright © 2023 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PixieMedia\Snippets\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    public const CONFIG_XML_HEADER_ENABLED = 'header/snippets/header_enabled';
    public const CONFIG_XML_HEADER_CONTENT = 'header/snippets/header_snippet';
    public const CONFIG_XML_BODY_ENABLED = 'header/snippets/body_start_enabled';
    public const CONFIG_XML_BODY_CONTENT = 'header/snippets/body_start_snippet';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Is header snippet enabled
     * @return bool
     */
    public function getHeaderEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_XML_HEADER_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Configured header content
     * @return mixed
     */
    public function getHeaderContent()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_XML_HEADER_CONTENT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Is body start snippet enabled
     * @return bool
     */
    public function getBodyStartEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_XML_BODY_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Configured body start content
     * @return mixed
     */
    public function getBodyStartContent()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_XML_BODY_CONTENT,
            ScopeInterface::SCOPE_STORE
        );
    }
}
