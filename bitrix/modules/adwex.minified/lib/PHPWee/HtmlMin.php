<?php
namespace PHPWee;


/*

PHPWee PHP Minifier Package - http://searchturbine.com/php/phpwee

Copyright (c) 2015, SearchTurbine - Enterprise Search for Everyone
http://searchturbine.com/

All rights reserved. 

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this
list of conditions and the following disclaimer.

Redistributions in binary form must reproduce the above copyright notice,
this list of conditions and the following disclaimer in the documentation
and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


*/
	// -- Class Name : HtmlMin
	// -- Purpose : PHP class to minify html code.
	// -- Usage:  echo PHPWee\Minify::html($myhtml);
	// -- notes:  aply data-no-min to a style or script node to exempt it
	// -- HTML 4, XHTML, and HTML 5 compliant
	
	class HtmlMin{
			// -- Function Name : minify - Params : $html, $js = true, $css = true
        public static function minify($html) {
            /**
             * The set of regular expressions to match against
             * the given HTML and their respective replacements.
             * Reference: https://github.com/ogheo/yii2-htmlcompress
             * @var array
             */
            $filters = [
                // remove javascript comments
                '/(?:<script[^>]*>|\G(?!\A))(?:[^\'"\/<]+|"(?:[^\\"]+|\\.)*"|\'(?:[^\\\']+|\\.)*\'|\/(?!\/)|<(?!\/script))*+\K\/\/[^\n|<]*/xsu' => '',
                // remove html comments except IE conditions
                '/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/su' => '',
                // remove comments in the form /* */
                '/\/+?\s*\*[\s\S]*?\*\s*\/+/u' => '',
                // shorten multiple white spaces
                '/>\s{2,}</u' => '><',
                // shorten multiple white spaces
                '/\s{2,}/u' => ' ',
                // collapse new lines
                '/(\r?\n)/u' => '',
                // Thanks too Vladislav Pishko
                '/<!\[CDATA\[/xsu' => '',
            ];
            
            return preg_replace(array_keys($filters), array_values($filters), $html);
        }
	}