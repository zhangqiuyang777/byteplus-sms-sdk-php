<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_edit.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.GetDirectEditProgress</code>
 */
class GetDirectEditProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Result = 1;</code>
     */
    protected $Result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Result
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Generated from protobuf field <code>int32 Result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkInt32($var);
        $this->Result = $var;

        return $this;
    }

}
