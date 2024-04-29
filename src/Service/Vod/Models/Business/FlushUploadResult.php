<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_upload.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.FlushUploadResult</code>
 */
class FlushUploadResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool FlushUpload = 1;</code>
     */
    protected $FlushUpload = false;
    /**
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     * Generated from protobuf field <code>string Mid = 3;</code>
     */
    protected $Mid = '';
    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSourceInfo SourceInfo = 4;</code>
     */
    protected $SourceInfo = null;
    /**
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     */
    protected $PosterUri = '';
    /**
     * Generated from protobuf field <code>string CallbackArgs = 6;</code>
     */
    protected $CallbackArgs = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $FlushUpload
     *     @type string $Vid
     *     @type string $Mid
     *     @type \Byteplus\Service\Vod\Models\Business\VodSourceInfo $SourceInfo
     *     @type string $PosterUri
     *     @type string $CallbackArgs
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool FlushUpload = 1;</code>
     * @return bool
     */
    public function getFlushUpload()
    {
        return $this->FlushUpload;
    }

    /**
     * Generated from protobuf field <code>bool FlushUpload = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setFlushUpload($var)
    {
        GPBUtil::checkBool($var);
        $this->FlushUpload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Mid = 3;</code>
     * @return string
     */
    public function getMid()
    {
        return $this->Mid;
    }

    /**
     * Generated from protobuf field <code>string Mid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Mid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSourceInfo SourceInfo = 4;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodSourceInfo|null
     */
    public function getSourceInfo()
    {
        return $this->SourceInfo;
    }

    public function hasSourceInfo()
    {
        return isset($this->SourceInfo);
    }

    public function clearSourceInfo()
    {
        unset($this->SourceInfo);
    }

    /**
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSourceInfo SourceInfo = 4;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodSourceInfo $var
     * @return $this
     */
    public function setSourceInfo($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodSourceInfo::class);
        $this->SourceInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     * @return string
     */
    public function getPosterUri()
    {
        return $this->PosterUri;
    }

    /**
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPosterUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->PosterUri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CallbackArgs = 6;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * Generated from protobuf field <code>string CallbackArgs = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

}

