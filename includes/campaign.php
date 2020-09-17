<?php
    $campaign = mysql_query("SELECT * FROM cms_campaigns ORDER BY `id` DESC"); // Query, Select data from cms_camps..
    if(mysql_num_rows($campaign) == 0){
        echo 'MAKE A CAMPAIGN TO FIX ME!!!'; // No campaigns? This will show.
    }else{
        echo '<div class="habblet-container ">'; // Container..
        echo '<div class="cbb clearfix orange ">'; // Decor..
        echo '<h2 class="title"></h2>
                  <div id="hotcampaigns-habblet-list-container">
            <div class="hotcampaign-container">';
        }
 
        while($row = mysql_fetch_array($campaign)){ // Fetch shit from $camps..
       
            // Start variables
            $id = $row["id"];
            $caption = $row["caption"];
            $image_url = $row["image_url"];
            $descr = $row["descr"];
            $url = $row["url"];
            // End variables
           
            echo '<ul id="hotcampaigns-habblet-list">
                  <li class="even">
                  <a href="'.$url.'">
                  <img src="'.$image_url.'" align="left" alt="'.$caption.'" /></a>
                  <h3>'.$caption.'</h3>
                  <p>'.$descr.'</p>
                  <p class="link"><a href="'.$url.'">Go there &raquo;</a></p>
                  </li> </ul>
                        ';
    }
    ?>