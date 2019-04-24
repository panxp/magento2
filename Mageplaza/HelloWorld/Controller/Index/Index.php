<?php
/**
 * Created by PhpStorm.
 * User: panxp
 * Date: 2019-04-17
 * Time: 16:35
 */

namespace Mageplaza\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Mageplaza\HelloWorld\Model\PostFactory $postFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {


        $post = $this->_postFactory->create();
        $post->setData([
            'name' => '222',
            'url_key' => '222',
            'post_content' => '222',
            'tags' => '222',
            'name' => '222',
            'status' => 1

        ]);
        $post->save();

        $collection = $post->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }

        return $this->_pageFactory->create();
    }
}