<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankbri $model */

$this->title = 'Create Set Akun Bankbri';
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Bankbris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-bankbri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
