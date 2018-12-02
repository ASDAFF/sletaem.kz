<?php
namespace PHPWee;

class CssMin {
    
    public static function minify(&$content) {
        self::removeNewlines($content);
        self::removeMultilineComments($content);
        self::removeSpaces($content);
        
        return $content;
    }

    protected static function removeMultilineComments(&$content) {
        $content = preg_replace('/\'.*\'(*SKIP)(*F)|".*"(*SKIP)(*F)|\/\*.*\*\//sU', '', $content);
    }
    
    protected static function removeOneLineComments(&$content) {
        $content = preg_replace('/\'.*\'(*SKIP)(*F)|".*"(*SKIP)(*F)|\/\/.*/', '', $content);
    }
    
    protected static function removeNewlines(&$content) {
        $content = str_replace("\n", '', $content);
    }
    
    protected static function removeSpaces(&$content) {
        $content = preg_replace('/;\s+/', ';', $content);
        $content = preg_replace('/:\s+/', ':', $content);
        $content = preg_replace('/\s+\{\s+/', '{', $content);
        $content = preg_replace('/;*\}/', '}', $content);
    }
}