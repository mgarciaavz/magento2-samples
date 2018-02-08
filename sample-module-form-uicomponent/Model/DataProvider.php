<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SampleForm\Model;

use Magento\Ui\Model\ResourceModel\Bookmark\CollectionFactory;

/**
 * Class DataProvider
 */
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $name;
    protected $primaryFieldName;
    protected $requestFieldName;
    protected $meta;
    protected $data;
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        $meta = [],
        $data = [],
        CollectionFactory $bookmarkCollectionFactory
        //IMPORTANT: please notice that we are injecting the class above as a dummy collection due to a bug that forces
        //data providers to content a valid collection
    ) {
        $this->name = $name;
        $this->primaryFieldName = $primaryFieldName;
        $this->requestFieldName = $requestFieldName;
        $this->meta = [];
        $this->data = [];
        $this->collection = $bookmarkCollectionFactory->create();
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        return [];
    }
}