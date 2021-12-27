<div class="faq content container-fluid mt-3">
    <div class="faq isi">
        <div class="faq row">
            <div class="faq button">
                <button class="faq btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button>
                <!-- <button class="btn"><i class="fa fa-pencil-edit" aria-hidden="true"></i> Change Data Request</button> -->
                <button class="faq btn"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                <div class="search">
                    <input type="text" id="inputPassword2" placeholder="Insert Text Here">
                    <button class="btn"> Search</button>
                </div>
            </div>
        </div>
        <form action="<?= site_url('faq/save') ?>" method="post">
            <div class="row">
                <div class="col-sm-5">
                    <input type="text" name="id" value="<?= $faq['id_pertanyaan'] ?>" hidden>
                    <div class="form-inline row-sm-5 mb-3">
                        <label for="name" class="col-sm-5 col-form-label">ID FAQ :</label>
                        <input type="text" class="form-control-sm-sm" id="id_pertanyaan" name="id_pertanyaan" placeholder="Insert Text Here..." value='<?= $faq["id_pertanyaan"] ?>'>
                    </div>
                    <div class="form-inline row-sm-5 mb-3">
                        <label for="name" class="col-sm-5">Question :</label>
                        <textarea class="form-control-sm-sm" id="list_pertanyaan" name="list_pertanyaan" placeholder="Insert Text Here..."><?= $faq["list_pertanyaan"] ?></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-inline row-sm-5 mb-3">
                        <label for="name" class="col-sm-5 col-form-label ">Answer :</label>
                        <textarea class="form-control-sm-sm" id="jawaban" name="jawaban" placeholder="Insert Text Here..."><?= $faq["jawaban"] ?></textarea>
                    </div>
                    <div class="btnaksi">
                        <a class="btn btn-default" id="btncancel" href="<?= site_url('faq/list') ?>">Cancel</a>
                        <button type="submit" class="btn btn-default"> Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
