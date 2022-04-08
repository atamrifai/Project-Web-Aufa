<?= $this->extend('admin'); ?>
<?= $this->section('content'); ?>
<h1>Home</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Change Content at Home Section</h3>
                    <span class="portlet-subtitle">Max. 3 Slide</span>
                </div>
            </div>
            <div class="portlet-body no-padding">
                <div class="row no-margin">
                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                        <h4>Slide 1</h4>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sub title</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sub title">
                            </div>
                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                    <div class="flex d-flex flex-column">
                                        <h3>Choose Picture1</h3>
                                        <span class="portlet-subtitle">please upload</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Input picture</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <!--portlet-->
                            <button type="submit" class="btn btn-primary btn-block">Save changes 1</button>
                        </form>
                    </div>
                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                        <h4>Slide 2</h4>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sub title</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sub title">
                            </div>
                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                    <div class="flex d-flex flex-column">
                                        <h3>Choose Picture2</h3>
                                        <span class="portlet-subtitle">please upload</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Input picture</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <!--portlet-->
                            <button type="submit" class="btn btn-primary btn-block">Save changes 2</button>
                        </form>
                    </div>
                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                        <h4>Slide 3</h4>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sub title</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sub title">
                            </div>
                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                    <div class="flex d-flex flex-column">
                                        <h3>Choose Picture2</h3>
                                        <span class="portlet-subtitle">please upload</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Input picture</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <!--portlet-->

                            <button type="submit" class="btn btn-primary btn-block">Save changes 3</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>