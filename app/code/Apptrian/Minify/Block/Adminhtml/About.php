<?php
/**
 * @category  Apptrian
 * @package   Apptrian_Minify
 * @author    Apptrian
 * @copyright Copyright (c) 2017 Apptrian (http://www.apptrian.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License
 */

namespace Apptrian\Minify\Block\Adminhtml;

use Magento\Framework\Data\Form\Element\AbstractElement;

class About extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @var \Apptrian\Minify\Helper\Data
     */
    public $helper;
    
    /**
     * Constructor
     *
     * @param \Apptrian\Minify\Helper\Data $helper
     */
    public function __construct(\Apptrian\Minify\Helper\Data $helper)
    {
        $this->helper = $helper;
    }
    
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $version  = $this->helper->getExtensionVersion();
        $logopath = 'https://www.apptrian.com/media/apptrian.gif';
        $html     = <<<HTML
<div style="background: url('$logopath') no-repeat scroll 15px 15px #f8f8f8; 
border:1px solid #ccc; min-height:100px; margin:5px 0; 
padding:15px 15px 15px 140px;">
<p>
<strong>Apptrian Minify Extension v$version</strong><br />
Minify HTML including inline CSS and JS to speed up your site. Works with 
default Magento CSS/JS merger.
</p>
<p>
Website: <a href="http://www.apptrian.com" target="_blank">www.apptrian.com</a>
<br />Like, share and follow us on 
<a href="https://www.facebook.com/apptrian" target="_blank">Facebook</a>, 
<a href="https://plus.google.com/+ApptrianCom" target="_blank">Google+</a>, 
<a href="https://www.pinterest.com/apptrian" target="_blank">Pinterest</a>, and 
<a href="https://twitter.com/apptrian" target="_blank">Twitter</a>.<br />
If you have any questions send email at 
<a href="mailto:service@apptrian.com">service@apptrian.com</a>.
</p>
</div>
HTML;
        return $html;
    }
}
