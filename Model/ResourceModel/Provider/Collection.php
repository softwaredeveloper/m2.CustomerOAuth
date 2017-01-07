<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_CustomerOAuth
 * @copyright   Copyright (c) 2017 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Faonni\CustomerOAuth\Model\ResourceModel\Provider;

use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\Data\Collection as AbstractCollection;

/**
 * Provider ResourceModel Collection
 */
class Collection extends AbstractCollection
{
    /**
     * @param EntityFactoryInterface $entityFactory
     */
    public function __construct(
		EntityFactoryInterface $entityFactory
	) {
        parent::__construct($entityFactory);
    }
}
