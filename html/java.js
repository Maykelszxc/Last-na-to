/*---- SIDEBAR ----*/

const menuItems = document.querySelectorAll('.menu-item');

/*---- MESSAGES ----*/

const messagesNotification = document.querySelector('#messages-notifications');
const messages = document.querySelector('.messages');

const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');


/*---- THEME  ----*/

const theme = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');


/*---- FONTS  ----*/
const fontSizes = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');

/*---- COLORS  ----*/
const colorPalette = document.querySelectorAll('.choose-color span');

/*---- BACKGROUND  ----*/
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');


/*---- This remove all active class from the menu items ----*/

const changeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActiveItem();
        item.classList.add('active');
        if(item.id != 'notifications'){
            document.querySelector('.notification-popup').
            style.display = 'none';
        }else{
            document.querySelector('.notification-popup'). 
            style.display = 'block';
            document.querySelector('#notifications .notification-count').
            style.display = 'none';
        }
    })
})


/*---- HIGHLIGHTS THE BOX AND REMOVE THE NUMBER ----*/

messagesNotification.addEventListener('click', () =>{
    messages.style.boxShadow = '0 0 1rem var(--primary-color)';
    messagesNotification.querySelector('.notification-count').style.display = 'none';
    
    setTimeout(() =>{
        messages.style.boxShadow = 'none';
    }, 1300);
})


/*---- SEARCH THE MESSAGE ----*/

const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(user => {
        let name = user.querySelector('h5').textContent.toLowerCase();
        if(name.indexOf(val) != -1){
            user.style.display = 'flex';
        }else{
            user.style.display = 'none';
        }
    })
}

messageSearch.addEventListener('keyup', searchMessage);


/*---- THEME CUSTOMIZATION ----*/



/*---- OPEN THE THEME  ----*/

const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

/*---- CLOSE THE THEME  ----*/

const closeThemeModal = (e) => {
    if(e.target.classList.contains('customize-theme')){
        themeModal.style.display = 'none';
    }
}

themeModal.addEventListener('click', closeThemeModal);
theme.addEventListener('click', openThemeModal);





/*---- FONT SIZE  ----*/

/*---- REMOVE ACTIVE CLASS FONT SIZE  ----*/
const removeSizeSelector = () => {
    fontSizes.forEach(size => {
        size.classList.remove('active');
    })
}

fontSizes.forEach(size => {

    size.addEventListener('click', () => {
    
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');
    
        if(size.classList.contains('font-size-1')){
            fontSize = '10px';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '5.4rem');
    
        }else if(size.classList.contains('font-size-2')){
            fontSize = '13px';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-7rem');
    
        }else if(size.classList.contains('font-size-3')){
            fontSize = '16px';
            root.style.setProperty('--sticky-top-left', '-2rem');
            root.style.setProperty('--sticky-top-right', '-17rem');
    
        }else if(size.classList.contains('font-size-4')){
            fontSize = '19px';
            root.style.setProperty('--sticky-top-left', '-5rem');
            root.style.setProperty('--sticky-top-right', '-25rem');
    
        }else if(size.classList.contains('font-size-5')){
            fontSize = '22px';
            root.style.setProperty('--sticky-top-left', '-10rem');
            root.style.setProperty('--sticky-top-right', '-35rem');
        }

            /*---- CHANGE FONT SIZE OF THE ROOT HTML ELEMENT ----*/
    document.querySelector('html').style.fontSize = fontSize;

    })

})



/*---- COLOR PALETTE  ----*/

/*---- REMOVE ACTIVE CLASS COLOR  ----*/
const changeActiveColorClass = () => {
    colorPalette.forEach(colorPicker => {
        colorPicker.classList.remove('active');
    })
}

colorPalette.forEach(color => {
    color.addEventListener('click', () =>{
        let primary;

        changeActiveColorClass();
        
        if(color.classList.contains('color-1')){
            primaryHue = 252;
        }else if(color.classList.contains('color-2')){
            primaryHue = 52;
        }else if(color.classList.contains('color-3')){
            primaryHue = 352;
        }else if(color.classList.contains('color-4')){
            primaryHue = 152;
        }else if(color.classList.contains('color-5')){
            primaryHue = 202;
        }

        color.classList.add('active');

        root.style.setProperty('--color-primary-hue', primaryHue);
    })
})

/*---- CHANGE BACKGROUND  ----*/

let lightColorLightness;
let whiteColorLightness;
let darkColorLightness;

const changeBG = () => {
    root.style.setProperty('--light-color-lightness', lightColorLightness);
    root.style.setProperty('--white-color-lightness', whiteColorLightness);
    root.style.setProperty('--dark-color-ligntness', darkColorLightness);
}

Bg1.addEventListener('click', () => {

    Bg1.classList.add('active');

    Bg2.classList.remove('active');
    Bg3.classList.remove('active');

    window.location.reload();
})

Bg2.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '20%';
    lightColorLightness = '15%';

    Bg2.classList.add('active');

    Bg1.classList.remove('active');
    Bg3.classList.remove('active');

    changeBG();
})

Bg3.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '10%';
    lightColorLightness = '0%';

    Bg3.classList.add('active');

    Bg1.classList.remove('active');
    Bg2.classList.remove('active');

    changeBG();
})