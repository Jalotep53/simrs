<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratLemari $model */

$this->title = 'Create Surat Lemari';
$this->params['breadcrumbs'][] = ['label' => 'Surat Lemaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-lemari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
