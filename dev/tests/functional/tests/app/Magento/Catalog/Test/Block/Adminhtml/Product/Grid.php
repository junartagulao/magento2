<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Test\Block\Adminhtml\Product;

use \Magento\Ui\Test\Block\Adminhtml\DataGrid;

/**
 * Class Grid
 * Backend catalog product grid
 */
class Grid extends DataGrid
{
    /**
     * Filters array mapping.
     *
     * @var array
     */
    protected $filters = [
        'name' => [
            'selector' => '[name="filters[name]"]',
        ],
        'sku' => [
            'selector' => '[name="filters[sku]"]',
        ],
        'type_id' => [
            'selector' => '[name="filters[type_id]"]',
            'input' => 'select',
        ],
        'price_from' => [
            'selector' => '[name="filters[price][from]"]',
        ],
        'price_to' => [
            'selector' => '[name="filters[price][to]"]',
        ],
        'qty_from' => [
            'selector' => '[name="filters[qty][from]"]',
        ],
        'qty_to' => [
            'selector' => '[name="filters[qty][to]"]',
        ],
        'visibility' => [
            'selector' => '[name="filters[visibility]"]',
            'input' => 'select',
        ],
        'status' => [
            'selector' => '[name="filters[status]"]',
            'input' => 'select',
        ],
        'attribute_set_id' => [
            'selector' => '[name="filters[attribute_set_id]"]',
            'input' => 'select',
        ],
    ];

    /**
     * Update attributes for selected items
     *
     * @param array $items
     * @return void
     */
    public function updateAttributes(array $items = [])
    {
        $this->massaction($items, 'Update Attributes');
    }
}
