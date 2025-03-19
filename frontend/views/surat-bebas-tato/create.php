<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBebasTato $model */

$this->title = 'Create Surat Bebas Tato';
$this->params['breadcrumbs'][] = ['label' => 'Surat Bebas Tatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-bebas-tato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
