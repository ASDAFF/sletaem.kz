<?php

namespace Shaun;

class Minify {
    public static function html($html) {
        $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
		
		if (preg_match_all($pattern, $html, $matches, PREG_SET_ORDER) === false) {
			return $html;
		}
		
		$overriding = false;
		$raw_tag = false;
		
		// Variable reused for output
		$html = '';		
		foreach ($matches as $token) {
			$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
			
			$content = $token[0];
			
			$relate = false;
			$strip = false;
			
			if (is_null($tag)) {
				if ($content === '<!--no compression-->') {
					$overriding = !$overriding;
					continue;
				}
			} else {
				if ($tag === 'pre' || $tag === 'textarea') {
					$raw_tag = $tag;
				} else if ($tag === '/pre' || $tag === '/textarea') {
					$raw_tag = false;
				} else if (!$raw_tag && !$overriding) {
					if ($tag !== '') {
						// Remove any space before the end of a tag (including closing tags and self-closing tags)
						$content = preg_replace('/\s+(\/?\>)/', '$1', $content);
						
						// Do not shorten canonical URL
						if ($tag !== 'link')
						{
							$relate = true;
						}
						else if (preg_match('/rel=(?:\'|\")\s*canonical\s*(?:\'|\")/i', $content) === 0)
						{
							$relate = true;
						}
					} else {
						if (strrpos($html,' ') === strlen($html)-1) {
							$content = preg_replace('/^[\s\r\n]+/', '', $content);
						}
					}
					
					$strip = true;
				}
			}
			if ($strip) {
				$content = self::removeWhiteSpace($content, $html);
			}
			
			$html .= $content;
		}
        return $html;
    }
    
    protected static function removeWhiteSpace($html, $full_html) {
        $html = str_replace("\t", ' ', $html);
        $html = str_replace("\r", ' ', $html);
        $html = str_replace("\n", ' ', $html);
        
        // This is over twice the speed of a RegExp
        while (strpos($html, '  ') !== false) {
            $html = str_replace('  ', ' ', $html);
        }
        
        return $html;
    }
}