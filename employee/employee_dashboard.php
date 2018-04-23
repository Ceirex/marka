  
<?php include '../view/header.php';?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">



<div class="container-fluid">
      <div class="row">

        <div class="" >
                <nav class="col-sm-6 col-md-2" style="background-color: #f7f7f7; height: 100%; position: fixed;">
                  <ul class="nav" style="padding:25px 0px 20px 0px;font-size: 1.1em;">
                   <br> <li class="nav-item"><a class="nav-link btn btn-primary btn-md" href="<?php echo $base_path . '/employee?scan' ?>" style="font-size: 1.2em">Scan Tag</a></li><br>
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="employee_logout.php">Sign Out</a></li>
                  </ul>
                </nav>
        </div> 

<div class="clearfix"  style="padding-top: 20px; padding-left:10px; margin-left: 17%;">
         <main class="col-sm-9 col-md-10 ">
          <h1>Dashboard</h1><hr>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="https://www.shareicon.net/data/512x512/2016/08/18/810612_sun_512x512.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4><a href="#">Beaches</a></h4>
              <div class="text-muted">Edit Beaches Info</div>
            </div>

            <div class="col-6 col-sm-3 placeholder">
              <img src="https://fliphound.com/Style_Home/images/splash/Advertisers-Section.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4><a href="#">Events & Ads</a></h4>
              <span class="text-muted">Edits events and ads</span>
            </div>

            <div class="col-6 col-sm-3 placeholder">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Curation_tool_tag_icon.svg/2000px-Curation_tool_tag_icon.svg.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4><a href="#">Tags</a></h4>
              <span class="text-muted">Edit Tags</span>
            </div>

            <div class="col-6 col-sm-3 placeholder">
              <img src="http://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4><a href="#">Users</a></h4>
              <span class="text-muted">Edit User Acc</span>
            </div>
          </section><br>

          <h2>Tag History</h2><hr>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th># ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Location</th>
                  <th>Date/Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main> 
</div>

      </div>
    </div>


 

	 


<?php include '../view/footer.php'; ?>

