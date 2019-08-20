$(document).ready(function(){
    
    var $cont = 0;
    
    $(".navExpand").click(function(){
        
        $cont++;
        
        if($cont == 1){
            $(".arrowIcon").css({
                transform: 'rotate(-180deg)'
            });

            $(".submenu").css({
                width: 'auto'
            });
            
            $(".submenu").animate({
                height: '115px',
                'padding-bottom': '8px',
                'box-sizing': 'border-box'
            }, 600);

            $(".navSubmenu").fadeIn(600);
            
            $(".containerMenu").mouseleave(function(){
                
                $(".submenu").animate({
                    height: '0px',
                    'padding-bottom': '0px'
                }, 600);
                
                $(".navSubmenu").fadeOut('fast');
                
                $(".arrowIcon").css({
                    transform: 'rotate(0deg)'
                });
                
                $cont = 0;
            });
        };
        
        if($cont == 2){
            $(".arrowIcon").css({
                transform: 'rotateX(0deg)'
            });
            
            $(".submenu").animate({
                height: '0px',
                'padding-bottom': '0px'
            }, 600);

            $(".navSubmenu").fadeOut(600);
            
            $cont = 0;
        };
    });
    
    $(".sectionMenu").click(function(){
        
        $(".containerMenu").animate({
            width: '20%'
        }, 550);
        
        $(".menu").fadeIn(600);
        
        $(".sectionMenu").css({
            display: 'none'
        })
        
        $(".containerMenu").mouseleave(function(){
            
            $(".containerMenu").animate({
                width: '0%'
            }, 400, function(){
                $(".sectionMenu").fadeIn(500);
            });
            
            $(".menu").css({
                display: 'none'
            });
        });
    });
    
    $(".sectionMenu").mouseleave(function(){
        
        $(".containerOperacao").css({
            width: '100%' 
        });
    });
    
    
    /* ---------------------------------------------------------- */
    
    $(".sectionMenu_md").click(function(){
        
        $(".headerOperacao").animate({
            'padding-top': '50px',
            'box-sizing': 'border-box'
        }, 600);
        
        $(".containerMenu_md").animate({
            height: '280px'
        }, 550);
        
        $(".ulMenu_md").fadeIn('slow');
        
        $(".sectionMenu_md").css({
            display: 'none'
        })
        
        $(".containerMenu_md").mouseleave(function(){
            
            $(".headerOperacao").animate({
                'padding-top': '25px',
                'box-sizing': 'border-box'
            }, 600);
            
            $(".containerMenu_md").animate({
                height: '0%'
            }, 400, function(){
                $(".sectionMenu_md").fadeIn(500);
            });
            
            $(".ulMenu_md").css({
                display: 'none'
            });
        });
        
        $(".containerOperacao").click(function(){
            
            $(".headerOperacao").animate({
                'padding-top': '25px',
                'box-sizing': 'border-box'
            }, 600);
            
            $(".containerMenu_md").animate({
                height: '0%'
            }, 400, function(){
                $(".sectionMenu_md").fadeIn(500);
            });
            
            $(".ulMenu_md").css({
                display: 'none'
            });
        });
    });
    
    $(".liExpand_md").click(function(){
        
        $cont++;
        
        if($cont == 1){
            
            $(".containerMenu_md").animate({
                height: '370px'
            }, 600);
            
            $(".arrowIcon").css({
                transform: 'rotate(-180deg)'
            });

            $(".ulSubmenu_md").css({
                width: 'auto'
            });
            
            $(".ulSubmenu_md").animate({
                height: '90px',
                'padding-bottom': '8px',
                'box-sizing': 'border-box'
            }, 600);

            $(".liSubmenu_md").fadeIn(600);
            
            $(".containerMenu_md").mouseleave(function(){
                
                $(".ulSubmenu_md").animate({
                    height: '0px',
                    'padding-bottom': '0px'
                }, 600);
                
                $(".liSubmenu_md").fadeOut('fast');
                
                $(".arrowIcon").css({
                    transform: 'rotate(0deg)'
                });
                
                $cont = 0;
            });
        };
        
        if($cont == 2){
            
            $(".containerMenu_md").animate({
                height: '280px'
            }, 600);
            
            $(".arrowIcon").css({
                transform: 'rotateX(0deg)'
            });
            
            $(".ulSubmenu_md").animate({
                height: '0px',
                'padding-bottom': '0px'
            }, 600);

            $(".liSubmenu_md").fadeOut(600);
            
            $cont = 0;
        };
    });
});