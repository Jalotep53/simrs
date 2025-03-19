<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLab $model */

$this->title = 'Create Permintaan Detail Permintaan Lab';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Detail Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-detail-permintaan-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
