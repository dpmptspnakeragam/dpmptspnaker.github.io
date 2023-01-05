 <div class="col-12 footer text-center pt-1 pb-3">
   <p>Copyright 2020 &copy; DPMPTSP Kabupaten Agam - All Right Reserved</p>
 </div>


 <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="<?= base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
 <script src="<?= base_url(); ?>assets/js/script.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 <script>
   $(function() {
     $('[data-toggle="tooltip"]').tooltip();
   });
 </script>
 <script>
   $(document).ready(function() {
     $('#dataTable').dataTable({});
   });
 </script>
 <script>
   function init() {
     var imgDefer = document.getElementsByTagName('img');
     for (var i = 0; i < imgDefer.length; i++) {
       if (imgDefer[i].getAttribute('data-src')) {
         imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
       }
     }
   }

   window.onload = init;
 </script>
 </body>

 </html>