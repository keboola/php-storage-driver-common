<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/workspace.proto

namespace GPBMetadata\Proto;

class Workspace
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
�

proto/workspace.proto\'keboola.storageDriver.command.workspace"�
CreateWorkspaceCommand
stackPrefix (	
	projectId (	
workspaceId (	
projectUserName (	
projectRoleName (	
projectReadOnlyRoleName (	"
meta (2.google.protobuf.AnyD
CreateWorkspaceTeradataMeta
	permSpace (	

spoolSpace (	"�
CreateWorkspaceResponse
workspaceUserName (	
workspaceRoleName (	
workspacePassword (	
workspaceObjectName (	"�
DropWorkspaceCommand
workspaceUserName (	
workspaceRoleName (	
workspaceObjectName (	
ignoreErrors (
	isCascade ("J
ClearWorkspaceCommand
workspaceObjectName (	
ignoreErrors (":
ResetWorkspacePasswordCommand
workspaceUserName (	";
ResetWorkspacePasswordResponse
workspacePassword (	"n
DropWorkspaceObjectCommand
workspaceObjectName (	
objectNameToDrop (	
ignoreIfNotExists ("�
$GrantWorkspaceAccessToProjectCommand
workspaceUserName (	
workspaceRoleName (	
workspaceObjectName (	
projectUserName (	
projectRoleName (	"�
%RevokeWorkspaceAccessToProjectCommand
workspaceUserName (	
workspaceRoleName (	
workspaceObjectName (	
projectUserName (	
projectRoleName (	bproto3'
        , true);

        static::$is_initialized = true;
    }
}

