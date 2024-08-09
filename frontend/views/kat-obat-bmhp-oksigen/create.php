<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KatObatBmhpOksigen $model */

$this->title = 'Create Kat Obat Bmhp Oksigen';
$this->params['breadcrumbs'][] = ['label' => 'Kat Obat Bmhp Oksigens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kat-obat-bmhp-oksigen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
