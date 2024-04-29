<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodListCdnTopAccessUrlRequest</code>
 */
class VodListCdnTopAccessUrlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 域名（当前仅支持一个域名) 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     */
    protected $Domains = '';
    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     */
    protected $StartTimestamp = 0;
    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     */
    protected $EndTimestamp = 0;
    /**
     * 排序方式，默认值为pv。取值：flux - 流量, pv -访问量 
     *
     * Generated from protobuf field <code>string SortType = 4;</code>
     */
    protected $SortType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domains
     *           域名（当前仅支持一个域名) 
     *     @type int $StartTimestamp
     *           查询起始时间戳，单位：Unix秒级时间戳 
     *     @type int $EndTimestamp
     *           查询结束时间戳，单位：Unix秒级时间戳 
     *     @type string $SortType
     *           排序方式，默认值为pv。取值：flux - 流量, pv -访问量 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 域名（当前仅支持一个域名) 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @return string
     */
    public function getDomains()
    {
        return $this->Domains;
    }

    /**
     * 域名（当前仅支持一个域名) 
     *
     * Generated from protobuf field <code>string Domains = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomains($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domains = $var;

        return $this;
    }

    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     * @return int
     */
    public function getStartTimestamp()
    {
        return $this->StartTimestamp;
    }

    /**
     * 查询起始时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->StartTimestamp = $var;

        return $this;
    }

    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     * @return int
     */
    public function getEndTimestamp()
    {
        return $this->EndTimestamp;
    }

    /**
     * 查询结束时间戳，单位：Unix秒级时间戳 
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->EndTimestamp = $var;

        return $this;
    }

    /**
     * 排序方式，默认值为pv。取值：flux - 流量, pv -访问量 
     *
     * Generated from protobuf field <code>string SortType = 4;</code>
     * @return string
     */
    public function getSortType()
    {
        return $this->SortType;
    }

    /**
     * 排序方式，默认值为pv。取值：flux - 流量, pv -访问量 
     *
     * Generated from protobuf field <code>string SortType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSortType($var)
    {
        GPBUtil::checkString($var, True);
        $this->SortType = $var;

        return $this;
    }

}

