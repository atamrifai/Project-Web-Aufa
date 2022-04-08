<?= $this->extend('admin'); ?>
<?= $this->section('content'); ?>
<h1>Values</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Change Content at About Us</h3>
                    <span class="portlet-subtitle">Please fill form and click submit</span>
                </div>
            </div>
            <div class="portlet-body">
                <form>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Sub Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Text">
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-12 ml-auto">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>