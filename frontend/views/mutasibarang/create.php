<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Mutasibarang $model */

$this->title = 'Create Mutasibarang';
$this->params['breadcrumbs'][] = ['label' => 'Mutasibarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mutasibarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
