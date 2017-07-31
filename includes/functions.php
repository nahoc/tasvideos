<?php
 
//error_reporting(0);

function getFeedPub($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
?>

    <ul class='pub-list'>

    <?php
     
    foreach($x->channel->item as $entry) {

        $image = $entry->children("media", true)->group->thumbnail->attributes()['url'];

        $youtube = $entry->children("media", true)->group->player->attributes()['url'];
        
        $title = $entry->title;
        $link = $entry->link;
        $guid = $entry->guid;
        $description = $entry->description;
        $category = $entry->category;
    
    ?> 
        
        <li>
            <div class='publication'>
                <a href='<?php echo $guid; ?>'>
                    <h2><?php echo $title; ?></h2>
                </a>
                <a href='<?php echo $youtube; ?>' class='wrapper'>
                    <span class='youtube'>youtube icon</span>
                    <img src='<?php echo $image; ?>' alt="Publication thumbnail">
                </a>
                    <h4>Rating:</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                <div class='publication-content'>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </li>

    <?php } ?>
    </ul>
        <?php
}

function getFeedSub($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
    echo "<ul class='sub-list'>";
     
    foreach($x->channel->item as $entry) {

        //$image = $entry->children("media", true)->group->thumbnail->attributes()['url'];
        $title = $entry->title;
        $link = $entry->link;
        $description = $entry->description;
    
        echo "<li><div class='submission'>";
        echo "<a href='$link'><h6>" . $title . "</h6></a>";
        //echo "<img src='$image'>";
        echo "<div class='submission-content'>
            </div></div></li>";
    }
    echo "</ul>";
}

?>