<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\CertificateMap;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a Target Proxy which uses this Certificate Map.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CertificateMap.GclbTarget</code>
 */
class GclbTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * IP configurations for this Target Proxy where the
     * Certificate Map is serving.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget.IpConfig ip_configs = 2;</code>
     */
    private $ip_configs;
    protected $target_proxy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_https_proxy
     *           A name must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;targetHttpsProxies/&#42;`.
     *     @type string $target_ssl_proxy
     *           A name must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;targetSslProxies/&#42;`.
     *     @type \Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget\IpConfig[]|\Google\Protobuf\Internal\RepeatedField $ip_configs
     *           IP configurations for this Target Proxy where the
     *           Certificate Map is serving.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * A name must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;targetHttpsProxies/&#42;`.
     *
     * Generated from protobuf field <code>string target_https_proxy = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetHttpsProxy()
    {
        return $this->readOneof(1);
    }

    public function hasTargetHttpsProxy()
    {
        return $this->hasOneof(1);
    }

    /**
     * A name must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;targetHttpsProxies/&#42;`.
     *
     * Generated from protobuf field <code>string target_https_proxy = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetHttpsProxy($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A name must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;targetSslProxies/&#42;`.
     *
     * Generated from protobuf field <code>string target_ssl_proxy = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetSslProxy()
    {
        return $this->readOneof(3);
    }

    public function hasTargetSslProxy()
    {
        return $this->hasOneof(3);
    }

    /**
     * A name must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;targetSslProxies/&#42;`.
     *
     * Generated from protobuf field <code>string target_ssl_proxy = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetSslProxy($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * IP configurations for this Target Proxy where the
     * Certificate Map is serving.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget.IpConfig ip_configs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpConfigs()
    {
        return $this->ip_configs;
    }

    /**
     * IP configurations for this Target Proxy where the
     * Certificate Map is serving.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget.IpConfig ip_configs = 2;</code>
     * @param \Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget\IpConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget\IpConfig::class);
        $this->ip_configs = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetProxy()
    {
        return $this->whichOneof("target_proxy");
    }

}


