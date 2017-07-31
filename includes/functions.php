<?php
 
function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
    echo "<ul class='pub-list'>";
     
    foreach($x->channel->item as $entry) {

        $image = $entry->children("media", true)->group->thumbnail->attributes()['url'];
        $title = $entry->title;
        $link = $entry->link;
        $description = $entry->description;
    
        echo "<li><div class='publication'>";
        echo "<h2>" . $title . "</h2>";
        echo "<img src='$image'>";
        echo "<div class='publication-content'>
                <p>".$description."</p>
            </div></div></li>";
    }
    echo "</ul>";
}
?>