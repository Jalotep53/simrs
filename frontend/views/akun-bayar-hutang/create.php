<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayarHutang $model */

$this->title = 'Create Akun Bayar Hutang';
$this->params['breadcrumbs'][] = ['label' => 'Akun Bayar Hutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-bayar-hutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
