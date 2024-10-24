<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana jelic Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="logo">
           <p>Ana Jelic</p>
        </div>
        <div class="hamburger">
            <span>☰</span> 
        </div>
        <nav>
            <ul>
                <li><a href="#carousel"><?php pll_e("Portfolio") ?></a></li>
                <li><a href="#about-projects"><?php pll_e("Skills") ?></a></li>
                <li><a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:db489d1b-a040-400f-943b-1f80550f2d93" target="_blank"><?php pll_e("CV") ?></a></li>
                <li><a href="#" class="contact-btn"><?php pll_e("Contact") ?></a></li>
                <li class="lang-toggle">
                    <?php 
                        pll_the_languages(array(
                            'dropdown' => 1, 
                            'show_flags' => 0, 
                            'show_names' => 1, 
                        )); 
                    ?>
                </li>

            </ul>
        </nav>
    </header>