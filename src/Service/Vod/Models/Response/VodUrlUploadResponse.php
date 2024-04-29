<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/response/response_vod.proto

namespace Byteplus\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Response.VodUrlUploadResponse</code>
 */
class VodUrlUploadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * 通用返回结构 
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * URL批量上传结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodUrlResponseData Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *           通用返回结构 
     *     @type \Byteplus\Service\Vod\Models\Business\VodUrlResponseData $Result
     *           URL批量上传结果 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 通用返回结构 
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
     * 通用返回结构 
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
     * URL批量上传结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodUrlResponseData Result = 2;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodUrlResponseData|null
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
     * URL批量上传结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodUrlResponseData Result = 2;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodUrlResponseData $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodUrlResponseData::class);
        $this->Result = $var;

        return $this;
    }

}

