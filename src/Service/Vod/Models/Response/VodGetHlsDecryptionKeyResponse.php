<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/response/response_vod.proto

namespace Byteplus\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Response.VodGetHlsDecryptionKeyResponse</code>
 */
class VodGetHlsDecryptionKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * 响应结果
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetHlsDecryptionKeyResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *           响应通用信息
     *     @type \Byteplus\Service\Vod\Models\Business\VodGetHlsDecryptionKeyResult $Result
     *           响应结果
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Byteplus\Service\Base\Models\Base\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->ResponseMetadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->ResponseMetadata);
    }

    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Byteplus\Service\Base\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Base\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * 响应结果
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetHlsDecryptionKeyResult Result = 2;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodGetHlsDecryptionKeyResult|null
     */
    public function getResult()
    {
        return $this->Result;
    }

    public function hasResult()
    {
        return isset($this->Result);
    }

    public function clearResult()
    {
        unset($this->Result);
    }

    /**
     * 响应结果
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodGetHlsDecryptionKeyResult Result = 2;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodGetHlsDecryptionKeyResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodGetHlsDecryptionKeyResult::class);
        $this->Result = $var;

        return $this;
    }

}

