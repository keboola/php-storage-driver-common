<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace GPBMetadata\Proto;

class Bucket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
proto/bucket.proto$keboola.storageDriver.command.bucket"�
CreateBucketCommand
stackPrefix (	
	projectId (	
bucketId (	
branchId (	
projectRoleName (	
projectReadOnlyRoleName (	"
meta (2.google.protobuf.AnyA
CreateBucketTeradataMeta
	permSpace (	

spoolSpace (	*
CreateBucketBigqueryMeta
region (	"D
CreateBucketResponse
path (	
createBucketObjectName (	"�
DropBucketCommand
bucketObjectName (	
ignoreErrors (
projectReadOnlyRoleName (	"
meta (2.google.protobuf.Any
	isCascade ("�
LinkBucketCommand
stackPrefix (	
targetProjectId (	
targetBucketId (	
sourceShareRoleName (	%
targetProjectReadOnlyRoleName (	"
meta (2.google.protobuf.Any(
LinkBucketBigqueryMeta
region (	"6
LinkedBucketResponse
linkedBucketObjectName (	"�
ShareBucketCommand
stackPrefix (	
sourceBucketObjectName (	%
sourceProjectReadOnlyRoleName (	
sourceProjectId (	
sourceBucketId (	"
meta (2.google.protobuf.Any7
ShareBucketSnowflakeCommandMeta
databaseName (	0
ShareBucketBigqueryCommandMeta
region (	"2
ShareBucketResponse
bucketShareRoleName (	"�
UnlinkBucketCommand
bucketObjectName (	
sourceShareRoleName (	
projectReadOnlyRoleName (	"
meta (2.google.protobuf.Any"�
UnshareBucketCommand
bucketObjectName (	
bucketShareRoleName (	
projectReadOnlyRoleName (	"
meta (2.google.protobuf.Any"�
&GrantBucketAccessToReadOnlyRoleCommand
projectReadOnlyRoleName (	"
meta (2.google.protobuf.Any
branchId (	
stackPrefix (	
destinationObjectName (	
path (	=
+GrantBucketAccessToReadOnlyRoleBigqueryMeta
region (	"I
\'GrantBucketAccessToReadOnlyRoleResponse
createBucketObjectName (	"�
)RevokeBucketAccessFromReadOnlyRoleCommand
bucketObjectName (	
projectReadOnlyRoleName (	
ignoreErrors ("
meta (2.google.protobuf.Anybproto3'
        , true);

        static::$is_initialized = true;
    }
}

