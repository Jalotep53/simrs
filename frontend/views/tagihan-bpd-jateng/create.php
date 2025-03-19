<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdJateng $model */

$this->title = 'Create Tagihan Bpd Jateng';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Bpd Jatengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-bpd-jateng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
