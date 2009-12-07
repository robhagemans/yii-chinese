<?php
/**
 * JChinese class file.
 *
 * ���ı��뼯�����
 *
 * @version 0.1
 *
 * @author jerry2801 <jerry2801@gmail.com>
 * @link http://www.yiiframework.com/extension/jchinese/
 * @copyright Copyright &copy; 2009 jerry2801
 * @license LICENSE.txt
 */

require_once('class.Chinese.php');

class JChinese extends Chinese
{
	public function __construct($SourceLang , $TargetLang , $SourceString='', $CodetableDir='')
	{
        if(empty($CodetableDir))
        {
            $CodetableDir = dirname(__FILE__).'/config/';
        }

		parent::__construct($SourceLang , $TargetLang , $SourceString, $CodetableDir);
	}

    public function setSourceText($text)
    {
        $this->SourceText = $text;
    }

    public function convert($text)
    {
        $this->setSourceText($text);

        return parent::ConvertIT();
    }

    function __destruct()
    {
        fclose($this->ctf);
    }
}