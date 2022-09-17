<?php
include 'header.html';
include 'menu.html';
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "home":
            include 'home.html';
            break;
        case "presentation":
            include 'presentation.html';
            break;
        case "contact":
            include 'contact.html';
            break;
    }
} else {
    include 'home.html';
}
include 'footer.html';