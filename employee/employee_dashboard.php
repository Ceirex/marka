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
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Cape May</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/03/2010</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>Asbury Park</td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>03/24/2018</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Long Beach Island</td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>07/22/2018</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Spring Lake</td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>05/11/2013</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>Ocean Grove</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/11/2013</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Spring Lake</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>03/18/2017</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>Avalon</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/17/2014</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>Margate </td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>05/11/2013</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Margate</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/09/2019</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>Sandy Hook</td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>05/11/2013</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>Stone Harbor</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>06/19/2017</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>Sandy hook</td>
                  <td>Weekly</td>
                  <td>New Jersey</td>
                  <td>05/19/2018</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>Point Pleasant</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/11/2013</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>Wildwood</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>06/24/2019</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>Cape May</td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>06/22/2017</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>Avalon </td>
                  <td>Seasonal</td>
                  <td>New Jersey</td>
                  <td>05/15/2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main> 
</div>

      </div>
    </div>


 

	 


<?php include '../view/footer.php'; ?>

