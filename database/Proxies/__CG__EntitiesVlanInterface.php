<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VlanInterface extends \Entities\VlanInterface implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'ipv4enabled', 'ipv4hostname', 'ipv6enabled', 'ipv6hostname', 'mcastenabled', 'irrdbfilter', 'bgpmd5secret', 'ipv4bgpmd5secret', 'ipv6bgpmd5secret', 'maxbgpprefix', 'rsclient', 'rsmorespecifics', 'ipv4canping', 'ipv6canping', 'ipv4monitorrcbgp', 'ipv6monitorrcbgp', 'as112client', 'busyhost', 'notes', 'id', 'IPv4Address', 'IPv6Address', 'VirtualInterface', 'Vlan', 'layer2Addresses'];
        }

        return ['__isInitialized__', 'ipv4enabled', 'ipv4hostname', 'ipv6enabled', 'ipv6hostname', 'mcastenabled', 'irrdbfilter', 'bgpmd5secret', 'ipv4bgpmd5secret', 'ipv6bgpmd5secret', 'maxbgpprefix', 'rsclient', 'rsmorespecifics', 'ipv4canping', 'ipv6canping', 'ipv4monitorrcbgp', 'ipv6monitorrcbgp', 'as112client', 'busyhost', 'notes', 'id', 'IPv4Address', 'IPv6Address', 'VirtualInterface', 'Vlan', 'layer2Addresses'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VlanInterface $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setIpv4enabled($ipv4enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4enabled', [$ipv4enabled]);

        return parent::setIpv4enabled($ipv4enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4enabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4enabled', []);

        return parent::getIpv4enabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv4hostname($ipv4hostname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4hostname', [$ipv4hostname]);

        return parent::setIpv4hostname($ipv4hostname);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4hostname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4hostname', []);

        return parent::getIpv4hostname();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6enabled($ipv6enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6enabled', [$ipv6enabled]);

        return parent::setIpv6enabled($ipv6enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6enabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6enabled', []);

        return parent::getIpv6enabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6hostname($ipv6hostname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6hostname', [$ipv6hostname]);

        return parent::setIpv6hostname($ipv6hostname);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6hostname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6hostname', []);

        return parent::getIpv6hostname();
    }

    /**
     * {@inheritDoc}
     */
    public function setMcastenabled($mcastenabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMcastenabled', [$mcastenabled]);

        return parent::setMcastenabled($mcastenabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getMcastenabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMcastenabled', []);

        return parent::getMcastenabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIrrdbfilter($irrdbfilter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIrrdbfilter', [$irrdbfilter]);

        return parent::setIrrdbfilter($irrdbfilter);
    }

    /**
     * {@inheritDoc}
     */
    public function getIrrdbfilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIrrdbfilter', []);

        return parent::getIrrdbfilter();
    }

    /**
     * {@inheritDoc}
     */
    public function setBgpmd5secret($bgpmd5secret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBgpmd5secret', [$bgpmd5secret]);

        return parent::setBgpmd5secret($bgpmd5secret);
    }

    /**
     * {@inheritDoc}
     */
    public function getBgpmd5secret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBgpmd5secret', []);

        return parent::getBgpmd5secret();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv4bgpmd5secret($ipv4bgpmd5secret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4bgpmd5secret', [$ipv4bgpmd5secret]);

        return parent::setIpv4bgpmd5secret($ipv4bgpmd5secret);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4bgpmd5secret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4bgpmd5secret', []);

        return parent::getIpv4bgpmd5secret();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6bgpmd5secret($ipv6bgpmd5secret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6bgpmd5secret', [$ipv6bgpmd5secret]);

        return parent::setIpv6bgpmd5secret($ipv6bgpmd5secret);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6bgpmd5secret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6bgpmd5secret', []);

        return parent::getIpv6bgpmd5secret();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxbgpprefix($maxbgpprefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxbgpprefix', [$maxbgpprefix]);

        return parent::setMaxbgpprefix($maxbgpprefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxbgpprefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxbgpprefix', []);

        return parent::getMaxbgpprefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setRsclient($rsclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRsclient', [$rsclient]);

        return parent::setRsclient($rsclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getRsclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRsclient', []);

        return parent::getRsclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setRsMoreSpecifics($rsmorespecifics)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRsMoreSpecifics', [$rsmorespecifics]);

        return parent::setRsMoreSpecifics($rsmorespecifics);
    }

    /**
     * {@inheritDoc}
     */
    public function getRsMoreSpecifics()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRsMoreSpecifics', []);

        return parent::getRsMoreSpecifics();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv4canping($ipv4canping)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4canping', [$ipv4canping]);

        return parent::setIpv4canping($ipv4canping);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4canping()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4canping', []);

        return parent::getIpv4canping();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6canping($ipv6canping)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6canping', [$ipv6canping]);

        return parent::setIpv6canping($ipv6canping);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6canping()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6canping', []);

        return parent::getIpv6canping();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv4monitorrcbgp($ipv4monitorrcbgp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4monitorrcbgp', [$ipv4monitorrcbgp]);

        return parent::setIpv4monitorrcbgp($ipv4monitorrcbgp);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4monitorrcbgp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4monitorrcbgp', []);

        return parent::getIpv4monitorrcbgp();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6monitorrcbgp($ipv6monitorrcbgp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6monitorrcbgp', [$ipv6monitorrcbgp]);

        return parent::setIpv6monitorrcbgp($ipv6monitorrcbgp);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6monitorrcbgp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6monitorrcbgp', []);

        return parent::getIpv6monitorrcbgp();
    }

    /**
     * {@inheritDoc}
     */
    public function setAs112client($as112client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAs112client', [$as112client]);

        return parent::setAs112client($as112client);
    }

    /**
     * {@inheritDoc}
     */
    public function getAs112client()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAs112client', []);

        return parent::getAs112client();
    }

    /**
     * {@inheritDoc}
     */
    public function setBusyhost($busyhost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBusyhost', [$busyhost]);

        return parent::setBusyhost($busyhost);
    }

    /**
     * {@inheritDoc}
     */
    public function getBusyhost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBusyhost', []);

        return parent::getBusyhost();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
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
    public function setIPv4Address(\Entities\IPv4Address $iPv4Address = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIPv4Address', [$iPv4Address]);

        return parent::setIPv4Address($iPv4Address);
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv4Address()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv4Address', []);

        return parent::getIPv4Address();
    }

    /**
     * {@inheritDoc}
     */
    public function setIPv6Address(\Entities\IPv6Address $iPv6Address = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIPv6Address', [$iPv6Address]);

        return parent::setIPv6Address($iPv6Address);
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv6Address()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv6Address', []);

        return parent::getIPv6Address();
    }

    /**
     * {@inheritDoc}
     */
    public function setVirtualInterface(\Entities\VirtualInterface $virtualInterface = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVirtualInterface', [$virtualInterface]);

        return parent::setVirtualInterface($virtualInterface);
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualInterface(): \Entities\VirtualInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualInterface', []);

        return parent::getVirtualInterface();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlan(\Entities\Vlan $vlan = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlan', [$vlan]);

        return parent::setVlan($vlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlan', []);

        return parent::getVlan();
    }

    /**
     * {@inheritDoc}
     */
    public function addLayer2Address(\Entities\Layer2Address $layer2Address): \Entities\VlanInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLayer2Address', [$layer2Address]);

        return parent::addLayer2Address($layer2Address);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLayer2Address(\Entities\Layer2Address $layer2Address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLayer2Address', [$layer2Address]);

        return parent::removeLayer2Address($layer2Address);
    }

    /**
     * {@inheritDoc}
     */
    public function getLayer2Addresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayer2Addresses', []);

        return parent::getLayer2Addresses();
    }

    /**
     * {@inheritDoc}
     */
    public function getLayer2AddressesAsArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayer2AddressesAsArray', []);

        return parent::getLayer2AddressesAsArray();
    }

    /**
     * {@inheritDoc}
     */
    public function canGraphForLatency(string $protocol): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canGraphForLatency', [$protocol]);

        return parent::canGraphForLatency($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getIPAddress(string $protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPAddress', [$protocol]);

        return parent::getIPAddress($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function isIPEnabled(string $protocol): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIPEnabled', [$protocol]);

        return parent::isIPEnabled($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function isGraphable(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isGraphable', []);

        return parent::isGraphable();
    }

}
