<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsjenisbarang $model */

$this->title = 'Create Ipsrsjenisbarang';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrsjenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrsjenisbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
