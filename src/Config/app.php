<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 2018/01/08
 * Time: 2:36
 */

return [
    /*
    |--------------------------------------------------------------------------
    | useGroup
    |--------------------------------------------------------------------------
    |
    | 当前使用的模组名
    |
    */
    'useGroup'       => 'ZhengFangNormal' ,


    /*
    |--------------------------------------------------------------------------
    | componentGroup
    |--------------------------------------------------------------------------
    | 设定的组件模组
    */
    'componentGroup' => [
        'ZhengFangNormal' => [
            \CAPTCHAReader\src\App\GetImageInfo\GetImageInfo::class ,
            \CAPTCHAReader\src\App\Pretreatment\PretreatmentZhengFang::class ,
            \CAPTCHAReader\src\App\Cutting\CuttingZhengFangFixed::class ,
            \CAPTCHAReader\src\App\Identify\IdentifyZhengFangRow::class ,
        ] ,

    ] ,

];