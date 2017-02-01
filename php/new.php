<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 01/02/17
 * Time: 13:24
 */
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css" type="text/css" />
    <link rel="stylesheet" href="../css/material-design.css" type="text/css" />
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>

    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

    <script src="../js/material-button.js"></script>
</head>
<body>
<div class="fill-vertical">

    <div class="col-sm-2 fill-vertical sidebar-background">
        <div class="sidebar material-elevation fill-vertical">
            <h2 style="text-align: center; color: white">BLOG</h2>
            <div class="horizontal-line"></div>

            <a class="material-menu-item material-ripple sidebar-option" href="../index.php"><h4>HOME</h4></a>

            <a class="material-menu-item material-ripple sidebar-logout-option" href="logout.php"><h4>LOGOUT ( <?php echo $_SESSION['loggedInUsername'] ?> )</h4></a>
        </div>
    </div>

    <div class="col-sm-10 main-content fill-vertical" style="padding: 50px">
        <div id="post-container" style="height: 100%;">

            <div class="card" style="width: 100%">
                <div class="col-sm-12">
                    <h3>New Blog Post</h3>
                    <p><span style="font-weight: bold">User</span> - <?php echo $_SESSION['loggedInUsername'] ?></p>

                    <form method="post" action="save.php" name="newPost">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="group" style="margin-top: 30px">
                                    <input id="title" class="material-input" type="text" name="title" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="material-label">Title</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="group">
                                    <textarea id="content" rows="5" class="material-textarea" name="content" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="material-label">Content</label>
                                </div>
                            </div>
                        </div>
                    </form>


                    <div class="row">

                        <div class="col-sm-3 col-sm-offset-9">
                            <a class="material-button material-ripple col-sm-5" style="background-color: gray;" href="../index.php">Cancel</a>
                            <a class="material-button material-ripple col-sm-5 col-sm-offset-2" href="#" onclick="savePost()">Save</a>
                        </div>
                    </div>

                    <script type="text/javascript">

                        function savePost() {
                            console.log("[!!!] SAVING");
                            var title = $('#title');
                            var content = $('#content');

                            if (title.val().trim() != "" && content.val().trim() != "" && <?php echo "\"{$_SESSION['loggedInUsername']}\""; ?> != undefined)
                            {
                                document.forms['newPost'].submit();
                            }
                        }
                    </script>

                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>
