<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
 <!DOCTYPE html>
 <html lang="en">
 <?php echo @$head; ?> <!-- untuk menampilkan file head.php-->
 <body id="page-top">
 <div id="wrapper">
	<?php echo @$sidebar; ?><!-- untuk menampilkan file sidebar.php-->
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<?php echo @$topbar; ?><!-- untuk menampilkan file topbar.php-->
	<?php echo @$content; ?><!-- untuk menampilkan file content.php-->
	</div>
	<?php echo @$footer; ?><!-- untuk menampilkan file footer.php-->
</div>
</div>
    <!-- End of Content Wrapper -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script> <!-- untuk memanggil file js pada folder assets--> 
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script><!-- untuk memanggil file js pada folder assets-->

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script><!-- untuk memanggil file js pada folder assets-->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js')?>"></script><!-- untuk memanggil file js pada folder assets-->

 </body>
 </html>
 