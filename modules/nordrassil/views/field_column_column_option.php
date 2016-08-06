<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('column_option', 'Column Option', array('Option Id'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('column_option', 'id', $date_format, $result, $options);
    $JS  .= build_md_event_script('column_option', '{{ module_site_url }}manage_column/index/insert', '{{ module_site_url }}manage_column/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_column_option(){
        return {
            option_id : '',        };
    }

    // Function to add row
    function add_table_row_column_option(value){

        // Prepare some variables
        var input_prefix = 'md_field_column_option_col';
        var row_index    = RECORD_INDEX_column_option;
        var inputs       = new Array();
        
        // FIELD "option_id"
        var input_id    = input_prefix + 'option_id' + row_index;
        var field_value = get_object_property_as_str(value, 'option_id');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric chzn-select" column_name="option_id" >';
        html += build_single_select_option(field_value, OPTIONS_column_option.option_id);
        html += '</select>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
