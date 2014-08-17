<?php require_once 'header.php'; ?>
    <div class="container">
        <section id="page" class="fullwidth settings">
            <div class="content">
                 <?php echo (isset($_SESSION['e_out']) && !empty($_SESSION['e_out'])) ? $_SESSION['e_out'] : ''; unset($_SESSION['e_out']); ?>
                <div id="feedhead">
                    <div class="title">
                        <h2>Settings</h2>
                    </div>
                    <div class="clearfloat"></div>
                </div>
                <div class="pagecontent">
                    <div id="settingsform">

                        <div class="title">
                            <h3>Profile</h3>
                            <div class="label">: Your profile informations</div>
                        </div>
                        <form enctype="multipart/form-data" method="post" action="<?php echo Dispatcher::base(); ?>settings/update">
                            <div class="avatarup">
                                <div class="preview">
                                    <img src="<?php echo Template::avatar(Template::me("name")); ?>" alt="Avatar preview" />
                                </div>
                                <div class="upload">
                                    <label for="upavatar">Avatar:</label>
                                    <input type="file" id="upavatar" name="avatar" accept="image/*"/>
                                </div>
                            </div>

                            <label for="names">Names:</label>
                            <input type="text" id="names" name="names" placeholder="<?php echo Template::me('surname') ;?>" />



                            <div class="title">
                                <h3>Account</h3>
                                <div class="label">: Your basic account informations</div>
                            </div>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="<?php echo Template::me('email') ;?>" />

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" placeholder="Change your password" />

                            <label for="password">Password again:</label>
                            <input type="password" id="passwordagain" name="passwordagain" placeholder="Type your password again" />

                            <input type="submit" id="submit" value="Save" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="<?php Template::tmpdir('js'); ?>/scrollbar.js"></script>
    <script type="text/javascript" src="<?php Template::tmpdir('js'); ?>/panel.js"></script>
</body>
</html>