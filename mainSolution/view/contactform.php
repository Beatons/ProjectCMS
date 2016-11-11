﻿<div class="container-fluid">
    <div class="container">
    <div class='row'>
        <div class='col-md-6'>
            <div class="jumbotron">
                    <h3 style='color:#000000;'>Contact us</h3>
                    <form name='contactform' method='post' action='view/send_form_email.php'>
                        <div class='form-group'>
                            <input type='text' class='form-control' id='exampleInputEmail1' name='first_name' placeholder='Name'>
                        </div>
                        <div class='form-group'>
                            <input type='email' class='form-control' id='exampleInputEmail1' name='email' placeholder='Email'>
                        </div>
                        <textarea class='form-control' rows='3' name='comments' placeholder='Any comments?'></textarea>
                        <br/>
                        <button type='submit' class='btn btn-primary'>Send</button>
                    </form>
            </div>
        </div> <!--Form container ENDS -->
        <div class='col-md-6'>
            <div class="jumbotron">
                <div>
            <?php
                $desc = mysqli_fetch_array($des);
            ?>
                    <h3><?php echo $desc['title']; ?></h3> <br />
                    <img src="<?php echo $desc['pictures']; ?>" class="companyPicture img-responsive" />
                    <h4><?php echo $desc['Description']; ?></h4> <br />

                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-6">
        <div class="jumbotron">
            <h3>You can find us:</h3><br/><br/>
        <?php
            $info = mysqli_fetch_array($contact);
        ?>
            <h4>Phone: <strong><?php echo $info['Phone']; ?></strong></h4> <br />
            <h4>Email: <strong><?php echo $info['email']; ?></strong></h4> <br />
            <h4>Description: <strong><?php echo $info['description']; ?></strong></h4> <br />
            <h4>Address: <strong><?php echo $info['Street'] ?><br/>
            <?php echo  $info['zipcode'] . $info['city']; ?> <br />
            <?php echo $info['country']; ?></strong></h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="jumbotron">
            <h2>Opening hours:</h2><br/><br/>
            <h4>Monday:<strong><?php echo $info['monday']; ?></strong></h4>
            <h4>Tuesday:<strong><?php echo $info['tuesday']; ?></strong></h4>
            <h4>Wednesday:<strong><?php echo $info['wednesday']; ?></strong></h4>
            <h4>Thursday:<strong><?php echo $info['thursday']; ?></strong></h4>
            <h4>Friday:<strong><?php echo $info['friday']; ?></strong></h4>
            <h4>Saturday:<strong><?php echo $info['saturday']; ?></strong></h4>
            <h4>Sunday:<strong><?php echo $info['sunday']; ?></strong></h4>
        </div>
    </div>
</div>
    </div>
</div>

