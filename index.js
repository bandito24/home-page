

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



// FOR ADJUSTING ROW GAP BASED ON HORIZONTAL MARGINS


const adjustRowGap = () => {
const screenWidth = window.innerWidth

const gridPlant = document.getElementsByClassName('grid-plant')
const gridContainer = document.getElementById('grid-container')

const gridPlantWidth = getComputedStyle(gridPlant[0]).width.split('').filter(char => char !== 'p' & char !== 'x').join('')
const columns = getComputedStyle(gridContainer).gridTemplateColumns
const numOfColumns = columns.split(' ').length

const unusedSpace = screenWidth - (numOfColumns * gridPlantWidth)
const invisibleMargin = unusedSpace / (numOfColumns * 2)

    
    for(let i=0; i < gridPlant.length; i++){
        gridPlant[i].style.marginBottom = (invisibleMargin - 3) + 'px'
    }

}

adjustRowGap()

window.addEventListener("resize", adjustRowGap)
screen.orientation.addEventListener("change", adjustRowGap)






// const adjustRowGap = () => {
//     let plantGap = getComputedStyle(gridPlant[0]).margin
//     plantGap = plantGap.split(' ')
//     plantGap = plantGap[1].split('').filter(char => char !== 'p' && char !== 'x').join('')
//     plantGap = plantGap + 'px'
//     console.log(plantGap)
    
//     for(let i=0; i < gridPlant.length; i++){
//         gridPlant[i].style.marginBottom = plantGap
//     }
    
// }

// adjustRowGap()