<?php include 'inc/header.php'; ?>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper" style="margin-top: 50px">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Listes des <b>Employées</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nouveau employé-e</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
							Matricule
                        </th>
                        <th>Nom & Prénom</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php require_once 'inc/config.php';
                        $nTotals = $pdo->query('SELECT * FROM users')->rowCount();

                        $parPages = 10; // Listes des users par pages
                        $nPages = $nTotals / $parPages; // Nbre des pages
                        if (isset($_GET['pages']) && is_numeric($_GET['pages'])){
                            $cPages = $_GET['pages'];
                        } else {
                            $cPages = 1;
                        }

                        $query = $pdo->query('SELECT * FROM users ORDER BY name_u ASC LIMIT '.$parPages * ($cPages - 1).', '.$parPages.'')->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($query as $u){ ?>
                            <tr>
                                <td><?= 'M2021-'.$u['id'] ?></td>
                                <td><?= $u['name_u'] ?></td>
                                <td><?= $u['email_u'] ?></td>
                                <td><?= $u['adress_u'] ?></td>
                                <td><?= $u['phone_u'] ?></td>
                                <td>
                                    <a href="#" data-target="#editEModal<?= $u['id'] ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#" data-target="#delEModal<?= $u['id'] ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>

                            <!-- Edit Modal HTML -->
                            <div id="editEModal<?= $u['id'] ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="inc/edit-user.php?id=<?= $u['id'] ?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modification Employé-e</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name_u">Nom & Prénoms</label>
                                                    <input type="text" class="form-control" name="name_u" value="<?= $u['name_u'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email_u" value="<?= $u['email_u'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" name="adress_u" value="<?= $u['adress_u'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input type="text" class="form-control" name="phone_u" value="<?= $u['phone_u'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                                <input type="submit" class="btn btn-success" value="Modifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal HTML -->
                            <div id="delEModal<?= $u['id'] ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Voulez vous vraiment effacer, <b><?= $u['name_u'] ?></b> dans la liste?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-outline-primary" data-dismiss="modal">Non</button>
                                            <a href="inc/del-user.php?ids=<?= $u['id'] ?>" class="btn btn-success">Confirmer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b><?= ($cPages * 10) ?></b> out of <b><?= $nTotals ?></b> totals</div>
                    <ul class="pagination">
                        <li class="page-item <?= $cPages == 1 ? 'active' : '' ?>"><a class="page-link" href="<?= $cPages > 1 ? '/?pages='.($cPages-1) : '' ?>">Précedent</a></li>

                        <?php for($i = 1; $i <= $nPages; $i++){ ?>
                            <li class="page-item <?= $cPages == $i ? 'active' : '' ?>"><a href="<?= $cPages == $i ? '' : '/?pages='.$i ?>" class="page-link"><?= $i ?></a></li>
                        <?php } ?>

                        <li class="page-item <?= $cPages == $nPages ? 'active' : '' ?>"><a class="page-link" href="<?= $cPages < $nPages ? '/?pages='.($cPages+1) : '' ?>">Suivant</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="inc/add-user.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Nouveau Employé-e</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name_u">Nom & Prénoms</label>
                            <input type="text" class="form-control" name="name_u" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email_u" required>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" name="adress_u" required>
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" name="phone_u" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-success" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php';
