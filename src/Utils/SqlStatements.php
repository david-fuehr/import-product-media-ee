<?php

/**
 * TechDivision\Import\Product\Media\Ee\\Utils\SqlStatements
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media-ee
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Product\Media\Ee\Utils;

/**
 * Utility class with the SQL statements to use.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media-ee
 * @link      http://www.techdivision.com
 */
class SqlStatements extends \TechDivision\Import\Product\Media\Utils\SqlStatements
{

    /**
     * The SQL statement to load an existing product media gallery by value/store/entity ID.
     *
     * @var string
     */
    const PRODUCT_MEDIA_GALLERY_VALUE = 'product_media_gallery_value';

    /**
     * The SQL statement to load an existing product media gallery value to entity by value/entity ID.
     *
     * @var string
     */
    const PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY = 'product_media_gallery_value_to_entity';

    /**
     * The SQL statement to create a new product media gallery value entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE = 'create.product_media_gallery_value';

    /**
     * The SQL statement to update an existing product media gallery value entry.
     *
     * @var string
     */
    const UPDATE_PRODUCT_MEDIA_GALLERY_VALUE = 'update.product_media_gallery_value';

    /**
     * The SQL statement to create a new product media gallery value to entity entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY = 'create.product_media_gallery_value_to_entity';

    /**
     * The SQL statements.
     *
     * @var array
     */
    private $statements = array(
        SqlStatements::PRODUCT_MEDIA_GALLERY_VALUE =>
            'SELECT *
               FROM catalog_product_entity_media_gallery_value
              WHERE value_id = :value_id
                AND store_id = :store_id
                AND row_id = :row_id',
        SqlStatements::PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY =>
            'SELECT *
               FROM catalog_product_entity_media_gallery_value_to_entity
              WHERE value_id = :value_id
                AND row_id = :row_id',
        SqlStatements::CREATE_PRODUCT_MEDIA_GALLERY_VALUE =>
            'INSERT
               INTO catalog_product_entity_media_gallery_value
                    (value_id,
                     store_id,
                     row_id,
                     label,
                     position,
                     disabled)
             VALUES (:value_id,
                     :store_id,
                     :row_id,
                     :label,
                     :position,
                     :disabled)',
        SqlStatements::UPDATE_PRODUCT_MEDIA_GALLERY_VALUE =>
            'UPDATE catalog_product_entity_media_gallery_value
                SET value_id = :value_id,
                    store_id = :store_id,
                    row_id = :row_id,
                    label = :label,
                    position = :position,
                    disabled = :disabled
              WHERE record_id = :record_id',
        SqlStatements::CREATE_PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY =>
            'INSERT
               INTO catalog_product_entity_media_gallery_value_to_entity
                    (value_id,
                     row_id)
             VALUES (:value_id,
                     :row_id)',
    );

    /**
     * Initialize the the SQL statements.
     */
    public function __construct()
    {

        // call the parent constructor
        parent::__construct();

        // merge the class statements
        foreach ($this->statements as $key => $statement) {
            $this->preparedStatements[$key] = $statement;
        }
    }
}
