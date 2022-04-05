<nav aria-label="breadcrumb">
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kurikulum</li>
                </ol>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <h3><b>Kurikulum </b></h3>
                <small><?= date('d F Y'); ?></small>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header bg-info">Semester</h5>
                    <div class="card-body">
                        <ul class="nav flex-column nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#SemesterI">Semester I</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterII">Semester II</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterIII">Semester III</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterIV">Semester VI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterV">Semester V</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterVI">Semester VI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterVII">Semester VII</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#SemesterVIII">Semester VIII</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header bg-info">Tabel Kurikulum</h5>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="SemesterI">
                                <h3>Semester I</h3>
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <?php foreach ($kurikulum as $klm) : ?>
                                    <tr>
                                        <td><?= $klm['id'] ?></td>
                                        <td><?= $klm['kode'] ?></td>
                                        <td><?= $klm['mata_kuliah'] ?></td>
                                        <td><?= $klm['semester'] ?></td>
                                        <td><?= $klm['sks'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterII">
                                <h3>Semester II</h3>
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>M12980</td>
                                        <td>Pemrograman</td>
                                        <td>Semester I</td>
                                        <td>2 SKS</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterIII">
                                <h3>Semester III</h3>
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode</td>
                                        <td>Mata Kuliah</td>
                                        <td>Semester</td>
                                        <td>SKS</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterIV">
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterV">
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode</td>
                                        <td>Mata Kuliah</td>
                                        <td>Semester</td>
                                        <td>SKS</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterVI">
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterVII">
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="SemesterVIII">
                                <table class="table table-striped table-bordered mt-4">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
</nav> 