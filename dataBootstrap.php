<?php

$users = array(new User(1, "jamessuderman", "123James"),
                new User(2, "dominicsutton", "123Dominic"),
                new User(3, "shreedhardeokar", "123Shreedhar"));

$customers = array(new Customer(1, "Tier 1"), new Customer(2, "Patriot"), new Customer("Wyre"));
$systems = array(new System(1, "STRATX"), new System(2, "VaporGun"));
$errorTypes = array(new ErrorType(1, "Quality"), new ErrorType(2, "Human Error"));

$incidents = array(new Incident(1, "10/2/2020", "Metal Shavings", $customers[0], $systems[0], $errorTypes[1], true, false, true),
                    new Incident(2, "10/7/2020", "Blocked Threads", $customers[1], $systems[1], $errorTypes[0], false, true, false),
                    new Incident(3, "10/13/2020", "Moisture", $customers[0], $systems[1], $errorTypes[1], true, false, true),
                    new Incident(4, "10/28/2020", "Chipped carrier", $customers[2], $systems[0], $errorTypes[0], true, true, false),
                    new Incident(5, "10/30/2020", "Stripped Wires", $customers[1], $systems[1], $errorTypes[1], false, false, true));
