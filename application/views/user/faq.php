
           <div class="isi container mt-3">
            <div class="row">
                <div class="button">
                    <a href="<?php base_url() ?>datakbC/addDataKB"><button class="btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
                    <button class="btn"><i class="fa fa-cog"></i> Change Data Request</button>
                    <button class="btn"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                </div>
            </div>
            <div class="row" id="cardbody">
                <?php $i = 0 ?>
                <?php foreach ($faqs as $faq) : ?>
                    <?php $i++ ?>
                    <div class="card-faq">
                        <div class="card-faq-title">
                            <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <ul class="collapse list-unstyled" id="editdetail">
                                <li>
                                    <a href="<?= site_url('faq/edit/'.$faq['id_pertanyaan']) ?>">Edit</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-faq-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                
                                <div class="mt-3">
                                    <h5><?= $faq['list_pertanyaan'] ?></h5>
                                    <h5><?= $faq['id_pertanyaan'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- <div class="card-faq">
                    <div class="card-faq-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-faq-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/icon knowledge based.png" alt="Admin" width="150">
                            <div class="mt-3">
                                <h5>Knowledge Based 2</h5>
                                <h5>ID Konten</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <div class="card-faq-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-faq-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/icon knowledge based.png" alt="Admin" width="150">
                            <div class="mt-3">
                                <h5>Knowledge Based 3</h5>
                                <h5>ID Konten</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="card-faq">
                        <div class="card-faq-title"> -->
                <!-- <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <ul class="collapse list-unstyled" id="editdetail">
                                <li>
                                    <a href="#">Details</a>
                                </li>
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                            </ul> -->
                <!-- </div> -->
                <!-- <div class="card-faq-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/iconagent.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h5></h5>
                                <h5></h5>                
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="card-faq"> -->
                <!-- <div class="card-faq-title">
                        <a href="#editdetail" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <ul class="collapse list-unstyled" id="editdetail">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Edit</a>
                            </li>
                        </ul> -->
                <!-- </div>  -->
                <!-- <div class="card-faq-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="assets/img/iconpegawai.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h5>Pegawai 5</h5>
                                    <h5>Jabatan</h5>                
                                </div>
                            </div>
                        </div> -->
                <!-- </div> -->
            </div>
        </div> 
