<?php
namespace MooPhp\MooInterface\Data\Template;
use Weasel\XmlMarshaller\Config\DoctrineAnnotations\XmlRootElement;
use Weasel\XmlMarshaller\Config\DoctrineAnnotations\XmlElement;
use Weasel\XmlMarshaller\Config\DoctrineAnnotations\XmlAttribute;

/**
 * @package MooPhp
 * @author Jonathan Oddy <jonathan@moo.com>
 * @copyright Copyright (c) 2012, Moo Print Ltd.
 * @XmlRootElement(namespace="http://www.moo.com/xsd/template-1.0")
 */

class Layout
{

    /**
     * @var int
     */
    protected $_zIndex;

    /**
     * @return int
     */
    public function getZIndex()
    {
        return $this->_zIndex;
    }

    /**
     * @param int $zIndex
     * @XmlElement(type="int", name="zIndex")
     */
    public function setZIndex($zIndex)
    {
        $this->_zIndex = $zIndex;
    }

}
