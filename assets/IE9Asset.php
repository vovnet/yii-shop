<?php
/**
 * Created by PhpStorm.
 * User: Anonimous
 * Date: 30.05.2017
 * Time: 9:27
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class IE9Asset extends AssetBundle
{
    public $basePath ='@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.j'
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => View::POS_HEAD
    ];
}