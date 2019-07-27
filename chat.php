<?php
require 'aws/aws-autoloader.php';
use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;

$messages = [];

$sdk = new Aws\Sdk([
    'region' => 'ap-southeast-2',
    'version'  => 'latest',
    'credentials' => [
        'key'    => 'AKIAQ2KFO4DD5RZHW44U',
        'secret' => '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',
    ]
]);
$marshaler = new Marshaler();
$dynamoDb = $sdk->createDynamoDb();

if(isset($_POST['submit'])){
    if(isset($_POST['message'])){
        $message = preg_replace('/\s+/', '', $_POST['message']);
        newMessage($message,$marshaler,$dynamoDb);
    }
}
$tableName = 'chat';


function newMessage($message,$marshaler,$dynamoDb){

    $item = $marshaler->marshalJSON('
        {
            "message_id" : '.rand(1,300).',
            "message": "'.$message.'"
        }
    ');

    $params = [
        'TableName' => 'chat',
        'Item' => $item
    ];

    try{
        $result = $dynamoDb->putItem($params);
        // print($dynamoDb->getItem($tableName));
    } catch (DynamoDbException $e) {
        echo "Unable to add item:\n";
        echo $e->getMessage() . "\n";
    }
}




$params1 = [
    'TableName' => $tableName,
    'ProjectionExpression'=> 'message'
];

try {
    while (true) {
        $result = $dynamoDb->scan($params1);
        foreach ($result['Items'] as $i) {
            $message = $marshaler->unmarshalItem($i);
            array_push($messages,$message);
        }

        if (isset($result['LastEvaluatedKey'])) {
            $params['ExclusiveStartKey'] = $result['LastEvaluatedKey'];
        } else {
            break;
        }
    }

} catch (DynamoDbException $e) {
    echo "Unable to scan:\n";
    echo $e->getMessage() . "\n";
}

?>

<html>
    <head>
        <title>eLab : Chat</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/chat.css"> 
    </head>

    <body>
        
        <div class="container-chat-box">
            
            <div class="chat-history">

                <?php
                    if(count($messages)>0){
                        for ($i=0; $i < count($messages); $i++) { 
                            foreach ($messages[$i] as $key => $value) {
                                ?>
                                  <div class="message-container">
                                    <b>Name:</b>John
                                    <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                                        <p><?php echo $value;?></p>
                                    <?php
                                        $datetime = new DateTime("now",new DateTimeZone('Australia/Melbourne'));
                                    ?>
                                    <span class="time-right"><?php echo $datetime->format('H:i');?></span>
                                </div>
                                <?php
                            }
        
                        }
                        
                        
                    }                
                ?>

            </div>

            

            <form action="chat.php" method="post">
                <div class="container-control">
                    <span class="current-message">
                        <input class="effect-10" type="text" placeholder="Enter Message...." name="message">
                        <span class="focus-bg"></span>
                    </span>
                    
                    <span class="chat-control">
                        <input type="submit" value="Send" name="submit">
                        <!-- <img class="action-icon" src="img/icons/file.png"> -->
                        <div class="skype-button bubble" data-bot-id="00202100-b3b0-460d-97fb-5c9d3adc0bc4" data-contact-id="gayuru.gunawardana1">
                        <!-- <img class="action-icon" src="img/icons/audio.png"> -->
                        <!-- <img class="action-icon" src="img/icons/video.png"> -->
                    </span>
                </div>
            </form>
        </div>
        <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
        <script>SkypeWebControl.SDK.start();</script>

    </body>


</html>