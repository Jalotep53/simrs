<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukDisposisi $model */

$this->title = 'Update Surat Masuk Disposisi: ' . $model->no_disposisi;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_disposisi, 'url' => ['view', 'no_disposisi' => $model->no_disposisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-masuk-disposisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
