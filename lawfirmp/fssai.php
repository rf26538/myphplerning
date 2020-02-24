<?php
    include ("header.php");
    include('dbconn.php');
    $sql = "SELECT * FROM sub_menu_content WHERE status='1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
?>
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner desc">
                            <h2 class="heading-section">Trademark</h2>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-about">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 colorlib-heading">
                    <?php
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                    <center><h2><?= $row['heading']?></h2></center>
                    <p><?= $row['des']?></p>
                <?php }?>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-consult">
        <div class="video colorlib-video" style="background-image: url(images/video.jpg);" data-stellar-background-ratio="0.5">
        </div>
        <div class="choose choose-form animate-box">
            <div class="colorlib-heading">
                <h2>Free Legal Consultation</h2>
            </div>
            <form action="mail.php" method="post">
                <div class="row form-group">
                    <div class="col-md-6">
                        <!-- <label for="fname">First Name</label> -->
                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                    </div>
                    <div class="col-md-6">
                        <!-- <label for="lname">Last Name</label> -->
                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="email">Email</label> -->
                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="subject">Subject</label> -->
                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="message">Message</label> -->
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary">
                </div>

            </form> 
        </div>
    </div>

<?php
    include ("footer.php");
?>