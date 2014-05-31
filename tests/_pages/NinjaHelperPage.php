<?php

class NinjaHelperPage
{

    public static $browserWidth = 1280;
    public static $browserHeight = 780;

    public static function beforeAllTests($I){
        NinjaHelperPage::resizeBrowserWindow($I);
    }

    public static function afterAllTests($I){
        
    }

    private static function resizeBrowserWindow($I){
        $I->resizeWindow(NinjaHelperPage::$browserWidth, NinjaHelperPage::$browserHeight);
    }


}