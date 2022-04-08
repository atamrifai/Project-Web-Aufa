<?= $this->extend('admin'); ?>
<?= $this->section('content'); ?>
<h1>Contact</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Change Content at Contact</h3>
                    <span class="portlet-subtitle">Please fill form and click submit</span>
                </div>
            </div>
            <div class="portlet-body">
                <form>
                    <h5>For Maps</h5>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Latitede </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Longtitude </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Text">
                        </div>
                    </div>
                    <h5>For Address</h5>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Office </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Office">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Factory</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Factory">
                        </div>
                    </div>
                    <h5>For Follow us</h5>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Whatsapp </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Whatsapp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Support</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Factory">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Factory">
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-sm-10 ml-auto">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>