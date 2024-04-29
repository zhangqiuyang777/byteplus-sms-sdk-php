<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/base/base.proto

namespace Byteplus\Service\Base\Models\Base;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Base.Models.Base.ResponseError</code>
 */
class ResponseError extends \Google\Protobuf\Internal\Message
{
    /**
     * 错误码
     *
     * Generated from protobuf field <code>string Code = 1;</code>
     */
    protected $Code = '';
    /**
     * 详细错误信息
     *
     * Generated from protobuf field <code>string Message = 2;</code>
     */
    protected $Message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Code
     *           错误码
     *     @type string $Message
     *           详细错误信息
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Base\Models\GPBMetadata\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * ErrorCode
     *
     * Generated from protobuf field <code>string Code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * ErrorCode
     *
     * Generated from protobuf field <code>string Code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->Code = $var;

        return $this;
    }

    /**
     * ErrorDetail
     *
     * Generated from protobuf field <code>string Message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * 详细错误信息
     *
     * Generated from protobuf field <code>string Message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Message = $var;

        return $this;
    }

}

