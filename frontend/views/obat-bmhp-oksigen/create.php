<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatBmhpOksigen $model */

$this->title = 'Create Obat Bmhp Oksigen';
$this->params['breadcrumbs'][] = ['label' => 'Obat Bmhp Oksigens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-bmhp-oksigen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
