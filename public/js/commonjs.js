const getPNotifyTitle = (messageType) => {
    switch (messageType) {
        case 'success':
            return '完了';
            break;
        case 'info':
            return '通知';
            break;
        case 'warning':
            return '警告';
            break;
        case 'error':
            return 'エラー';
            break;
        case 'dark':
            return '';
            break;
        default:
            return '';
    }
    
}
const makeFlashMessage = (messageType, message) => {
    
    /*
    success,info,Warning,error, dark
    */
    const pNotifyTitle = getPNotifyTitle(messageType);
    const pNotify = new PNotify({
        title: pNotifyTitle,
        type: messageType,
        text: message,
        addclass: (messageType === 'dark') ? 'dark' : '',
        styling: 'bootstrap3',
        animate_speed: 'fast',
    }).get().click(function() {
        pNotify.remove();
    });
    
}

const getFlashMessage = () => {
    
    switch (true) {
        case $('.flash_messages .success_message').text().trim().length > 0:
            makeFlashMessage('success', $('.flash_messages .success_message').text());
            break;
        case $('.flash_messages .info_message').text().trim().length > 0:
            makeFlashMessage('info', $('.flash_messages .info_message').text());
            break;
        case $('.flash_messages .warning_message').text().trim().length > 0:
            makeFlashMessage('warning', $('.flash_messages .warning_message').text());
            break;
        case $('.flash_messages .error_message').text().trim().length > 0:
            makeFlashMessage('error', $('.flash_messages .error_message').text());
            break;
        case $('.flash_messages .dark_message').text().trim().length > 0:
            makeFlashMessage('dark', $('.flash_messages .dark_message').text());
            break;
            
        default:
            // code
    }
}

$(document).ready(function() 
{
    makeLoadinGif();
    $(".alert-danger:not(:animated)").fadeIn("slow",function(){
        $(this).delay(1000).fadeOut("slow");
    });
    getFlashMessage();
});


function makeLoadinGif()
{
    /*<img src="/images/loading.gif" id="loading-gif" class="hidden" width="80" height="80" alt="Now Loading..." />*/
    var elem_img = $('<img/>', {
        src: '/images/loading.gif',
        id: 'loading-gif',
        width: 80,
        height: 80,
        alt: 'Now Loading...',
        addClass: 'hidden',
    });
    $('#name-div').append(elem_img);
    
}

function makeSuccessMessage(message)
{
    var div_btn = $('<div></div>', {
        addClass: 'alert alert-success',
    }).html(message);
    
    $('#success-msg').append(div_btn);
}

function makeFailedMessage(message)
{
    var div_btn = $('<div></div>', {
        addClass: 'alert alert-danger',
    }).html(message);
    
    $('#error-msg').append(div_btn);
}