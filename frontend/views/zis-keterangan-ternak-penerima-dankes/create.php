<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganTernakPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Ternak Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Ternak Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-ternak-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
