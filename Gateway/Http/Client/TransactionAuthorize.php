<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Setor7\Cielo\Gateway\Http\Client;

/**
 * Class TransactionAuthorize
 */
class TransactionAuthorize extends AbstractTransaction
{
    /**
     * @inheritdoc
     */
    protected function process(array $data)
    {
        return $this->adapter->authorize($data);
    }
}
