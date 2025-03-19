<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarObat $model */

$this->title = 'Create Resep Luar Obat';
$this->params['breadcrumbs'][] = ['label' => 'Resep Luar Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
