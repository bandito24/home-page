

//FOR TOGGLING BETWEEN ALL/NATIVE PLANTS WITH FONT WEIGHT

const selectAllPlants = document.getElementById('select-all-plants')
const selectNativePlants = document.getElementById('select-native-plants')


function toggleNativeSelect(e){
   
    let select = e.target
    select.style.fontWeight = 'bold'

    if(!select.contains(selectAllPlants)){
        selectAllPlants.style.fontWeight = '400'
    } else if (!select.contains(selectNativePlants)) {
        selectNativePlants.style.fontWeight = '400'
    }
}

selectAllPlants.addEventListener('click', toggleNativeSelect)
selectNativePlants.addEventListener('click', toggleNativeSelect)




//DROPDOWN MENU ON MOBILE WIDTH (<700PX)

const dropDown = document.getElementById('menu-dropdown')
const clickableMenu = document.getElementById('clickable-menu')

function showMenu(){
    var display = getComputedStyle(dropDown).display;

     if (display == "none") {
             dropDown.style.display = "block";
         } else {
            dropDown.style.display = "none";
         }
}

function hideMenu(event){
    if (!dropDown.contains(event.target) && (!clickableMenu.contains(event.target))) {
    dropDown.style.display = "none"
    }
}
document.addEventListener("mousedown", hideMenu)
clickableMenu.addEventListener('click', showMenu)