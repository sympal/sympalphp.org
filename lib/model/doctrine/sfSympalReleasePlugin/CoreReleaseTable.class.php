<?php


class CoreReleaseTable extends PluginCoreReleaseTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CoreRelease');
    }
}