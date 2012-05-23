<?php

/**
 * Returns a form tag with client-side validation. Requires jQuery and the jQuery validation plugin.
 *
 * @param sfForm $form The form for which to render the tag
 * @param $attributes Attributes and options. Requires action, optional: error_placement and error_element which determine where and how the errors are rendered. All other options are included as attributes inside the form tag.
 */

function jquery_val_form_tag(sfForm $form, $attributes = array())
{
	// validate the input
	if(! $form instanceof sfForm) throw new sfException("First argument must be a sfForm.");
	$attrs = array_keys($attributes);
	if(! in_array("action", $attrs)) throw new sfException("The action attribute is required.");
	if(! in_array("method", $attrs)) $attributes['method'] = "post";
  if(! in_array("id", $attrs)) $attributes['id'] = md5(get_class($form));
  $form_name = $attributes['id'];

  // generate the form
	$form_tag = "<form ";
	foreach($attributes as $attr => $val)
	 $form_tag .= $attr.'="'.$val.'" ';
	$form_tag .= ">\n";
	
	// generate the validators for the form
	$rules = "";
	$messages = "";
	foreach($form->getValidatorSchema()->getFields() as $field_name => $field)
	{
		// get the field names
	  $field_name = '"'.sprintf($form->getWidgetSchema()->getNameFormat(), $field_name).'"';
	  
	  // get the validator options associated with the validator
    $options = $field->getOptions();
    $mobj = $field->getMessages();
    
    // add the rules
	  switch(get_class($field))
	  {
	  	case "sfValidatorEmail":
	  		// update the rules
			  $rules .= "\t$field_name: { ";
			  if($options['required']) $rules .= "required: true, ";
			  $rules .= "email: true }, \n";
			  
			  // set the message
			  $messages .= "\t$field_name: \"{$mobj['invalid']}\", \n";

	  		break;
	  	
	    case "sfValidatorString":
	  		$rules .= "\t$field_name: { ";
	  		if($options['required'])    $rules .= "required: true, ";
        if($options['max_length'])  $rules .= "maxlength: {$options['max_length']}, ";
        if($options['min_length'])  $rules .= "minlength: {$options['min_length']}, ";
        $rules .= "}, \n";
        
        // update the messages
        $messages .= "\t$field_name: { ";
        if($mobj['required']) $messages .= "required: \"{$mobj['required']}\", ";
        if($mobj['max_length']) $messages .= "maxlength: \"Please enter at most {$options['max_length']} characters.\", ";
        if($mobj['min_length']) $messages .= "minlength: \"Please enter at least {$options['min_length']} characters.\", ";
        $messages .= "}, \n";
	  		break;
      
	    case "sfValidatorPass":
        if($options['required']) $rules .= "\t$field_name: { required: true }, \n";
        break;
	  	default:
	  		break;
	  }  	
	}
	
	// construct the validator
	$errorPlacement = ((in_array("error_placement", $attrs)) ? ", errorPlacement: function(error, element) { ".$attributes['error_placement'] ." } " : "  ");
	$errorElement   = ", errorElement: ".((in_array("error_element", $attrs)) ? $attributes['error_element'] : " 'div'");
  $validator =
<<<EOF
<script type="text/javascript">
	$().ready(function() {
		$("#{$form_name}").validate({
		  rules: {
		    {$rules} 
		  },
		  messages: {
		    {$messages} 
		  }
		  {$errorPlacement}
		  {$errorElement}		  
		});
	});
</script>
EOF;

  return $form_tag.$validator;
}


