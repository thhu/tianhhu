if(document.documentElement.clientWidth >= 1200){
			document.write('<script src="js/scrollIt.min.js" type="text/javascript"></script\>');
			document.write('<script type="text/javascript" src="js/skrollr.js"></script\>');
}

$(document).ready(function(){
		if(document.documentElement.clientWidth >= 1200){
        	 	$.scrollIt({
        	 		upKey: 38,             // key code to navigate to the next section
					downKey: 40,           // key code to navigate to the previous section
					easing: 'ease',      // the easing function for animation
					scrollTime: 1000,       // how long (in ms) the animation takes
					activeClass: 'active', // class given to the active nav element
					onPageChange: null,    // function(pageIndex) that is called when page is changed
					topOffset: -50           // offste (in px) for fixed top navigation	
        	 	});
        	 	$('body').scrollspy({target: '.navbar-example', offset: 50})
        
        	 	skrollr.init({
					smoothScrolling: false,
					mobileDeceleration: 0.004
				})
		}
});

$(document).ready(function() {
	    $('.email_form').bootstrapValidator({
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            name: {
	                message: 'The input is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'Your name is required and cannot be empty'
	                    }
	                }
	            },
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'Your email is required and cannot be empty'
	                    },
	                    emailAddress: {
	                        message: 'Your input is not a valid email address'
	                    }
	                }
	            },
	            content: {
	                validators: {
	                    notEmpty: {
	                        message: 'The content of the message cannot be empty'
	                    }
	                }
	            }
	        }
	    });
});
