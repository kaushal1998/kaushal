$(document).ready(function() {

    var scroller_now=0

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    
    $('.toast').toast({
        delay: 3000
    });

    ti_1 = "a block in this huge decentralized network";
    ti_2 = "Kaushal Mhalgi";
    console.log("initiated")
    width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    height = (window.innerHeight > 0) ? window.innerHeight : screen.height;
    console.log(height);
    if(width <= 576){
        ti_1 = "a block in <br>this huge <br>decentralized <br>network"
        $('#ti-2').html(ti_1)
        ti_2 = "Kaushal</br>Mhalgi"
        change_ti_sm()
        $('#abt-me-cnt').removeClass('text-right')
        $('#abt-me-cnt').addClass('text-center')
    }else
        change_ti();

    $('#mam').click(function() {
        window.scrollTo(0, height);
    })

    $( ".card" ).hover(
        function() {
          $(this).addClass('shadow').css('cursor', 'pointer'); 
        }, function() {
          $(this).removeClass('shadow');
        }
    );

    setTimeout(function() {
        $('.more_abt_me').css('opacity', '0.7');
    },2000);
    
    $('#bb_but').click(function(){
        $.ajax({
            url: 'https://uselessfacts.jsph.pl/random.json?language=en',
            type: 'get',
            dataType: 'JSON',
            success: function(res){
                $('#dyn').html("<b>Did you know:</b> "+res.text+"<br>Source: <a href='"+ res.source_url +"'>"+ res.source +"</a>")
                $('.toast').toast('show');
            }
        })
    })

    $('#go_to_top').click(function() {
        window.scrollTo(0, 0);
    });

    $(window).scroll(function(){
        var scroller = window.scrollY/height;
        var scroller_fut = window.scrollY;
        console.log(scroller_fut+" "+scroller+" "+Math.ceil(scroller));
        scroller_now = scroller_fut
        if(scroller >= 0 && scroller < 0.9){
            $('#go_to_top').css('display','none');
            $('#li_home').css('color', 'rgba(255,255,255,1)')
            $('#li_projects').css('color', 'rgba(255,255,255,0.5)')
            $('#li_research').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,0.5)')
            $('#li_education').css('color', 'rgba(255,255,255,0.5)')
            $('#li_skills').css('color', 'rgba(255,255,255,0.5)')
        }
        else if(scroller >= 0.9 && scroller < 1.9){
            $('#go_to_top').css('display','block');
            $('#li_projects').css('color', 'rgba(255,255,255,1)')
            $('#li_home').css('color', 'rgba(255,255,255,0.5)')
            $('#li_research').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,0.5)')
            $('#li_education').css('color', 'rgba(255,255,255,0.5)')
            $('#li_skills').css('color', 'rgba(255,255,255,0.5)')
        }
        else if(scroller >= 1.9 && scroller < 2.9){
            $('#li_education').css('color', 'rgba(255,255,255,1)')
            $('#li_research').css('color', 'rgba(255,255,255,0.5)')
            $('#li_home').css('color', 'rgba(255,255,255,0.5)')
            $('#li_projects').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,0.5)')
            $('#li_skills').css('color', 'rgba(255,255,255,0.5)')
        }
        else if(scroller >= 2.9 && scroller < 3.9){
            $('#li_research').css('color', 'rgba(255,255,255,1)')
            $('#li_home').css('color', 'rgba(255,255,255,0.5)')
            $('#li_education').css('color', 'rgba(255,255,255,0.5)')
            $('#li_projects').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,0.5)')
            $('#li_skills').css('color', 'rgba(255,255,255,0.5)')
        }
        else if(scroller >= 3.9 && scroller < 4.9){
            $('#li_skills').css('color', 'rgba(255,255,255,1)')
            $('#li_research').css('color', 'rgba(255,255,255,0.5)')
            $('#li_home').css('color', 'rgba(255,255,255,0.5)')
            $('#li_education').css('color', 'rgba(255,255,255,0.5)')
            $('#li_projects').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,0.5)')
        }
        else if(scroller >= 4.9 && scroller < 5.9){
            $('#li_skills').css('color', 'rgba(255,255,255,0.5)')
            $('#li_research').css('color', 'rgba(255,255,255,0.5)')
            $('#li_home').css('color', 'rgba(255,255,255,0.5)')
            $('#li_education').css('color', 'rgba(255,255,255,0.5)')
            $('#li_projects').css('color', 'rgba(255,255,255,0.5)')
            $('#li_about-me').css('color', 'rgba(255,255,255,1)')
        }
        // if(scroller == 0){
        //     $('#li_home').css('opacity', '1')
        //     $('#li_home').css('color', 'white')
        // }
    })
})

// function scrollTo(c,e,d){d||(d=easeOutCuaic);var a=document.documentElement;
// if(0===a.scrollTop){var b=a.scrollTop;++a.scrollTop;a=b+1===a.scrollTop--?a:document.body}
// b=a.scrollTop;0>=e||("object"===typeof b&&(b=b.offsetTop),
// "object"===typeof c&&(c=c.offsetTop),function(a,b,c,f,d,e,h){
// function g(){0>f||1<f||0>=d?a.scrollTop=c:(a.scrollTop=b-(b-c)*h(f),
// f+=d*e,setTimeout(g,e))}g()}(a,b,c,0,1/e,20,d))};
// function easeOutCuaic(t){t--;return t*t*t+1;}

function change_ti() {
    setInterval(()=>{
        $('#ti-2').css('width', '0vw');
        setTimeout(() => {
            if($('#ti-2').text() == ti_1){
                $('#ti-2').text(ti_2)
            }else{
                $('#ti-2').text(ti_1)
            }
            $('#ti-2').css('width', '80vw');}, 1000)
    }, 2500)
}

function change_ti_sm() {
    setInterval(()=>{
        $('#ti-2').css('width', '0vw');
        setTimeout(() => {
            console.log($('#ti-2').html())
            if($('#ti-2').html() == ti_1){
                $('#ti-2').css('padding-top', '10vh')
                $('#ti-2').html(ti_2)
            }else{
                $('#ti-2').css('padding-top', '0vh')
                $('#ti-2').html(ti_1)
            }
            $('#ti-2').css('width', '80vw');}, 1000)
    }, 2500)
}