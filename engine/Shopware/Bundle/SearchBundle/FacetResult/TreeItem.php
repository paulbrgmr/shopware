<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\SearchBundle\FacetResult;

use Shopware\Bundle\StoreFrontBundle\Struct\Attribute;
use Shopware\Bundle\StoreFrontBundle\Struct\Extendable;

/**
 * @category  Shopware
 *
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
class TreeItem extends Extendable
{
    /**
     * @var int|string
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var TreeItem[]
     */
    private $values;

    /**
     * @param int|string  $id
     * @param string      $label
     * @param bool        $active
     * @param TreeItem[]  $values
     * @param Attribute[] $attributes
     */
    public function __construct($id, $label, $active, $values, $attributes = [])
    {
        $this->id = $id;
        $this->label = $label;
        $this->active = $active;
        $this->values = $values;
        $this->attributes = $attributes;
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return TreeItem[]
     */
    public function getValues()
    {
        return $this->values;
    }
}
