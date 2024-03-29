<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/trust_config.proto

namespace Google\Cloud\CertificateManager\V1\TrustConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a trust store.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.TrustConfig.TrustStore</code>
 */
class TrustStore extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Trust Anchors to be used while performing validation
     * against a given TrustStore.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.TrustAnchor trust_anchors = 1;</code>
     */
    private $trust_anchors;
    /**
     * Set of intermediate CA certificates used for the path building
     * phase of chain validation.
     * The field is currently not supported if TrustConfig is used for the
     * workload certificate feature.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.IntermediateCA intermediate_cas = 2;</code>
     */
    private $intermediate_cas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CertificateManager\V1\TrustConfig\TrustAnchor>|\Google\Protobuf\Internal\RepeatedField $trust_anchors
     *           List of Trust Anchors to be used while performing validation
     *           against a given TrustStore.
     *     @type array<\Google\Cloud\CertificateManager\V1\TrustConfig\IntermediateCA>|\Google\Protobuf\Internal\RepeatedField $intermediate_cas
     *           Set of intermediate CA certificates used for the path building
     *           phase of chain validation.
     *           The field is currently not supported if TrustConfig is used for the
     *           workload certificate feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\TrustConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Trust Anchors to be used while performing validation
     * against a given TrustStore.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.TrustAnchor trust_anchors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrustAnchors()
    {
        return $this->trust_anchors;
    }

    /**
     * List of Trust Anchors to be used while performing validation
     * against a given TrustStore.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.TrustAnchor trust_anchors = 1;</code>
     * @param array<\Google\Cloud\CertificateManager\V1\TrustConfig\TrustAnchor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrustAnchors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\TrustConfig\TrustAnchor::class);
        $this->trust_anchors = $arr;

        return $this;
    }

    /**
     * Set of intermediate CA certificates used for the path building
     * phase of chain validation.
     * The field is currently not supported if TrustConfig is used for the
     * workload certificate feature.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.IntermediateCA intermediate_cas = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntermediateCas()
    {
        return $this->intermediate_cas;
    }

    /**
     * Set of intermediate CA certificates used for the path building
     * phase of chain validation.
     * The field is currently not supported if TrustConfig is used for the
     * workload certificate feature.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.TrustConfig.IntermediateCA intermediate_cas = 2;</code>
     * @param array<\Google\Cloud\CertificateManager\V1\TrustConfig\IntermediateCA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntermediateCas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\TrustConfig\IntermediateCA::class);
        $this->intermediate_cas = $arr;

        return $this;
    }

}


