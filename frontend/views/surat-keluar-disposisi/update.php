<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarDisposisi $model */

$this->title = 'Update Surat Keluar Disposisi: ' . $model->no_disposisi;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_disposisi, 'url' => ['view', 'no_disposisi' => $model->no_disposisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keluar-disposisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
