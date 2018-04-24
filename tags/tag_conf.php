<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>




<br>

<input type="hidden" value="<?php echo $tag_insert?>" id="tag_insert">
<hr><br>
<h3>Thank you for your purchase.  Scan the QR Code below to access your beach.</h3>
<h3>Your beach number is: <?php echo $tag_insert?></h3>
                                        
<a href="<?php echo $base_path . '/user' ?>"><button type="button" class="btn btn-info btn-md" style="margin-top: 20px;">User Menu</button></a>

<br><hr>

<?php include '../view/footer.php';?>