<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 点播工作流用量明细
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodSpaceWorkflowTranscodeInfo</code>
 */
class DescribeVodSpaceWorkflowTranscodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     */
    protected $TemplateType = '';
    /**
     * Generated from protobuf field <code>string FileType = 2;</code>
     */
    protected $FileType = '';
    /**
     * Generated from protobuf field <code>int64 Duration = 3;</code>
     */
    protected $Duration = 0;
    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     */
    protected $Codec = '';
    /**
     * Generated from protobuf field <code>bool Remux = 5;</code>
     */
    protected $Remux = false;
    /**
     * Generated from protobuf field <code>string Definition = 6;</code>
     */
    protected $Definition = '';
    /**
     * Generated from protobuf field <code>int64 Width = 7;</code>
     */
    protected $Width = 0;
    /**
     * Generated from protobuf field <code>int64 Height = 8;</code>
     */
    protected $Height = 0;
    /**
     * Generated from protobuf field <code>bool Slice = 9;</code>
     */
    protected $Slice = false;
    /**
     * Generated from protobuf field <code>bool IsLowPriority = 10;</code>
     */
    protected $IsLowPriority = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TemplateType
     *     @type string $FileType
     *     @type int|string $Duration
     *     @type string $Codec
     *     @type bool $Remux
     *     @type string $Definition
     *     @type int|string $Width
     *     @type int|string $Height
     *     @type bool $Slice
     *     @type bool $IsLowPriority
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     * @return string
     */
    public function getTemplateType()
    {
        return $this->TemplateType;
    }

    /**
     * Generated from protobuf field <code>string TemplateType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateType($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileType = 2;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * Generated from protobuf field <code>string FileType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 3;</code>
     * @return int|string
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkInt64($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Remux = 5;</code>
     * @return bool
     */
    public function getRemux()
    {
        return $this->Remux;
    }

    /**
     * Generated from protobuf field <code>bool Remux = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemux($var)
    {
        GPBUtil::checkBool($var);
        $this->Remux = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Definition = 6;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     * Generated from protobuf field <code>string Definition = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Width = 7;</code>
     * @return int|string
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Generated from protobuf field <code>int64 Width = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->Width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Height = 8;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Generated from protobuf field <code>int64 Height = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->Height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Slice = 9;</code>
     * @return bool
     */
    public function getSlice()
    {
        return $this->Slice;
    }

    /**
     * Generated from protobuf field <code>bool Slice = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSlice($var)
    {
        GPBUtil::checkBool($var);
        $this->Slice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsLowPriority = 10;</code>
     * @return bool
     */
    public function getIsLowPriority()
    {
        return $this->IsLowPriority;
    }

    /**
     * Generated from protobuf field <code>bool IsLowPriority = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLowPriority($var)
    {
        GPBUtil::checkBool($var);
        $this->IsLowPriority = $var;

        return $this;
    }

}

