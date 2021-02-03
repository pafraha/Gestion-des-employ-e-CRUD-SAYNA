<?php include 'inc/header.php'; ?>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Listes des <b>Employées</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nouveau employé-e</span></a>
                            <a href="#deleteEModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Effacer</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                        </th>
                        <th>Nom & Prénom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php require_once 'inc/config.php';
                        $query = $pdo->query('SELECT * FROM users ORDER BY name_u ASC')->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($query as $u){ ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?= $u['name_u'] ?></td>
                                <td><?= $u['email_u'] ?></td>
                                <td><?= $u['adress_u'] ?></td>
                                <td><?= $u['phone_u'] ?></td>
                                <td>
                                    <a href="#" data-target="#editEModal<?= $u['id'] ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="" class="delete" onclick="delEmployee(<?= $u['id'] ?>)"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
                                                    <label>Adresse</label>
                                                    <textarea class="form-control" name="adress_u" value="<?= $u['adress_u'] ?>" required></textarea>
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

                        <?php } ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
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
                            <label>Adresse</label>
                            <textarea class="form-control" name="adress_u" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="number" class="form-control" name="phone_u" required>
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
