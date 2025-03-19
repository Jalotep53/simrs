<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatanInap $model */

$this->title = 'Create Matrik Akun Jns Perawatan Inap';
$this->params['breadcrumbs'][] = ['label' => 'Matrik Akun Jns Perawatan Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matrik-akun-jns-perawatan-inap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
