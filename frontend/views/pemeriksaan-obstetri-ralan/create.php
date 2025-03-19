<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanObstetriRalan $model */

$this->title = 'Create Pemeriksaan Obstetri Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Obstetri Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-obstetri-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
