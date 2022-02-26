<?php
if (isset ($_GET['about']))              { include 'about.php'; }
elseif (isset($_GET['blog']))            { include 'blog.php'; }
elseif (isset($_GET['post-details']))    { include 'post-details.php'; }
elseif (isset($_GET['contact']))         { include 'contact.php'; }
else                                     { include 'home.php'; }
?>