<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPiutang $model */

$this->title = 'Create Akun Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Akun Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
