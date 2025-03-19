<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanPenunjang $model */

$this->title = 'Create Utd Pengambilan Penunjang';
$this->params['breadcrumbs'][] = ['label' => 'Utd Pengambilan Penunjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-pengambilan-penunjang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
