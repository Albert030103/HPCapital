function goto(){
		
	var body = document.body; // Safari
	var html = document.documentElement; // Chrome, Firefox, IE and Opera places the overflow at the <html> level, unless else is specified. Therefore, we use the documentElement property for these browsers
	body.scrollTop = 320;
	html.scrollTop = 320; 
}
