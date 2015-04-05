
// colorScheme is a global variable

(function(api) {
	var cssTemplate = wp.template('starter-color-scheme'),
	prefix="starter_scheme_options",
  
  // ids from customizer.php
  
	colorSettings = [
		'body_background',
		'body_foreground',
		'header_background',
		'header_foreground',
		'container_background',
		'post_background',
		'footer_background',
		'footer_foreground',
		'nav_background',
		'nav_foreground',
		'nav_current_background',
		'nav_current_foreground',
		'nav_hover_background',
		'nav_hover_foreground',
		'links_color',
		'links_hover',
		'table_hover',
		'pre_background',
		'pre_foreground',
		'fields_background',
		'fields_foreground',
		'author_comment_background',
		'borders_color',
		'dimmed_color',
	],
	layoutSettings=[
		'content_area_margin',
		'blog_post_margin',
		'single_post_margin',
		'single_post_bottom_margin',
		'single_page_bottom_margin',
		'post_nav_bottom_margin',
		'category_bottom_margin',
		'paging_nav_bottom_margin',
    'header_min_height',
		'menu_dropdown_width',
	],
	refreshSettings=[
		'post_nav_bottom_margin',
	],
	fullSettings=[]
  
  // convert to starter_scheme_options[id] format

	for(var s in colorSettings){
		fullSettings.push(getFullSetting(prefix,colorSettings[s]))
	}
	for(var s in layoutSettings){
		fullSettings.push(getFullSetting(prefix,layoutSettings[s]))
	}

// -----------------------------------------------------------------------------------------------------------------

	_.each(fullSettings, function(setting) {
		api(setting, function(setting) {
			setting.bind(updateCSS);
		});
	});
  
  // scheme dropdown 'change' event

	api.controlConstructor.select = api.Control.extend({
		ready: function() {
			if ('color_scheme' === this.id) {
				this.setting.bind('change', function(value) {
					var scheme=colorScheme[value]
					var colors=scheme.colors
					var layout=scheme.layout

					_.each(colorSettings,function(s){
						updatePicker(colors,s)
					})
					_.each(layoutSettings,function(s){
						updateText(layout,s)
					})
				});
			}
		}
	});

	function updateCSS() {
    // get data loaded in the customizer.php::starter_customize_control_js()
    
		var scheme = api(getFullSetting(prefix,'color_scheme'))(), css,
		colors = jQuery.extend(true, {}, colorScheme[scheme].colors),
		data = jQuery.extend(true, colors, colorScheme[scheme].layout);

    // update colors data
    
		_.each(colorSettings, function(setting) {
			var fullSetting=getFullSetting(prefix,setting)
			data[ setting ] = api(fullSetting)();
		});

    // update layout data

		_.each(layoutSettings, function(setting) {
      // skip settings with 'refresh' transport (which is not for the live preview)
      
			var skip=false
			for(var i in refreshSettings){
				if(setting==refreshSettings[i])
					skip=true
			}

			if(!skip){
				var fullSetting=getFullSetting(prefix,setting)
				data[ setting ] = api(fullSetting)();
			}
		});

    // get the inline CSS replacing the [data.[id]] field values with real data
    // and send the event which is processed in the customize-preview.js script
    
		css = cssTemplate(data);
		api.previewer.send('update-color-scheme-css', css);
	}

  // ----------------------- front page option -----------------------
  
	// show/hide additional controls when the 'most_viewed' radio is selected/unselected
  // the 'static page' radio show/hide controls is performed in the /wp-includes/class-wp-customize-manager.php:1210

	api( 'show_on_front', function( setting ) {
		api.control( 'most_viewed_count', function( control ) {
			var visibility = function( to ) {
				var container=control.container
				var state='most_viewed' === to
				container.toggle(state);

				if(state){
					var val=control.setting.get()
					control.setting.set('0')               // force the control update
					control.setting.set(val)
				}
			};

			var setVal=setting.get()
			visibility( setVal );
			setting.bind( visibility );
		});
	});

// ----------------------------------------------------- helpers ------------------------------------------------

	function getFullSetting(prefix,setting) {
		return prefix+'['+setting+']'
	}

	function updatePicker(scheme,id){
		api(getFullSetting (prefix,id)).set(scheme[id]);
		api.control(id).container.find('.color-picker-hex')
			.data('data-default-color', scheme[id])
			.wpColorPicker('defaultColor', scheme[id]);
	}

	function updateText(scheme,id){
		api(getFullSetting(prefix,id)).set(0);
		api(getFullSetting(prefix,id)).set(scheme[id]);
		
		var input=api.control(id).container.find('input')
		input.val(scheme[id])
	}

})(wp.customize);
