<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

$sql="select * from enterpriseinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);

$enterpriseInfo = [];
if($rowscount>0)
{
    $enterpriseInfo = [
        'enterprisenumbers' => mysql_result($query,0,enterprisenumbers),
        'enterprisenamec' => mysql_result($query,0,enterprisenamec),
        'enterprisetypes' => mysql_result($query,0,enterprisetypes),
        'fields' => mysql_result($query,0,fields),
        'incharger' => mysql_result($query,0,incharger),
        'lianxitel' => mysql_result($query,0,lianxitel),
        'signinfund' => mysql_result($query,0,signinfund),
        'address' => mysql_result($query,0,address),
        'enterprisememo' => mysql_result($query,0,enterprisememo),
        'pic' => mysql_result($query,0,pic),
    ];
}

$apiKey = '';
$doukApiUrl = 'https://ark.cn-beijing.volces.com/api/v3/chat/completions';

function getEnterpriseContext($info) {
    $context = "企业基本信息：\n";
    $context .= "企业编号：" . ($info['enterprisenumbers'] ?? '') . "\n";
    $context .= "企业名称：" . ($info['enterprisenamec'] ?? '') . "\n";
    $context .= "企业类型：" . ($info['enterprisetypes'] ?? '') . "\n";
    $context .= "所属行业：" . ($info['fields'] ?? '') . "\n";
    $context .= "负责人：" . ($info['incharger'] ?? '') . "\n";
    $context .= "联系电话：" . ($info['lianxitel'] ?? '') . "\n";
    $context .= "注册资本：" . ($info['signinfund'] ?? '') . "\n";
    $context .= "地址：" . ($info['address'] ?? '') . "\n";
    $context .= "企业简介：" . ($info['enterprisememo'] ?? '') . "\n";
    return $context;
}

$enterpriseContext = getEnterpriseContext($enterpriseInfo);
$systemPrompt = "你是企业信息咨询助手，用户会询问关于企业的相关信息。你需要根据以下企业信息内容，准确回答用户的问题。\n\n" . $enterpriseContext . "\n\n请用专业、友好的态度回答用户的问题。如果用户询问的信息不在提供的内容中，请告知用户该信息未在企业资料中提供。";

$messages = [];
if(isset($_SESSION['chat_messages']) && isset($_SESSION['enterprise_id']) && $_SESSION['enterprise_id'] == $id) {
    $messages = $_SESSION['chat_messages'];
} else {
    $_SESSION['enterprise_id'] = $id;
    $_SESSION['chat_messages'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message']) && !empty($_POST['message'])) {
    $userMessage = trim($_POST['message']);

    $messages[] = ['role' => 'user', 'content' => $userMessage];

    $payload = [
        'model' => 'doubao-pro',
        'messages' => [
            ['role' => 'system', 'content' => $systemPrompt]
        ]
    ];

    foreach($messages as $msg) {
        $payload['messages'][] = $msg;
    }

    $ch = curl_init($doukApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    $aiResponse = '';

    if($error) {
        $aiResponse = "抱歉，服务出现错误：" . $error;
    } elseif($httpCode == 200 && $response) {
        $result = json_decode($response, true);
        if(isset($result['choices'][0]['message']['content'])) {
            $aiResponse = $result['choices'][0]['message']['content'];
        } elseif(isset($result['error'])) {
            $aiResponse = "API错误：" . ($result['error']['message'] ?? '未知错误');
        } else {
            $aiResponse = "抱歉，无法获取回复，请稍后重试。";
        }
    } else {
        $aiResponse = "抱歉，服务暂时不可用（HTTP " . $httpCode . "），请稍后重试。";
    }

    $messages[] = ['role' => 'assistant', 'content' => $aiResponse];
    $_SESSION['chat_messages'] = $messages;

    header('Location: enterpriseinfos_ai_chat.php?id=' . $id);
    exit;
}

if(isset($_GET['clear']) && $_GET['clear'] == 1) {
    $_SESSION['chat_messages'] = [];
    $_SESSION['enterprise_id'] = null;
    header('Location: enterpriseinfos_ai_chat.php?id=' . $id);
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI企业咨询 - <?php echo $enterpriseInfo['enterprisenamec'] ?? '企业信息'; ?></title>
    <link href="qtimages/css/bootstrap.css" rel="stylesheet">
    <link href="qtimages/css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <style>
        body { background: #f5f5f5; }
        .chat-container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .chat-header {
            background: #009933;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .chat-header h3 { margin: 0; font-size: 18px; }
        .enterprise-info {
            background: #f9f9f9;
            padding: 10px 20px;
            border-bottom: 1px solid #eee;
            font-size: 13px;
            color: #666;
        }
        .chat-messages {
            height: 400px;
            overflow-y: auto;
            padding: 20px;
        }
        .message {
            margin-bottom: 15px;
            display: flex;
        }
        .message.user {
            justify-content: flex-end;
        }
        .message-content {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 10px;
            line-height: 1.6;
        }
        .message.user .message-content {
            background: #009933;
            color: #fff;
        }
        .message.assistant .message-content {
            background: #e9e9e9;
            color: #333;
        }
        .message.assistant {
            justify-content: flex-start;
        }
        .message.assistant .avatar {
            width: 30px;
            height: 30px;
            background: #009933;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 14px;
        }
        .message.user .message-content::before {
            content: '';
            position: absolute;
            right: -8px;
            top: 10px;
            border-left: 8px solid #009933;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
        }
        .message.user {
            position: relative;
        }
        .chat-input {
            padding: 15px 20px;
            border-top: 1px solid #eee;
            display: flex;
            gap: 10px;
        }
        .chat-input input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .chat-input button {
            padding: 10px 25px;
            background: #009933;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .chat-input button:hover {
            background: #007a29;
        }
        .clear-btn {
            padding: 10px 25px;
            background: #ff6600;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }
        .clear-btn:hover {
            background: #e65c00;
        }
        .welcome-message {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }
        .welcome-message h4 {
            color: #009933;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h3>🤖 AI企业咨询 - <?php echo $enterpriseInfo['enterprisenamec'] ?? ''; ?></h3>
            <a href="enterpriseinfos_ai_chat.php?id=<?php echo $id; ?>&clear=1" class="clear-btn">清空对话</a>
        </div>

        <div class="enterprise-info">
            <strong>当前咨询企业：</strong>
            <?php echo $enterpriseInfo['enterprisenamec'] ?? ''; ?>
            (编号: <?php echo $enterpriseInfo['enterprisenumbers'] ?? ''; ?>)
            | 类型: <?php echo $enterpriseInfo['enterprisetypes'] ?? ''; ?>
            | 行业: <?php echo $enterpriseInfo['fields'] ?? ''; ?>
        </div>

        <div class="chat-messages" id="chatMessages">
            <?php if(empty($messages)): ?>
                <div class="welcome-message">
                    <h4>👋 欢迎使用AI企业咨询服务</h4>
                    <p>您可以询问关于该企业的任何信息，例如：</p>
                    <ul style="text-align:left; display:inline-block;">
                        <li>这家企业的联系电话是多少？</li>
                        <li>企业的注册资本是多少？</li>
                        <li>这家企业的地址在哪里？</li>
                        <li>企业的主要业务是什么？</li>
                        <li>负责人的联系方式？</li>
                    </ul>
                </div>
            <?php else: ?>
                <?php foreach($messages as $msg): ?>
                    <?php if($msg['role'] === 'user'): ?>
                        <div class="message user">
                            <div class="message-content"><?php echo htmlspecialchars($msg['content']); ?></div>
                        </div>
                    <?php else: ?>
                        <div class="message assistant">
                            <div class="avatar">AI</div>
                            <div class="message-content"><?php echo htmlspecialchars($msg['content']); ?></div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="chat-input">
            <form method="post" style="display:flex; width:100%; gap:10px;" id="chatForm">
                <input type="text" name="message" id="messageInput" placeholder="请输入您的问题..." autocomplete="off">
                <button type="submit">发送</button>
            </form>
            <a href="enterpriseinfosdetail.php?id=<?php echo $id; ?>" class="clear-btn" style="background:#666;">返回</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#chatForm').on('submit', function(e) {
                var message = $('#messageInput').val().trim();
                if(message === '') {
                    e.preventDefault();
                    alert('请输入问题内容');
                    return false;
                }
                $('#messageInput').prop('disabled', true);
                $('button[type="submit"]').text('发送中...').prop('disabled', true);
                return true;
            });

            var messagesDiv = document.getElementById('chatMessages');
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        });
    </script>
</body>
</html>
