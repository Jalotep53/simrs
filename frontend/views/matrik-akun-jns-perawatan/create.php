<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatan $model */

$this->title = 'Create Matrik Akun Jns Perawatan';
$this->params['breadcrumbs'][] = ['label' => 'Matrik Akun Jns Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matrik-akun-jns-perawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
