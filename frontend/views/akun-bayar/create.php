<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayar $model */

$this->title = 'Create Akun Bayar';
$this->params['breadcrumbs'][] = ['label' => 'Akun Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-bayar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
