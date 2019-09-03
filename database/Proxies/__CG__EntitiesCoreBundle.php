<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CoreBundle extends \Entities\CoreBundle implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'description', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'type', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'graph_title', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'stp', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'enabled', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'bfd', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'ipv4_subnet', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'ipv6_subnet', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'cost', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'preference', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'id', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'coreLinks'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'description', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'type', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'graph_title', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'stp', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'enabled', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'bfd', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'ipv4_subnet', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'ipv6_subnet', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'cost', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'preference', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'id', '' . "\0" . 'Entities\\CoreBundle' . "\0" . 'coreLinks'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CoreBundle $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeECMP(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeECMP', []);

        return parent::isTypeECMP();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeL2Lag(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeL2Lag', []);

        return parent::isTypeL2Lag();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeL3Lag(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeL3Lag', []);

        return parent::isTypeL3Lag();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveType', []);

        return parent::resolveType();
    }

    /**
     * {@inheritDoc}
     */
    public function getGraphTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGraphTitle', []);

        return parent::getGraphTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getSTP(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSTP', []);

        return parent::getSTP();
    }

    /**
     * {@inheritDoc}
     */
    public function getBFD()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBFD', []);

        return parent::getBFD();
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv4Subnet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv4Subnet', []);

        return parent::getIPv4Subnet();
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv46Subnet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv46Subnet', []);

        return parent::getIPv46Subnet();
    }

    /**
     * {@inheritDoc}
     */
    public function getCost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCost', []);

        return parent::getCost();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreference', []);

        return parent::getPreference();
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreLinks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoreLinks', []);

        return parent::getCoreLinks();
    }

    /**
     * {@inheritDoc}
     */
    public function addCoreLink(\Entities\CoreLink $coreLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCoreLink', [$coreLink]);

        return parent::addCoreLink($coreLink);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCoreLink(\Entities\CoreLink $coreLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCoreLink', [$coreLink]);

        return parent::removeCoreLink($coreLink);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setGraphTitle($graph_title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGraphTitle', [$graph_title]);

        return parent::setGraphTitle($graph_title);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled(bool $enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function setSTP(bool $stp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSTP', [$stp]);

        return parent::setSTP($stp);
    }

    /**
     * {@inheritDoc}
     */
    public function setBFD(bool $bfd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBFD', [$bfd]);

        return parent::setBFD($bfd);
    }

    /**
     * {@inheritDoc}
     */
    public function setIPv4Subnet($ipv4_subnet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIPv4Subnet', [$ipv4_subnet]);

        return parent::setIPv4Subnet($ipv4_subnet);
    }

    /**
     * {@inheritDoc}
     */
    public function setIPv6Subnet($ipv6_subnet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIPv6Subnet', [$ipv6_subnet]);

        return parent::setIPv6Subnet($ipv6_subnet);
    }

    /**
     * {@inheritDoc}
     */
    public function setCost($cost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCost', [$cost]);

        return parent::setCost($cost);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreference($preference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreference', [$preference]);

        return parent::setPreference($preference);
    }

    /**
     * {@inheritDoc}
     */
    public function areAllCoreLinksEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'areAllCoreLinksEnabled', []);

        return parent::areAllCoreLinksEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreLinksEnabled(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoreLinksEnabled', []);

        return parent::getCoreLinksEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchSideX(bool $sideA = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchSideX', [$sideA]);

        return parent::getSwitchSideX($sideA);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeedPi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpeedPi', []);

        return parent::getSpeedPi();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexPi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexPi', []);

        return parent::getDuplexPi();
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoNegPi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutoNegPi', []);

        return parent::getAutoNegPi();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer(): \Entities\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualInterfaces(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualInterfaces', []);

        return parent::getVirtualInterfaces();
    }

    /**
     * {@inheritDoc}
     */
    public function isECMP(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isECMP', []);

        return parent::isECMP();
    }

    /**
     * {@inheritDoc}
     */
    public function isL2LAG(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isL2LAG', []);

        return parent::isL2LAG();
    }

    /**
     * {@inheritDoc}
     */
    public function isL3LAG(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isL3LAG', []);

        return parent::isL3LAG();
    }

    /**
     * {@inheritDoc}
     */
    public function sameSwitchForEachPIFromCL(bool $sideA = true): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'sameSwitchForEachPIFromCL', [$sideA]);

        return parent::sameSwitchForEachPIFromCL($sideA);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreLinksWithIfOperStateX(int $operstate = 1, bool $onlyEnabled = true): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoreLinksWithIfOperStateX', [$operstate, $onlyEnabled]);

        return parent::getCoreLinksWithIfOperStateX($operstate, $onlyEnabled);
    }

}
