<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_smart_strategy.proto

namespace Byteplus\Service\Vod\Models\GPBMetadata;

class VodSmartStrategy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.byteplus/vod/business/vod_smart_strategy.protoByteplus.Vod.Models.Business"�
%VodGetSmartStrategyLitePlayInfoResultT

StreamType (2@.Byteplus.Vod.Models.Business.VodSmartStrategyResponseStreamTypeV
DataStoreStatus (2=.Byteplus.Vod.Models.Business.VodSmartStrategyDataStoreStatusE
PlayInfoModel (2..Byteplus.Vod.Models.Business.VodPlayInfoModel
OriginalPlayUrl (	*�
"VodSmartStrategyResponseStreamType/
+UndefinedVodSmartStrategyResponseStreamType 4
0OriginalStreamVodSmartStrategyResponseStreamType:
6StrategyEncodeStreamVodSmartStrategyResponseStreamType:
6FallbackEncodeStreamVodSmartStrategyResponseStreamType*�
VodSmartStrategyDataStoreStatus,
(UndefinedVodSmartStrategyDataStoreStatus +
\'NotExistVodSmartStrategyDataStoreStatus4
0HasOriginalStreamVodSmartStrategyDataStoreStatus2
.HasEncodeStreamVodSmartStrategyDataStoreStatusB�
\'com.byteplus.service.vod.model.businessBVodSmartStrategyPZGgithub.com/byteplus-sdk/byteplus-sdk-golang/service/vod/models/business��� �$Byteplus\\Service\\Vod\\Models\\Business�\'Byteplus\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

