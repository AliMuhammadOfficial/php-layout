
<?php
    $services = array(
        array("link"=>"#", "icon"=>"fas fa-laptop", "title"=>"Strategy and Consultant"),
        array("link"=>"#", "icon"=>"fas fa-users", "title"=>"User Experience Design"),
        array("link"=>"#", "icon"=>"fas fa-mobile-alt", "title"=>"Mobile App Development"),
        array("link"=>"#", "icon"=>"fab fa-chrome", "title"=>"Web App Development"),
        array("link"=>"#", "icon"=>"fas fa-ribbon", "title"=>"Quality Analysis and Testing"),
        array("link"=>"#", "icon"=>"fas fa-ticket-alt", "title"=>"Application Management & Support"),
    );
?>

<section id="services">
    <h1 class="sec-heading">Our Services</h1>

    <ul>
        <?php
        for ($i=0; $i < count($services); $i++) { 
            ?>
            <li>
                <div>
                    <a href="<?= $services[$i]['link']; ?>">
                        <i class="<?= $services[$i]['icon']; ?>"></i>
                        <span>
                            <?= $services[$i]['title']; ?>
                        </span>
                    </a>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
        
    <div id="service-footer">
        <a href="" class="brand-btn">View All Service</a>
    </div>
</section>