<?php

$reply = new stdClass();
$reply->status = 200;

$requestContent = file_get_contents("php://input");
$requestObject = json_encode($_FILES);
$reply->data = $requestObject;

$reply->message = "This worked. Or didn't and you somehow screwed it up so much you got a false positive. Either way, good job.";

//Echo the json, encode the $reply.
header("Content-type: application/json");
echo json_encode($reply);