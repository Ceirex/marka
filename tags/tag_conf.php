<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>
<?php include '../model/database.php'; ?>
<?php include "../model/beach_db.php";?>
<?php include "../model/tags_db.php";?>


<br>

<input type="hidden" value="<?php echo $tag_insert?>" id="tag_insert">
       <hr><br>
       <h3>Thank you for your purchase.  Scan the QR Code below to access your beach.<h3>
    <h3>Your beach number is: <?php echo $tag_insert?><h3>
                                        
                                        <img id="qrcode" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Offline">


				<br><hr>
                                
<script>
    $(document).ready(function(){
        //when doc is ready
        var tag_insert = $('#tag_insert').val();
        var url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+ tag_insert;
        $('#qrcode').attr('src',url);
</script>


<?php include '../view/footer.php';?>