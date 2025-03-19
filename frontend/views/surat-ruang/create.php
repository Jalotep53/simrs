<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRuang $model */

$this->title = 'Create Surat Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Surat Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
