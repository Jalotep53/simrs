<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisCidera $model */

$this->title = 'Create K3rs Jenis Cidera';
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Cideras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-jenis-cidera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
