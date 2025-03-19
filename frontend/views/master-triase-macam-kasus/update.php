<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseMacamKasus $model */

$this->title = 'Update Master Triase Macam Kasus: ' . $model->kode_kasus;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Macam Kasuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kasus, 'url' => ['view', 'kode_kasus' => $model->kode_kasus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-macam-kasus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
