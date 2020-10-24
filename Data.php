<?php
require "User.php";
require "Customer.php";
require "System.php";
require "ErrorType.php";
require "Incident.php";

$users = array(new User(1, "jamessuderman", "123James"),
            new User(2, "dominicsutton", "123Dominic"),
            new User(3, "shreedhardeokar", "123Shreedhar"));

$customers = array(new Customer(1, "Tier 1"), new Customer(2, "Patriot"), new Customer(3,"Wyre"));
$systems = array(new System(1, "STRATX"), new System(2, "VaporGun"));
$errorTypes = array(new ErrorType(1, "Quality"), new ErrorType(2, "Human Error"));

$incidents = array(new Incident(1, "10/2", "Metal Shavings", $customers[0], $systems[0], $errorTypes[1], true, false, true),
    new Incident(2, "10/2", "Blocked Threads", $customers[1], $systems[1], $errorTypes[0], false, true, false),
    new Incident(3, "10/3", "Moisture", $customers[0], $systems[1], $errorTypes[1], true, false, true),
    new Incident(4, "10/7", "Chipped carrier", $customers[1], $systems[1], $errorTypes[0], true, false, false),
    new Incident(5, "10/7", "Blocked Threads", $customers[1], $systems[1], $errorTypes[1], false, true, false),
    new Incident(6, "10/7", "Moisture", $customers[0], $systems[1], $errorTypes[1], true, false, true),
    new Incident(7, "10/7", "Chipped carrier", $customers[2], $systems[0], $errorTypes[0], false, true, false),
    new Incident(8, "10/7", "Blocked Threads", $customers[2], $systems[1], $errorTypes[0], false, true, true),
    new Incident(9, "10/10", "Moisture", $customers[0], $systems[1], $errorTypes[1], true, false, true),
    new Incident(10, "10/10", "Chipped carrier", $customers[2], $systems[0], $errorTypes[0], true, true, false),
    new Incident(11, "10/17", "Blocked Threads", $customers[1], $systems[0], $errorTypes[0], false, true, false),
    new Incident(12, "10/23", "Moisture", $customers[0], $systems[1], $errorTypes[1], true, false, true),
    new Incident(13, "10/23", "Chipped carrier", $customers[0], $systems[0], $errorTypes[1], true, true, false),
    new Incident(14, "10/27", "Blocked Threads", $customers[0], $systems[1], $errorTypes[1], false, false, false),
    new Incident(15, "10/27", "Moisture", $customers[0], $systems[0], $errorTypes[1], true, false, true),
    new Incident(16, "10/28", "Chipped carrier", $customers[2], $systems[0], $errorTypes[0], true, true, true),
    new Incident(17, "10/30", "Stripped Wires", $customers[1], $systems[1], $errorTypes[1], false, false, true));
