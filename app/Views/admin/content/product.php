<?= $this->extend('admin'); ?>
<?= $this->section('content'); ?>
<h1>Product</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Change Content at Product Section</h3>
                    <span class="portlet-subtitle">Please fill and click submit</span>
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
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-auto">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                <div class="flex d-flex flex-column">
                                    <h3>Change Card Componen at Product Section</h3>
                                    <span class="portlet-subtitle">Can change just 4 card component</span>
                                </div>
                            </div>
                            <div class="portlet-body no-padding">
                                <div class="row no-margin">
                                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                                        <h4>Card 1</h4>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Text</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                                    <div class="flex d-flex flex-column">
                                                        <h3>Choose Picture from card 1</h3>
                                                        <span class="portlet-subtitle">can skip this</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Select your picture</label>
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--portlet-->
                                            <button type="submit" class="btn btn-primary btn-block">Save change card 1</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                                        <h4>Card 2</h4>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Text</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                                    <div class="flex d-flex flex-column">
                                                        <h3>Choose Picture from card 2</h3>
                                                        <span class="portlet-subtitle">can skip this</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Select your picture</label>
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--portlet-->
                                            <button type="submit" class="btn btn-primary btn-block">Save change card 2</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                                        <h4>Card 3</h4>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Text</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                                    <div class="flex d-flex flex-column">
                                                        <h3>Choose Picture from card 3</h3>
                                                        <span class="portlet-subtitle">can skip this</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Select your picture</label>
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--portlet-->
                                            <button type="submit" class="btn btn-primary btn-block">Save change card 3</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 b-r pt-20 pb-20 no-border-lg-down">
                                        <h4>Card 4</h4>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Text</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                                                <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                                    <div class="flex d-flex flex-column">
                                                        <h3>Choose Picture from card 4</h3>
                                                        <span class="portlet-subtitle">can skip this</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Select your picture</label>
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--portlet-->
                                            <button type="submit" class="btn btn-primary btn-block">Save change card 4</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<h1>Video And Criteria Product Section</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Change Content at Video and Photo Section</h3>
                    <span class="portlet-subtitle">Please fill and click submit</span>
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
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nm3" class="col-sm-2 col-form-label">Link Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm3" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-auto">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                    <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
                        <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                            <div class="flex d-flex flex-column">
                                <h3>Select Input Gallery</h3>
                                <span class="portlet-subtitle">Maximum 3 Menu</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <select class="form-control mb-20 form-control-lg">
                                <option>Large select</option>
                            </select>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 pt-10 ml-auto">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Select Input -->

                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>