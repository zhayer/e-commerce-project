( function( $, api ) {

    api.sectionConstructor['wpdevart-buy-premium'] = api.Section.extend( {
        attachEvents: function () {},
        isContextuallyActive: function () {
            return true;
        }
    } );
} )( jQuery, wp.customize );

jQuery( document ).ready(function($) {
	"use strict";
	/**
	 * @author Anthony Hortin <http://maddisondesigns.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/maddisondesigns
	 */
	$('.slider-custom-control').each(function(){
		var sliderValue = $(this).find('.customize-control-slider-value').val();
		var newSlider = $(this).find('.slider');
		var sliderMinValue = parseFloat(newSlider.attr('slider-min-value'));
		var sliderMaxValue = parseFloat(newSlider.attr('slider-max-value'));
		var sliderStepValue = parseFloat(newSlider.attr('slider-step-value'));

		newSlider.slider({
			value: sliderValue,
			min: sliderMinValue,
			max: sliderMaxValue,
			step: sliderStepValue,
			change: function(e,ui){
				$(this).parent().find('.customize-control-slider-value').trigger('change');
	      }
		});
	});
	$('.slider').on('slide', function(event, ui) {
		$(this).parent().find('.customize-control-slider-value').val(ui.value);
	});
	$('.slider-reset').on('click', function() {
		var resetValue = $(this).attr('slider-reset-value');
		$(this).parent().find('.customize-control-slider-value').val(resetValue);
		$(this).parent().find('.slider').slider('value', resetValue);
	});
	$('.customize-control-slider-value').blur(function() {
		var resetValue = $(this).val();
		var slider = $(this).parent().find('.slider');
		var sliderMinValue = parseInt(slider.attr('slider-min-value'));
		var sliderMaxValue = parseInt(slider.attr('slider-max-value'));
		if(resetValue < sliderMinValue) {
			resetValue = sliderMinValue;
			$(this).val(resetValue);
		}
		if(resetValue > sliderMaxValue) {
			resetValue = sliderMaxValue;
			$(this).val(resetValue);
		}
		$(this).parent().find('.slider').slider('value', resetValue);
	});
	/*Image Checkbox Custom Control*/
	$('.multi-image-checkbox').on('change', function () {
	  wpdevartGetAllImageCheckboxes($(this).parent().parent());
	});
	function wpdevartGetAllImageCheckboxes($element) {
	  var inputValues = $element.find('.multi-image-checkbox').map(function() {
	    if( $(this).is(':checked') ) {
	      return $(this).val();
	    }
	  }).toArray();
	  $element.find('.customize-control-multi-image-checkbox').val(inputValues).trigger('change');
	}

});