<?php
$textEmojis = [':)', ':-)', ':(', ':-(', ':D', ':-D', 'xD', ':o', ':-o'];
$emojis = ['&#128522', '&#128522', '&#128543', '&#128543', '&#128516', '&#128516', '&#128518', '&#128558', '&#128558'];
$badWords = ['fuck', 'shit', 'ass', 'bitch',];
$replaceBadWords = ['f*', 'sh*', 'a*', 'b*'];
?>

<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-outline-info" name="page" value="form">Add a message</button>
        </form>
    </div>
</div>
<div class="row align-items-center p-0">
    <?php foreach ($postsArr as $post): ?>
    <?php $filteredMessage = str_replace($badWords, $replaceBadWords, $post['message']);
          str_replace($textEmojis, $emojis, $filteredMessage);
        ?>
        <div class="col-12 col-md-3 h-100">
            <div class="card w-100 h-100" style="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['name'] . " " . $post['lastName']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo "Date: " . $post['date']; ?></h6>
                    <p class="card-text"><?php echo $filteredMessage; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

