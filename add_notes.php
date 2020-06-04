<?php ob_start();?>
<?php include ('functions/session.php');
      include ('functions/functions.php');
      include ('header/header.php');
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}

?>

<nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
  <div class="container space">
      <ul>
        <li>
          <a href="">
            <span class="icon is-small">
              <i class="fas fa-home" aria-hidden="true"></i>
            </span>
            <span>Close File</span>
          </a>
        </li>
        <li class="is-active">
          <a href="#">
            <span class="icon is-small">
              <i class="fas fa-file-alt" aria-hidden="true"></i>
            </span>
           Production Notices for 
          </a>
        </li>
        <li class="is-active">
          <a href="pro_profile.php">
            <span class="icon is-small">
              <i class="fas fa-file-alt" aria-hidden="true"></i>
            </span>
            <?php InfoBreadCrumb()?>
          </a>
        </li>
      </ul>
  </div>
</nav>
<div class="container">
<div class="columns">
                    <div class="column is-6">
                        <div class="card events-card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Notes
                                </p>
                                
                  </span>
                </a>
                            </header>
                            <div class="card-table">
                                <div class="content">
                                  <table class="table is-fullwidth is-striped">
                                        <tbody>


    <?php Prod_Update()?>

</tbody>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                  </div>
                  </div>


 <footer class="footer">
    <div class="section-heading">
      <p>
        <strong>Bulma Personal Template</strong> by <a href="https://mubaidr.js.org">Muhammad Ubaid Raza</a>. The
        source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
      </p>
    </div>
  </footer>