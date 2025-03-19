<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterImunisasi $model */

$this->title = 'Update Master Imunisasi: ' . $model->kode_imunisasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Imunisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_imunisasi, 'url' => ['view', 'kode_imunisasi' => $model->kode_imunisasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-imunisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
