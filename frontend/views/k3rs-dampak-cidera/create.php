<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsDampakCidera $model */

$this->title = 'Create K3rs Dampak Cidera';
$this->params['breadcrumbs'][] = ['label' => 'K3rs Dampak Cideras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-dampak-cidera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
