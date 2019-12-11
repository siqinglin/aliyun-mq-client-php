#!/app/server/php/bin/php
<?php
/**
 *
 */
include_once "config.php";

try {
    $mqProducer = new \MyZiyue\MQProducer();
    $mqProducer->setGroupId($groupId);
    $mqProducer->setNameSrvAddr($nameSrvAddr);
    $mqProducer->setTopic($topics);
    $mqProducer->auth($accessKey, $secretKey);
    $mqProducer->start();
//    var_dump($mqProducer->send("This is a demo", "test", "key"));
    var_dump($mqProducer->send("This is a demo"));
} catch (Exception $ex) {
    echo $ex->getMessage();
}
//echo $mqProducer->getTopic();
//echo $mqProducer->getInstanceId();
$mqProducer->close();
