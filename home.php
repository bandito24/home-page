<script type="text/javascript" src="../../scripts/jquery-3.4.1.min.js"></script>
<?php
include('../../init.php');

include(DIR_LIBRARIES.'/cls.species.php');

$Species = new Species();

$optionsAll = array(
    'where' => array(
        "plant_type LIKE '%%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsTree = array(
    'where' => array(
        "plant_type LIKE '%tree%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsShrub = array(
    'where' => array(
        "plant_type LIKE '%shrub%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsPHerb = array(
    'where' => array(
        "plant_type LIKE '%herb%'",
        "duration LIKE '%perennial%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsAHerb = array(
    'where' => array(
        "plant_type LIKE '%herb%'",
        "duration LIKE '%annual%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsVine = array(
    'where' => array(
        "plant_type LIKE '%vine%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsFern = array(
    'where' => array(
        "plant_type LIKE '%fern%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsGrass = array(
    'where' => array(
        "plant_type LIKE '%grass%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsSucculent = array(
    'where' => array(
        "plant_type LIKE '%succulent%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsBulb = array(
    'where' => array(
        "plant_type LIKE '%bulb%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsLowW = array(
    'where' => array(
        "water LIKE '%low%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsSun = array(
    'where' => array(
        "sun LIKE '%sun%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsPShade = array(
    'where' => array(
        "sun LIKE '%part%'",
    ),
    'rows_per_page' => 1, 
); 
$optionsShade = array(
    'where' => array(
        "sun IN ('Shade|Part Shade', 'Part Shade|Shade', 'Shade', 'Sun|Shade', 'Shade|Sun', 'Sun|Part Shade|Shade', 'Sun|Shade|Part Shade', 'Part Shade|Sun|Shade', 'Part Shade|Shade|Sun', 'Shade|Sun|Part Shade', 'Shade|Part Shade|Sun')"
    ),
    'rows_per_page' => 1, 
); 
$optionsEvergreen = array(
    'where' => array(
        "leaf_retention LIKE '%evergreen%'"
    ),
    'rows_per_page' => 1, 
); 

// $options1 =

$allCount = $Species->ofCategory('all_plants', $optionsAll);
$treeCount = $Species->ofCategory('all_plants', $optionsTree);
$shrubCount = $Species->ofCategory('all_plants', $optionsShrub);
$pHerbCount = $Species->ofCategory('all_plants', $optionsPHerb);
$aHerbCount = $Species->ofCategory('all_plants', $optionsAHerb);
$vineCount = $Species->ofCategory('all_plants', $optionsVine);
$fernCount = $Species->ofCategory('all_plants', $optionsFern);
$grassCount = $Species->ofCategory('all_plants', $optionsGrass);
$succulentCount = $Species->ofCategory('all_plants', $optionsSucculent);
$bulbCount = $Species->ofCategory('all_plants', $optionsBulb);
$lowWCount = $Species->ofCategory('all_plants', $optionsLowW);
$sunCount = $Species->ofCategory('all_plants', $optionsSun);
$pShadeCount = $Species->ofCategory('all_plants', $optionsPShade);
$shadeCount = $Species->ofCategory('all_plants', $optionsShade);
$evergreenCount = $Species->ofCategory('all_plants', $optionsEvergreen);

$data = $pageData['rows'];

echo ("<pre>");
print_r($pageData);
echo ("</pre>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Easyscape Test</title>
</head>

<body>
<div id="container">
    <header>
        <div id="user">
            <!-- <img id='user-icon' src="./icons/user-icon.png" alt="User icon"> -->
            <p id='user-id'>Welcome dmuddx@gmail.com</p>
        </div>
        <div id="header">
            <img id="header-logo" src="./icons/easyscape-earth-logo.png" alt="EasyScape Logo">
            <nav>
                <div id='design-garden-nav' class="nav-link">
                    <img class='nav-logo' src="./icons/design-garden-logo.png" alt="Design Garden Icon">
                    <h4 class="nav-tag">DESIGN GARDEN</h4>
                </div>
                <div id="browse-for-plants-nav" class="nav-link">
                    <img class='nav-logo' src="./icons/browse-plants-icon.png" alt="Browse For Plants Icon">
                    <h4 class="nav-tag">BROWSE PLANTS</h4>
                </div>
                <div id="search-for-plants-nav" class="nav-link">
                    <img class='nav-logo' src="./icons/nav-search-logo.png" alt="Search For Plants Icon">
                    <h4 class="nav-tag">SEARCH PLANTS</h4>
                </div>
            </nav>
            <div id="user-and-signout">
                <img id='user-icon' src="./icons/user-icon.png" alt="User icon">
                <button id="sign-out">Sign Out</button>
            </div>
        </div>
    </header>
    <div id="mobile-container">
        <div id="mobile-header">
            <img class="mobile-icon" id='clickable-menu' src="./icons/mobile-menu.png" alt="Menu">
                <div id="menu-dropdown">
                    <p class="dropdown-option">Add Plant</p>
                    <a href="https://easyscape.com/demo/design_mapbox.php" ><p class="dropdown-option">Design Garden</p></a>
                   <a href="https://easyscape.com/demo/"> <p class="dropdown-option">Browse Plants</p></a>
                  <p class="dropdown-option">Account</p>
                    <p class="dropdown-option">Sign Out</p>
                </div>
            <img id='mobile-logo' src="./icons/easyscape-earth-logo.png" alt="Easyscape Logo">
            <img id="mega-small-logo" src="./icons/super-small-icon.png" alt="EasyScape Logo">
            <a href="https://easyscape.com/demo/search_query.php" ><img class="mobile-icon" src="./icons/nav-search-logo.png" alt="Search Icon"></a>
        </div>
    </div>

    <main>
        <div id="plants-for-location">
            <div id="enter-address">
                    <label id="location-label" for="location-input">Find Plants for your Location</label> 
                <div id="user-address">
                    <input 
                    id="location-input" 
                    placeholder="Enter your address or click the location icon"
                    />
                    <img src="./icons/enter-location.png" class="icon" id="location-icon"/>
                </div>
            </div>
            <div id="toggle-native">
                <p id="select-all-plants">All Plants</p>
                <p id="select-native-plants">Native Plants</p>
            </div>
        </div>
        <div id="grid-container">
            <div class="grid-plant">
                <a href="../static/index.php?cat=all_plants&page=1&sort=ranking"><img class="grid-image" src="./test-photos/all-plants.jpeg" alt="All Plants"></a> 
                <p class="grid-text">All Plants (<?php echo $allCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=tree&page=1&sort=ranking"><img class="grid-image" src="./test-photos/trees.jpeg" alt="Trees"></a>
                <p class="grid-text">Trees (<?php echo $treeCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=shrub&page=1&sort=ranking"><img class="grid-image" src="./test-photos/shrubs.jpeg" alt="Shrubs"></a>
                <p class="grid-text">Shrubs (<?php echo $shrubCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=herb&duration=perennial&page=1&sort=ranking"><img class="grid-image" src="./test-photos/perennials.jpeg" alt="Perennial Herbs"></a>
                <p class="grid-text">Perennial Herbs (<?php echo $pHerbCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=herb&duration=annual&page=1&sort=ranking"><img class="grid-image" src="./test-photos/annuals.jpeg" alt="Annual Herbs"></a>
                <p class="grid-text">Annual Herbs (<?php echo $aHerbCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=vine&page=1&sort=ranking"><img class="grid-image" src="./test-photos/vines.jpeg" alt="Vines"></a>
                <p class="grid-text">Vines (<?php echo $vineCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=fern&page=1&sort=ranking"><img class="grid-image" src="./test-photos/ferns.jpeg" alt="Ferns"></a>
                <p class="grid-text">Ferns (<?php echo $fernCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=grass&page=1&sort=ranking"><img class="grid-image" src="./test-photos/grasses.jpeg" alt="Grasses"></a>
                <p class="grid-text">Grasses (<?php echo $grassCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=succulent&page=1&sort=ranking"><img class="grid-image" src="./test-photos/succulents.jpeg" alt="Succulents"></a>
                <p class="grid-text">Succulents (<?php echo $succulentCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=bulb&page=1&sort=ranking"><img class="grid-image" src="./test-photos/bulbs.jpeg" alt="Bulbs"></a>
                <p class="grid-text">Bulbs (<?php echo $bulbCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=all_plants&water=low&page=1&sort=ranking"><img class="grid-image" src="./test-photos/low-water.jpeg" alt="Low Water Plants"></a>
                <p class="grid-text">Low Water (<?php echo $lowWCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=all_plants&sun=sun&page=1&sort=ranking"><img class="grid-image" src="./test-photos/full-sun.jpeg" alt="Full Sun Plants"></a>
                <p class="grid-text">Full Sun (<?php echo $sunCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=all_plants&sun=part&page=1&sort=ranking"><img class="grid-image" src="./test-photos/part-shade.jpeg" alt="Part Shade Plants"></a>
                <p class="grid-text">Part Shade (<?php echo $pShadeCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                <a href="../static/index.php?cat=all_plants&sun=shade&page=1&sort=ranking"><img class="grid-image" src="./test-photos/full-shade.jpeg" alt="Full Shade Plants"></a>
                <p class="grid-text">Full Shade (<?php echo $shadeCount['total_rows']; ?>)</p>
            </div>
            <div class="grid-plant">
                 <a href="../static/index.php?cat=all_plants&leaf_retention=evergreen&page=1&sort=ranking"><img class="grid-image" src="./test-photos/evergreens.jpeg" alt="Evergreen Plants"></a>
                <p class="grid-text">Evergreens (<?php echo $evergreenCount['total_rows']; ?>)</p>
            </div>
        </div>


    </main>
    <footer>
            <div id="plantlist-library">
                <img class='footer-icon' src="./icons/plantlist-library.png" alt="Plantlist Library icon">
                <p id="plantlist-library">Plantlist Library</p>
            </div>
        <div id="footer-option">
            <p>About</p>
            <p>Help</p>
            <div id="tutorial-menu">
                <img class='footer-icon' src="./icons/footer-tutorial.png" alt="Play tutorial icon">
                <p>Tutorial</p>
            </div>
            <p>Privacy</p>
            <p>Contact</p>
            <p>Upgrade</p>
        </div>
            <p id="copyright">&copy 2019</p>
    </footer>
    
<script src="./index.js"></script>
</div>

</body>
</html>