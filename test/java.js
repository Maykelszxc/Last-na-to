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
