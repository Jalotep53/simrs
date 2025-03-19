<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLabmb $model */

$this->title = 'Create Permintaan Detail Permintaan Labmb';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Detail Permintaan Labmbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-detail-permintaan-labmb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
