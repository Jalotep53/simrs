<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Databarang $model */

$this->title = 'Update Databarang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Databarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="databarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
