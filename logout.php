<?php

//open session
session_start();

//hapus session
session_destroy();

//redirect ke login
header('Location: login.php?msg=logout');