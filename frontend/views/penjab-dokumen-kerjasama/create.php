<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabDokumenKerjasama $model */

$this->title = 'Create Penjab Dokumen Kerjasama';
$this->params['breadcrumbs'][] = ['label' => 'Penjab Dokumen Kerjasamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjab-dokumen-kerjasama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
