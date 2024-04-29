<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_play.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodGetHlsDecryptionKeyResult</code>
 */
class VodGetHlsDecryptionKeyResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Drm密钥
     *
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     */
    protected $SecretKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SecretKey
     *           Drm密钥
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     * Drm密钥
     *
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     * @return string
     */
    public function getSecretKey()
    {
        return $this->SecretKey;
    }

    /**
     * Drm密钥
     *
     * Generated from protobuf field <code>string SecretKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SecretKey = $var;

        return $this;
    }

}

