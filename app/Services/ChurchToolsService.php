<?php

namespace App\Services;

class ChurchToolsService
{
    /**
     * Maximum length for content fields.
     * 
     * @var int
     */
    public const MAX_CONTENT_LENGTH = 50000;

    /**
     * Process content and ensure it doesn't exceed maximum length.
     *
     * @param string $content
     * @return string
     */
    public function processContent(string $content): string
    {
        $maxLength = self::MAX_CONTENT_LENGTH;
        
        if (strlen($content) > $maxLength) {
            return substr($content, 0, $maxLength);
        }
        
        return $content;
    }
    
    /**
     * Validate content length.
     *
     * @param string $content
     * @return bool
     */
    public function isValidContentLength(string $content): bool
    {
        return strlen($content) <= self::MAX_CONTENT_LENGTH;
    }
}
