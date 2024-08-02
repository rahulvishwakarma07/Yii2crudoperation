<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Product[] $products */

$this->title = 'Product Management';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-2 mb-3">
        <h1 class="display-4 fw-bold text-primary">Product Inventory Management System</h1>

        <div class="w-100 d-flex justify-content-start align-items-center">
            <?= Html::a('+ Add Product', ['create'], ['class' => 'fs-5 fw-bold btn btn-primary mt-3 mb-4']) ?>
        </div>

        <div class="table-responsive" style="max-height: 350px; overflow-y: scroll; scrollbar-width: none; -ms-overflow-style: none;">
            <style>
                .table-responsive::-webkit-scrollbar {
                    width: 0;
                    height: 0;
                }
            </style>
            <table class="rounded table-bordered table table-striped">
                <thead class="position-sticky top-0 bg-white">
                    <tr class="table-primary">
                        <th scope="col">S.no</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product) : ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $product->title ?></td>
                            <td><?= $product->description ?></td>
                            <td><?= $product->category ?></td>
                            <td>
                                <div class="w-100 d-flex justify-content-evenly align-items-center">
                                    <?= Html::a('Edit', ['update', 'id' => $product->Id], ['class' => 'btn btn-success']) ?>
                                    <?= Html::a('Delete', ['site/delete', 'id' => $product->Id], [
                                        'class' => 'btn btn-danger',
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this item?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
