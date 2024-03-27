</div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ForceReport.com 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog border" role="document">
            <div class="modal-content main-nav">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
 <div class="modal fade" id="sendmsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog border" role="document">
            <div class="modal-content main-nav">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Message to subscribers</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                 <form class="row justify-content-center" action="<?php echo base_url('sendEmails')?>" method="POST">
                     <div class="col-6">
                     <div class="mb-3">
					  <input type="text" class="form-control" name="title"  placeholder="Title">
					</div>
					<div class="mb-3">
					   <textarea name="message" placeholder="Message"></textarea>
					</div>
					<div class="mb-3">
					  <input type="submit" class="approve-btn" value="Login">
					</div>
					</div>
                 </form>
                
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>js/demo/chart-pie-demo.js"></script>
	<script src="<?php echo base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/countrystatecity.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
 
    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>
</body>

</html>