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

use TechDivision\Import\Product\Media\Utils\SqlStatements as FallbackStatements;

/**
 * Utility class with the SQL statements to use.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media-ee
 * @link      http://www.techdivision.com
 */
class SqlStatements extends FallbackStatements
{

    /**
     * The SQL statement to create a new product media gallery value entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE = 'INSERT
                                                  INTO catalog_product_entity_media_gallery_value (
                                                           value_id,
                                                           store_id,
                                                           row_id,
                                                           label,
                                                           position,
                                                           disabled
                                                       )
                                                VALUES (?, ?, ?, ?, ?, ?)';

    /**
     * The SQL statement to create a new product media gallery value to entity entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY = 'INSERT
                                                            INTO catalog_product_entity_media_gallery_value_to_entity (
                                                                   value_id,
                                                                   row_id
                                                                 )
                                                          VALUES (?, ?)';
}
