<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTunjanganHarian $model */

$this->title = 'Create Master Tunjangan Harian';
$this->params['breadcrumbs'][] = ['label' => 'Master Tunjangan Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-tunjangan-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
