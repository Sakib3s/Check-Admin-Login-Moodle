<?php


if (is_siteadmin()) {
    return 'Current User is a Admin';
}else{

    return 'Current Usrr is no an Admin';
}
