<?php $this->title = 'Safe Food | List safe'; ?>
<div id="wrapper">
    <div class="top"></div>
    <section id="main-content">
        <div class="top-title">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">List Safe</li>
                </ol>
            </div>
        </div>
        <div class="name-title">
            <div class="container name-title">
                <h3>List of Safe Restaurants</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <p>
                        <p class="col-xs-11"></p>
                        <p class="col-xs-1"><input type="button" name="btn-search-safe" value="Search"></p>
                        </p>
                        <div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="box-header">
                                <tr>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Quality</th>
                                </tr>
                                </thead>
                                <?php
                                foreach ($listNonSafe as $nonSafe) {

                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?= $nonSafe['category'] ?></td>
                                        <td><?= $nonSafe['food'] ?></td>
                                        <td><?= $nonSafe['address'] ?></td>
                                        <td>
                                            <?php for($count=1;$count<=$nonSafe['quality'];$count++){?>
                                            <?="*"?>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>