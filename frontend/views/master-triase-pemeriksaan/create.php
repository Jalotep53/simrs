<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriasePemeriksaan $model */

$this->title = 'Create Master Triase Pemeriksaan';
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-pemeriksaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
