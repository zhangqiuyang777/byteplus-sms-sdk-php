<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 视频编辑
 * **********************************************************************
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodSubmitDirectEditTaskAsyncRequest</code>
 */
class VodSubmitDirectEditTaskAsyncRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 产物上传空间
     *
     * Generated from protobuf field <code>string Uploader = 1;</code>
     */
    protected $Uploader = '';
    /**
     * Application名称
     *
     * Generated from protobuf field <code>string Application = 2;</code>
     */
    protected $Application = '';
    /**
     * 编辑参数
     *
     * Generated from protobuf field <code>bytes EditParam = 4;</code>
     */
    protected $EditParam = '';
    /**
     * 优先级
     *
     * Generated from protobuf field <code>int32 Priority = 5;</code>
     */
    protected $Priority = 0;
    /**
     * 回调地址
     *
     * Generated from protobuf field <code>string CallbackUri = 6;</code>
     */
    protected $CallbackUri = '';
    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 7;</code>
     */
    protected $CallbackArgs = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Uploader
     *           产物上传空间
     *     @type string $Application
     *           Application名称
     *     @type string $EditParam
     *           编辑参数
     *     @type int $Priority
     *           优先级
     *     @type string $CallbackUri
     *           回调地址
     *     @type string $CallbackArgs
     *           回调参数
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 产物上传空间
     *
     * Generated from protobuf field <code>string Uploader = 1;</code>
     * @return string
     */
    public function getUploader()
    {
        return $this->Uploader;
    }

    /**
     * 产物上传空间
     *
     * Generated from protobuf field <code>string Uploader = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUploader($var)
    {
        GPBUtil::checkString($var, True);
        $this->Uploader = $var;

        return $this;
    }

    /**
     * Application名称
     *
     * Generated from protobuf field <code>string Application = 2;</code>
     * @return string
     */
    public function getApplication()
    {
        return $this->Application;
    }

    /**
     * Application名称
     *
     * Generated from protobuf field <code>string Application = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApplication($var)
    {
        GPBUtil::checkString($var, True);
        $this->Application = $var;

        return $this;
    }

    /**
     * 编辑参数
     *
     * Generated from protobuf field <code>bytes EditParam = 4;</code>
     * @return string
     */
    public function getEditParam()
    {
        return $this->EditParam;
    }

    /**
     * 编辑参数
     *
     * Generated from protobuf field <code>bytes EditParam = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEditParam($var)
    {
        GPBUtil::checkString($var, False);
        $this->EditParam = $var;

        return $this;
    }

    /**
     * 优先级
     *
     * Generated from protobuf field <code>int32 Priority = 5;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * 优先级
     *
     * Generated from protobuf field <code>int32 Priority = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->Priority = $var;

        return $this;
    }

    /**
     * 回调地址
     *
     * Generated from protobuf field <code>string CallbackUri = 6;</code>
     * @return string
     */
    public function getCallbackUri()
    {
        return $this->CallbackUri;
    }

    /**
     * 回调地址
     *
     * Generated from protobuf field <code>string CallbackUri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackUri = $var;

        return $this;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 7;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 回调参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 7;</code>
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

