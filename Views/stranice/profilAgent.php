<!-- Stefan Dumić 2020/0012 -->
<!-- Luka Radoičić 2020/0085 -->

<?php use App\Models\CustomModel; ?>


        <div class="row col-sm-12">
            <div class="col-sm-12 text-center border-bottom">
                <h3 class="h3">Profil agenta <?php echo $_SESSION['autor'] ?></h3>
            </div>

            <div class="col-sm-4 mt-3">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Korisničko ime</th>
                            <td><?php echo $_SESSION['autor'] ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $db = db_connect();
                            $model=new CustomModel($db); 
                            $data = $model->proveriKorIme($_SESSION['autor']);
                            $agn = $model->pronadjiAgenta($_SESSION['autor']);
                        ?>
                        <tr>
                            <th>Ime</th>
                            <td> <?= $data->ime ?></td>
                        </tr>
                        <tr>
                            <th>Prezime</th>
                            <td><?= $data->prezime ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $data->email ?></td>
                        </tr>
                        <tr>
                            <th>Agencija</th>
                            <td><?= $agn->agencija ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-8 mt-3">
                <div class="vstack gap-2 col-sm-6 mx-auto">
                    <a href="<?php echo base_url('agent'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Pregled svih oglasa</button></a>
                    <a href="<?php echo base_url('agent/pregledOglasa'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Agentovi oglasi</button></a>
                    <a href="<?php echo base_url('agent/raspored'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Raspored</button></a>
                    <a href="<?php echo base_url('agent/zahtevi'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Zahtevi</button></a>
                    <a href="<?php echo base_url('agent/promenaInformacijaNaloga'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Promena informacija naloga</button></a>
                    <a href="<?php echo base_url('agent/promenaLozinke'); ?>"><button type="button" class="btn btn-outline-secondary w-100">Promena lozinke</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>