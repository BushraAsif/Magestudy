<?php

namespace Magestudy\Customjs\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Layout extends Action
{
    /**
     * Execute view action
     * @url domain/customjs/test/layout
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}