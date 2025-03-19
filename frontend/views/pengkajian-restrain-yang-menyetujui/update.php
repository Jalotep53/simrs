<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrainYangMenyetujui $model */

$this->title = 'Update Pengkajian Restrain Yang Menyetujui: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pengkajian Restrain Yang Menyetujuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengkajian-restrain-yang-menyetujui-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
