<footer class="footer">
                    <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                            <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                        </ul>
                    </div>
                </footer>

                                <div class="modal fade" id="modal-media">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                					<span class="sr-only">Close</span>
                				</button>
                                <h4 class="modal-title">Media Library</h4>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <!-- <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li> -->
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                   <!--  <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div> -->
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                <button type="button" class="btn btn-primary">Insert Selected</button> 
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                            </div>
                            <div class="modal-body">
                                <p>Դուք վստահ եք, որ ցանկանում եք ջնջել?</p>
                            </div>
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-primary remove-yes" data-dismiss="modal">Այո</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ոչ</button>
                             </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        
        <script src="<?php echo base_url('dashboard/js/vendor.js')?>"></script>
        <script src="<?php echo base_url('dashboard/js/app.js')?>"></script>
        <script src="<?php echo base_url('dashboard/js/script.js')?>"></script>
       <script>base_url="<?=base_url();?>";</script>
      
    </body>

</html>