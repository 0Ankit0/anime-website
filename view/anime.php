<?php
    require('../include/navbar.php')
?>
<div class="Main-content">
    <div class="anime-main cols-span-3">
        <div class="anime-info">
            <div class="anime-img">
                <img src="../resources/images/your-name.webp" alt="">
            </div>
            <div class="anime-description">
                <p class="anime-title">Anime title</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Adipisci impedit asperiores repellendus doloremque modi illo dolore quod eaque minima possimus excepturi praesentium sit blanditiis, 
                    quasi nostrum enim, omnis quam in. Consequatur cumque doloremque aliquid, beatae atque quae ipsam neque modi! In maxime fugit expedita,
                    eveniet rerum est ipsa quibusdam dignissimos?</p>
            </div>
        </div>
        <div class="anime-episodes">   
                
            <div class="anime-episodes-button">
                <a href="vid-player.php"><button>ep1</button></a>
            </div>
            <div class="anime-episodes-button">
                <button>ep1</button>
            </div>
            <div class="anime-episodes-button">
                <button>ep1</button>
            </div>
            <div class="anime-episodes-button">
                <button>ep1</button>
            </div>
        </div>
    </div>
    
    <?php 
        require('../include/sidebar.php')
    ?>
</div>
<?php
    require('../include/footer.php')
?>