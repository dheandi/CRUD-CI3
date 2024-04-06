<script type="text/javascript">
$(document).ajaxStart(function() {
    $("#ajax-wait").css({
        left: ($(window).width() - 32) / 2 + "px", // 32 = lebar gambar
        top: ($(window).height() - 32) / 2 + "px", // 32 = tinggi gambar
        display: "block"
    })
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>/guru/tampilGuru",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });

});
</script>

<div class='container'>
    <h2 align="center">APLIKASI CRUD AJAX DI CODEIGNITER</h2>
    <div id="tampil">
        <!-- Data tampil disini -->
    </div>  
</div>