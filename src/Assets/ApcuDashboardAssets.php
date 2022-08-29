<?php
declare(strict_types=1);

namespace S1lver\ApcuDashboard\Assets;

use yii\web\AssetBundle;

/**
 * APCu dashboard assets
 */
class ApcuDashboardAssets extends AssetBundle
{
    public $sourcePath = __DIR__ . '/Assets/css/';
    public $css = [
        'css/apcu_dashboard.css'
    ];
}
