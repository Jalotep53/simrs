<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanResepPulang $model */

$this->title = 'Create Permintaan Resep Pulang';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Resep Pulangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-resep-pulang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
