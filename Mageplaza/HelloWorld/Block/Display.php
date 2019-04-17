<?php
/**
 * Created by PhpStorm.
 * User: panxp
 * Date: 2019-04-16
 * Time: 15:13
 */

namespace Mageplaza\HelloWorld\Block;


class Display extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mageplaza\HelloWorld\Model\PostFactory $postFactory)
    {
        parent::__construct($context);
    }



    public function sayHello()
    {
        return __('Hello World');
    }

    public function getPostCollection(){
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}