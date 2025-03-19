<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Antripenolakananjuranmedis $model */

$this->title = 'Update Antripenolakananjuranmedis: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Antripenolakananjuranmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="antripenolakananjuranmedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
